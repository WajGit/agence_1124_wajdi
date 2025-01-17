<?php
session_start();
require_once "./Vue/header.php";
require_once "./Controller/LogementController.php";

$logement = new LogementController();

if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

if(!isset($_GET['action'])){
    $logement->create();
}
else{
    switch(true){
        case $_GET['action'] === 'liste' :
            //echo "Page Login / Work in progress";
            $logement->list();
            break;
        case $_GET['action'] === 'ajouter' :
            //echo "Page Inscription / Work in progress";
            $logement->create();
            break;
        case $_GET['action'] === 'logement' :
            //echo "Page Inscription / Work in progress";
            $logement->update();
            break;
            
        case $_GET['action'] === 'delete' :
            //echo "Page Inscription / Work in progress";
            $logement->delete();
            break;
        default :
            $logement->create();
            break;
    }
}

require_once "./Vue/footer.php";
?>