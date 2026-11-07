# Analisa Project Undangan Digital (KKM RAT) & Kelayakan Hosting di VPS SPTP

> **Dokumen referensi jangka panjang.**
> Ini adalah *single source of truth* untuk pengembangan project undangan digital KKM RAT.
> Setiap keputusan arsitektur, temuan keamanan, dan rencana deployment wajib merujuk ke dokumen ini.
> **Jangan pernah menulis password, token, atau kredensial asli di dokumen ini.**

---

## 0. Metadata Dokumen

| Item | Nilai |
|---|---|
| Nama project | Undangan Digital KKM RAT (Rapat Anggota Tahunan) |
| Lokasi repo lokal | `F:\laragon\www\undangan` |
| Commit acuan | `f951922` — *fix: Correct countdown timer to 13:10 and add hour/minute-second precision* |
| Tanggal analisa | 7 November 2026 |
| Status aplikasi | **Lokal saja, belum dideploy ke server mana pun** |
| Kandidat hosting | VPS SPTP — `103.143.12.150` (Domainesia Jakarta 02) |
| Status perubahan server | **Belum ada perubahan.** Audit VPS dilakukan read-only sebagai `root` |
| Pemilik keputusan | Pemilik project undangan + pemilik server SPTP |

### Cara memakai dokumen ini
1. Baca **Ringkasan Eksekutif** dulu untuk konteks.
2. Sebelum menyentuh kode, cek **Temuan P0** — jangan expose aplikasi ke publik sebelum P0 selesai.
3. Sebelum menyentuh server, cek **Analisa VPS** dan **Rencana Implementasi**.
4. Setiap perubahan besar: tambahkan entri di **Changelog Dokumen** (bagian akhir).

---

## 1. Ringkasan Eksekutif

Aplikasi ini **bukan sekadar landing page undangan**. Ini adalah sistem kecil dengan beberapa fungsi:

- Undangan digital personal (nama tamu, alamat/departemen, sesi).
- RSVP / konfirmasi kehadiran + ucapan.
- QR Code check-in tamu di lokasi acara.
- Live guest count (polling).
- Buku tamu digital.
- Sinkronisasi ke Google Sheets via webhook n8n.
- Dashboard admin (template Fillow) yang **masih demo, belum terhubung ke database**.

**Dua kesimpulan utama:**

1. **Keamanan:** ada beberapa celah **kritis (P0)** yang memungkinkan siapa pun membaca/mengubah seluruh database, menyisipkan script (XSS), dan memalsukan check-in. Aplikasi **tidak boleh** dipublikasikan sebelum P0 diperbaiki.
2. **Hosting:** VPS SPTP **secara teknis bisa** menampung aplikasi ini, tetapi **RAM mepet** (sisa ±1,3 GB) dan database existing **PostgreSQL tidak bisa dipakai langsung** karena aplikasi memakai `mysqli` (MySQL/MariaDB).

**Rekomendasi jalur cepat:** pasang **MariaDB 11.8 side-by-side** + **PHP 8.5-FPM** + server block Nginx baru di subdomain.
**Rekomendasi jangka panjang:** migrasi aplikasi ke **PostgreSQL** agar satu engine database dengan SPTP.

---

## 2. Gambaran Project

### 2.1 Stack teknologi

| Komponen | Teknologi |
|---|---|
| Frontend undangan | PHP native + HTML + jQuery + Bootstrap 3 (template wedding FreeHTML5) |
| Backend | PHP native dengan ekstensi `mysqli` |
| Database | MySQL/MariaDB (dump dibuat di MariaDB 10.4.22) |
| Admin dashboard | Template Fillow (Bootstrap 5) di `admin/` — statis/demo |
| Integrasi | Webhook n8n → Google Sheets |
| QR Code | Library eksternal `api.qrserver.com` (saat ini) |
| Deployment lama | GitHub Actions → SSH → Docker di VPS lain (belum dipakai untuk SPTP) |
| Ukuran repo | ±1.881 file tracked, ±108 MB |

Rincian ukuran: gambar `images/` ±38,7 MB, aset admin ±27,9 MB, audio `sounds/` ±14 MB.

### 2.2 Struktur direktori utama

| Path | Fungsi | Status |
|---|---|---|
| `index.php` | Halaman undangan utama (994 baris; PHP + HTML + JS menyatu) | Aktif, perlu refactor |
| `php/` | Endpoint backend: RSVP, scan, buku tamu, live count | Aktif |
| `admin/` | Dashboard Fillow | **Demo, tidak terhubung DB** |
| `api/v1/` | API lama (jumlah tamu, push button) | **Rusak (fatal error)** |
| `sql_tables/` | Schema + migration | Perlu disinkronkan |
| `scripts/` | Workflow n8n | Aktif |
| `.github/workflows/deploy-prod.yml` | CI/CD lama | Aktif, perlu diperbaiki |
| `backups/`, `keys/` | File lokal (gitignored) | Jangan masuk webroot produksi |
| `about.html`, `contact.html`, `php/services.php`, `php/admin.php` | Sisa template / form lama | Dead code |

### 2.3 Alur bisnis utama

1. Tamu membuka link: `/?to=Nama&adr=Dept&s=Sesi`.
2. `index.php` menampilkan nama tamu, QR Code, dan form RSVP.
3. Submit RSVP → `php/wish.php` → upsert tabel `tr_ucapan` → trigger webhook n8n → Google Sheets.
4. Check-in di lokasi: `/scantamu` → scan QR → `php/scan_success.php` → upsert tabel `tr_tamu`.
5. Live guest count: `/liveguestcount` polling `php/jumlahtamurealtime.php` + `php/namatamu.php` tiap 2 detik.
6. Buku tamu: `/bukutamu` polling `php/daftarbukutamu.php` tiap 3 detik.

### 2.4 Integrasi eksternal

| Integrasi | Lokasi | Catatan |
|---|---|---|
| n8n webhook | `php/webhook_sync_sheets.php:14` | URL hardcoded, secret kosong, sinkron (bisa sampai 10 detik) |
| Google Sheets | via n8n | Menerima data RSVP |
| QR generator | `index.php:214-219` | `api.qrserver.com` menerima nama/alamat/sesi lewat URL |
| Google Cloud Key | `keys/semiotic-creek-131113-b04bfd3f24fe.json` | **Jangan pernah masuk repo/webroot** |

---

## 3. Temuan Keamanan & Kualitas

### 3.1 P0 — Kritis, wajib diperbaiki sebelum publik

| # | Temuan | Lokasi | Dampak |
|---|---|---|---|
| 1 | **Endpoint SQL bebas tanpa autentikasi** — menerima query SQL apa pun dari body JSON, CORS `*`, menampilkan error SQL | `php/api_query.php:1-48` | Siapa pun bisa `SELECT`, `UPDATE`, `DELETE`, membaca seluruh database |
| 2 | **SQL Injection via parameter GET** — `$_GET['namareservasi']` langsung masuk query tanpa escaping | `index.php:322,334`, `385,398`, `424,437` | Manipulasi query lewat URL undangan |
| 3 | **Stored XSS** — `ucapan`, `namareservasi`, NIK ditampilkan mentah | `index.php:443`, `index.php:480-505` (khususnya `502`) | Script jahat dari form RSVP dieksekusi di browser tamu/admin |
| 4 | **`api/v1/koneksi.php` fatal error** — default property memakai `getenv()` (bukan constant expression) | `api/v1/koneksi.php:6-9` | Seluruh endpoint `api/v1/*` tidak bisa dipakai |
| 5 | **File sensitif dapat diakses dari webroot** — dump SQL berisi nama & NIK karyawan; `.git/`, `keys/`, `backups/` ada di folder project; `.htaccess` tanpa aturan deny | `.htaccess` (36 baris), `sql_tables/db_undangan_rat.sql:182-235` | Kebocoran data pribadi & source code |
| 6 | **SQL Injection tanpa auth** di endpoint lama | `php/jumlahtamu.php:3,8`, `php/reservasi.php:27` | Ubah data tamu / insert sembarang |

