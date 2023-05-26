


 
<?php
  // Vérifie si la session est déjà active
  if (session_status() == PHP_SESSION_NONE) {
    // Si la session n'est pas active, démarre la session
    session_start();
  }
?>

<div class="overlay-sidebar">
  <aside class="sidebar">
    <div class="sidebar-profile">
      <a href="./profile.php">
      
      </a>
      <div class="sidebar-profile-info">
      <?php if(isset($_SESSION['users'])){ 
        // on vérifie si la session est set (isset), si on veut faire l'inverse, on met !isset
        ?> 
      
        <h2 class="username"><?php echo $_SESSION['users']['user_username'] ?></h2>
        <?php } ?>
      </div>
    </div>
    <div class="menu">
      <?php if (!isset($_SESSION["users"])): ?>
      <a href="./php/login.php" class="menulist">
        <img class="icon" src="./images/icons/sidebar/connexion.png" alt="✔️" />
        <h2>Connexion</h2>
      </a>
      <a href="./php/register.php" class="menulist">
        <img class="icon" src="./images/icons/sidebar/inscription.png" alt="🆕" />
        <h2>Inscription</h2>
      </a>
      <?php else: ?>
      <a href="php/posts/deconnexion.php" class="menulist disconnect">
        <img class="icon" src="./images/icons/sidebar/deconnexion.png" alt="🔚" />
        <h3>Se déconnecter</h3>
      </a>
      <?php endif; ?>
      <a href="php/profil.php" class="menulist">
        <img class="icon" src="./images/icons/sidebar/accueil_vide.png" alt="🏠" />
        <h2>Profil</h2>
      </a>
      <a href="#" class="menulist">
        <img class="icon" src="./images/icons/sidebar/contact.png" alt="📧" />
        <h2>Contact</h2>
      </a>
      <a class="menulist">
        <img class="icon" src="./images/icons/sidebar/parametres.png" alt="🔚" />
        <h2>Paramètres</h2>
      </a>
      <br>
      <br>
    </div>
    <button class="close-nav">fermer</button>
  </aside>
</div>

<button class="open-nav">ouvrir</button>
