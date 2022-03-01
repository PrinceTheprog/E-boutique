<?php 
  session_start();
  if(isset($_SESSION['id_createur'])){
    header("location: users.php");
  }
?>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap.min.css">
<body>
  <div class="wrapper">
    <section class="form login">
      <header><span>  E-boutique -  Login</span>  </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email </label>
          <input type="text" name="email" placeholder="Entrer votre email" required>
        </div>
        <div class="field input">
          <label>Mot de  passe</label>
          <input type="password" name="password" placeholder="Entrer votre mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Commencer à chatter">
        </div>
      </form>
      <div class="link">Je n'ai pas de compte? <a href="index.php">S'inscrire </a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
