<?php

class User {
    /* Member variables */
    var $userId;
    var $firstname;
    var $lastname;
    var $email;
    
     
    function __construct($userId,$firstname,$lastname,$email) {
       $this->userId = $userId;
       $this->firstname = $firstname;
       $this->lastname = $lastname;
       $this->email = $email;
    }
     
     /* Member functions */
    function setUserid(){
        $this->userId ;
    }
    
    function setfirstname($par){
       $this->firstname = $par;
    }
    
    function setlastname($par){
       $this->lastname =  $par ;
    }

    function setemail(){
        $this->email =  $par ;
    }

    function getUserid(){
        $this->userId;
    }

    function getfirstname(){
        return $this->firstname ;
     }
    function getlastname(){
       return $this->lastname ;
     }
     
    function getemail(){
        $this->email ;
    }
 }



?>