<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <div id="contenu">
            <?php
            
            foreach($lesVols as $unVol)
            {
                    $numero = $unVol['numero'] ;
                    $depart=$unVol['depart'] ;
                    $dateDepart=$unVol['dateDepart'] ;
                    $heureDepart=$unVol['heureDepart'] ;
                    $arrivee=$unVol['arrivee'] ;
                    $dateArrivee=$unVol['dateArrivee'] ;
                    $heureArrivee=$unVol['heureArrivee'] ;
                    $prix=$unVol['prix'] ;
            echo"<table border >
                    <tr>
                    <td>$numero</td>
                    </tr>
                    <tr>
                    <td>$depart</td>
                    <td>$dateDepart</td>
                    <td>$heureDepart</td>
                    </tr>
                    <tr>
                    <td>$arrivee</td>
                    <td>$dateArrivee</td>
                    <td>$heureArrivee</td>
                    </tr>
                    <tr>
                    <td>$prix</td>
                    <td><a href='index.php?action=form&numero=$numero'target='_blank'>reserver</a></td>
                    </tr>
                </table>";
            }
            ?>
        </div>
    </body>
</html>