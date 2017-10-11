<html>
    <head>
        <meta charset="e. ISO-8859-1">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/cssGeneral.css">
    </head>
    <body>
        <?php
			session_start();
        		require_once("modele/f
			onctions.php");
			
		
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
                    include("modele/fonctions.php");
                    $reservations = getLesResa();
                    include("vues/v_reservation.php");
                    break;
                case 'voirVols':
                      // vue qui cr�e le contenu de la page
                      // vue qui cr�e le contenu de la page
                    include("modele/fonctions.php");
                    $lesVols = getLesVols();
                    include("vues/v_voirVols.php");
                    break;
                case 'form':
                    include("modele/fonctions.php");
                    $numero = reserverVol();
                    include("vues/formulaire.php");
                    break;
                case 'confirmeReservation':
                    include("modele/fonctions.php");
                    $reservation = validerReservation();
                    $numero = reserverVol();
                    include("vues/v_confirmeReservation.php");
                    break;
					
				case 'pdfReservation':
					include("vues/v_pdfReservation.php");
					$reservation = getLesReservations();
					
					creerPdfReservation($reservation);
					break;
                    
            }

            // vue qui cr�e le pied de page
            include("vues/v_pied.php") ;
        ?>
    </body>
</html>
