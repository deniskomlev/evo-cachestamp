<?php
/**
 * CacheStamp snippet for MODx Evolution
 * 
 * Allows to receive a timestamp which will be recreated after cache update.
 */
$cachePath = MODX_BASE_PATH.'assets/cache/';
$cacheFile = $cachePath.'cacheStamp.pageCache.php';

if (!isset($GLOBALS['cacheStamp'])) {
    if (is_file($cacheFile))
        $GLOBALS['cacheStamp'] = (int) file_get_contents($cacheFile);
    else {
        $GLOBALS['cacheStamp'] = time();
        file_put_contents($cacheFile, $GLOBALS['cacheStamp']);
    }
}

return $GLOBALS['cacheStamp'];
?>