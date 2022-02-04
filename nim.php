<?php
header("Content-Type: video/mp4");
//header('Content-Disposition: inline; filename="alphadlbot"');

$url = "http://dl1.alphadl.xyz/Movies/1920/The.Cabinet.Of.DrCaligari/The.Cabinet.Of.DrCaligari.1920.1080p.BluRay.x264.AAC5.1-YTS.AlphaDL.mp4";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
$audio = curl_exec($ch);
return $audio;
