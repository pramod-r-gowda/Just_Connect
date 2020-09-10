<?php

$fname=$_POST['fname'] ;
$lname=$_POST['lname'];
$mail=$_POST['email'] ;
$pw=$_POST['pass'] ;
$dob=$_POST['dob'] ;
$phone=$_POST['phone'];
$host = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname = "just_connect"; 
$conn =mysqli_connect($host, $dbusername, $dbpassword, $dbname); 
if (mysqli_connect_error()){ die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error()); } 
else{ $sql = "INSERT into signers(first_name,last_name,email,password,dob,phonenumber) values('$fname','$lname','$mail', '$pw','$dob','$phone')";
if ($conn->query($sql)){ echo "New record is inserted sucessfully"; } 
else{ echo "Error: ". $sql ." ". $conn->error; } 
$conn->close(); }  

?>