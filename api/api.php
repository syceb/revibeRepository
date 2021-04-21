<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$data = array(
    array("category"=>"21.4.2021",
    "value"=>1),
    array("category"=>"22.4.2021",
    "value"=>2),
    array("category"=>"23.4.2021",
    "value"=>3),
    array("category"=>"24.4.2021",
    "value"=>5),
    array("category"=>"25.4.2021",
    "value"=>1),
    array("category"=>"26.4.2021",
    "value"=>4),
    array("category"=>"27.4.2021",
    "value"=>3)
);
echo(json_encode($data));

?>