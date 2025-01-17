<?php

    if(!isset($_GET["id"]) || empty($_GET["id"]))
    {
        die("ID proizvoda nije prosledjen");
    }

    require_once "modeli/baza.php";

    $id = mysqli_real_escape_string($baza, $_GET["id"]);

    $rezultat = $baza -> query("SELECT * FROM proizvodi WHERE id_proizvoda = '$id' ");

    $proizvod = $rezultat -> fetch_assoc();

    $ime = $proizvod["ime"];
    $opis = $proizvod["opis"];
    $cena = $proizvod["cena"];
    $slika = $proizvod["slika"];
    $kolicina = $proizvod["kolicina"];

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <?php require_once "index.php"; ?>
    
    <div class="card align-items-center" style="width:16rem;">
            <img style="height:50%" src="images/mobile-shop-logo.png" class="card-img-top" alt="mobile shop logo">
            <div class="card-body">
                <h5 class="card-title"> <?= $proizvod["ime"] ?> </h5>
                <p class="card-text"> <?= $proizvod["opis"] ?> </p>

                <?php if($proizvod['kolicina'] == 0): ?>
                    <p>Nema na stanju</p>
                <?php else: ?>
                    <p>Ima na stanju</p>
                <?php endif; ?>

                <p> <?= $proizvod["cena"] ?>&euro; </p>
            </div>
        </div>
    
</body>
</html>

