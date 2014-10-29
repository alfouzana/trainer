<?php
include 'connect.php';
session_start();
// handling sign up form 
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$password = mysqli_real_escape_string($conn,$_POST["pass"]);

// add it to user database

$sql = "INSERT INTO users (email, password)
VALUES ('$email', '$password')";


if ($conn->query($sql) === TRUE) 
{
} 
else {
    echo "Error: " . $sql . "<br>";
}

$result = mysqli_query($conn,"SELECT * FROM users
WHERE email='$email'");
while($row = mysqli_fetch_array($result)) {
    $_SESSION["userid"] = $row['user_id'];
}


header("Location: /trainer/index.php?step=2");

?>