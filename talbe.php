<?php
include "section/db.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
        }

        table {
            width: 100%;
        }

        thead {
            background: red;
            color: #fff;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>

<body>


    <table>
        <thead>
            <tr>
                <th>uID</th>
                <th>mail</th>
                <th>Cahs</th>
                <th>-</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $asim = "asim";
            $sorgu = $db->prepare("SELECT * FROM memberinfo WHERE uID = ?");
            $sorgu->execute([$asim]);
            $row = $sorgu->fetchAll();

            foreach ($row as $write) {
            ?>
                <tr>
                    <th> <?php echo $write['uID'] ?></th>
                    <td> <?php echo $write['email'] ?></td>
                    <td><?php echo $write['uCash'] ?></td>
                    <td>-</td>
                </tr>
            <?php  } ?>
        </tbody>
    </table>

    <hr>

    <table>
        <thead>
            <tr>
                <th>kullanici_adi</th>
                <th>mail_adres</th>
                <th>telefon</th>
                <th>uCash</th>
                <th>siparis_no</th>
                <th>siparis_durumu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sorgu = $db_siparis->prepare("SELECT * FROM siparisler ");
            $sorgu->execute(array());
            $row = $sorgu->fetchAll();

            foreach ($row as $write) {
            ?>
                <tr>
                    <th><?php echo $write['kullanici_adi'] ?></th>
                    <td><?php echo $write['mail_adres'] ?></td>
                    <td><?php echo $write['telefon'] ?></td>
                    <td><?php echo $write['uCash'] ?></td>
                    <td><?php echo $write['siparis_no'] ?></td>
                    <td><?php echo $write['siparis_durumu'] ?></td>
                </tr>
            <?php  } ?>
        </tbody>
    </table>
</body>

</html>