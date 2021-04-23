<main>
   <form action="" method="post">
      <div>
         <label for="nom">Nom : </label><br>
         <input type="text" id="nom" name="nom" required>
      </div>
      <div>
         <label for="prenom">Prénom : </label><br>
         <input type="text" id="prenom" name="prenom" required>
      </div>
      <div>
         <fieldset>
            <legend>Est-ce votre premier rendez-vous ?</legend>
            <br>
            <input type="radio" name="premierRdv" id="oui" value="oui">
            <label for="oui">Oui</label><br>
            <input type="radio" name="premierRdv" id="non" value="non">
            <label for="non">Non</label>
         </fieldset>
      </div>
      <div>
         <label for="date">Date du rendez-vous : </label><br>
         <input type="date" id="date" name="date" required> <br>
         <label for="heure">Heure : </label>
         <input type="time" name="heure" id="heure">
      </div>
      <div>
         <label for="numeroTel">N° de Téléphone : </label><br>
         <input type="tel" id="numeroTel" name="numeroTel" required>
      </div>
      <div>
         <label for="numeroSecu">N° de Sécurité Sociale : </label><br>
         <input type="number" id="numeroSecu" name="numeroSecu" size="15" required>
      </div>
   </form>
</main>