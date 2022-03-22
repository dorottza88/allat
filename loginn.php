<?php
if(isset($_POST["uName"])){

    session_start();
    $_SESSION["uName"]=$_POST["uName"];

}
if(isset($_POST["email"])){
    $_SESSION["email"]=$_POST["email"];
}

header('Location: allatmenhely.php');
