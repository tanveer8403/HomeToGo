<?php

$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");

$state_id =  $_POST['state_data'];

$city = "SELECT * FROM cities WHERE state_id = $state_id";
$city_qry = mysqli_query($con, $city);


$output = '<option value="">Select State</option>';
while ($city_row = mysqli_fetch_assoc($city_qry)) {
    $output .= '<option value="' . $city_row['id'] . '">' . $city_row['name'] . '</option>';
}
echo $output;
?>