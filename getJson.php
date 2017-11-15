<?php

require "init.php";

$u_lastname=$_POST["lastname"];

echo getStudentTable();



function getStudentTable(){
$sql = "SELECT * FROM student_accounts;";
$resault = mysqli_query($connection,$sql);

$response =  array();

while($row = mysqli_fetch_array($resault))
{
  array_push ($response,array("first_name"=>$row[1],"last_name"=>row[2],"password"=>row[3],"email"=>row[4],"phone"=>row[5],"code"=>row[6]));
}
mysqli_close($connection);

return json_encode(array("server_response"=>$response));
}
