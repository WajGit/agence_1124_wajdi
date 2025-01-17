<?php
require_once "./Model/Logement.php";
require_once "./Repository/LogementRepository.php";
class LogementController {

    public function create(){
    
        if(isset($_POST['ajouterLogement'])){
            $logementRepo = new LogementRepository();
            $logement = new Logement($_POST['titre'],
            $_POST['adresse'],
            $_POST['ville'],
            intval($_POST['cp']),
            intval($_POST['surface']),
            intval($_POST['prix']),
            $_POST['photo'],
            $_POST['type'],
            trim($_POST['description']));
            if($logementRepo->create($logement)){
                $_SESSION['message'] = "<div class='succes'>Création effectuée</div>";
            }
            else{
                $_SESSION['message'] = "<div class='attention'>Création erreur</div>";
            }
            header('Location:index.php?action=listLivres');
            exit();
        }
        require "./Vue/Logement/ajouter.php";
    }

    public function update(){
        if(isset($_GET['id'])){
            $logementRepo = new LogementRepository();
            $id = base64_decode($_GET['id']);
            if(isset($_POST['ajouterLogement'])){
                $logement = new Logement($_POST['titre'],
                $_POST['adresse'],
                $_POST['ville'],
                intval($_POST['cp']),
                intval($_POST['surface']),
                intval($_POST['prix']),
                $_POST['photo'],
                $_POST['type'],
                trim($_POST['description']));
                if($logementRepo->editLogement($id, $logement)){
                    $_SESSION['message'] = "<div class='succes'>Update effectuée</div>";
                }
                else{
                    $_SESSION['message'] = "<div class='attention'>Update erreur</div>";
                }
                header('Location:index.php?action=listLivres');
                exit();
            }
            $logementN = $logementRepo->logementById($id);
        }
        require "./Vue/Logement/ajouter.php";
    }
    public function delete(){
        if(isset($_GET['id'])){
            $id = base64_decode($_GET['id']);
            $logementRepo = new LogementRepository();
            if($logementRepo->deleteLogement($id)){
                $_SESSION['message'] = "<div class='succes'>Effacement effectuée</div>";
            }
            else{
                $_SESSION['message'] = "<div class='attention'>Effacement erreur</div>";
            }
            header('Location:index.php?action=listLivres');
            exit();
        }
    }

    public function list(){
        $logementRepo = new LogementRepository();
        if(isset($_POST['search'])){
            $saisie = trim($_POST['searchValue']);
            $logements = $logementRepo->searchLogements($saisie);
        }
        else{
            $logements = $logementRepo->allLogements();
            
        }
        require "./Vue/Logement/liste.php";
    }
}

?>