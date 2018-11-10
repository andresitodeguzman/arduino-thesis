<?php

if(!$_GET['device_id']) die("Device ID is Required");

$device_id = $_GET['device_id'];
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];
$air_quality = $_GET['air_quality'];
$flood_level = $_GET['flood_level'];

$array = array(
    "device_id"=>$device_id,
    "temperature"=>$temperature,
    "humidity"=>$humidity,
    "air_quality"=>$air_quality,
    "flood_level"=>$flood_level
);

print_r($array);
?>