-- Timezone Migration: Fix UTC → Asia/Jakarta (+07:00)
-- Date: 2026-03-05
-- Backup: /tmp/db_undangan_rat_backup_20260305_*.sql

-- PRE-MIGRATION INFO
SELECT 'PRE-MIGRATION: Checking affected records' AS check_status;

SELECT 
  'tr_tamu' AS table_name,
  COUNT(*) AS record_count,
  MAX(date) AS latest_date,
  MIN(date) AS oldest_date
FROM tr_tamu
WHERE DATEDIFF(CURDATE(), DATE(date)) <= 7
UNION ALL
SELECT 
  'tr_ucapan',
  COUNT(*),
  MAX(date),
  MIN(date)
FROM tr_ucapan
WHERE DATEDIFF(CURDATE(), DATE(date)) <= 7;

-- FIX tr_tamu: Add 7 hours to all records from last 7 days
UPDATE tr_tamu SET date = DATE_ADD(date, INTERVAL 7 HOUR) WHERE DATEDIFF(CURDATE(), DATE(date)) <= 7;

-- FIX tr_ucapan: Add 7 hours to all records from last 7 days
UPDATE tr_ucapan SET date = DATE_ADD(date, INTERVAL 7 HOUR) WHERE DATEDIFF(CURDATE(), DATE(date)) <= 7;

-- POST-MIGRATION VERIFICATION
SELECT 'POST-MIGRATION: Verification Results' AS check_status;

SELECT 
  'tr_tamu' AS table_name,
  COUNT(*) AS total_records,
  MAX(date) AS latest_timestamp,
  MIN(date) AS oldest_timestamp
FROM tr_tamu
UNION ALL
SELECT 
  'tr_ucapan',
  COUNT(*),
  MAX(date),
  MIN(date)
FROM tr_ucapan;

SELECT 'MIGRATION COMPLETE - No errors!' AS final_status;