### 3.2 P1 — Penting

1. **Auth admin tidak menyeluruh** — hanya `admin/index.php` dan `admin/login.php` yang memeriksa session. Puluhan halaman admin lain (`project-page.php`, `contacts.php`, dll.) dapat diakses publik. Dashboard admin juga **tidak terhubung ke database**.
2. **Routing `/admin` bentrok** — `.htaccess` mengarahkan `/admin` ke `php/admin.php` (form lama); dashboard Fillow hanya bisa dibuka via `/admin/index.php`.
3. **QR check-in tidak ditandatangani** — payload hanya `"Nama From Dept Sesi X"`, mudah dipalsukan. Tidak ada token/HMAC; `scan_success.php` tanpa auth/CSRF.
4. **RSVP tanpa CSRF & validasi** — `wish.php` upsert berdasarkan `namareservasi + alamat`; siapa pun bisa menimpa RSVP orang lain. `attending`, `jumlahtamu`, `sesi` tidak divalidasi.
5. **`.env` tidak benar-benar dibaca** — `php/connection.php` hanya memakai `getenv()`. `admin/config/auth.php:8` membaca `admin/.env`, bukan root `.env`. File `.env` tidak otomatis dimuat PHP-FPM/Apache.
6. **Webhook n8n sinkron & tanpa secret** — setiap submit RSVP menunggu hingga 10 detik; URL hardcoded; `N8N_WEBHOOK_SECRET` kosong (`php/webhook_sync_sheets.php:14,17`).
7. **Ketergantungan pihak ketiga untuk QR** — `api.qrserver.com` menerima nama, alamat, sesi tamu lewat URL (`index.php:214-219`). Risiko privasi + QR gagal jika layanan down.
8. **Schema drift** — dump `sql_tables/db_undangan_rat.sql` belum punya kolom `nik_perwakilan`; tabel `m_parameter` (dipakai `api/v1`) tidak ada. Instalasi baru akan error.
9. **PII di repo** — dump SQL berisi nama/NIK karyawan; `tamu_digitalocean.csv/xlsx` (untracked) berisi data tamu.
10. **Hardening login admin** — tanpa rate limit/CSRF; cookie session tanpa `Secure`, `HttpOnly`, `SameSite` (`admin/login.php:40`); username default `admin` (`admin/config/auth.php:19`).
11. **`.htaccess` API tidak valid** — `RewriteEngine On # komentar` satu baris dapat menyebabkan 500 (`api/v1/.htaccess:1`).

### 3.3 P2 — Kualitas kode & performa

- **`index.php` terlalu gemuk** (994 baris) — logika PHP, query, HTML, JS bercampur.
- **Koneksi DB berulang** — `include "./php/connection.php"` muncul **7 kali** di `index.php` (baris 13, 317, 380, 419, 471, 523, 548), masing-masing membuka koneksi baru.
- **Query berulang** — jumlah tamu dihitung di beberapa tempat; `#minichat` di-reload dengan `.load(location.href + " #minichat")` yang memuat ulang seluruh halaman via AJAX.
- **Polling terlalu agresif** — live count tiap 2 detik, buku tamu tiap 3 detik; `daftarbukutamu.php` mengembalikan **semua** baris tanpa pagination.
- **Sumber data tidak konsisten** — `jumlahtamurealtime.php` menjumlahkan seluruh `tr_tamu`, sedangkan `index.php` menghitung data terbaru per reservasi dari `tr_ucapan`.
- **Logika scan rapuh** — `scantamu.php:140-187` mem-parsing string dengan `split('From ')` / `split('Sesi ')`; nama yang mengandung kata "From"/"Sesi" akan rusak. `scan_success.php:19` meng-update **semua** baris dengan nama sama.
- **Konten tidak konsisten** — `php/header.php:29` masih "Periode 2023", sedangkan `index.php` menulis 2025/2026.
- **Duplikasi kode** — `clickButton1()` sampai `clickButton6()` di `scantamu.php` hampir identik.
- **CI/CD kurang tepat** — `npm ci` lalu `scp node_modules/` ke server (`deploy-prod.yml:16-20,63-71`); deployment `git reset --hard origin/prod`; tanpa test/lint; migration DB tidak otomatis.
- **Timezone migration berisiko** — `fix_timezone_migration.sql` menambah 7 jam dengan heuristik `date < NOW() - 6 HOUR`; bisa menggeser data yang sudah benar.

### 3.4 Hasil audit statis

- `php -l` dijalankan atas **114 file PHP**: **1 fatal error** — `api/v1/koneksi.php` (*Constant expression contains invalid operations*, line 6).
- PHP lokal: **8.5.0 CLI**.

---

## 4. Analisa VPS SPTP

> Akses: SSH sebagai `root` menggunakan kredensial di `E:\SPTP\hallo-sptp\.secrets.json`.
> Host key: `SHA256:3zwoQjIuMwsZteCv/x8ZdpdFSPWb/csEkrSyZ5hBFKs`.
> **Audit read-only — tidak ada perubahan pada server.**

### 4.1 Fakta server

| Item | Kondisi |
|---|---|
| Provider | Domainesia (Jakarta 02) |
| IP publik | `103.143.12.150` |
| OS | Ubuntu 26.04 LTS |
| Kernel | 7.0.0-22-generic |
| CPU | 2 vCPU — AMD EPYC 9654 |
| RAM | **1,9 GB total**, terpakai 628 MB, **available 1,3 GB** |
| Swap | 2 GB (terpakai 253 MB) |
| Disk | 40 GB — terpakai 12 GB, **free 29 GB** (30% used) |
| Node.js | v22.22.1 |

### 4.2 Layanan yang berjalan

| Layanan | Status |
|---|---|
| Nginx | 1.28.3, aktif di port 80/443 |
| PostgreSQL | 18.6, aktif di `127.0.0.1:5432` |
| PM2 `hallosptp-dev` | Online, port 3001 |
| PM2 `hallosptp-prod` | Online, port 3000 |
| PHP / PHP-FPM | **belum terpasang** |
| MySQL / MariaDB | **belum terpasang** |
| Docker | **tidak ada** |
| UFW | aktif, hanya 22/80/443 |
| Certbot | aktif; sertifikat `hallosptp.web.id` & `hallosptp.org` (valid ±66 hari) |

### 4.3 PostgreSQL existing

| Database | Ukuran |
|---|---|
| `sptp_dev_db` | 11 MB |
| `sptp_prod_db` | 7,8 MB |
| `sptp_db` | 7,7 MB |
| `postgres` | 7,7 MB |
| `template0/1` | ±7,5 MB |

- Koneksi aktif: **14**
- `max_connections=100`, `shared_buffers=128MB`, `work_mem=4MB`, `effective_cache_size=4GB`
- Ekstensi di `sptp_dev_db`: `plpgsql`, `uuid-ossp`, `pg_trgm`
- Data directory: `/var/lib/postgresql/18` (±82 MB)

### 4.4 Paket yang tersedia di repo Ubuntu 26.04

| Paket | Kandidat |
|---|---|
| `php-fpm` | `2:8.5+99ubuntu1` |
| `php8.5-fpm` | `8.5.4-0ubuntu1.5` |
| `php-mysql` | `2:8.5+99ubuntu1` |
| `mariadb-server` | `1:11.8.6-5ubuntu0.1` |
| `mysql-server` | `8.4.11-0ubuntu0.26.04.1` |

### 4.5 Nginx existing

