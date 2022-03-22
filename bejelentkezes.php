<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="regisztracio.css">
    <link rel="shortcut icon" type="image/x-icon" href="mancs2.png" />
</head>
<body>
<h1>Bejelentkezés</h1><br>

<form>
    <div class =container>
    <label for="uName">Felhasználóneve:</label>
    <input type="text"  placeholder="Enter Username" name="uNname" id="uName">
    <br> </
    <label for="password" >Jelszó</label>
    <input type="password" placeholder="Enter Password" name="passwrord" id="password">

    <br><button type="submit" class="registerbtn">Bejelentkezes</button>
    <button type="reset" class="registerbtn">Visszaállítás</button>
    </div>

</form>


<?php


session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include ('kapcsolat.php');
    $sql=mysqli_query($conn,"SELECT * FROM users where uName='$uName'AND password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["uName"] = $row['uName'];
        $_SESSION["password"]=$row['password'];
        echo "valid Username/Password";
        header("Location: allatmenhely.php");
    }
    else
    {
        echo "Invalid Username/Password";
    }
}

?>

</body>
</html>