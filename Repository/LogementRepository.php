<?php
require_once "./Model/Logement.php";
require_once "./Repository/ConnectToDB.php";
class LogementRepository extends ConnectToDB {

    public function create(Logement $logement): bool{
        $sql = connectToDB::getConnection()->prepare(
            "INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type, description) VALUE
            (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)"
        );
        $sql->bindValue(":titre", $logement->getTitre());
        $sql->bindValue(":adresse", $logement->getAdresse());
        $sql->bindValue(":ville", $logement->getVille());
        $sql->bindValue(":cp", $logement->getCp());
        $sql->bindValue(":surface", $logement->getSurface());
        $sql->bindValue(":prix", $logement->getPrix());
        $sql->bindValue(":photo", $logement->getPhoto());
        $sql->bindValue(":type", $logement->getType());
        $sql->bindValue(":description", $logement->getDescription());

        $sql->execute();

        return ($sql->rowCount() > 0) ? true : false ;
    }
    public function editLogement(int $id, Logement $logement){
        $sql = connectToDB::getConnection()->prepare("UPDATE logement SET
        titre = :titre,
        adresse = :adresse,
        ville = :ville,
        cp = :cp,
        surface = :surface,
        prix = :prix,
        photo = :photo,
        type = :type,
        description = :description
        WHERE id_logement = :id");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":titre", $logement->getTitre());
        $sql->bindValue(":adresse", $logement->getAdresse());
        $sql->bindValue(":ville", $logement->getVille());
        $sql->bindValue(":cp", $logement->getCp());
        $sql->bindValue(":surface", $logement->getSurface());
        $sql->bindValue(":prix", $logement->getPrix());
        $sql->bindValue(":photo", $logement->getPhoto());
        $sql->bindValue(":type", $logement->getType());
        $sql->bindValue(":description", $logement->getDescription());
        $sql->execute();

        return ($sql->rowCount() > 0) ? true : false ;
    }
    public function deleteLogement(int $id){
        $sql = connectToDB::getConnection()->prepare("DELETE FROM logement WHERE id_logement = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        return ($sql->rowCount() > 0) ? true : false ;
    }

    public function logementById($id){
        $sql = connectToDB::getConnection()->prepare("SELECT * FROM logement WHERE id_logement = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        return $sql->fetch();
    }

    public function allLogements(): array{
        $sql = connectToDB::getConnection()->prepare("SELECT * FROM logement");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function searchLogements($saisie){
        $sql = connectToDB::getConnection()->prepare("SELECT * FROM logement WHERE titre LIKE :titre OR ville LIKE :ville");
        $sql->bindValue(":titre", "%$saisie%");
        $sql->bindValue(":ville", "%$saisie%");
        $sql->execute();
        return $sql->fetchAll();
    }

}

?>