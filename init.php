<?php

require 'src/Entity/User.php';
require 'src/Services/DataBaseService.php';
require 'src/Services/JsonClass.php';
require 'src/Entity/OutputClass.php';

$method=$_POST["method"];
$userType=$_POST["userType"];
$dataService = new DataBaseService();
$Json = new JsonClass();
$user = null;


switch ($userType) {
    case "Professor": {
        switch ($method) {
            case "RegisterStudent": {

                $outputClass = new OutputClass(1,"User added");
                $user = new Professor();
                $user->setFirstName($_POST["firstName"]);
                $user->setLastName($_POST["lastName"]);
                $user->setPassword($_POST["password"]);
                $user->setEmail($_POST["email"]);
                $user->setPhone($_POST["phone"]);
                $user->setCode($_POST["code"]);

                $dataService->createProfessor($user->getFirstName(), $user->getLastName(), $user->getPassword(), $user->getEmail(), $user->getPhone(), $user->getCode());

                $result = $dataService->getProfessor($user->getEmail());
                $response = array();

                $row = mysqli_fetch_array($result);
                //array_push($response, array("ID" => $row[0], "first_name" => $row[1], "last_name" => $row[2], "password" => $row[3], "email" => $row[4], "phone" => $row[5], "code" => $row[6]));
                array_push($response, array("ID" => $row[0]));
                $user->setID($response[0]);
                echo $Json->encodeJson("User added");
                break;
            }

            case "Login": {

                $outputClass = new OutputClass(1, "User logged");
                $user = new Professor();

                $mail = $_POST["email"];
                $password = $_POST["password"];

                $result = $dataService->getProfessor($user->getEmail());

                if($result["password"]==$password);//TODO Trebuie inlocuit cu kktul lu Avram de match
                 {

                $user->setParameters($result[0], $result[1], $result[2], $result[3], $result[4], $result[5], $result[6]);
                return $user->getFirstName();

                break;
                }
            }
            default: {
                echo $Json->encodeJson("Operation not found!");
                break;

            }

        }
        break;
    }
    case "Student":{
        break;
    }
    default:{
        echo $Json->encodeJson($dataService->getStudent(""));
        break;
    }
}