- Sites enabled: `hallosptp-dev`, `hallosptp-prod`.
- Server names: `hallosptp.org`, `www.hallosptp.org`, `hallosptp.web.id`, `www.hallosptp.web.id`.
- Root direktori: `/var/www/hallosptp-dev` (1,6 GB) dan `/var/www/hallosptp-prod` (1,2 GB).
- Semua trafik di-proxy ke `127.0.0.1:3000/3001` (Next.js).
- **Nginx tidak membaca `.htaccess`** — rewrite dan deny rules Apache harus diport manual.

### 4.6 Keterbatasan penting

1. PostgreSQL existing **khusus SPTP** dan aplikasi undangan memakai `mysqli`, jadi **tidak bisa langsung** memakai PostgreSQL tersebut.
2. Server ini **produksi SPTP** — menambah aplikasi lain meningkatkan *blast radius*. Perlu persetujuan pemilik server.
3. **RAM 1,9 GB** adalah batas utama.
4. Kredensial DB SPTP masih **plaintext** di `.github/workflows/deploy.yml` (baris 97-98, 110-111) — sebaiknya rotasi & pindah ke GitHub Secrets.
5. **SSH root dengan password aktif** — sebaiknya key-only + fail2ban setelah selesai.

---

## 5. Analisa Kapasitas

### 5.1 Estimasi RAM

| Komponen | Perkiraan RAM |
|---|---:|
| Kondisi sekarang (OS + Nginx + PG + 2 PM2) | ±630 MB |
| MariaDB 11.8 (tuned kecil) | ±250 MB |
| PHP-FPM 2-3 worker | ±100 MB |
| Aplikasi undangan + Nginx tambahan | ±50 MB |
| **Total perkiraan** | **±1,0 GB** |
| **Available saat ini** | **1,3 GB** |
| **Sisa headroom** | **±300 MB** |

**Kesimpulan:** bisa jalan, tetapi jika traffic scan/RSVP ramai atau Next.js dev naik, risiko OOM/swap tinggi.

Mitigasi:
- Matikan `hallosptp-dev` saat tidak dipakai → hemat ±330 MB, **atau**
- Upgrade VPS ke **4 GB RAM** untuk kenyamanan.

### 5.2 Disk

Tidak masalah: aplikasi ±108 MB, database undangan <100 MB, sisa 29 GB.

### 5.3 Skenario beban

| Skenario | Perkiraan | Catatan |
|---|---|---|
| Idle | aman | headroom ±300 MB |
| RSVP ramai (10-20 req/detik) | **berisiko** | PHP-FPM worker + koneksi DB naik |
| Scan check-in massal | **berisiko** | polling 2 detik + scan bersamaan |
| `hallosptp-dev` ikut aktif | **tinggi risiko OOM** | matikan dev atau upgrade RAM |

---

## 6. Opsi Database & Hosting

### 6.1 Mengapa PostgreSQL existing tidak bisa dipakai langsung

Aplikasi memakai ekstensi **`mysqli`** dan query bergaya MySQL (`AUTO_INCREMENT`, `UPDATE ... ORDER BY ... LIMIT`, backtick, `current_timestamp()`, dll). PostgreSQL memerlukan:
- rewrite layer database (`mysqli` → PDO/pgsql),
- penyesuaian tipe data & sintaks,
- penggantian `AUTO_INCREMENT` → `GENERATED ... AS IDENTITY` / `serial`,
- testing menyeluruh.

### 6.2 Perbandingan opsi

| Opsi | Cara | Kelebihan | Kekurangan | Effort |
|---|---|---|---|---|
| **A. MariaDB side-by-side** | Install MariaDB 11.8, buat DB `undangan_db` | Kode `mysqli` langsung jalan; paling cepat | Dua engine DB (PG + MariaDB); RAM tambahan; backup dua sistem | Rendah |
| **B. Migrasi ke PostgreSQL** | Ubah `mysqli` → PDO/pgsql, sesuaikan SQL | Satu engine DB; hemat RAM; selaras SPTP | Rewrite query & tipe data, testing | Sedang |
| **C. Docker MySQL** | Container MySQL | Isolasi | Docker belum ada; overhead RAM/disk di 2 GB | Sedang |
| **D. DB remote** | MySQL di host lain | Tidak menambah RAM VPS | Latency, keamanan koneksi, biaya | Rendah-sedang |

### 6.3 Rekomendasi

- **Jalur cepat:** **Opsi A — MariaDB side-by-side.**
- **Jangka panjang:** **Opsi B — migrasi ke PostgreSQL.**
- **Hindari Opsi C** di VPS 2 GB.

### 6.4 Keputusan 2026-11-07: PostgreSQL only (tanpa MariaDB)

**Keputusan:** aplikasi diarahkan ke **PostgreSQL existing SPTP**. **Tidak** memasang MariaDB/MySQL baru di VPS.

**Konsekuensi:** lapisan database wajib dirombak dari `mysqli` ke **PDO/pgsql**.

**Ukuran dampak (hasil audit kode):**

| Item | Jumlah |
|---|---:|
| Pemanggilan `mysqli_*` | **111** |
| File aktif yang menyentuh DB | ±12 |
| Tabel existing | 8 |
| Kolom migration tertunda | `nik_perwakilan` |

**File aktif yang wajib diubah:**

| File | Beban perubahan |
|---|---|
| `php/connection.php` | Ganti total koneksi `mysqli` → PDO/pgsql |
| `index.php` | 10 query + 7 include + output XSS |
| `php/header.php` | 3 query |
| `php/wish.php` | Upsert, `UPDATE ... ORDER BY LIMIT`, escape |
| `php/check_nik.php` | 1 query |
| `php/scan_success.php` | Upsert `tr_tamu`, `lastInsertId` |
| `php/scantamu.php` | 1 query |
| `php/reservasi.php` | INSERT dengan id `NULL` |
| `php/namatamu.php` | 1 query |
| `php/jumlahtamurealtime.php` | 1 query |
| `php/jumlahtamu.php` | 2 query + SQLi |
| `php/daftarbukutamu.php` | `bind_result` → PDO |
| `php/api_query.php` | **Hapus** |
| `php/admin.php` | **Hapus** (dead code) |
| `api/v1/*` | **Hapus** (rusak, tidak dipakai) |

**Perubahan SQL MySQL → PostgreSQL:**

| MySQL | PostgreSQL |
|---|---|
| `` `kolom` `` (backtick) | `"kolom"` atau tanpa kutip |
| `AUTO_INCREMENT` | `GENERATED BY DEFAULT AS IDENTITY` |
| `current_timestamp()` | `CURRENT_TIMESTAMP` |
| `int(10)`, `tinyint(1)` | `integer`, `smallint`/`boolean` |
| `datetime` | `timestamp` / `timestamptz` |
| `decimal(20,0)` | `numeric(20,0)` |
| `ENGINE=InnoDB DEFAULT CHARSET=...` | dihapus |
| `SET SQL_MODE`, `SET time_zone` | dihapus / `SET TIME ZONE 'Asia/Jakarta'` |
| `UPDATE ... ORDER BY ... LIMIT 1` | subquery `WHERE id = (SELECT ... LIMIT 1)` |
| `INSERT ... VALUES (NULL, ...)` | hilangkan kolom id + `RETURNING` |
| `mysqli_insert_id()` | `PDO::lastInsertId()` / `RETURNING` |
| `mysqli_real_escape_string()` | **prepared statement** |
| `ON UPDATE current_timestamp()` | trigger atau di-set dari aplikasi |

**Dua strategi identifier (perlu dipilih):**

| Strategi | Cara | Kelebihan | Kekurangan |
|---|---|---|---|
| **A. Pertahankan camelCase** | Quote semua identifier: `"ucapanId"`, `"namareservasi"` | Array key PHP (`$row['ucapanId']`) tidak berubah | Semua query wajib quote; rawan lupa |
| **B. Normalisasi snake_case** | `ucapan_id`, `nama_reservasi` | Idiomatik PostgreSQL, tanpa quote | Semua array key PHP berubah (`$row['ucapan_id']`) |

