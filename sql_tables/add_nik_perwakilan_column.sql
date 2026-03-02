-- Add nik_perwakilan column to tr_ucapan table for tracking delegation NIK
-- This allows tracking when a guest delegates their attendance to someone else

ALTER TABLE `tr_ucapan` ADD COLUMN `nik_perwakilan` VARCHAR(16) NULL AFTER `jumlahtamu`;

-- Create index for easier searching by NIK
CREATE INDEX `idx_nik_perwakilan` ON `tr_ucapan` (`nik_perwakilan`);

-- Verify the column was added
SELECT COLUMN_NAME, COLUMN_TYPE, IS_NULLABLE 
FROM INFORMATION_SCHEMA.COLUMNS 
WHERE TABLE_NAME = 'tr_ucapan' AND COLUMN_NAME = 'nik_perwakilan';
