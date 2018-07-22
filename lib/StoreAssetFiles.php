<?php

class StoreAssetFiles {
  
  public static $rootUrl = '/GitList/';
  
  public static $fileNames = [
    '/assets/js/main.js',
    '/assets/js/util.js',    
  ];
    
  public static function generateScriptTags()
  {
    $result = [];
    
    foreach (self::$fileNames as $file) {
      //"/GitList/templates/$templateName/$file"
      $file = self::$root.$file;
      $result[] = "<script src=\"$file\"></script>";
    }    
    return implode("\n",$result);    
  }

}
  
echo StoreAssetFiles::generateScriptTags();  