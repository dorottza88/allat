<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: darkgray;
            border-radius: 10px
        }

        li {
            float: left;

        }

        li a {
            display: block;
            padding: 14px 16px;
            color: black;
            text-decoration: none;
            position: center;
        }
        li a:hover {
            background-color: dimgray;
            transition: 0.5s;
            width: 60%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="rolam.php">Rólam</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="kontakt.php">Kontakt</a>
        </li>
        <li class="nav-item">
            <a class="navigation" href="all_regiszt.php" target="_blank">Regisztráció</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bejelentkezes.php" target="_blank">Bejelentkezés</a>
        </li>
    </ul>
</nav>
</body>
</html>