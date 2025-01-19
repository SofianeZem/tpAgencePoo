<?php

require_once "Model/Logement.php";
require_once "Repository/LogementRepository.php";

class LogementController
{

    public function new()
    {


        if (isset($_POST["ajoutLogement"])) {

            $logement = new Logement(
                $_POST["titre"],
                $_POST["adresse"],
                $_POST["ville"],
                $_POST["cp"],
                $_POST["surface"],
                $_POST["prix"],
                $_POST["photo"],
                $_POST["type"],
                $_POST["description"]
            );

            $logementRepository = new LogementRepository();

            if ($logementRepository->create($logement)) {
                $_SESSION["message"] = "<div class='success'> Le bien " . $_POST['titre'] . " a bien été ajouté</div>";
            } else {
                $_SESSION["message"] = "<div class='danger'> Le bien " . $_POST['titre'] . " n'a pas été ajouté</div>";
            }

            header('location:index.php');
            exit();
        }

        require_once "./View/Logement/ajoutLogement.php";
    }

    public function findAll()
    {

        $logementRepository = new LogementRepository();

        if (isset($_POST["searchForm"])) {

            $logements = $logementRepository->search($_POST["search"]);
        } else {

            $logements = $logementRepository->read();
        }
        require_once "./View/home.php";
    }

    public function detail()
    {

        $logementRepository = new LogementRepository();

        if (isset($_GET['id'])) {

            $idDecode = base64_decode($_GET["id"]);
            $logement =  $logementRepository->findById($idDecode);
        }

        require_once "./View/Logement/detailLogement.php";
    }

    public function edit()
    {
        $logementRepository = new LogementRepository();


        if (isset($_GET['id'])) {

            $idDecode = base64_decode($_GET["id"]);
            $logement =  $logementRepository->findById($idDecode);
        }

        if (isset($_POST['ajoutLogement'])) {

            $logement = new Logement(
                $_POST["titre"],
                $_POST["adresse"],
                $_POST["ville"],
                $_POST["cp"],
                $_POST["surface"],
                $_POST["prix"],
                $_POST["photo"],
                $_POST["type"],
                $_POST["description"]
            );

            if ($logementRepository->update($logement, $idDecode)) {
                $_SESSION["message"] = "<div class='success'> Le logement " . $_POST['titre'] . " a bien été modifié</div>";
            } else {
                $_SESSION["message"] = "<div class='danger'> Le logement " . $_POST['titre'] . " n'a pas été modifié</div>";
            }

            header('location:index.php');
            exit();
        }

        require_once "./View/Logement/ajoutLogement.php";
    }

    
    public function erase()
    {

        $logementRepository = new LogementRepository();

        if (isset($_GET['id'])) {

            $idDecode = base64_decode($_GET["id"]);
            
            if ($logementRepository->delete($idDecode)) {

                header('location:index.php');
                exit();
            }
        }
    }

}

?>