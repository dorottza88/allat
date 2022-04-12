<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Kacsák</title>
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
<h2 class="h1">Gazdira váró kacsák az állatmenhelyünkön:</h2>
<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/hápi.jpg">
        <img src="kepek%20es%20adatok/hápi.jpg" alt="Hápi" width="600 px" height="400 px" >
    </a>
</div>

<div class="gallery">
    <a target="_blank" href="kepek%20es%20adatok/herold.jpg">
        <img src="kepek%20es%20adatok/herold.jpg" alt="Herold" width="600 px" height="400 px">
    </a>
    <div class="desc">Herold</div>
</div>
<br>
<?php
include("footer.php");
?>


</body>
</html>