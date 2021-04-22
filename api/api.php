<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$data = array(
    array("category"=>"12.4.2021",
    "value"=>1),
    array("category"=>"13.4.2021",
    "value"=>2),
    array("category"=>"14.4.2021",
    "value"=>3),
    array("category"=>"15.4.2021",
    "value"=>5),
    array("category"=>"16.4.2021",
    "value"=>1),
    array("category"=>"17.4.2021",
    "value"=>4),
    array("category"=>"18.4.2021",
    "value"=>3)
);
echo(json_encode($data));

?>