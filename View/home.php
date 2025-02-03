<div class="containerList">

    <?php

    require_once "./Controller/LogementController.php";

    $controller = new LogementController();


    if (empty($logements)) {
        echo "La liste des logements est vide";
    } else {

        foreach ($logements as $logement) {

            $idEncode = base64_encode($logement["id_logement"]);  ?>

            <div class="index">
                <img src="<?php echo $logement['photo']; ?>" alt="<?php echo $logement['titre']; ?>" width="200" height="200">
                <p><?php echo $logement['ville'] . " (" . $logement["cp"] . ")"; ?></p>
                <p><?php echo $logement['type']; ?></p>
                <p><?php echo $logement['prix'] . " €"; ?></p>
                <p class="description"><?php echo $logement['description']; ?></p>
                <a class='link' href="?action=details&id=<?php echo $idEncode ?>">Détails</a>
                <div class="actions">
                    <a class='link' href="?action=edit&id=<?php echo $idEncode ?>">Modifier</a>
                    <a onclick="return supp('<?php echo $logement['titre']; ?>')" class='link' href="?action=delete&id=<?php echo $idEncode ?>">Supprimer</a>
                </div>

            </div>

    <?php }
    }
    ?>

</div>