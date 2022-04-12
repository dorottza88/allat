<?php


session_start();
if (isset($_POST)) {
    echo "Success";
    extract($_POST);
    include('kapcsolat.php');
    $uName = $_POST['uName'];
    $password = $_POST['password'];
    $sql = mysqli_query($conn, "SELECT * FROM users where uName='$uName'AND password='$password'");
    $row = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION["uName"] = $row['uName'];
        $_SESSION["password"] = $row['password'];
        echo "valid Username/Password";
        header("Location: bejelentkezett_fooldal.php");
    } else {
        echo "Invalid Username/Password";
    }
}

