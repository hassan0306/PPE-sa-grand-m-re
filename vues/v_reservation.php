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
        <table border>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Mail</th>
                        <th>Nombre De Voyageurs</th>
                        <th>Numéro De Vol</th>
                        
                    </tr>
        <?php
            foreach($reservations as $uneResa)
            {
                $nom=$uneResa['nom'];
                $prenom=$uneResa['prenom'];
                $adresse=$uneResa['adresse'];
                $mail=$uneResa['mail'];
                $nombreVoyageur=$uneResa['nombreVoyageur'];
                $numVol=$uneResa['numVol'];
                echo"
                    <tr>
                        <td>$nom</td>
                        <td>$prenom</td>
                        <td>$adresse</td>
                        <td>$mail</td>
                        <td>$nombreVoyageur</td> 
                        <td>$numVol</td>    
                        <td>pdf</td>
                    </tr>
                ";
            }
        ?>
        </table>
    </body>
</html>
