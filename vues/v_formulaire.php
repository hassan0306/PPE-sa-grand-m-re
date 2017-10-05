
    <html>
           
    <form method="POST" action='index.php?action=valideResa'>
 <?php
      $numVol=$_REQUEST['numVol']
              
    ?>                 
            <fieldset> 
                <legend>Reservation du vol <?php echo $numVol ?></legend>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" /></br></br>       

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" /></br></br>
            
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" /></br></br>
            
            <label for="mail">Mail</label>
            <input type="text" name="mail" id="mail" /></br></br>
            
            <label for="nombreVoyageur">Nombre de Voyageurs</label>
            <input type="int" name="nombreVoyageur" id="nombreVoyageur" /></br></br>
        
            
            <input type="submit" value="Valider"/>
            <input type="submit" value="Anuler"/>
          </fieldset>   
</html>