<?php
include 'includes/connexion_db.php';
include 'includes/util.inc.php';
include 'includes/header.php';
include 'includes/menu.php'; 
var_dump($_SESSION); 
$_SESSION['test']='ça marche';
var_dump($_SESSION); 
?>

<h1>POST</h1>

<?php

$email = $_POST['email'];

$pass = $_POST['pass'];

if (isset($_POST['admin'])) {

$admin = $_POST['admin'];  

}
if ($email == "test@test.fr" && $pass == 1234 && isset($admin)) 

{
    echo  "Identification réussie..."; 
    // Enregistrer cet état dans la session (mécanisme cré coté serveur qui va parmettre de dire "j'enregistre à partir de cet instant les infos qu'on ne souhaite pas mémoriser", mecanisme qui fait predurer certains info lors de l'ouverture de la session, redonne au dialogue de la mémoire)
    
    $_SESSION['logged'] = true; //2 étape après l'ouverture de la session session_start tout au début de la page, mecanisme contournant l'amnésie de http
    
    header('location:espacemembre.php');
    }


else 
	{
   
   echo "L'identification a échoué...";
	
	}


?>


 <?php include 'includes/footer.php'; ?>