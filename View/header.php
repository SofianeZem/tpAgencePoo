<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon agence</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script defer src="./assets/js//app.js"></script>

</head>

<body>

    <nav>
    <a href="index.php"><img src="https://static.vecteezy.com/ti/vecteur-libre/p1/22085316-logo-agence-immobiliere-vectoriel.jpg" alt="" width="100" height="50"></a>
        <div id="logo"><a href="index.php">Mon agence</a></div>


        </div>

        <div id="search">
            <form action="?action=read" method="post">
                <input type="search" name="search" id="">
                <button type="submit" name="searchForm"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
    </nav>
    <div class="message">
        <?php
        if (isset($_SESSION["message"])) {
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
        ?>
    </div>
</body>

</html>