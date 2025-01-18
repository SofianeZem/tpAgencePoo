
    <?php

    require_once "./Controller/LogementController.php";

    $controller = new LogementController();

echo "<div class='indexBis'>
    <img src='".$logement['photo']."' alt='". $logement['titre']."' width='200' height='200'>
    <p><". $logement['titre']."</p>
    <p>". $logement['adresse']."</p>
    <p>".$logement['ville'] ." ( ". $logement['cp'] ." )</p>
    <p>".$logement['type']."</p>
    <p>Surface : ".$logement['surface']." m2</p>
    <p>Loyer : ".$logement['prix'] ." €'</p>
    <p class='none'>".$logement['description']."</p>
    

</div>"


    ?>
