# Implementasi Fitur "Diwakilkan" - Setup Guide

## Langkah-langkah Implementasi di LOCALHOST

### 1. **Update Database Schema**

Jalankan SQL migration script di localhost (gunakan phpMyAdmin atau MySQL Workbench):

```bash
# Atau buka file: /undangan/sql_tables/add_nik_perwakilan_column.sql
# dan jalankan di phpMyAdmin

ALTER TABLE `tr_ucapan` ADD COLUMN `nik_perwakilan` VARCHAR(16) NULL AFTER `jumlahtamu`;
CREATE INDEX `idx_nik_perwakilan` ON `tr_ucapan` (`nik_perwakilan`);
```

**Catatan:** Kolom `nik_perwakilan` menggunakan VARCHAR(16) untuk backward compatibility, namun actual data yang disimpan adalah **nomor induk karyawan (max 10 digit)**, bukan NIK KTP. Field input dibatasi dengan `maxlength="10"`.

**Verifikasi:**
```sql
DESCRIBE tr_ucapan;
-- Pastikan ada kolom nik_perwakilan tipe VARCHAR(16)
```

### 2. **File yang Sudah Diupdate:**

✅ **f:\laragon\www\undangan\index.php**
- Tambah opsi "Diwakilkan" (value: 2) di select `#konfirmasi-kehadiran`
- Tambah field `#divnikperwakilan` yang hidden secara default dengan icon wallet
- Update JavaScript event handler untuk show/hide field berdasarkan pilihan
- Update fungsi `clickButton()` dengan validasi nomor induk karyawan (tidak boleh kosong)
- Tambah validasi AJAX check apakah NIK sudah digunakan perwakilan lain via `check_nik.php`
- Auto-clear NIK saat status diubah dari "Diwakilkan" ke status lain (Akan Hadir / Tidak Hadir)
- Dynamic error message menampilkan NIK: "Orang dengan NIK XXXXXXX sudah jadi perwakilan"
- Update display comments untuk menampilkan status "Diwakilkan" dengan nomor induk (penuh, tidak tersamar)
- Label field: "NIK Perwakilan (Nomor Induk Karyawan)" untuk clarity
- Smooth scroll snapping per section dengan CSS scroll-snap dan scroll-behavior

✅ **f:\laragon\www\undangan\php/wish.php**
- Tambah variable `$nik_perwakilan` untuk menerima POST data
- Update query INSERT untuk include `nik_perwakilan`
- Update query UPDATE untuk include `nik_perwakilan`
- Convert empty string menjadi NULL di database (nik_perwakilan dihapus saat status bukan Diwakilkan)
- Tambah `mysqli_real_escape_string()` untuk prevent SQL injection

✅ **f:\laragon\www\undangan\php/check_nik.php** (baru)
- Validasi NIK duplikat - check apakah NIK sudah digunakan orang lain dengan status Diwakilkan
- Return 'exists' jika NIK sudah ada, 'not_exists' jika belum

✅ **f:\laragon\www\undangan\css/style.css**
- Tambah `scroll-behavior: smooth` pada body untuk smooth scrolling
- Tambah `scroll-snap-type: y mandatory` pada body untuk snapping per segment
- Tambah `scroll-snap-align: start` dan `scroll-snap-stop: always` pada section dan #fh5co-couple

✅ **f:\laragon\www\undangan/sql_tables/add_nik_perwakilan_column.sql** (baru)
- SQL migration script untuk menambah kolom nik_perwakilan

### 3. **Cara Kerja Fitur:**

**Jika user memilih "Akan Hadir":**
- Field "Jumlah Tamu" disembunyikan dengan default value = 1 (hidden input)
- Field "NIK Perwakilan" disembunyikan

**Jika user memilih "Tidak Bisa Hadir":**
- Field "Jumlah Tamu" disembunyikan
- Field "NIK Perwakilan" disembunyikan
- Placeholder comment ubah ke "Alasan"

