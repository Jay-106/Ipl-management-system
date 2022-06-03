<?php
$con = mysqli_connect("localhost","root","","ipl") or die(mysqli_error($con));

$id = $_GET['id'];



$query = "DELETE FROM `ground_details` WHERE `city`='$id'";

if(mysqli_query($con,$query)){
    echo "";
    echo "<script type='text/javascript'>alert('Ground DELETED SUCCESSFULLY!!!');</script>";
    header("refresh: 0.01; url=updateground.php");
}
else{
    echo "<script type='text/javascript'>alert('ERROR');</script>";
header("refresh: 0.01; url=updateground.php");
mysqli_error($con);
}
