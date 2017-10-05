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
                            "nom"=>$ligne->nom,
                            "prenom"=>$ligne->prenom,
                            "adresse"=>$ligne->adresse,
                            "mail"=>$ligne->mail,
                            "nombreVoyageur"=>$ligne->nombreVoyageur,
                            "numVol"=>$ligne->numVol
                        ];
                        $i++;
                    } 
                    
                }
                catch(PDOException $e)
                {
                    echo "Erreur dans la requète" . $e->getMessage();
                }

             

                for($r=0;$r<$i;$r++){
                    array_push($reservations,$uneResa[$r]);
                }

            

                return $reservations;
            }
            
    
            
         
            
            function creerReservation()
            {
                require dirname(__FILE__)."/Connection.php";
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $adresse=$_POST['adresse'];
                $mail=$_POST['mail'];
                $nombreVoyageur=$_POST['nombreVoyageur'];
                $numVol=$_POST['numVol'];
                
             
                $requete="INSERT INTO reservation values ('$nom','$prenom','$adresse','$mail','$nombreVoyageur','$numVol')";
                $bdd= connect();
                try 
                {	
                    $sql = $bdd->prepare($requete);
                    $sql->execute();
                    
                }
                catch(PDOException $e)
                {
                    echo "Erreur dans la requète" . $e->getMessage();
                }
               
            }
            
            /*function validerReservation() {
                // récupération du numéro
                $numero = $_REQUEST["numero"];
                $reservations["numero"] =  $numero;
                // faire de même les autres paramètres…

                function initPanier() {
                    if(!isset($_SESSION['reservations']))
                        $_SESSION['reservations']= array();
                }

                function ajouterAuPanier($reservations) {    
                    $_SESSION['reservations'][]= $reservations;
                }
            
            }*/
         ?>
        
    </body>
</html>

