<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <?php
            function getLesVols()
            {

            

            $vols = array();

              
             require dirname(__FILE__)."/Connection.php";
             
                $requete="select numVols, A1.nomAeroport as aeDep, A2.nomAeroport as aeArr, dateDepart, dateArrivee, prix from vol 
                        Join aeroport as A1 on vol.numAeroportDepart=A1.id
                        JOIN aeroport as A2 on vol.numAeroportArrivee=A2.id";
            
                $bdd= connect();
                $i=0;
                try 
                {	
                    $sql = $bdd->prepare($requete);
                    $sql->execute();
                    
                    while($ligne=$sql->fetch(PDO::FETCH_OBJ))
                    { 
                        
                        $unVol[$i]= ["numVols"=>$ligne->numVols,
                            "aeDep"=>$ligne->aeDep,
                            "dateDepart"=>$ligne->dateDepart,
                            "aeArr"=>$ligne->aeArr,
                            "dateArrivee"=>$ligne->dateArrivee,
                            "prix"=>$ligne->prix];
                        $i++;
                    }
                    
                }
                catch(PDOException $e)
                {
                    echo "Erreur dans la requète" . $e->getMessage();
                }

             

                for($r=0;$r<$i;$r++){
                    array_push($vols,$unVol[$r]);
                }

            

            return $vols;

            }
            
            function getLesResa(){
               
            

            $reservations = array();

              
             require dirname(__FILE__)."/Connection.php";
             
                $requete="select * from reservation ";
            
                $bdd= connect();
                $i=0;
                try 
                {	
                    $sql = $bdd->prepare($requete);
                    $sql->execute();
                    
                    while($ligne=$sql->fetch(PDO::FETCH_OBJ))
                    { 
                        
                     $uneResa[$i]= [
                            "nom"=>$ligne->nomClient,
                            "prenom"=>$ligne->prenomClient,
                            "numVols"=>$ligne->numVol,
                            "place"=>$ligne->place
                        ];
                        $i++;
                    } 
                    
                }
                catch(PDOException $e)
                {
                    echo "Erreur dans la requ�te" . $e->getMessage();
                }

             

                for($r=0;$r<$i;$r++){
                    array_push($reservations,$uneResa[$r]);
                }

            

            return $reservations;
            }
         ?>
        
    </body>
</html>

