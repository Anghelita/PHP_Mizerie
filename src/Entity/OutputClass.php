<?php
/**
 * Created by PhpStorm.
 * User: Traian
 * Date: 14-Nov-17
 * Time: 7:36 PM
 */

class OutputClass
{

    private $outputArray;

    public function __construct($ID,$Message)
    {
        $this->outputArray = array("ID"=>$ID, "Message"=>$Message);
    }

    public function returnArray()
    {
        return $this->outputArray;
    }

    public function getID(){
        return $this->outputArray["ID"];
    }

    public function getMessage(){
        return $this->outputArray["Message"];
    }

    public function setID($ID){
        $this->outputArray["ID"]=$ID;
    }
    public function setMessage($Message){
        $this->outputArray["Message"]=$Message;
    }



}