<?php
$url="http://data.taipei.gov.tw/opendata/apply/query/MzVERDUyOTItNjI1NC00NjcyLUE3OEItNDY3ODhDMURFM0Yy?$format=json";
$json_string=file_get_contents($url);
//echo $json_string;
$json_result=json_decode($json_string);
for($i=0;$i<count($json_result); $i++)
{
echo "<form action='flickr.php' method='POST'>";
echo "<input type='submit' value='".$json_result[$i]->stitle."'/>";
//echo "<br/>";
echo "<input type='hidden' value='".$json_result[$i]->stitle."' name='query' />";
echo "</form>";
}
?>
