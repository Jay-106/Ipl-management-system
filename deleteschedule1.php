<?php
$con = mysqli_connect("localhost","root","","ipl") or die(mysqli_error($con));

$id = $_GET['id'];



$query = "DELETE FROM `schedules` WHERE `schedules_id`='$id'";

if(mysqli_query($con,$query)){
    echo "";
    echo "<script type='text/javascript'>alert('SCHEDULE DELETED SUCCESSFULLY!!!');</script>";
    header("refresh: 0.01; url=deleteschedule.php");
}
else{
    echo "<script type='text/javascript'>alert('ERROR');</script>";
#header("refresh: 0.01; url=deleteschedule.php");
mysqli_error($con);
}
