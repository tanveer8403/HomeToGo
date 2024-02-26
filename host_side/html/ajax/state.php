<?php
$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");

$country_id = $_POST["country_data"];


$state_qry = mysqli_query($con,"SELECT * FROM states WHERE country_id = $country_id");
// $output="";
/*$output = '<option value="">Select State</option>';
while ($state_row = mysqli_fetch_assoc($state_qry)) {
    $output .= '<option value="' . $state_row['id'] . '">' . $state_row['name'] . '</option>';
}
echo $output;
*/
?>

<option value="">Select State</option>
<?php
while($row = mysqli_fetch_array($state_qry)) {
?>
<option value="<?php echo $row[0];?>"><?php echo $row["name"];?></option>
<?php
}
?>