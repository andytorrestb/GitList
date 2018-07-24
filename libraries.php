<?php
    include_once(__DIR__.'/includes/config.php');    
      
    if (preg_match(':(.+)/(GitList)/(.+$):', __FILE__, $m)===1) {
        $parentPath = $m[1];
        $relativeFilename = $m[3];
    } else {
        $parentPath = __DIR__;
        $relativeFilename = basename(__FILE__);
    }
      
    $filename = rtrim($parentPath,'/').rtrim($templatePath,'/').'/'.$relativeFilename;
	include_once($filename);
	