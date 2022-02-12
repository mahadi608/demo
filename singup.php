<?php
require 'config.php';

// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn,$_REQUEST["ft_name"]);
$last_name = mysqli_real_escape_string($conn,$_REQUEST["lt_name"]);
$email = mysqli_real_escape_string($conn,$_REQUEST["email"]);
$password = mysqli_real_escape_string($conn,$_REQUEST["password"]);

// Attempt insert query execution
$sql="INSERT INTO login(firstname,lastname,email,password)
VALUES('$first_name','$last_name','$email','$password')";

if (mysqli_query($conn,$sql)) {
  header("Location:welcome.html");
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($conn);

 ?>
