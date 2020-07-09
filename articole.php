<?php require "./include/selectCategorieArticole.inc.php"?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/stylearticole.css">
    <link rel="stylesheet" href="./dist/spectre.css">
    <link rel="stylesheet" href="./dist/spectre-icons.css">
    <title>M&E | Blog</title>
    </head>
<body>

    <?php require "./navbar.inc.php" ?>

        <div class="columns col-9 col-lg-12" id="main">
            <div class="breton"  id="breton">
                <span id="iconita" style="font-size:30px; cursor:pointer; margin-top: 1px;" onclick="openNav()">&#9776;</span>
                <h1><?php echo $_GET['categorie']?></h1>
            </div>
            <?php
            foreach ($array as $item) {
            ?>
            <div class="columns col-6 col-xl-12">
                <div class="imgart"><a href="vizualizarearticol.php?id_art=<?php echo $item["id_articol"];?>">
                    <div class="box hover<?php echo  $item['id_articol'];?> overlay black">
                        <img src="./img/<?php echo $item["poza_articol"];?>" width="100%" >
                        <div class="texthover hover1<?php echo  $item['id_articol'];?> p-absolute">
                        <p><?php echo  $item['data_articol'];?></p>
                        </div>
                        <div class="texthover1 hover2<?php echo  $item['id_articol'];?> p-absolute">
                        <p>By : <?php echo  $item['prenume'];?> <?php echo  $item['nume'];?></p>
                        </div>
                        <div class="texthover2 hover3<?php echo  $item['id_articol'];?> p-absolute">
                            <p><?php echo mb_strimwidth($item["continut_articol"],0,132,"...");?></p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="textart">
                    <h4><?php echo mb_strimwidth($item["titlul_articolului"],0,40,"..."); ?></h4>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <script src="./js/jquery-3.5.1.js"></script>
    <script>
        <?php
        foreach ($array as $item) {
        ?>
    $(".hover<?php echo  $item['id_articol'];?>").mouseenter(function(){
    $(".hover1<?php echo  $item['id_articol'];?>").fadeIn();
    $(".hover2<?php echo  $item['id_articol'];?>").fadeIn();
    $(".hover3<?php echo  $item['id_articol'];?>").show('1500');

});
    $(".hover<?php echo  $item['id_articol'];?>").mouseleave(function(){
    $(".hover1<?php echo  $item['id_articol'];?>").hide();
    $(".hover2<?php echo  $item['id_articol'];?>").hide();
    $(".hover3<?php echo  $item['id_articol'];?>").hide();
});
        <?php
        }
        ?>
</script>
<script src="./js/sidebar.js"></script>
</body>
</html> 
