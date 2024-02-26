<?php
$con = mysqli_connect("localhost","root","","hometogo") or die("not connect");
session_start();
	//$unm=$_SESSION["username"];
	$user=$_SESSION['uid'];
	$room_id=$_SESSION['R_ID'];
	$sql=mysqli_query($con,"SELECT prop_id FROM `room_details` WHERE room_id='$room_id'");
	while($row=mysqli_fetch_array($sql))
	{
		$p_id=$row[0];
	}
	$total=$_SESSION['r_total'];
	$check_out=$_SESSION['cout'];
	$check_in=$_SESSION['cin'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

    <form method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">Booking details</h3>

                <div class="inputBox">
                    <span>Your Name</span>
                    <input type="text" value="john deo" readonly>
                </div>
                <div class="inputBox">
                    <span>Property Address</span>
                    <input type="text" value="abc12 rowhouse , abc Society,ahmedabad,Gujarat," readonly>
                </div>
                <div class="inputBox">
                    <span>Phone No</span>
                    <input type="tel" id="phone" value="1234567890" name="phone" placeholder="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" readonly>
                </div>
                <div class="inputBox">
                    <span>Total Amount</span>
                    <input type="text" value="<?php echo $total;?>" readonly>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Total Rooms</span>
                        <input type="text" value="5" readonly>
                    </div>
                    <div class="inputBox">
                        <span>Total Guest</span>
                        <input type="text" value="15" readonly>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo" readonly>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" readonly >
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" readonly>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" readonly>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" readonly>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" name="btn" value="Pay Now" class="submit-btn">

    </form>

</div>    
    
</body>
</html>
<?php
if(isset($_POST['btn']))
{
	$ins="INSERT INTO `booking_details`(`user_id`, `prop_id`, `room_id`, `date_from`, `date_to`, `total_amount`)
	VALUES ('$user','$p_id','$room_id','$check_in','$check_out','$total')";
	
	
	if(mysqli_query($con,$ins))
	{
		echo "<script>alert('You have sucessfuly booked')</script>";
		?> <script>
		var url = "/PROJECT/Home_Page/exp2.php";
		window.location = url;
		<?php  
		$upd=mysqli_query($con,"UPDATE `room_details` SET `booked` = '1' WHERE `room_details`.`room_id` = '$room_id'");
		?>
		</script><?php
	}
	else
	{
		echo "nottt";
	}
}

?>