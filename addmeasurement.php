<?php

include 'connect.php';
session_start();

// getting input from users
$bust = mysqli_real_escape_string($conn,$_POST['bust']);
$chest = mysqli_real_escape_string($conn,$_POST['chest']);
$waist = mysqli_real_escape_string($conn,$_POST['waist']);
$hips = mysqli_real_escape_string($conn,$_POST['hips']);
$thigh = mysqli_real_escape_string($conn,$_POST['thigh']);
$calves = mysqli_real_escape_string($conn,$_POST['calves']);
$upperarm = mysqli_real_escape_string($conn,$_POST['upperarm']);
$forearm = mysqli_real_escape_string($conn,$_POST['forearm']);
$neck = mysqli_real_escape_string($conn,$_POST['neck']);

// assign user id
$userid = $_SESSION['userid'];

$sql = "INSERT INTO measurement (userid, bust, chest, waist, hips, thigh, calves, upperarm, forearm, neck)
VALUES ('$userid', '$bust','$chest','$waist','$hips','$thigh','$calves','$upperarm','$forearm','$neck')";


if ($conn->query($sql) === TRUE) 
{
} 
else {
    echo "Error: " . $sql . "<br>";
}

header("Location: /trainer/index.php?step=3");

?>