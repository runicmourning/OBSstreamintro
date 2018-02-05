<?php
$dir = "bg/";
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
$background = $bglist[$back];

$weatherarray = array('yes','no','yes','no','yes','no','yes','no','yes','no','yes','no','yes','no','yes','no','yes','no');
$str = $background;
if (strpos($str, '-rain.') !== FALSE)
{
$rand = array_rand($weatherarray, 1);
if ($weatherarray[$rand] == 'yes'){
 $weather = 'weather rain';
} else {
 $weather = ' ';
}
}
elseif (strpos($str, '-snow.') !== FALSE)
{
$rand = array_rand($weatherarray, 1);
if ($weatherarray[$rand] == 'yes'){
 $weather = 'weather snow';
} else {
 $weather = ' ';
}
}
elseif (strpos($str, 'snowrain') !== FALSE)
{
$warray = array('rain','snow','');
$rand = array_rand($warray, 1);
$weather = 'weather ' . $warray[$rand];
}
else
{
 $weather = 'nope';
}
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
	<title>Title Screen</title>
		<link rel="stylesheet" href="css/animations.css" type="text/css">
		<link rel="stylesheet" href="css/weather.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet"> 
<style type="text/css">
.emergency
{
 -webkit-animation: cc 1s linear 2s infinite alternate;
 animation: cc 1s linear 1s infinite alternate;
 color: #000;
 font-size:50px;
 font-family: 'Press Start 2P', cursive;
}
.start {
 position: relative;
 top: 590px;
 width: 1920px;
 text-align: center;}
 
@-webkit-keyframes cc
{
 0%   { color: #000;}
 50%  { color: #999;}
 100% { color: #fff;}
}

@keyframes cc
{
 0%   { color: #000;}
 50%  { color: #999;}
 100% { color: #fff;}
}
</style>
<meta http-equiv="refresh" content="15;url=Blank.html"> 
	</head>
	<body class="<?php echo $weather; ?>" style="margin: 0; width: 1920px; height: 1080px; background: #000 url(bg/<?php echo $background; ?>) no-repeat; color: #fff;">


<div class="animatedParent" style="margin: auto; height; 360px; width:640px;">
<img class="animated fadeInDown" src="t-padlogo.png" style="margin-top: 200px;">
</div>

<div class="start"><span class="emergency">Press Start</span></div>

	</body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src='js/css3-animate-it.js'></script>
