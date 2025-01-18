<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form class="formClassic" action="" method="post">
        <div class="saisie">
            <label for="">Saisir un titre</label>
            <input type="text" name="titre" id="" value="" required>
        </div>
        <div class="saisie">
            <label for="">Saisir l'adresse</label>
            <input type="text" name="adresse" id="" value="" required>
        </div>
        <div class="saisie">
            <label for="">Saisir la ville</label>
            <input type="text" name="ville" id="" value="" required>
        </div>
        <div class="saisie">
            <label for="cp">Saisir le code postal</label>
            <input type="text" name="cp" id="cp" value="" required>
            <div class="error"></div>
        </div>
        <div class="saisie">
            <label for="">Saisir la surface</label>
            <input type="number" name="surface" id="surface" value="" required>
        </div>
        <div class="saisie" >
            <label for="">Saisir le prix</label>
            <input type="number" name="prix" id="prix" value="" required>
        </div>
        <div class="saisie">
            <label for="">Photo du bien</label>
            <input type="text" name="photo" id="" value="">
        </div>
        <div class="saisie">
            <label for="">Type de bien</label>
            <select name="type" id="">
                <option value="Appartement">Appartement</option>
                <option value="Maison">Maison</option>
            </select>
        </div>
        <div class="saisie">
            <label for="">Entrer la description du bien</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="submit">
            <button type="submit" name="ajoutLogement" class="ajout">Ajouter ce bien</button>
        </div>
    </form>

</body>

</html>