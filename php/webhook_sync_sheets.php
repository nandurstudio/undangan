<?php
/**
 * Webhook handler untuk trigger n8n sync ke Google Sheets
 * Called setiap kali ada form submission (tr_ucapan atau tr_tamu)
 * 
 * Usage (dari index.php):
 * trigger_webhook_sync('tr_ucapan');
 * 
 * @param string $table Table name (tr_ucapan atau tr_tamu)
 * @return void
 */

function trigger_webhook_sync($table = 'tr_ucapan') {
    // n8n webhook endpoint
    $webhook_url = 'https://nandurstudio.com/n8n/webhook/undangan-sync';
    
    // Payload
    $payload = json_encode([
        'table' => $table,
        'timestamp' => date('Y-m-d H:i:s'),
        'source' => 'form_submit'
    ]);
    
    // Options
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => $payload,
            'timeout' => 2 // Non-blocking, max 2 seconds
        ]
    ];
    
    // Call webhook (async, non-blocking)
    $context = stream_context_create($options);
    
    try {
        // Call webhook in background
        $response = @file_get_contents($webhook_url, false, $context);
        
        // Log success (optional)
        error_log("[WEBHOOK] Sync triggered for table: $table at " . date('Y-m-d H:i:s'));
        
    } catch (Exception $e) {
        // Log error tapi jangan interrupt form submission
        error_log("[WEBHOOK ERROR] Failed to trigger sync for table: $table - " . $e->getMessage());
        // Form tetap berhasil, sync akan jalan di schedule trigger nanti
    }
}

// Direct call (jika diakses langsung dari form)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['trigger_sync'])) {
    $table = $_POST['trigger_sync'] ?? 'tr_ucapan';
    trigger_webhook_sync($table);
    
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'message' => "Webhook triggered for $table"
    ]);
    exit;
}

// Expose function untuk di-include dari index.php
// Usage: include 'webhook_sync_sheets.php'; trigger_webhook_sync('tr_ucapan');
?>
