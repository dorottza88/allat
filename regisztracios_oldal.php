<?php



$connection=mysqli_connect("localhost","root","","allatmenhely")or die("ERROR:Couldn't connect".mysqli_connect_error());
$name="";
$age=0;
$email="";
$uName="";
$gender="";
$password="";
if(isset($_GET['name'])) // itt a nevekre kell hivatkozni
{
    $name=mysqli_real_escape_string($connection,$_GET['name']);
}

if(isset($_GET['email'])) {
    $email = $_GET['email'];
}
if(isset($_GET['age']))
{
    $age=$_GET['age'];
}
if(isset($_GET['uName']))
{
    $uName=$_GET['uName'];
}
if(isset($_GET['gender']))
{
    $gender=$_GET['gender'];
}
if(isset($_GET['password']))
{
    $password=$_GET['password'];
}
$sql="INSERT INTO users (name,email,age,uName,gender,password) VALUES ('$name','$email','$age','$uName','$gender','$password')";

if(mysqli_query($connection,$sql)){
    echo"hozzaadtuk a userst";
}
else{
    echo"ERROR".mysqli_error($connection);
}

mysqli_close($connection);




/*

//kiiratas egy fajlba az adatokat
function saveData(){
    $data="\n\r";
    if(isset($_GET['name'])) // itt a nevekre kell hivatkozni
    {
        $data=$data.$_GET['name'];
    }

    if(isset($_GET['email']))
    {
        $data=$data.','.$_GET['email'];
    }
    if(isset($_GET['age']))
    {
        $data=$data.','.$_GET['age'];
    }
    if(isset($_GET['uName']))
    {
        $data=$data.$_GET['uName'];
    }
    if(isset($_GET['gender']))
    {
        $data=$data.$_GET['gender'];
    }
    if(isset($_GET['password']))
    {
        $data=$data.$_GET['password'];
    }
    $handle=fopen('data.csv', 'a');
    if($handle){
        fwrite($handle, $data)or die("ERROR");
    }
}



    if(isset($_POST["uName"])){

        session_start();
        $_SESSION["uName"]=$_POST["uName"];

    }
    if(isset($_POST["eMail"])){
        $_SESSION["eMail"]=$_POST["eMail"];
    }
    */

header("Location: allatmenhely.php");
