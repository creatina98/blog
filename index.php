<?php require "./include/selectArticol.inc.php"?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./dist/spectre.css">
    <link rel="stylesheet" href="./dist/spectre-icons.css">
    <title>M&E | Blog</title>
    </head>
<body>

        <?php require "./navbar.inc.php" ?>
        
        <div class="columns col-9 col-lg-12" id="main">
                <div class="breton"  id="breton">
                    <span id="iconita" style="font-size:30px; cursor:pointer; margin-top: 1px;" onclick="openNav()">&#9776;</span>
                    <h1>"Noutati"</h1>
                </div>
            <?php
            foreach ($array as $item) {
            ?>
            <div class="columns col-12">
                <div class="columns col-8 col-lg-12">
                    <img class="img" src="./img/<?php echo $item["poza_articol"];?>">
                    <div class="articolContinut p-absolute">
                        <h1><?php echo mb_strimwidth($item["titlul_articolului"],0,24,"..."); ?></h1>
                        <p><?php echo mb_strimwidth($item["continut_articol"],0,122,"...");?></p>
                        <form action="" method="POST">
                        <p class="more"><a href="vizualizarearticol.php?id_art=<?php echo $item["id_articol"];?>">Citeste mai mult</a></p>
                        </form>
                    </div>
                </div>
                <div id="cercAutor" class="columns col-4" style="padding: 50px;">
                    <img  class="imgcerc " src="./img/<?php echo $item["poza_autor"];?>">
                    <p class="autorDescriere"><?php echo $item["descriere"];?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

<script src="./js/sidebar.js"></script>
</body>
</html> 
