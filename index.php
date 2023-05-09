<?php

require_once 'model/Putovanje.php';

$putovanja = Putovanje::getPutovanja();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Putovanja</title>
</head>
<body>
        <h1>Sva putovanja</h1>
        <?php if (count($putovanja) > 0): ?>
            <table>
            <thead>
                <tr>
                <th>Putovanje ID</th>
                <th>Destinacija</th>
                <th>Datum</th>
                <th>Trajanje putovanja</th>
                <th>Cena</th>
                <th>Korisnik ID</th>
                <th>Ime i prezime korisnika</th>
                <th>Email korisnika</th>
                <th>Opcije</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($putovanja as $putovanje): ?>
                <tr>
                    <td><?php echo $putovanje["putovanje_id"]; ?></td>
                    <td><?php echo $putovanje["destinacija"]; ?></td>
                    <td><?php echo $putovanje["datum"]; ?></td>
                    <td><?php echo $putovanje["trajanje_putovanja"]; ?></td>
                    <td><?php echo $putovanje["cena"]; ?></td>
                    <td><?php echo $putovanje["korisnik_id"]; ?></td>
                    <td><?php echo $putovanje["ime"] . " " . $putovanje["prezime"]; ?></td>
                    <td><?php echo $putovanje["email"]; ?></td>
                    <td>
                    <button class="btn-edit" data-id="<?php echo $putovanje["putovanje_id"]; ?>">Izmeni</button>
                    <button class="btn-delete" data-id="<?php echo $putovanje["putovanje_id"]; ?>" onclick="obrisiPutovanje(<?php echo $putovanje['putovanje_id']; ?>)">Obriši</button>

                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        <?php else: ?>
            <p>Nema putovanja.</p>
        <?php endif; ?>









        <script src="js/main.js"></script>
</body>
</html>

</body>
</html>