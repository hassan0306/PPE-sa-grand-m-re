<html>
<div id="contenu">
    <form method="post" action= index.php?action=confirmeReservation>
        <input type='hidden' value='AIR5007' name='numero'>
        <fieldset>
            <legend>Reservation du vol  <?php echo $numero ?> </legend>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required /></br></br>

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required /></br></br>
        
             <label for="mail">Email</label>
            <input type="mail" name="mail" id="mail" required /></br></br>

            <label for="Adresse">Adresse</label>
            <input type="text" name="adresse" id="Adresse" required /></br></br>

             <label for="NBvoyageur">Nombre de Voyageur</label>
            <input type="int" name="NBvoyageur" id="NBvoyageur" required /></br></br></br>
            
            <input type="submit" value="Valider"  /> <INPUT TYPE="reset" NAME="nom" VALUE=" Annuler ">

        </div>
</html>
