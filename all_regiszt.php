<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <link rel="stylesheet" href="regisztracio.css">
    <link rel="shortcut icon" type="image/x-icon" href="mancs2.png" />
    <script id="replace_with_navbar" src="navbarjs.js"></script>

</head>
<body>
    <h1>Regisztráció</h1>
    <h3>Kérem adja meg a regisztációhoz szükséges adatokat:</h3>
<form action="regisztracios_oldal.php" method="get">

    <div class="container">

    <label for="name">Neve:</label><br>
    <input type="text"  placeholder="Enter Name"  name="name" id="name">
    <br>

        <label for="uName">Felhasznalo:</label><br>
        <input type="text"  placeholder="Enter uName"  name="uName" id="uName">
        <br>

    <label for="mail">Email cím:</label><br>
    <input type="email" placeholder="Enter Email" name="email" id="mail">
    <br>
    <label for="age">Kora:</label><br>
    <input type="text" placeholder="Enter Age" name="age" id="age">
    <br>

    <label for="male" >Nő</label>
    <input type="radio" name="gender" id="male"><br>

    <label for="gender">Férfi</label>
    <input type="radio" name="gender" id="gender">
    <br><br>
    <label for="pwd" >Jelszó</label><br>
    <input type="password" placeholder="Enter Password" name="password" id="pwd"><br><br>



    <br><button type="submit" class="registerbtn">Regisztráció</button>
        <button type="reset" class="registerbtn">Visszaállítás</button>


    </div>

</form>
</body>
</html>