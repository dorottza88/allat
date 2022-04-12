<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kutyák</title>
    <link rel="stylesheet" href="allatmenhely.css">
    <link rel="shortcut icon" type="image/x-icon" href="mancs2.png" />
    <script id="replace_with_navbar" src="navbarjs.js"></script>
    <script id="replace_with_footer" src="footerjs.js"></script>
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
include("navbar.php");

?>
<h2 class="h1">Gazdira váró kutyusok az állatmenhelyünkön:</h2>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/bence.jpg">
        <img src="kepek%20es%20adatok/bence.jpg" alt="Bence" width="600 px" height="400 px">
    </a>
    <div class="desc">Bence</div>
</div>
<form action="kulonoldalak.php" method="get">
<div class="gallery">
    <input type="submit">
    <a target="_blank" href="kepek%20es%20adatok/bolyhos.jpg">
        <img src="kepek%20es%20adatok/bolyhos.jpg" alt="Bolyhos" width="600" height="400">
    </a>
    <div class="desc">Bolyhos</div>
</input>
    <input value="2" name="petid" hidden>
</div></form>

<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/Buksi.jpg">
        <img src="kepek%20es%20adatok/Buksi.jpg" alt="Buksi" width="600" height="400">
    </a>
    <div class="desc">Buksi</div>
</div>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/cuki.jpg">
        <img src="kepek%20es%20adatok/cuki.jpg" alt="Cuki" width="600" height="400">
    </a>
    <div class="desc">Cuki</div>
</div>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/felix.jpg">
        <img src="kepek%20es%20adatok/felix.jpg" alt="Felix" width="600" height="400">
    </a>
    <div class="desc">Felix</div>
</div>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/folto.jpg">
        <img src="kepek%20es%20adatok/foltos.jpg" alt="Foltos" width="600" height="400">
    </a>
    <div class="desc">Foltos</div>
</div>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/lili.jpg">
        <img src="kepek%20es%20adatok/lili.jpg" alt="Lili" width="600" height="400">
    </a>
    <div class="desc">Lili</div>
</div>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/lea.jpg">
        <img src="kepek%20es%20adatok/lea.jpg" alt="Lea" width="600" height="400">
    </a>
    <div class="desc">Lea</div>
</div>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/mancs.jpeg">
        <img src="kepek%20es%20adatok/mancs.jpeg" alt="Mancs" width="600" height="400">
    </a>
    <div class="desc">Mancs</div>
</div>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/max.jpg">
        <img src="kepek%20es%20adatok/max.jpg" alt="Max" width="600" height="400">
    </a>
    <div class="desc">Max</div>
</div>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/müzli.jpg">
        <img src="kepek%20es%20adatok/müzli.jpg" alt="Müzli" width="600" height="400">
    </a>
    <div class="desc">Müzli</div>
</div>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/picur.jpg">
        <img src="kepek%20es%20adatok/picur.jpg" alt="picur" width="600" height="400">
    </a>
    <div class="desc">Picur</div>
</div>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/szimat.jpg">
        <img src="kepek%20es%20adatok/szimat.jpg" alt="Szimat" width="600" height="400">
    </a>
    <div class="desc">Szimat</div>
</div>
<br><br> <br><br>
<?php
include("footer.php");
?>
</body>
</html>