**Effort perkiraan:** ±4-5 hari kerja (schema + layer DB + 12 file + testing + staging).

**Beban server:** PHP-FPM **tetap diperlukan** (±80-120 MB) karena aplikasi berbahasa PHP. Menambah satu database di PostgreSQL existing hampir tanpa biaya RAM tambahan. Jadi yang dihilangkan adalah **engine DB kedua**, bukan seluruh beban.

---

## 7. Rencana Implementasi (jika disetujui)

> **DIGANTIKAN sejak 2026-11-07.** Rencana aktif adalah **rewrite Next.js** di **Bagian 13**. Bagian 7 ini adalah rencana lama jalur PHP + PostgreSQL, disimpan sebagai referensi historis. Jangan dijalankan.

### 7.1 Prasyarat
- Persetujuan pemilik server SPTP.
- P0 keamanan sudah diperbaiki (lihat bagian 9).
- Backup database & file sebelum perubahan apa pun.

### 7.2 DNS & domain
- Buat subdomain, misalnya `undangan.hallosptp.web.id` → A record `103.143.12.150`.
- **Jangan** memakai `hallosptp.web.id` / `hallosptp.org` yang sudah dipakai SPTP.
- SSL: `certbot --nginx -d undangan.hallosptp.web.id`.

### 7.3 Install PHP 8.5
Paket: `php8.5-fpm`, `php8.5-pgsql`, `php8.5-curl`, `php8.5-mbstring`, `php8.5-xml`, `php8.5-gd`, `php8.5-opcache`.

> Untuk jalur PostgreSQL, **tidak perlu** `php8.5-mysql` dan tidak perlu MariaDB. Cukup ekstensi `pdo_pgsql` / `pgsql`.

### 7.4 Install & tuning MariaDB 11.8 (Opsi A)

> **DIBATALKAN sejak 2026-11-07.** Keputusan diarahkan ke PostgreSQL existing (lihat Bagian 6.4). Langkah ini disimpan hanya sebagai referensi historis jika opsi MariaDB dipertimbangkan lagi.
```ini
[mysqld]
bind-address = 127.0.0.1
innodb_buffer_pool_size = 128M
innodb_log_file_size = 64M
max_connections = 50
key_buffer_size = 16M
tmp_table_size = 32M
max_heap_table_size = 32M
performance_schema = OFF
```

Buat DB & user terpisah — **jangan pakai `sptp_admin`**:
```sql
CREATE DATABASE undangan_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'undangan_user'@'127.0.0.1' IDENTIFIED BY '<password-kuat>';
GRANT ALL PRIVILEGES ON undangan_db.* TO 'undangan_user'@'127.0.0.1';
FLUSH PRIVILEGES;
```

Import schema + migration:
```bash
mysql -u undangan_user -p undangan_db < sql_tables/db_undangan_rat.sql
mysql -u undangan_user -p undangan_db < sql_tables/add_nik_perwakilan_column.sql
```

### 7.5 Deploy aplikasi
- Copy ke `/var/www/undangan` (bukan folder `hallosptp-*`).
- **Jangan deploy:** `.git`, `keys/`, `backups/`, `sql_tables/`, `scripts/`, `*.md`, `*.sql`, `node_modules` (kecuali aset yang dibutuhkan).
- Copy `node_modules/clipboard` & `node_modules/sweetalert2` atau pindahkan file dist-nya ke `js/`/`css/`.
- Jalankan sebagai user khusus `undangan`, **bukan `root`**.

### 7.6 Nginx + PHP-FPM
`.htaccess` tidak berlaku di Nginx. Contoh inti server block:

```nginx
server {
    listen 80;
    server_name undangan.hallosptp.web.id;
    root /var/www/undangan;
    index index.php index.html;

    location / { try_files $uri $uri/ /index.php?$query_string; }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.5-fpm-undangan.sock;
    }

    location ~ /\.(git|env) { deny all; }
    location ^~ /sql_tables/ { deny all; }
    location ^~ /keys/ { deny all; }
    location ^~ /backups/ { deny all; }
    location ^~ /scripts/ { deny all; }
    location ~* \.(sql|md|lock)$ { deny all; }
}
```

PHP-FPM pool terpisah:
```ini
[undangan]
user = undangan
group = undangan
listen = /run/php/php8.5-fpm-undangan.sock
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 2

env[DB_HOST] = 127.0.0.1
env[DB_PORT] = 5432
env[DB_SSLMODE] = prefer
env[KKMRAT_DB_USER] = undangan_user
env[KKMRAT_DB_PASS] = <password-kuat>
env[KKMRAT_DB_NAME] = undangan_db
env[KKMRAT_AES_KEY] = <key-acak>
```

**Catatan:** `php/connection.php` memakai `getenv()`, jadi environment harus di-set di pool PHP-FPM. `admin/config/auth.php` membaca `admin/.env` — perlu diseragamkan.

### 7.7 Backup & monitoring
- Backup `mysqldump` harian + simpan offsite.
- Monitor `pm2`, `php8.5-fpm`, `mariadb`, dan RAM.
- Alert jika swap naik atau RAM available < 200 MB.

---

## 8. Risiko

| # | Risiko | Dampak | Mitigasi |
|---|---|---|---|
| 1 | Aplikasi masih punya celah P0 | Kebocoran data / deface | Perbaiki P0 sebelum publik |
| 2 | RAM 2 GB mepet | OOM / downtime SPTP | Matikan dev / upgrade 4 GB |
| 3 | Dua engine DB | Backup & maintenance ganda | Rencanakan migrasi ke PG |
| 4 | Server produksi SPTP | Gangguan ke layanan utama | Isolasi user/DB/port, persetujuan |
| 5 | Kredensial plaintext di repo SPTP | Akun DB bocor | Rotasi + GitHub Secrets |
| 6 | SSH root password aktif | Brute force | Key-only + fail2ban |
| 7 | `.htaccess` tidak diport ke Nginx | File sensitif terekspos | Deny rules eksplisit |
| 8 | Schema drift | Instalasi baru gagal | Sinkronkan dump + migration |

---

## 9. Checklist Pre-Go-Live

> **Catatan 2026-11-07:** checklist ini disusun untuk kode PHP lama. Untuk rewrite Next.js, padanan keamanannya ada di **13.6**. Item PHP di bawah tetap relevan sebagai daftar fitur/risiko yang harus dipastikan **tidak ikut terbawa**.

### Keamanan (wajib)
- [ ] Hapus/kunci `php/api_query.php`.
- [ ] Ganti query `index.php` dengan prepared statement.
- [ ] Escape semua output (`htmlspecialchars`) — `ucapan`, nama, NIK.
- [ ] Perbaiki `api/v1/koneksi.php` atau hapus folder `api/v1`.
- [ ] Prepared statement + validasi + CSRF di `wish.php`, `check_nik.php`, `scan_success.php`, `jumlahtamu.php`, `reservasi.php`.
- [ ] Auth guard terpusat untuk seluruh `admin/*.php`.
- [ ] Tandatangani payload QR (HMAC/token unik dari DB).
- [ ] Tambah deny rules untuk `.git`, `*.sql`, `keys/`, `backups/`, `sql_tables/`.
- [ ] Matikan `display_errors` di produksi.
- [ ] Ganti `include` → `require_once` untuk `connection.php` (7× di `index.php`).

### Infrastruktur
- [ ] Persetujuan pemilik server.
- [ ] Subdomain + SSL.
- [ ] PHP-FPM pool + env.
- [ ] MariaDB tuned + user terpisah.
- [ ] Nginx server block + deny rules.
- [ ] Backup harian + offsite.
- [ ] Monitoring RAM/PM2/MariaDB.

