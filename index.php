<?php
include_once("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-Boutique</title>
    </head>

    <body>
    <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="dashboard/img/doigt.jpg" alt="" class="bd-placeholder-img" style="width: 80%; height: 100%">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>La qualité à bas-prix</h1>
            <p>Commandez très rapidement pour avoir les promotions et réductions</p>
            
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" >
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption" >
            <h1>Livraison en moins 24h</h1>
            <p>Soyez les premiers à faire la demande ainsi obtenir les livraisons gratuitement.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Faites vos commandes en détail ou en gros </h1>
            <p>Pour faire le bonheur de chacun, nous avons tous nos produits en gros et en détails</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Précedent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Suivant</span>
    </button>
  </div>
        
        <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                include('connexion.php');
                $result = mysqli_query($con, "SELECT * FROM produits");
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col">
                        <div class="card shadow-sm">
                        <img src="dashboard/img/doigt.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                        <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-text">'.$row['nom_prod'].'
                            <h5 class="float-end color-danger">'.$row['price'].'.00 CFA</h5>
                            </h4>
                        </div>
                        
                        <p class="card-text text-muted mr-3">'.$row['desc_prod'].'</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-info btn-outline-secondary">Voir</button>
                                <button type="button" class="btn btn-sm btn-warning btn-outline-secondary">Acheter</button>
                            </div>
                            <div>
                                <small class="text-muted">'.$row['created_at'].'</small>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
            <hr class="featurette-divider">
        </div>
        <footer class="container justify-content-center">
            <p class="float-end"><a href="#">Retour vers le haut</a></p>
            <p>&copy; 2021–2022 Company, ATF-Entreprise. &middot; <a href="#">Termes</a> &middot; <a href="#">Confidencialité</a></p>
        </footer>
    </main>
    <script src="bootstrap.bundle.min.js"></script>
    </body>
    
</html>