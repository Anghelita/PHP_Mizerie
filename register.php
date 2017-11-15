<?php

require "init.php";

$u_lastname=$_POST["lastname"];
$u_firstname=$_POST["firstname"];
$u_password=$_POST["password"];
$u_email=$_POST["email"];
$u_phone=$_POST["phone"];
$u_code=$_POST["code"];

$sql_query="insert into student_accounts values('','$u_lastname','$u_firstname','$u_password','$u_email','$u_phone','$u_code');";

if(mysqli_query($connection,$sql_query))
{
  echo "Data inserted";
}
else {
  echo "Error";
}
