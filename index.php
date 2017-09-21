<html>
    <head>
        <title> Air-Azur </title>
        <link rel="stylesheet" type="text/css" href="css/cssGeneral.css" />
    </head>
    <body>
        
    <?php
    
    if(!isset($_REQUEST['action']))
        $action = 'accueil';
    else
        $action = $_REQUEST['action'];

    // vue qui crée l’en-tête de la page
    include("vues/v_entete.php") ;

    switch($action)
    {
    case 'accueil':
    // vue qui crée le contenu de la page d’accueil
    include("vues/v_accueil.php");
    break;
    }

    // vue qui crée le pied de page
    include("vues/v_pied.php") ;

    ?>
    </body>
</html>