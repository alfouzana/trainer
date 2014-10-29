<?php
include 'connect.php';
session_start();
$bodytype = mysqli_real_escape_string($conn,$_POST["bodytype"]);
$userid = $_SESSION["userid"];
$sql = "INSERT INTO body (userid, bodytype)
VALUES ('$userid', '$bodytype')";


if ($conn->query($sql) === TRUE) 
{
} 
else {
    echo "Error: " . $sql . "<br>";
}

header("Location: /trainer/index.php?step=3");
?>