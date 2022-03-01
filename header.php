<!DOCTYPE html>
<html>
    <head>
        <title>E-boutique</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
    </head>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-boutique</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Catégorie</a>
                </li>
                <li class="nav-item">
                <a class="nav-link">Contact</a>
                </li>
            </ul>
            <form class="d-flex">
                <?php
                session_start();
                if(!isset($_SESSION['id_createur'])){
                  echo '<a href="login/index.php"><input type="button" class="btn btn-primary me-2" value="Connexion"></a>
                        <a href="login/signup.php"><input type="button" class="btn btn-light me-2" value="Inscrire"></a>';
                }else{
                   echo '<a href="info.php"><input type="button" class="btn btn-light me-2" value="Compte"></a>';
                }
                ?>
                
                <input class="form-control me-2" type="search" placeholder="Chercher" aria-label="Chercher">
                <button class="btn btn-outline-success" type="submit">Chercher</button>
            </form>
        </div>
  </div>
</nav>
    
</html>