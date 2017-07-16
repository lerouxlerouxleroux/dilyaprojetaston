 <?php
include 'includes/util.inc.php';
include 'includes/connexion_db.php';
include 'includes/header.php';
include 'includes/menu.php';

$email = $_POST['email'];

$pass = $_POST['pass'];

if (isset($_POST['admin'])) {

$admin = $_POST['admin'];  

}

if ($email == "test@test.fr" && $pass == 1234 && isset($admin)) {
//if (isset($_POST['email']) && isset($_POST['pass'])) {
   /*$email = $_POST['email'];
    $pass = $_POST['pass'];
    // connexion à mysql, requête et exécution
    $db = connect();
    $query = $db->prepare('
        SELECT * FROM users WHERE email = :email AND password = :password
    ');
    $query->execute(array(
        ':email'    => $email,
        ':password' => $pass
    ));
    $result = $query->fetch();

    var_dump($result);

    if ($result) {*/ 

        $_SESSION['user'] = $result;
        
        header('location:protected.php');

        /*if(NULL == $_SESSION['user']){
          header('location:index.php');
        }else{
          echo "Vous êtes identifié";
        }*/
      }
        
    } else {
        echo 'Utilisateur/trice inconnu(e)';
    }
//} /*else {
    echo 'Formulaire non validé'; // accès par GET
//}
?>
<div><img src="img/imageaccueil.jpg"></div>


<?php
include 'includes/footer.php';
?>
