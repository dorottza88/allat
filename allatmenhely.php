<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Mancs Állatmenhely</title>
    <link rel="stylesheet" href="allatmenhely.css">
    <link rel="shortcut icon" type="image/x-icon" href="mancs2.png" />


    <!--ikonok-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>
<?php
include("navbar.php");

?>

    <h1 class="h1">Mancs állatmenhely</h1><br><br><br>


<dl>
<h2>Üdvözöljük oldalunkon! Ha ön is egy szerető kis állatra vágyik akivel megoszthatja mindennapjait és boldoggá teheti,
    akkor ez az oldal magának lett készítve. Reméljük sikeres lesz keresgetése, és talál egy szimpatikus kisállatot :)</h2>

<h3>Milyen állatot szeretne megtekinteni?</h3>

    <a class="btn" href="kutyak.php" >Kutyák</a>
    <br><br>
    <a class="btn" href="cicak.php">Cicák</a>
    <br><br>
    <a class="btn" href="nyuszik.php">Nyuszik</a>
    <br><br>
    <a class="btn" href="kacsak.php">Kacsák</a>




    <?php
    include("footer.php");
    ?>

</body>
</html>