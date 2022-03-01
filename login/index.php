<?php 
  session_start();
  if(isset($_SESSION['id_createur'])){
    header("location: users.php");
  }
?>

<link rel="stylesheet" href="../bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<body>
  <div class="wrapper">
    <section class="form signup">
      <header><span>  E-boutique -  Login</span>  </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nom</label>
            <input type="text" name="fname" placeholder="Nom" required>
          </div>
          <div class="field input">
            <label>Prénom</label>
            <input type="text" name="lname" placeholder="Prénom" required>
          </div>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Entrez votre email" required>
        </div>
        <div class="field input">
          <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Entrer votre mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selectionner une Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Commencer à chatter">
        </div>
      </form>
      <div class="link">J'ai déja un compte? <a href="login.php">Me connecter</a></div>
    </section>
  </div>

  <script src="../javascript/pass-show-hide.js"></script>
  <script src="../javascript/signup.js"></script>

</body>
</html>
