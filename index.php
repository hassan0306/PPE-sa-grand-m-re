<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="e. ISO-8859-1">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/cssGeneral.css">
    </head>
    <body>
        <?php
            if(!isset($_REQUEST['action']))
                $action = 'accueil';
            else
                $action = $_REQUEST['action'];

            // vue qui cr�e l'en-t�te de la page
            include("vues/v_entete.php") ;

            switch($action)
            {
                case 'accueil':
                      // vue qui cr�e le contenu de la page d'accueil
                    include("vues/v_accueil.php");
                    break;
                case 'voirResa':
                      // vue qui cr�e le contenu de la page 
                    include("modele/Fonctions.php");
                    $reservations = getLesResa();
                    include("vues/v_reservation.php");
                    break;
                case 'voirVols':
                      // vue qui cr�e le contenu de la page
                      // vue qui cr�e le contenu de la page
                    include("modele/Fonctions.php");
                    $lesVols = getLesVols();
                    include("vues/v_vols.php");
                    break;
            }

            // vue qui cr�e le pied de page
            include("vues/v_pied.php") ;
        ?>
    </body>
</html>
