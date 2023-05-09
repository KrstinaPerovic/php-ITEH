<?php
 
    require_once '../model/Putovanje.php';

    $destinacija = $_POST['destinacija'] ?? "";
    $korisnik_id = $_POST['korisnik_id'] ?? 2;
    $cena = $_POST['cena'] ?? 0;
    $datum = $_POST['datum'] ?? '2023-05-11';
    $trajanje_putovanja = $_POST['trajanje_putovanja'] ?? 10;


    if ($destinacija && $korisnik_id && $cena  && $datum && $cena)  {
        

        $p = new Putovanje(null,$destinacija, $datum, $trajanje_putovanja,$cena , $korisnik_id  );
        $status = Putovanje::dodajPutovanje($p);

        echo $status ? 'Success' : 'Failed';
    }
?>