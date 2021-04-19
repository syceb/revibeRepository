<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$data = array(
    array("year"=>2010,
    "value"=>1),
    array("year"=>2011,
    "value"=>2),
    array("year"=>2012,
    "value"=>3),
    array("year"=>2013,
    "value"=>5),
    array("year"=>2014,
    "value"=>1),
    array("year"=>2015,
    "value"=>4),
    array("year"=>2016,
    "value"=>3)
);
echo(json_encode($data));

?>