<button id="mybutton" class="mybutton"onclick="openModal()">Poster</button>
<div id="myModal"class="myModal">
  <div class="modal-content">
    <button id="fermer" class="fermer" onclick="closeModal()">&times;</button>
    <!-- id c est pour les scipt= GetElementbyId -->
    <form action="./php/posts/envoiTweet.php" method="POST" class="form1"enctype="multipart/form-data">
      <input type="hidden" name="form" value="formulaire_ajout_article">
      <label for="titre"  class="label1">Titre :</label>
      <input type="text"  class="text1" name="titre" id="titre" required>
      <br>
      <label for="contenu" class="label2" >Contenu :</label>
      <br>
      <textarea name="contenu" id="contenu" cols="30" rows="10" required="" class="txtarea2"></textarea>
      <br>
      <label for="image" class="label3" >Image :</label>
      <input type="file" name="image" id="image" accept="image/jpeg, image/png, image/gif" name="image">
      <br><br>
      <label for="tag" class="tag" >Tag :</label>
      <select name="tag" id="tag" class="tag2">
        <option value="technologie">Technologie</option>
          <option value="monde">Monde</option>
           <option value="sante">Santé</option>
            <option value="politique">Politique</option>
            <option value="jeuxvideo">Jeu-vidéo</option>
           <option value="nature">Nature</option>
           <option value="football">Football</option>
            <option value="emploi">Emploi</option>
             <option value="actualite">Actualité</option>
              <option value="travail">Travail</option>
      </select>
      <br><br>
      <input class="abcd" type="submit" value="Envoyer">
    </form>
  </div>

 