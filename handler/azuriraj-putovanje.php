<?php

        require_once '../model/Putovanje.php';

        $putovanje_id = $_POST['putovanje_id'] ?? 10;
        
        $destinacija = $_POST['destinacija'] ?? "";
 
        $cena = $_POST['cena'] ?? 0;
        $datum = $_POST['datum'] ?? '2023-05-11';
        $trajanje_putovanja = $_POST['trajanje_putovanja'] ?? 10;

        if ($putovanje_id && $destinacija  && $cena && $datum && $cena) {
            $p = new Putovanje($putovanje_id ,$destinacija, $datum, $trajanje_putovanja, $cena, null);
            $status = Putovanje::azurirajPutovanje($p);
            //echo $status ;
            echo $status ? 'Success' : 'Failed';
        }
?>
