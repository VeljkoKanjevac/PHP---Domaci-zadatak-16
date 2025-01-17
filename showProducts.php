<?php

    require_once "modeli/baza.php";

    $rezultat = $baza -> query(" SELECT * FROM proizvodi ");
    $brojProizvoda = $rezultat -> num_rows;
    $proizvodi = $rezultat -> fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <?php require_once "index.php"; ?>

    <?php if($brojProizvoda == 0): ?>

        <p>Ne postoje proizvodi u bazi podataka.</p>

    <?php else:  ?>

        <div class="container col-10 mt-2 d-flex justify-content-evenly flex-wrap">
            <?php foreach($proizvodi as $proizvod): ?>

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

                        <a href="productPage.php?id=<?= $proizvod['id_proizvoda'] ?>" class="btn btn-primary align-self-end">Pogledaj proizvod</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif;?>
   
</body>

</html>

