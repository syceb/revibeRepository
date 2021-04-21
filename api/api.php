<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$data = array(
    array("category"=>"Maanantai 21.4.2021",
    "value"=>1),
    array("category"=>"Tiistai 22.4.2021",
    "value"=>2),
    array("category"=>"Keskiviikko 23.4.2021",
    "value"=>3),
    array("category"=>"Torstai 24.4.2021",
    "value"=>5),
    array("category"=>"Perjantai 25.4.2021",
    "value"=>1),
    array("category"=>"Lauantai 26.4.2021",
    "value"=>4),
    array("category"=>"Sunnuntai 27.4.2021",
    "value"=>3)
);
echo(json_encode($data));

?>