<?php 
	if (!empty($DexignZoneSettings['pagelevel'][$CurrentPage]['css'])) {
		foreach ($DexignZoneSettings['pagelevel'][$CurrentPage]['css'] as $style) {
			$asset_url = !empty($DexignZoneSettings['site_level']['asset_url']) ? $DexignZoneSettings['site_level']['asset_url'] : 'assets/';
			$asset_url = str_contains($style, 'http') ? $style : $asset_url.$style;
			echo '<link href="'.$asset_url.'" rel="stylesheet" type="text/css"/>',PHP_EOL;
		}
	}

	if (!empty($DexignZoneSettings['global']['css'])) {
		foreach ($DexignZoneSettings['global']['css'] as $style){
			$asset_url = !empty($DexignZoneSettings['site_level']['asset_url']) ? $DexignZoneSettings['site_level']['asset_url'] : 'assets/';
			$asset_url = str_contains($style, 'http') ? $style : $asset_url.$style;
			echo '<link href="'.$asset_url.'" rel="stylesheet" type="text/css"/>',PHP_EOL;
		}
	}
 ?>