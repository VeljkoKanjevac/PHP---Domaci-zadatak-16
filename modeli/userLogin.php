<?php

    if(!isset($_POST["email"]) || empty($_POST["email"]))
    {
        die("Email adresa nije prosledjena");
    }
    if(!isset($_POST["lozinka"]) || empty($_POST["lozinka"]))
    {
        die("Lozinka nije prosledjena");
    }

    require_once "baza.php";

    $email = mysqli_real_escape_string($baza, $_POST["email"]);
    $lozinka = mysqli_real_escape_string($baza, $_POST["lozinka"]);

    $rezultat = $baza -> query(" SELECT * FROM korisnici WHERE email = '$email' ");

    if($rezultat -> num_rows == 1)
    {
        $korisnik = $rezultat -> fetch_assoc();
        $lozinkaIzBaze = $korisnik["sifra"];
        
        $ispravnaLozinka = password_verify($lozinka, $lozinkaIzBaze);
        
        if($ispravnaLozinka)
        {
           echo "Dobrodosli nazad";
        }
        else
        {
            echo "Uneli ste pogresnu lozinku";
        }
    }
    else
    {
        echo "Korisnik sa unetim emailom ne postoji";
    }