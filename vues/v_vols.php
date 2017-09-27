<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <div id="contenu"> 
    
            <?php
            
            /* 
             * To change this license header, choose License Headers in Project Properties.
             * To change this template file, choose Tools | Templates
             * and open the template in the editor.
             */

            foreach ($lesVols as $unVol)
            {
                $numVol=$unVol['numVols'];
                $numAeroportDepart=$unVol['aeDep'];
                $numAeroportArrivee=$unVol['aeArr'];
                $dateDepart=$unVol['dateDepart'];
                $dateArrivee=$unVol['dateArrivee'];
                $prix=$unVol['prix'];
                //$place=$unVol['place'];


            echo""
            . "<table>"
                    . "<tr>"
                         . "<td>$numVol</td>"
                    ."</tr>"
                    ."<tr>"
                         ."<td>$numAeroportDepart</td>"
                         ."<td>$dateDepart</td>"
                    ."</tr>"
                    ."<tr>"
                         ."<td>$numAeroportArrivee</td>"
                         ."<td>$dateArrivee</td>"
                    ."</tr>"
                    ."<tr>"     
                         ."<td>$prix</td>"
                         ."<td><a href='index.php?action=form'> reserver </a></td>"
                    ."</tr>"
                    ."</br>"
            ."</table>";

            }
            ?>
        </div>
    </body>
</html>
        