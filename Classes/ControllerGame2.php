<?php

require('Game.php');
require('Score.php');
require('User.php');

$firstname;
$lastname;
$var = rand(0,5);
$array=array("../src/naruto.jpg","../src/sasuke.jpg","../src/darth.jpg","../src/messi.jpg","../src/thanos.png","../src/trump.jpeg");


 if($_GET['submit']){

    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
  

 $user = new User(0,$firstname,$lastname,null);

 ?>


<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./../Css/main.css" />
    <script src="main.js"></script>
</head>
<body>


    <div style="border-top: 2px solid #008CBA;border-radius: 10px;border-bottom: 2px solid #008CBA;width: 250px;height:200px;margin:20px">

    <img src="<?php echo $array[$var] ?>" style="width: 250px;height:200px;border-radius: 10px"> <br/> <br/> 

   <select class="form-control" id="sel1" name="sellist1">  
        <option>Naruto</option>
        <option>Darth vador</option>
        <option>Trump</option>
        <option>Messi</option>
        <option>Thanos</option>
        <option>Sasuke</option>
    </select>
    <input type="submit" id="submit" name="submit"> 
    </div>
    

    
</body>
</html>












<?php

 } //end of if

?>