<?php

class LogementRepository extends ConnectToDb
{

    public function create(Logement $logement): bool
    {

        $sql = ConnectToDb::getConnection()->prepare("INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type, description)
        VALUES(:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)");

        $sql->bindValue(":titre", $logement->getTitre());
        $sql->bindValue(":adresse", $logement->getAdresse());
        $sql->bindValue(":ville", $logement->getVille());
        $sql->bindValue(":cp", $logement->getCodePostal());
        $sql->bindValue(":surface", $logement->getSurface());
        $sql->bindValue(":prix", $logement->getPrix());
        $sql->bindValue(":photo", $logement->getPhoto());
        $sql->bindValue(":type", $logement->getType());
        $sql->bindValue(":description", $logement->getDescription());

        $sql->execute();

        return ($sql->rowCount() > 0) ? true : false;
    }

    public function read(){

        $sql = ConnectToDb::getConnection()->prepare("SELECT * FROM logement");

        $sql->execute();

        return $sql->fetchAll();
    }

    public function search($saisie_user){

        $sql = ConnectToDb::getConnection()->prepare("SELECT * FROM logement WHERE titre LIKE :search OR type LIKE :search OR ville LIKE :search");

        $sql->bindValue(":search", "%".$saisie_user."%");

        $sql->execute();

        return $sql->fetchAll();
    }


    public function findById($id)
    {
        $sql = ConnectToDB::getConnection()->prepare(" SELECT * FROM logement WHERE id_logement = :id");

        $sql->bindValue(":id", $id);

        $sql->execute();

        return $sql->fetch();
    }
}

    ?>