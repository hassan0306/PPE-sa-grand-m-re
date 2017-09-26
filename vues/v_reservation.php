<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            foreach($reservations as $uneResa)
            {
                $nomClient=$uneResa['nomClient'];
                $prenomClient=$uneResa['prenomClient'];
                $numeroVol=$uneResa['numero'];
                $qdPlace=$uneResa['qdPlace'];
                echo"<table border>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Num Vol</th>
                        <th>Nombre de places</th>
                    </tr>
                    <tr>
                        <td>$nomClient</td>
                        <td>$prenomClient</td>
                        <td>$numeroVol</td>
                        <td>$qdPlace</td>
                        <td>pdf</td>
                    </tr>
                </table>";
            }
        ?>
    </body>
</html>
