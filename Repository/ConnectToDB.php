<?php 
class ConnectToDB{

    protected function getConnection(){
        try {
            return new PDO('mysql:host=localhost;dbname=immobilier', 'root', '');
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage() . "<br/>";
            die;
        }
    }
}
?>