**Jika user memilih "Diwakilkan":**
- Field "Jumlah Tamu" disembunyikan (tidak perlu diisi)
- Field "NIK Perwakilan (Nomor Induk Karyawan)" tampil (required)
- Placeholder: "Masukkan nomor induk karyawan (maksimal 10 digit)"
- Placeholder comment: "Jelaskan alasan mengapa diwakilkan"

### 4. **Validasi yang Diterapkan:**

✅ Nama harus diisi
✅ Komentar/Alasan harus diisi
✅ Konfirmasi kehadiran harus dipilih
✅ Jika "Diwakilkan": Nomor induk karyawan harus diisi (tidak ada validasi panjang digit spesifik, fleksibel sesuai format organisasi)
✅ Jika "Diwakilkan": NIK tidak boleh duplikat (cek via AJAX check_nik.php)
✅ Jika status diubah dari "Diwakilkan" ke status lain: NIK otomatis dihapus dari database

### 5. **Update dan Query Records:**

Semua query yang mengambil data dari database sudah update untuk include kolom `nik_perwakilan`, sehingga:
- Staff bisa update reservasi dan pilih "Diwakilkan"
- Form akan pre-populate dengan data sebelumnya (termasuk nomor induk yang sudah diisi)
- Setiap update akan overwrite data lama dengan yang baru

### 6. **Masking untuk Privacy:**

Nomor induk karyawan ditampilkan tersamar di comments section:
- Contoh: "12345678" ditampilkan sebagai "123****8" (3 digit pertama + 1 digit akhir)
- Ini untuk menjaga privacy data karyawan

### 7. **Testing di Localhost:**

```bash
# 1. Jalankan SQL migration untuk add kolom
# 2. Buka browser: http://localhost/undangan/

# 3. Test Case 1: Pilih "Akan Hadir"
# - Field jumlahtamu harus tersembunyi (value = 1)
# - Field nik_perwakilan harus hidden
# - Label berubah jadi "Komentar"

# 4. Test Case 2: Pilih "Tidak Bisa Hadir"
# - Field jumlahtamu harus hidden
# - Field nik_perwakilan harus hidden
# - Label berubah jadi "Alasan"

# 5. Test Case 3: Pilih "Diwakilkan"
# - Field nik_perwakilan harus tampil di atas comment section
# - Field jumlahtamu harus hidden
# - Label berubah jadi "Alasan Diwakilkan"
# - Input nomor induk karyawan (1-10 digit) dan submit
# - Verifikasi nomor disimpan dan ditampilkan tersamar di comments

# 6. Test Case 4: Update existing record
# - Buka undangan dengan parameter yang sama
# - Nomor induk lama harus pre-populate
# - Update nomor atau status dan submit
```

### 8. **Siap Deploy ke Server:**

Setelah testing di localhost selesai dan semua OK:

```bash
# 1. Upload modified files ke server:
#    - /opt/stack/web/undangan/index.php
#    - /opt/stack/web/undangan/php/wish.php

# 2. SSH ke server dan jalankan migration:
ssh portfolio-droplet
cd /opt/stack && sudo docker compose exec -T db mysql -u root -p$MYSQL_ROOT_PASSWORD db_undangan_rat < migrate.sql

# 3. Atau manual via docker exec:
sudo docker compose exec db mysql -u root -pYOUR_PASSWORD db_undangan_rat << EOF
ALTER TABLE tr_ucapan ADD COLUMN nik_perwakilan VARCHAR(16) NULL AFTER jumlahtamu;
CREATE INDEX idx_nik_perwakilan ON tr_ucapan (nik_perwakilan);
EOF

# 4. Restart containers
sudo docker compose restart php nginx
```

## Catatan:
- Nomor induk karyawan ditampilkan tersamar untuk privacy
- Kolom nik_perwakilan dapat NULL (opsional untuk pilihan lain)
- Semua query sudah safe dari SQL injection dengan `mysqli_real_escape_string()`
- Field input dibatasi maksimal 10 digit dengan `maxlength="10"`
- Kolom database VARCHAR(16) untuk backward compatibility dan fleksibilitas
