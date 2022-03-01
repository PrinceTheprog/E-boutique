<?php
include("../connexion.php");
 $_POST['nom_prod'];
    $desc_prod = $_POST['desc_prod'];
    $price = $_POST['price'];
    $categorie = $_POST['categorie'];
    $slug = $_POST['slug'];
    $id_createur = $_POST['id_createur'];
if (!isset($_POST['submit'])) {
    $nom_prod = $_POST['nom_prod'];
    $desc_prod = $_POST['desc_prod'];
    $price = $_POST['price'];
    $categorie = $_POST['categorie'];
    $slug = $_POST['slug'];
    $id_createur = $_POST['id_createur'];
}

$res = mysqli_query($con,"INSERT INTO produits(nom_prod,desc_prod,price,categorie,slug,id_createur) 
                        VALUES(nom_prod,desc_prod,price,categorie,slug,id_createur)");

if(isset($_FILES['image'])){
    $img_name = $_FILES['image']['name'];
    $img_type = $_FILES['image']['type'];
    $tmp_name = $_FILES['image']['tmp_name'];
    
    $img_explode = explode('.',$img_name);
    $img_ext = end($img_explode);

    $extensions = ["jpeg", "png", "jpg"];
    if(in_array($img_ext, $extensions) === true){
        $types = ["image/jpeg", "image/jpg", "image/png"];
        if(in_array($img_type, $types) === true){
            $time = time();
            $new_img_name = $time.$img_name;
            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                $ran_id = rand(time(), 100000000);
                $status = "En ligne ";
                $encrypt_pass = md5($password);
                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");
                if($insert_query){
                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if(mysqli_num_rows($select_sql2) > 0){
                        $result = mysqli_fetch_assoc($select_sql2);
                        $_SESSION['unique_id'] = $result['unique_id'];
                        echo "success";
                    }else{
                        echo "L'email n'existe pas!";
                    }
                }else{
                    echo "SVP réessayer!";
                }
            }
        }else{
            echo "Svp télecharger un type d'image - jpeg, png, jpg";
        }
    }else{
        echo "Svp télecharger un type d'image - jpeg, png, jpg";
    }
}
