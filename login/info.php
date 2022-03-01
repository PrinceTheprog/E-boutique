<?php
session_start();
include_once "../connexion.php";

$sql = mysqli_query($conn, "SELECT * FROM users WHERE id_createur = {$_SESSION['id_createur']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
?>
                          
<body>
<!--<div class="spinner-border text-primary" role="status" id="spo">
    <span class="visually-hidden">Loading...</span>
</div>-->
<link rel="stylesheet" href="style.css">
  <div class="wrapper">
      <header>
        <div class="content">
        <span><a href="users.php" class="justify-content-center">Retour</a></span>
        <div class="chat-box">    
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
    <div class="details">
        <span class="row">
            <p> Saississez votre email et ajoutez une photo du profil optionnelle</p>
            <br>
                <h5>Votre nom :</h5>
                <p class="border bg-dark" style="color: white;"><?php echo $row['fname']. " " . $row['lname']?></p>
            <br>
                <h5>Votre Email :</h5>
                <p class="border bg-dark" style="color: white;"><?php echo $row['email']  ?></p>
            <br>
            <div class="inp">
                <input class="btn btn-info input" type="submit" name="modifier" value="Modifier">
            </div>
    </div>
</div>