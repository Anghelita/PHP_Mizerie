<?php

class DataBaseService
{
    private $database ="POS_db";
    private $mysql_user="rootmaster69";
    private $server_name="188.27.106.116:3307";
    private $password="swagmaster";
    private $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect($this->server_name,$this->mysql_user,$this->password,$this->database);
    }

    public function createStudent($FirstName,$LastName,$Password,$Email,$Phone,$Code){

        $sql_query="INSERT into student_accounts values('','$LastName','$FirstName','$Password','$Email','$Phone','$Code');";
        return mysqli_query($this->connection,$sql_query);
    }

    public function getStudent($Email){

        $sqlite_query = "Select * from student_accounts where email='$Email';";
        $result = mysqli_query($this->connection,$sqlite_query);
        $response =  array();

        while($row = mysqli_fetch_array($result))
        {
            array_push ($response,array("first_name"=>$row[1],"last_name"=>$row[2],"password"=>$row[3],"email"=>$row[4],"phone"=>$row[5],"code"=>$row[6]));
        }
        return $response;
    }

    public function updateStudent($ID,$FirstName,$LastName,$Password,$Email,$Phone,$Code){
        $sql_query="UPDATE student_accounts Set first_name='$FirstName', last_name='$LastName', password='$Password',email='$Email',phone='$Phone',code='$Code'  Where id = $ID;";
        return mysqli_query($this->connection,$sql_query);
    }

    public function deleteStudent($Email){
        $sql_query="DELETE FROM student_accounts WHERE email='$Email';";
        return mysqli_query($this->connection,$sql_query);
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function createProfessor($FirstName,$LastName,$Password,$Email,$Phone,$Code){

        $sql_query="INSERT into professor_accounts values('','$LastName','$FirstName','$Password','$Email','$Phone','$Code');";
        return mysqli_query($this->connection,$sql_query);
    }

    public function getProfessor($Email){

        $sqlite_query = "Select * from professor_accounts where email='$Email';";
        $result = mysqli_query($this->connection,$sqlite_query);
        $response =  array();

        while($row = mysqli_fetch_array($result))
        {
            array_push ($response,array("ID"=>$row[0],"first_name"=>$row[1],"last_name"=>$row[2],"password"=>$row[3],"email"=>$row[4],"phone"=>$row[5],"code"=>$row[6]));
        }
        return $response;
    }

    public function updateProfessor($ID,$FirstName,$LastName,$Password,$Email,$Phone,$Code){
        $sql_query="UPDATE professor_accounts Set first_name='$FirstName', last_name='$LastName', password='$Password',email='$Email',phone='$Phone',code='$Code'  Where id = $ID;";
        return mysqli_query($this->connection,$sql_query);
    }

    public function deleteProfessor($Email){
        $sql_query="DELETE FROM professor_accounts WHERE email='$Email';";
        return mysqli_query($this->connection,$sql_query);
    }

    //TODO: Metode prntru Restu tabelelor
}