<script> var enableSupportButton = '<?php echo $DexignZoneSettings['site_level']['support_button'] ?>'</script>
<script> var asset_url = '<?php echo !empty($DexignZoneSettings['site_level']['asset_url']) ? $DexignZoneSettings['site_level']['asset_url'] : 'assets/' ?>'</script>

<?php 
	$asset_url = !empty($DexignZoneSettings['site_level']['asset_url']) ? $DexignZoneSettings['site_level']['asset_url'] : 'assets/';

	if (!empty($DexignZoneSettings['global']['js']['top'])) {
		foreach ($DexignZoneSettings['global']['js']['top'] as $script){
			if (!str_contains($script, 'http')) {
				echo '<script src="'.$asset_url.$script.'" type="text/javascript"></script>',PHP_EOL;
			}
		}
	}
	if (!empty($DexignZoneSettings['pagelevel'][$CurrentPage]['js'])) {
		foreach ($DexignZoneSettings['pagelevel'][$CurrentPage]['js'] as $script) {
			if (!str_contains($script, 'http')) {
				echo '<script src="'.$asset_url.$script.'" type="text/javascript"></script>',PHP_EOL;
			}
		}
	}

	if (!empty($DexignZoneSettings['global']['js']['bottom'])) {
		foreach ($DexignZoneSettings['global']['js']['bottom'] as $script){
			if (!str_contains($script, 'http')) {
				echo '<script src="'.$asset_url.$script.'" type="text/javascript"></script>',PHP_EOL;
			}
		}
	}
 ?>