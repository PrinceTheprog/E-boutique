<?php
include("header_dash.php");

?>

<!DOCTYPE html>
    <head>
        <title></title>
        
    </head>

    <body>
    <main class="col-md-11 ms-sm-auto col-lg-12 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tableau de board</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Partager</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exporter</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Cette semaine
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="10"></canvas>
      <h1 class="container bg-dark text-white">Produits </h1><br>
      <div class="container col-9 border">
        <h2 id="ajouter">- Ajouter un produit</h2>
        <div class="form-group">
            <form action="insertion.php" method="post">
                <input type="text" class="form-control " name="nom_prod" placeholder="Entrez le nom">
                <input type="number" class="form-control my-2" name="price" placeholder="Entrez le prix">
                <textarea type="text" class="form-control my-2" name="desc_prod" placeholder="Entrez la description"></textarea>
                <select class="form-control my-2" name="categorie">
                    
                <option value=>Choississez une catégorie</option>;
                <?php
                    include('../connexion.php');
                    $result = mysqli_query($con, "SELECT * FROM categorie");
                    $i=1;
                    while($row = mysqli_fetch_assoc($result)) {
                    echo '<option value='.$row['id_cat'].'>'.$row['nom'].'</option>';
                    }
                ?>
                
                </select>
                <input type="file" class="form-control my-2" name="image" placeholder="Choissez une image">
                <input type="submit" name="Envoyer" class="btn btn-primary ">
            </form>
            
      </div>
      <hr>
      <h2 id="liste" class="my-5">- Les produits ajoutés :</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Num</th>
              <th scope="col">Nom</th>
              <th scope="col">Prix</th>
              <th scope="col">Description</th>
              <th scope="col">Catégorie</th>
            </tr>
          </thead>
          <tbody>
          <?php
                include('../connexion.php');
                $result = mysqli_query($con, "SELECT * FROM produits");
                $i=1;
                while($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                    <td>'.$i++.'</td>
                    <td>'.$row['nom_prod'].'</td>
                    <td>'.$row['price'].' CFA</td>
                    <td>'.$row['desc_prod'].'</td>
                    <td>'.$row['categorie'].'</td>
                </tr>
            ';}?>
        
        </table>
      </div>
      <hr>
      <div class="container">
          <h2 class="my-5" id="modifier">- Modifier ou supprimer un produit</h2>
          
         <?php 
         include('../connexion.php');
         $result = mysqli_query($con, "SELECT * FROM produits");
         $i=1;
         
         while($row = mysqli_fetch_assoc($result)) {
              echo '<ul class="list-unstyled ps-3"><li>'.$i++.' => '.$row['nom_prod'].'<a href="" class="btn btn-info justify-content-end m-2">Modifier</a><a href="" class="btn btn-danger justify-content-end m-2">Supprimer</a></li>
          </ul>';
        }
      ?>
      </div>
      </div>
      <canvas class="my-4 w-100" id="myChart" width="900" height="10"></canvas>
      <h1 class="container bg-dark text-white">Profil </h1><br>
      <div class="container col-9 border" >
        <h2 id="voirp">- Voir mon profil</h2>
        <div style="text-align:center" class="container border">
            <img src="img/doigt.jpg" alt="Profil" class="container col-4 my-5 justify-content-center " style="border-radius: 80%;">
            <p>Email :</p>
            <p>Nom :</p>
            <p></p>
        </div>
    </body>
    
</html>