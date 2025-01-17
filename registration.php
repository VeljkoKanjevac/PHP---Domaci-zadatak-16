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

    <div class="container">
        <form action="modeli/userRegistration.php" method="post">
    
        <div class="mb-3 col-4">
            <label for="ime" class="form-label">Ime korisnika</label>
            <input type="text" name="ime" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-4">
            <label for="prezime" class="form-label">Prezime korisnika</label>
            <input type="text" name="prezime" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-4">
            <label for="email" class="form-label">Email adresa</label>
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-4">
            <label for="lozinka" class="form-label">Unesite lozinku</label>
            <input type="password" name="lozinka" class="form-control" >
        </div>
        <div class="mb-3 col-4">
            <label for="lozinkaPonovljeno" class="form-label">Ponovite unos lozinke</label>
            <input type="password" name="lozinkaPonovljeno" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary col-4">Registruj me</button>  
    
        </form>
    </div>
    
</body>

</html>