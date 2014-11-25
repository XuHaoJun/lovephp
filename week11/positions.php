<?php
$arr = array('positions' => array(array()));
$url="http://app-swwang.rhcloud.com/world_heritage/whc_tw.php";
$json_string=file_get_contents($url);
$json_result=json_decode($json_string);
for($i=0; $i<count($json_result); $i++) {
    array_push($arr['positions'], array('latitude' => $json_result[$i]->latitude,
                                        'longitude' => $json_result[$i]->longitude,
                                        'title' => $json_result[$i]->name_tw,
                                        'descriptionTW' => $json_result[$i]->description_tw
    ));
}
echo json_encode($arr);
?>
