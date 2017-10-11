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
                $nomClient=$uneResa['nomClient'];
                $prenomClient=$uneResa['prenomClient'];
                $numeroVol=$uneResa['numero'];
                $mail=$uneResa['mail'];
                $adresse=$uneResa['adresse'];
                $qdPlace=$uneResa['qdPlace'];
                echo"
                    <tr>
                        <td>$nomClient</td>
                        <td>$prenomClient</td>
                        <td>$numeroVol</td>
                        <td>$mail</td>
                        <td>$adresse</td>
                        <td>$qdPlace</td>
                        <td><a href='index.php?action=pdfReservation'><img src='image/pdf.png' /></a></td>
                    </tr>
                    ";
                
            }
			
					
        ?>
        </table>
    </body>
</html>