### Data
- [ ] Sinkronkan schema (`nik_perwakilan`, `m_parameter`).
- [ ] Hapus PII dari repo (`sql_tables/*.sql`, `tamu_digitalocean.*`).
- [ ] Verifikasi hasil import di staging.

---

## 10. Keputusan Terbuka

| # | Keputusan | Opsi | Status |
|---|---|---|---|
| 1 | Engine DB | **PostgreSQL existing SPTP** — tanpa MariaDB | **Diputuskan 2026-11-07** |
| 2 | Domain | **Domain/ekosistem sendiri** (bukan `hallosptp.web.id`) | **Diputuskan** — nama belum final |
| 3 | Lokasi hosting | **VPS SPTP** (nebeng hosting + DB saja) | **Diputuskan 2026-11-07** |
| 4 | Upgrade RAM | 2 GB (matikan dev) vs 4 GB | **Belum diputuskan** (perlu dipantau setelah app jalan) |
| 5 | Nasib `admin/` | **Tidak dibawa** — diganti `/admin` di app baru | **Diputuskan** |
| 6 | Runtime hosting | **Rewrite Next.js** (tanpa PHP) | **Diputuskan 2026-11-07** |
| 7 | Strategi identifier | **snake_case** | **Diputuskan 2026-11-07** |
| 8 | Penempatan app | **Repo existing `nandurstudio/undangan`, branch `v2`** | **Diputuskan 2026-11-07** |
| 9 | Data lama | **Mulai bersih** | **Diputuskan 2026-11-07** |
| 10 | Auth admin | **Google login via Hallo SPTP**, verifikasi server-side | **Diputuskan** — mekanisme teknis perlu konfirmasi |
| 11 | Desain & fitur | **Pertahankan template wedding + semua fitur** | **Diputuskan 2026-11-07** |

---

## 11. Langkah Berikutnya (disarankan)

1. **Konfirmasi domain final** dan **mekanisme auth Google** ke sisi Hallo SPTP.
2. **Scaffold aplikasi Next.js** (branch `v2`): Next.js App Router + TypeScript + Tailwind 4 + Prisma + `output: 'standalone'`.
3. **Prisma schema**: `Event`, `Session`, `Guest`, `Rsvp`, `CheckIn`, `AdminUser` (snake_case via `@map`).
4. **Bangun fitur** dengan urutan: undangan publik → RSVP/ucapan → live count → QR check-in → admin dashboard.
5. **Port desain**: aset, musik, animasi, dan nuansa template wedding lama.
6. **Siapkan staging** di VPS SPTP: DB `undangan_db` + user terpisah, PM2 port 3002, Nginx, Certbot.
7. **CI/CD** GitHub Actions: build + `prisma migrate deploy` + restart PM2 (secret via GitHub Secrets).
8. **Uji end-to-end** lalu go-live setelah checklist Bagian 9 selesai.

---

## 12. Lampiran — Referensi File Kunci

| File | Peran |
|---|---|
| `index.php` | Halaman undangan utama (994 baris) |
| `php/connection.php` | Konfigurasi koneksi DB berbasis `getenv()` |
| `php/wish.php` | RSVP upsert + webhook n8n |
| `php/scan_success.php` | Check-in tamu (upsert `tr_tamu`) |
| `php/scantamu.php` | UI scanner QR |
| `php/liveguestcount.php` | UI live guest count |
| `php/bukutamu.php` | UI buku tamu |
| `php/jumlahtamurealtime.php` | Endpoint jumlah tamu realtime |
| `php/daftarbukutamu.php` | Endpoint daftar buku tamu |
| `php/api_query.php` | **Endpoint SQL bebas — P0** |
| `php/jumlahtamu.php` | **SQLi tanpa auth — P0** |
| `php/reservasi.php` | **SQLi tanpa auth — P0** |
| `php/webhook_sync_sheets.php` | Helper webhook n8n |
| `api/v1/koneksi.php` | **Fatal error — P0** |
| `admin/config/auth.php` | Konfigurasi auth admin |
| `admin/login.php` | Halaman login admin |
| `sql_tables/db_undangan_rat.sql` | Schema + seed (berisi PII) |
| `sql_tables/add_nik_perwakilan_column.sql` | Migration wajib |
| `.github/workflows/deploy-prod.yml` | CI/CD lama |
| `.htaccess` | Rewrite Apache (tidak dipakai Nginx) |
| `router.php` | Router PHP built-in server (lokal) |

---

## 13. Arah Baru 2026-11-07: Rewrite ke Next.js (mengikuti hallo-sptp)

### 13.1 Keputusan (final, 2026-11-07)

| # | Aspek | Keputusan |
|---|---|---|
| 1 | Stack | **Next.js App Router + TypeScript + Tailwind 4 + Prisma + PostgreSQL** (mengikuti hallo-sptp) |
| 2 | PHP | **Dihapus total** — tidak ada PHP-FPM, tidak ada MariaDB/MySQL |
| 3 | Penempatan | **Repo existing `nandurstudio/undangan`, branch `v2`** — bukan route di hallo-sptp |
| 4 | Hosting | VPS SPTP, **nebeng hosting + PostgreSQL saja**; PM2 process baru + Nginx server block |
| 5 | Database | PostgreSQL existing, **DB `undangan_db`** + **user `undangan_user`** terpisah |
| 6 | Domain | **Domain/ekosistem sendiri** (berbeda dari hallosptp) — nama belum final |
| 7 | Auth admin | **Google login seperti Hallo SPTP** — diarahkan ke auth Hallo SPTP; verifikasi **server-side** wajib |
| 8 | Data lama | **Mulai bersih** — tidak migrasi data MySQL |
| 9 | Fitur | **Semua fitur lama dipertahankan** (RSVP, buku tamu, live count, QR check-in, sesi, ucapan, NIK perwakilan, webhook) |
| 10 | Desain | **Pertahankan look & feel template wedding** (aset, musik, animasi) — dimodernisasi di Tailwind |
| 11 | Kolom DB | **snake_case** via Prisma `@map`; field TypeScript tetap camelCase |
| 12 | Migrasi kode | **Big-bang di branch**, tanpa shim `mysqli_*` |
| 13 | Build & deploy | Build di **GitHub Actions**, output `standalone`, `prisma migrate deploy` (bukan `db push`) |

**Prinsip:** satu VPS, satu PostgreSQL, dua aplikasi terpisah (hallo-sptp & undangan) yang tidak saling menjatuhkan.

**Yang diambil dari hallo-sptp:** struktur `app/` + `components/` + `lib/`, Prisma singleton & konvensi `@map`, API route tipis, Tailwind 4 theme, `cn()`, `sptpSwal`, pola deploy GitHub Actions → PM2.

**Yang TIDAK diambil:** API yang mempercayai `?email=`/`?googleSub=` mentah, secret plaintext di workflow, `ignoreBuildErrors: true`, `prisma db push` di produksi, build di VPS.

**Catatan auth Google:** karena login diarahkan ke Hallo SPTP, mekanismenya perlu dikonfirmasi ke sisi SPTP (lihat 13.12). Minimal: undangan memverifikasi **ID token** ke Firebase/endpoint SPTP, lalu menerbitkan **session cookie HttpOnly** miliknya sendiri. Undangan **tidak** menyimpan password dan **tidak** mempercayai email dari query string.

### 13.2 Cara kerja hallo-sptp (hasil studi)

