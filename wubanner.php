<?php
// Author: Jan Neurocny
// emeteo.sk
// https://github.com/bagocina/wubanner

header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$bannertype = isset($_GET['bannertype']) ? $_GET['bannertype'] : '';
$weatherstationcount = isset($_GET['weatherstationcount']) ? $_GET['weatherstationcount'] : '';

if ($bannertype == '') { exit('Parameter "bannertype" is empty.'); }
if ($weatherstationcount == '') { exit('Parameter "weatherstationcount" is empty.'); }

$bannertypes = [
	'pws250',
	'pws250_metric',
	'pws250_both',
	'wxstnsticker',
	'wxstnsticker_metric',
	'wxstnsticker_both',
	'WeatherStationCount'
];

if (!in_array($bannertype, $bannertypes)) {
	exit('Banner type is not allowed');
}

$image = file_get_contents('http://banners.wunderground.com/cgi-bin/banner/ban/wxBanner?bannertype='.$bannertype.'&weatherstationcount='.$weatherstationcount);

$file_info = new finfo(FILEINFO_MIME_TYPE);
$mime_type = $file_info->buffer($image);

header('Content-type: ' . $mime_type);

echo $image;
?>


