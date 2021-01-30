<?php
$url = 'https://api.dongmanxingkong.com/suijitupian/acg/1080p/index.php';
$img = @file_get_contents($url);
$uuid = uniqid();
if(!file_exists("images"))
{
	@mkdir("images");
}
if(!file_exists("imagestemp"))
{
	@mkdir("imagetemp");
}
@file_put_contents("./imagetemp/{$uuid}imgdata.bin",$img);
$info = @getimagesize("./imagetemp/{$uuid}imgdata.bin");
$md5 = @md5_file("./imagetemp/{$uuid}imgdata.bin");
$mime = $info["mime"];
if($mime == "image/png")
{
	$filetype = ".png";
}
elseif($mime == "image/jpeg")
{
	$filetype = ".jpeg";
}
elseif($mime == "image/gif")
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
$filename = "{$md5}{$filetype}";
echo("{$filename}");
if(file_exists("./images/{$filename}"))
{
	echo("<br/>重复！");
	@file_put_contents("./images/{$filename}",$img);
}
else
{
	@file_put_contents("./images/{$filename}",$img);
}
@unlink("./imagetemp/{$uuid}imgdata.bin");
?>