| Aspek | Implementasi |
|---|---|
| Framework | Next.js `16.2.9` App Router, React 19, TypeScript 5.9 |
| Styling | Tailwind CSS 4 (`@import "tailwindcss"`), tema di `app/globals.css` via `@theme` |
| Komponen | 27 komponen di `components/`, mayoritas client component |
| Data | Prisma ORM + PostgreSQL 18 |
| Auth | Firebase Auth di client (`components/AuthProvider.tsx`) |
| API | 30 route handler di `app/api/**/route.ts` |
| Deploy | GitHub Actions → SSH → `git reset` → env → `npm install` → `prisma db push` → `next build` → PM2 restart |
| Web server | Nginx reverse proxy ke `127.0.0.1:3000` (prod) / `3001` (dev) |
| SSL | Certbot per domain |

**Pola request:**
1. `app/page.tsx` (server component) merender `home-client-container.tsx`.
2. Client container menyusun section: `Hero`, `OrgChart`, `BeritaTerbaru`, dst.
3. Data diambil dari API route (`fetch('/api/...')`) atau server component.
4. API route memanggil `prisma` lalu `NextResponse.json(...)`.

**Pola data (`lib/prisma.ts`):**
- Prisma Client singleton, disimpan di `globalThis` saat development.
- Model memakai `id UUID`, `createdAt/updatedAt`, `@map("snake_case")`, `@@map("table_name")`.
- Enum PostgreSQL untuk status/kategori.
- Index eksplisit untuk kolom filter.

**Pola auth (dan kelemahannya):**
- Login via Firebase di client; `AuthProvider` menyimpan `user`.
- Setelah login, client memanggil API dengan `?email=...&googleSub=...`.
- **API route mempercayai parameter tersebut tanpa memverifikasi Firebase ID token.** Ini celah: siapa pun bisa memanggil API dengan email orang lain.
- Untuk undangan, pola ini **tidak boleh** dipakai untuk aksi admin (check-in, ubah tamu). Harus verifikasi token server-side atau session cookie.

**Pola deploy (dan kelemahannya):**
- Workflow menulis `.env.production.local` berisi **password DB plaintext** dan API key di dalam YAML.
- Produksi memakai `prisma db push`, bukan `prisma migrate deploy`.
- `next.config.ts` memakai `typescript.ignoreBuildErrors: true`.
- Build dilakukan di VPS 2 GB (risiko RAM spike).
- Tidak ada test otomatis.

**Yang layak ditiru:**
- Struktur `app/` + `components/` + `lib/`.
- Prisma singleton dan konvensi `@map` snake_case.
- API route tipis + `NextResponse.json` + `force-dynamic`.
- Tailwind 4 + `cn()` (`lib/utils.ts`) + `sptpSwal` (`lib/swal.ts`).
- Alur deploy GitHub Actions → PM2, tetapi dengan secret management yang benar.

**Yang tidak boleh ditiru:**
- API yang mempercayai `email`/`googleSub` mentah.
- Secret plaintext di workflow.
- `ignoreBuildErrors: true`.
- `prisma db push` di produksi.
- Client component raksasa yang memuat seluruh halaman.

---

### 13.3 Arsitektur target

| Komponen | Rencana |
|---|---|
| Aplikasi | Repo `nandurstudio/undangan` branch `v2` (terpisah dari hallo-sptp) |
| Runtime | Node.js 22 + PM2 `undangan-prod` di port `3002` |
| Web server | Nginx `undangan.<domain>` → `127.0.0.1:3002` |
| Database | PostgreSQL existing, DB `undangan_db`, user `undangan_user` |
| ORM | Prisma (`provider = "postgresql"`) |
| Build | **Di GitHub Actions**, output `standalone`, bukan build di VPS |
| Proses deploy | `prisma migrate deploy` (bukan `db push`) + restart PM2 |
| Auth admin | Firebase ID token diverifikasi server-side, atau session cookie |
| QR | Token opaque tersimpan di DB (bukan string nama) |
| Webhook | n8n dipanggil async + secret header |

**Mengapa aplikasi terpisah, bukan route di hallo-sptp:**
- Isolasi: bug/looping undangan tidak menjatuhkan portal SPTP.
- Deploy independen: perubahan undangan tidak memicu rebuild hallo-sptp.
- Skema DB terpisah: tidak mencampur `members`, `grievances`, dsb.
- Tetap satu VPS dan satu PostgreSQL, jadi tidak menambah engine.

### 13.4 Rancangan model data (Prisma)

```prisma
model Event {
  id        String    @id @default(uuid()) @db.Uuid
  slug      String    @unique
  title     String
  subtitle  String?
  hostNames String    @map("host_names")
  eventDate DateTime  @map("event_date")
  venue     String?
  address   String?
  mapsUrl   String?   @map("maps_url")
  quote     String?
  sessions  Session[]
  guests    Guest[]
  createdAt DateTime  @default(now()) @map("created_at")
  updatedAt DateTime  @updatedAt @map("updated_at")
  @@map("events")
}

model Session {
  id       String   @id @default(uuid()) @db.Uuid
  eventId  String   @map("event_id") @db.Uuid
  event    Event    @relation(fields: [eventId], references: [id], onDelete: Cascade)
  name     String
  startAt  DateTime? @map("start_at")
  endAt    DateTime? @map("end_at")
  quota    Int?
  guests   Guest[]
  @@unique([eventId, name])
  @@map("sessions")
}

enum Attendance { MENUNGGU HADIR TIDAK_HADIR DIWAKILKAN }

model Guest {
  id           String    @id @default(uuid()) @db.Uuid
  eventId      String    @map("event_id") @db.Uuid
  event        Event     @relation(fields: [eventId], references: [id], onDelete: Cascade)
  sessionId    String?   @map("session_id") @db.Uuid
  session      Session?  @relation(fields: [sessionId], references: [id], onDelete: SetNull)
  token        String    @unique
  name         String
  department   String?
  phone        String?
  invitedCount Int       @default(1) @map("invited_count")
  rsvp         Rsvp?
  checkIns     CheckIn[]
  createdAt    DateTime  @default(now()) @map("created_at")
  updatedAt    DateTime  @updatedAt @map("updated_at")
  @@index([eventId])
  @@index([department])
  @@map("guests")
}

model Rsvp {
  id           String     @id @default(uuid()) @db.Uuid
  guestId      String     @unique @map("guest_id") @db.Uuid
  guest        Guest      @relation(fields: [guestId], references: [id], onDelete: Cascade)
  attendance   Attendance @default(MENUNGGU)
  guestCount   Int        @default(0) @map("guest_count")
  wish         String?    @db.Text
  delegateName String?    @map("delegate_name")
  delegateNik  String?    @map("delegate_nik")
  createdAt    DateTime   @default(now()) @map("created_at")
  updatedAt    DateTime   @updatedAt @map("updated_at")
  @@index([attendance])
  @@map("rsvps")
}

model CheckIn {
  id          String   @id @default(uuid()) @db.Uuid
  guestId     String   @map("guest_id") @db.Uuid
  guest       Guest    @relation(fields: [guestId], references: [id], onDelete: Cascade)
  checkedInAt DateTime @default(now()) @map("checked_in_at")
  guestCount  Int      @default(0) @map("guest_count")
  checkedInBy String?  @map("checked_in_by")
  @@unique([guestId])
  @@map("check_ins")
}

enum AdminRole { SUPERADMIN OPERATOR }

model AdminUser {
  id        String    @id @default(uuid()) @db.Uuid
  email     String    @unique
  name      String?
  role      AdminRole @default(OPERATOR)
  isActive  Boolean   @default(true) @map("is_active")
  createdAt DateTime  @default(now()) @map("created_at")
  updatedAt DateTime  @updatedAt @map("updated_at")
  @@map("admin_users")
}
```

Catatan:
- `Guest.token` menggantikan QR berbasis string nama.
- `Rsvp.wish` menggabungkan `tr_ucapan`.
- `CheckIn` menggantikan `tr_tamu`.
- `Session` menggantikan kolom `sesi`.
- `Event` menggantikan `tb_user`/`tr_undangan` (single event tetap didukung).
- `AdminUser` hanya untuk otorisasi; password/auth mengikuti Firebase atau session.

