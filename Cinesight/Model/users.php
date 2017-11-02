<?php

class users {

    private $firstName, $lastName, $userName, $emailAddress, $password, $favMovie, $role;

    function _construct($firstName, $lastName, $userName, $emailAddress, $password, $favMovie, $role) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->emailAddress = $emailAddress;
        $this->password = $password;
        $this->favMovie = $favMovie;
        $this->role = $role;
    }

    function GetFirstName() {
        return $this->firstName;
    }

    function SetFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function GetLastName() {
        return $this->lastName;
    }

    function SetLastName($lastName) {
        $this->lastName = $lastName;
    }

    function GetUserName() {
        return $this->userName;
    }

    function SetUserName($userName) {
        $this->userName = $userName;
    }


    function GetEmailAddress() {
        return $this->emailAddress;
    }

    function SetEmailAddress($emailAddress) {
        $this->emailAddress = $emailAddress;
    }

    function GetPassword() {
        return $this->password;
    }

    function SetPassword($password) {
        $this->password = $password;
    }

    function GetFavMovie() {
        return $this->favMovie;
    }

    function SetFavMovie($favMovie) {
        $this->favMovie = $favMovie;
    }
    
    function GetUserRole() {
        return $this->role;
    }
    
    function SetUserRole($role) {
        $this->role = $role;
    }




}

?>