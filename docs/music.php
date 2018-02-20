<?php
header('Content-Type: audio/mpeg');
$dir = "bgmusic/";
$bglist = "";
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      if ($file == "."){
	  
	  } elseif ($file == "..") {
		  
	  } else {
		  $bglist .= $file . "_";
	  }
    }
    closedir($dh);
  }
}
$bglist = preg_split('@_@', $bglist, NULL, PREG_SPLIT_NO_EMPTY);
$back = array_rand($bglist,1);
$backmusic = $bglist[$back];
//echo "location: " . $dir . $backmusic ."";
header("location: " . $dir . $backmusic ."")
?>