### 13.5 Peta route

| Route | Fungsi | Akses |
|---|---|---|
| `/` | Landing / cover undangan | Publik |
| `/u/[token]` | Undangan personal (nama, sesi, QR) | Publik (token) |
| `/guestbook` | Buku tamu + ucapan | Publik |
| `/live` | Live guest count | Publik |
| `/scan` | Scanner QR operator | Admin/operator |
| `/admin/login` | Login admin | Publik |
| `/admin` | Dashboard ringkasan | Admin |
| `/admin/guests` | CRUD + import/export tamu | Admin |
| `/admin/sessions` | Kelola sesi | Admin |
| `/admin/settings` | Pengaturan event | Admin |

**API route:**

| Endpoint | Method | Fungsi |
|---|---|---|
| `/api/invitation/[token]` | GET | Data tamu + event + RSVP |
| `/api/rsvp` | POST | Upsert RSVP (validasi + rate limit) |
| `/api/guestbook` | GET | Daftar ucapan (pagination) |
| `/api/live` | GET | Agregat kehadiran |
| `/api/checkin` | POST | Check-in via token (idempotent) |
| `/api/admin/guests` | GET/POST | List/create tamu |
| `/api/admin/guests/[id]` | PATCH/DELETE | Update/hapus tamu |
| `/api/admin/guests/import` | POST | Import CSV |
| `/api/admin/export` | GET | Export CSV |
| `/api/auth/session` | POST/DELETE | Login/logout admin |
| `/api/health` | GET | Health check |

---

### 13.6 Desain keamanan (menggantikan P0 lama)

| P0 lama | Solusi di rewrite |
|---|---|
| `php/api_query.php` SQL bebas | **Tidak ada** endpoint query generik |
| SQL injection `index.php` | **Prisma parameterized** + **Zod** validation |
| Stored XSS `ucapan`/nama/NIK | **React auto-escape**; tidak ada `dangerouslySetInnerHTML` |
| `api/v1` fatal | Folder tidak dibawa |
| File sensitif di webroot | Tidak ada `.sql`/`.env` di folder public; Nginx deny |
| SQLi `jumlahtamu`/`reservasi` | Endpoint dihapus; logika digabung ke `/api/rsvp` |
| QR tidak ditandatangani | `Guest.token` opaque (nanoid 32) + validasi DB |
| Admin tanpa guard | Session server-side + role check di setiap route admin |
| Webhook tanpa secret | Header `X-Webhook-Secret` + timeout + retry async |

Tambahan:
- **Rate limit** per IP/token untuk `/api/rsvp` dan `/api/checkin`.
- **Idempotensi** check-in: unique `guestId`, kembalikan status "sudah check-in".
- **CSRF**: cookie `SameSite=Lax` + origin check untuk aksi admin.
- **Security headers** di `next.config.ts`: CSP, `X-Frame-Options`, `Referrer-Policy`.
- **Audit log** opsional untuk aksi admin.
- **Validasi input**: `zod` (belum ada di hallo-sptp, perlu ditambah).

### 13.7 QR & webhook

**QR:**
- Generate di server dengan library `qrcode` (bukan `api.qrserver.com`).
- Isi QR: `https://undangan.<domain>/scan?t=<token>` atau token mentah.
- Token = `nanoid(32)`, unik, tersimpan di `guests.token`.
- Scanner (`/scan`) mengirim token ke `/api/checkin`; server mencari guest, validasi event/sesi, lalu insert `CheckIn`.
- Tidak ada PII di dalam QR.

**Webhook n8n:**
- Dipanggil setelah RSVP/check-in berhasil, **tanpa menahan response** (`after()` atau fire-and-forget).
- Header secret dari env `N8N_WEBHOOK_SECRET`.
- Simpan status kirim di kolom `webhook_status` jika perlu retry.
- Timeout 3-5 detik, bukan 10 detik.

### 13.8 Migrasi data lama (MySQL → PostgreSQL) — **TIDAK DIPAKAI**

> **Dibatalkan 2026-11-07:** data dimulai **bersih**. Bagian ini disimpan hanya sebagai referensi jika suatu saat data lama perlu dibawa.

| Sumber MySQL | Target Prisma | Transformasi |
|---|---|---|
| `tb_user` (pria/wanita) | `Event.hostNames` | Gabung nama |
| `tr_undangan` | `Event` | Tanggal, alamat, maps, quote |
| `tr_ucapan.namareservasi` | `Guest.name` | Deduplikasi per nama + alamat |
| `tr_ucapan.alamat` | `Guest.department` | Trim |
| `tr_ucapan.sesi` | `Session.name` | Buat sesi unik |
| `tr_ucapan.attending` | `Rsvp.attendance` | `1→HADIR`, `2→DIWAKILKAN`, `0→TIDAK_HADIR` |
| `tr_ucapan.jumlahtamu` | `Rsvp.guestCount` | Cast integer |
| `tr_ucapan.ucapan` | `Rsvp.wish` | Simpan |
| `tr_ucapan.nik_perwakilan` | `Rsvp.delegateNik` | Nullable |
| `tr_tamu` | `CheckIn` + `Guest` | Cocokkan nama; buat guest jika belum ada |
| `tr_reservasi` | `Rsvp` | Legacy, gabung jika memungkinkan |

Langkah:
1. Export MySQL ke CSV/JSON.
2. Script `scripts/import-undangan.ts` (idempoten, `upsert`).
3. Generate `token` untuk setiap guest.
4. Verifikasi jumlah baris & sampel data.
5. Simpan file mentah di luar repo.

### 13.9 Deployment

1. Buat DB & user:
   ```sql
   CREATE DATABASE undangan_db;
   CREATE USER undangan_user WITH PASSWORD '<password-kuat>';
   GRANT ALL PRIVILEGES ON DATABASE undangan_db TO undangan_user;
   ```
2. Tambah `output: 'standalone'` di `next.config.ts`.
3. Build di GitHub Actions, deploy artifact `.next/standalone` + `public` + `prisma`.
4. Jalankan `npx prisma migrate deploy` dengan `DATABASE_URL` dari GitHub Secrets.
5. PM2: `pm2 start .next/standalone/server.js --name undangan-prod` dengan `PORT=3002`.
6. Nginx:
   ```nginx
   server {
       listen 80;
       server_name undangan.<domain>;
       location / {
           proxy_pass http://127.0.0.1:3002;
           proxy_http_version 1.1;
           proxy_set_header Host $host;
           proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
           proxy_set_header X-Forwarded-Proto $scheme;
       }
   }
   ```
7. `certbot --nginx -d undangan.<domain>`.
8. Backup harian `pg_dump undangan_db`.

**Jangan** menaruh `DATABASE_URL`, `FIREBASE_*`, atau `N8N_WEBHOOK_SECRET` di workflow YAML. Gunakan GitHub Secrets.

### 13.10 Perkiraan beban & effort

| Komponen | RAM |
|---|---:|
| Next.js standalone produksi | ±150-250 MB |
| PostgreSQL (DB tambahan) | ±10-20 MB |
| Nginx (sudah ada) | 0 |
| **Tambahan** | **±160-270 MB** |
| Kondisi existing | ±630 MB |
| **Total** | **±800-900 MB** |
| Available | 1,3 GB |

Lebih ringan dari opsi PHP + MariaDB. Tetap disarankan mematikan `hallosptp-dev` saat tidak dipakai, dan build di CI agar tidak spike di VPS.

