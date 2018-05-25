<?php

class Game{

/* Member variables */
var $gameId;
var $type;


function __construct($gameId,$type) {
    $this->gameId = $gameId;
    $this->type = $type;
 }

 function setgameId($par){
    $this->userId =$par ;
}

function setType($par){
   $this->firstname = $par;
}
function getType(){
    return $this->type;
 }

 function getgameId(){
    return $this->gameId;
 }


}


?>