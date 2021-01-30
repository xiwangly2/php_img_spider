<?php
$url = 'https://api.dongmanxingkong.com/suijitupian/acg/1080p/index.php';
$info = @getimagesize($url);
$md5 = @md5_file($url);
$img = @file_get_contents($url);
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
	$filetype = ".bin";
}
$filename = "{$md5}";
$file_name = "{$filename}{$filetype}";
header("Content-type:application/octet-stream");
header("Accept-Ranges:bytes");
header("Content-Disposition: attachment;filename={$file_name}");
echo $img;
?>