| Fase | Estimasi |
|---|---|
| 0. Scaffold, Prisma schema, auth, CI | 1-2 hari |
| 1. Undangan publik + RSVP + guestbook + live | 3-5 hari |
| 2. QR check-in + UI operator | 3-4 hari |
| 3. Admin dashboard (CRUD, import/export, sesi, setting) | 3-4 hari |
| 4. Migrasi data + E2E test + deploy + hardening | 2-3 hari |
| **Total** | **±2-3 minggu penuh** |

### 13.11 Risiko rewrite

| Risiko | Mitigasi |
|---|---|
| Scope creep admin dashboard | Batasi MVP: tamu, sesi, check-in, export |
| Kehilangan desain undangan lama | Port aset & animasi bertahap; prioritaskan mobile |
| Data lama tidak konsisten | Script import idempoten + laporan selisih |
| Auth admin terlalu rumit | Pilih satu: Firebase verify atau session cookie |
| Build Next.js di VPS 2 GB | Build di GitHub Actions + standalone |
| Webhook n8n gagal | Async + retry + log |
| Dua aplikasi di satu VPS | PM2 terpisah, monitor RAM, Nginx isolasi |
| Tidak ada test | Minimal Playwright smoke test untuk RSVP & check-in |

### 13.12 Keputusan final vs masih terbuka

**Sudah final (2026-11-07):**

| # | Keputusan | Hasil |
|---|---|---|
| 1 | Penempatan app | **Repo existing `nandurstudio/undangan`, branch `v2`** |
| 2 | Data lama | **Mulai bersih** |
| 3 | Desain | **Pertahankan template wedding** (aset, musik, animasi) |
| 4 | Fitur | **Semua fitur lama dipertahankan** |
| 5 | Auth admin | **Google login via Hallo SPTP**, verifikasi server-side |
| 6 | Kolom DB | **snake_case** |
| 7 | Migrasi kode | **Big-bang di branch** |

**Masih terbuka:**

| # | Keputusan | Opsi | Catatan |
|---|---|---|---|
| 1 | Domain final | `undangan.<domain-anda>` vs domain lain | Ekosistem terpisah dari hallosptp |
| 2 | Mekanisme auth Google | Firebase ID token diverifikasi langsung vs endpoint session dari SPTP | Perlu konfirmasi ke sisi Hallo SPTP |
| 3 | Format link | `/u/[token]` vs `/?to=&adr=&s=` | Rencana: `/u/[token]` + redirect kompatibilitas dari format lama |
| 4 | Multi-event | Satu event vs banyak event | Schema dibuat multi-event-ready, UI bisa satu event dulu |
| 5 | Nama aplikasi/branding | — | Menunggu domain |

**Default yang saya pakai bila tidak ada instruksi lain:**
- Format link: `/u/[token]`, dengan redirect dari `/?to=&adr=&s=`.
- Schema multi-event-ready, UI fokus satu event.
- Auth: session cookie HttpOnly setelah verifikasi Google token.

### 13.13 Status implementasi (2026-11-07)

**Repo & branch**

| Item | Nilai |
|---|---|
| Repo | `https://github.com/nandurstudio/undangan` |
| Branch kerja | `v2` (dibuat dari `prod`, bukan `master`) |
| Branch produksi lama | `prod` — aplikasi PHP, dibekukan |
| `master` | arsip lama, tidak dipakai |
| Lokasi lokal | `E:\Website\undangan` |
| Deploy | belum; tidak ada perubahan di VPS |

**Yang sudah jadi**

| Item | Status |
|---|---|
| Next.js 16.4.5 App Router + React 19.3 | ✅ |
| TypeScript strict | ✅ `tsc --noEmit` lulus |
| Tailwind CSS 4.3.5 + tema warna/font template lama | ✅ |
| Prisma 7.10.1 (`prisma-client` + `@prisma/adapter-pg`) | ✅ |
| Schema: `Event`, `Session`, `Guest`, `Rsvp`, `CheckIn`, `AdminUser`, `Venue` | ✅ |
| Migrasi `20261107141006_init` + `20261107144214_add_venue` | ✅ diterapkan di `undangan_dev` |
| Seed contoh (`contoh-2026`, 2 venue, 2 sesi, guest `demo`) | ✅ |
| `next build` + `output: standalone` | ✅ |
| Security headers dasar | ✅ |
| Font template lama: Fraunces + Karla | ✅ |
| Halaman undangan publik `/u/[token]` + `not-found.tsx` | ✅ |
| RSVP form + guestbook + live stats | ✅ |
| Aset template lama di `public/` (media, audio, favicon) | ✅ |
| Tema warna legacy (cyan-ink, red-ink, gold-ink) | ✅ |
| Typecheck `tsc --noEmit` | ✅ lulus |
| Ujian end-to-end `/u/demo` + `POST /api/rsvp` | ✅ HTTP 200 / `{ ok: true }` |

**Database lokal**

| Item | Nilai |
|---|---|
| PostgreSQL | 17 (service `postgresql-x64-17`, port 5432) |
| Database | `undangan_dev` |
| User | `undangan_user` |
| Catatan | user diberi `CREATEDB` **hanya untuk shadow database Prisma di lokal**; di VPS tidak perlu |

**Perintah lokal**

```bash
npm install
npm run db:migrate
npm run db:seed
npm run dev        # http://localhost:3002
```

**Belum dikerjakan**

- QR check-in + halaman scanner (`/scan?t=<token>` + `POST /api/checkin`).
- Redirect kompatibilitas format lama `/?to=&adr=&s=` → `/u/[token]`.
- Admin dashboard + auth Google (verifikasi server-side, mechanism pending).
- CI/CD GitHub Actions + setup VPS (DB `undangan_db`, PM2 3002, Nginx, Certbot).
- Test otomatis.
- Domain nama final.

---

## 14. Changelog Dokumen

| Tanggal | Perubahan |
|---|---|
| 2026-11-07 | Dokumen dibuat. Menggabungkan analisa project pertama + analisa VPS SPTP. Status: belum ada perubahan server. |
| 2026-11-07 | **Keputusan:** gunakan PostgreSQL existing SPTP, tanpa MariaDB. Ditambahkan Bagian 6.4 (scope migrasi `mysqli` → PDO/pgsql). Runtime & strategi identifier masih terbuka. |
| 2026-11-07 | **Arah baru:** rewrite total ke Next.js + TypeScript + Tailwind + Prisma (mengikuti hallo-sptp). Ditambahkan Bagian 13 (studi hallo-sptp, arsitektur target, model data, route, keamanan, migrasi, deployment, effort). Keputusan: snake_case, big-bang di branch. |
| 2026-11-07 | **Keputusan final:** pakai repo existing `nandurstudio/undangan` branch `v2`; nebeng VPS + PostgreSQL saja (domain/ekosistem sendiri); Google login via Hallo SPTP dengan verifikasi server-side; mulai data bersih; semua fitur lama dipertahankan; look & feel template wedding dipertahankan. Bagian 13.1 & 13.12 diperbarui, 13.8 ditandai tidak dipakai. |
| 2026-11-07 | **Scaffold selesai:** Next.js 16.4.5 + React 19.3 + TS strict + Tailwind 4.3.5 + Prisma 7.10.1, schema 6 model, migrasi `20261107141006_init` di `undangan_dev`, seed contoh, `next build` + typecheck lulus. Lokal di `E:\Website\undangan`, port 3002. Tidak ada perubahan VPS. Ditambahkan 13.13. |
| 2026-11-07 | **Fase 1 selesai & dipush ke `origin/v2` (commit `4a91260`):** halaman undangan publik `/u/[token]` dengan cover gate, musik, QR code, RSVP, guestbook, live stats, countdown, 2 lokasi, protokol, dan footer; `POST /api/rsvp` dengan validasi + delegate NIK unik; model `Venue` + migrasi `add_venue`; aset template lama di `public/`; theme warna legacy. `next build`, typecheck, dan ujian end-to-end `/u/demo` lulus. Tidak ada perubahan VPS. |
