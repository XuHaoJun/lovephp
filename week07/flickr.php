<?php
$keywords=str_replace(" ", "+", $_POST['query']);
if (!$keywords) {
	return;
}
$flickr_url="https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=8f825ddc8590ee8432494871f14d2ba8&text=".$keywords."&format=json&nojsoncallback=1"
.$keywords."&format=json&nojsoncallback=1";
$json_string=file_get_contents($flickr_url);
$json_result=json_decode($json_string);

/*
echo $json_result->stat;
echo "<br/>";
echo $json_result->photos->total."<br/>";
echo count($json_result->photos->photo)."<br/>";
*/

echo "<table>";
for($i=0;$i<count($json_result->photos->photo);$i++)
{
	$image_id=$json_result->photos->photo[$i]->id;
	$image_farm=$json_result->photos->photo[$i]->farm;
	$image_server=$json_result->photos->photo[$i]->server;
	$image_secret=$json_result->photos->photo[$i]->secret;
	$image_url="https://farm".$image_farm.".staticflickr.com/".
		$image_server."/".$image_id."_".$image_secret."_s.jpg";
	if($i%10==0)
		echo "<tr>";
	echo "<td><img src= '".$image_url."'/></td>";
	if($i%10==9)
		echo "</tr>";
	//https://farm{farm-id}.staticflickr.com/{server-id}/{id}_{secret}_[mstzb]
}
echo"</table>";
?>
