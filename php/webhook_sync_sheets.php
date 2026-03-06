<?php
/**
 * webhook_sync_sheets.php
 * Helper untuk trigger n8n webhook setelah INSERT / UPDATE MySQL
 * 
 * Cara pakai di wish.php / file lain:
 *   require_once 'webhook_sync_sheets.php';
 *   trigger_webhook_sync('tr_ucapan', 'insert', $dataArray);
 */

// =============================================
// n8n webhook endpoint untuk sync Google Sheets
// =============================================
define('N8N_WEBHOOK_URL', 'https://nandurstudio.com/webhook/undangan-sync');

// Secret token opsional (tambahkan di n8n Header Auth jika mau lebih aman)
define('N8N_WEBHOOK_SECRET', '');

/**
 * Kirim data ke n8n webhook
 *
 * @param string $table   Nama tabel: 'tr_ucapan' atau 'tr_tamu'
 * @param string $action  'insert' atau 'update'
 * @param array  $data    Data row yang baru di-insert/update
 * @return bool           true jika berhasil, false jika gagal
 */
function trigger_webhook_sync(string $table, string $action = 'insert', array $data = []): bool
{
    $payload = json_encode([
        'table'  => $table,
        'action' => $action,
        'data'   => $data,
    ]);

    $headers = [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload),
    ];

    // Tambahkan secret header jika diset
    if (!empty(N8N_WEBHOOK_SECRET)) {
        $headers[] = 'X-Webhook-Secret: ' . N8N_WEBHOOK_SECRET;
    }

    $ch = curl_init(N8N_WEBHOOK_URL);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 10,       // timeout 10 detik
        CURLOPT_SSL_VERIFYPEER => true,
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error    = curl_error($ch);
    curl_close($ch);

    if ($error || $httpCode < 200 || $httpCode >= 300) {
        // Log error tapi jangan crash aplikasi
        error_log("[webhook_sync] FAILED table=$table action=$action httpCode=$httpCode error=$error");
        return false;
    }

    return true;
}
