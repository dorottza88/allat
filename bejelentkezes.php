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

<form action="bejelentkezes2.php" method="post">
    <div class =container>
    <label for="uName">Felhasználóneve:</label>
    <input type="text"  placeholder="Enter Username" name="uName" id="uName">
    <br> </
    <label for="password" >Jelszó</label>
    <input type="password" placeholder="Enter Password" name="password" id="password">

    <br><button type="submit" class="registerbtn">Bejelentkezes</button>
    <button type="reset" class="registerbtn">Visszaállítás</button>
    </div>

</form>




</body>
</html>