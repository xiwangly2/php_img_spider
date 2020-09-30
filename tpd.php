<?php
$url = 'https://api.dongmanxingkong.com/suijitupian/acg/1080p/index.php';
$img = @file_get_contents($url,true);
$info = @getimagesize($img);
$md5 = @md5($img);
$mime = $info["mime"];
if($mime == "image/png")
{
	$filetype = ".png";
}
elseif($mime == "image/jpeg")
{
	$filetype = ".jpeg";
}
elseif($mime = "image/gif")
{
	$filetype = ".gif";
}
elseif($mime == "image/vnd.wap.wbmp")
{
	$filetype = ".wbmp";
}
elseif($mime == "image/x-xbitmap")
{
	$filetype = ".xbm";
}
elseif($mime == "image/webp")
{
	$filetype = ".webp";
}
elseif($mime == "image/bmp")
{
	$filetype = ".bmp";
}
else
{
	$filetype = ".png";
}
$filename = "{$md5}";
$file_name = "{$filename}{$filetype}";
echo "{$file_name}";
if(file_exists("./images/{$file_name}"))
{
	echo "<br>重复！";
	@file_put_contents("./images/{$file_name}",$img);
}
else
{
	@file_put_contents("./images/{$file_name}",$img);
}
?>