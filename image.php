<?php
$dir = './images/';
$list = @scandir($dir,0);
$rand = @rand(2,@count($list)-'1');
$file = $dir.$list[$rand];
@header("Location:{$file}");
/**
//方法2，直接输出
$info = @getimagesize($file);
$mime = $info["mime"];
if($mime == "image/png")
{
	header("Content-Type:image/png");
}
elseif($mime == "image/jpeg")
{
	header("Content-Type:image/jpeg");
}
elseif($mime == "image/gif")
{
	header("Content-Type:image/gif");
}
elseif($mime == "image/vnd.wap.wbmp")
{
	header("Content-Type:image/vnd.wap.wbmp");
}
elseif($mime == "image/x-xbitmap")
{
	header("Content-Type:image/x-xbitmap");
}
elseif($mime == "image/webp")
{
	header("Content-Type:image/webp");
}
elseif($mime == "image/bmp")
{
	header("Content-Type:image/bmp");
}
else
{
	header("Content-Type:image/png");
}
echo @file_get_contents($file);
*/
?>