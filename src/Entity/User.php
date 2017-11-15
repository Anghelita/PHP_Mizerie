<?php
class Student
{
    private $ID;
    private $FirstName;
    private $LastName;
    private $Password;
    private $Email;
    private $Phone;
    private $Code;

    public function getID()
    {
        return $this->ID;
    }

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function getPassword()
    {
        return $this->Password;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getPhone()
    {
        return $this->Phone;
    }

    public function getCode()
    {
        return $this->Code;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
    }

    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
    }

    public function setCode($Code)
    {
        $this->Code = $Code;
    }

}

class Professor
{
    private $ID;
    private $FirstName;
    private $LastName;
    private $Password;
    private $Email;
    private $Phone;
    private $Code;

    public function getID()
    {
        return $this->ID;
    }

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function getPassword()
    {
        return $this->Password;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getPhone()
    {
        return $this->Phone;
    }

    public function getCode()
    {
        return $this->Code;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
    }

    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
    }

    public function setCode($Code)
    {
        $this->Code = $Code;
    }

    public function setParameters($ID,$FirstName,$LastName,$Password,$Email,$Phone,$Code){
        $this->ID = $ID;
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Password = $Password;
        $this->Email = $Email;
        $this->Phone = $Phone;
        $this->Code = $Code;
    }


}
