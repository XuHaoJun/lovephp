<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
	height: 100%;
	padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="map.js"></script>
  </head>
  <body>
    <div id="map-canvas"></div>
<?php
$url="http://app-swwang.rhcloud.com/world_heritage/whc_tw.php";
$json_string=file_get_contents($url);
$json_result=json_decode($json_string);
for($i=0;$i<count($json_result); $i++)
{
	echo $json_result[$i]->name_tw."<br/>";
}
?>
  </body>
</html>
