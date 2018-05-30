<?php
class Score{
/* Member variables */
var $scoreId;
var $points;
var $gameId;
var $userId;
function __construct($scoreId,$points,$gameId,$userId) {
    $this->scoreId = $scoreId;
    $this->points = $points;
	$this->gameId = $gameId;
	$this->userId = $userId;
 }
 function setScoreId($par){
    $this->scoreId =$par ;
}
function setpoints($par) {
   $this->points = $par;
}
function getScoreId(){
    return $this->ScoreId;
 }
 function getpoints(){
    return $this->points;
 }
 function getgameId(){
    return $this->gameId;
 }
 function getuserId(){
    return $this->userId;
 }
}
?>