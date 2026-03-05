-- MySQL Migration: Fix timezone for existing records
-- Convert UTC timestamps to Asia/Jakarta (+07:00)
-- 
-- Background: Previous records were stored in UTC timezone
-- This migration adds 7 hours to all existing timestamps
-- 
-- Run: mysql -u kkmrat_user -p db_undangan_rat < fix_timezone_migration.sql

-- Check current timezone in database (optional)
SELECT NOW() AS current_server_time, 'Before migration' AS status;

-- Fix tr_tamu table
UPDATE tr_tamu 
SET `date` = DATE_ADD(`date`, INTERVAL 7 HOUR)
WHERE `date` < DATE_SUB(NOW(), INTERVAL 6 HOUR);

-- Count affected rows (output)
-- SELECT ROW_COUNT() AS tr_tamu_affected;

-- Fix tr_ucapan table
UPDATE tr_ucapan 
SET `date` = DATE_ADD(`date`, INTERVAL 7 HOUR)
WHERE `date` < DATE_SUB(NOW(), INTERVAL 6 HOUR);

-- Count affected rows (output)
-- SELECT ROW_COUNT() AS tr_ucapan_affected;

-- Verify migration
SELECT 
  'tr_tamu' AS table_name,
  COUNT(*) AS total_records,
  MAX(`date`) AS latest_timestamp,
  MIN(`date`) AS oldest_timestamp
FROM tr_tamu
UNION ALL
SELECT 
  'tr_ucapan',
  COUNT(*),
  MAX(`date`),
  MIN(`date`)
FROM tr_ucapan;

SELECT NOW() AS current_server_time, 'After migration' AS status;

-- IMPORTANT: After this migration, new timezone setting in connection.php will apply to all new inserts
-- All timestamps will now be in Asia/Jakarta timezone (+07:00)
