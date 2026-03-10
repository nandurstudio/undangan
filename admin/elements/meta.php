<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php 

    $global_seo = !empty($DexignZoneSettings['site_level']['seo']['meta']) ? $DexignZoneSettings['site_level']['seo']['meta'] : array() ;
    $seo = !empty($DexignZoneSettings['pagelevel'][$CurrentPage]['seo']['meta']) ? $DexignZoneSettings['pagelevel'][$CurrentPage]['seo']['meta'] : $global_seo;

    if (!empty($seo)) {
        foreach ($seo as $tag) {
            if (isset($tag['name'])){
                echo '<meta name="'.$tag['name'].'" content="'.$tag['content'].'">',PHP_EOL;
            }
            elseif (isset($tag['property'])){
                echo '<meta name="'.$tag['property'].'" content="'.$tag['content'].'">',PHP_EOL;
            }
        }
    }
 ?>