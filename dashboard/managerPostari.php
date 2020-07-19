<?php require "../include/selectArticol.inc.php"?>
<?php
session_start();
?>
<?php
if (!isset($_SESSION['idUtilizator'])){
    header("Location: ./index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styleManagerPostari.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <?php
            if (isset($_SESSION['idUtilizator'])){ ?>
                <h1><?php echo $_SESSION['idNume']; ?> editor</h1>
                <?php
            }
            ?>
            <div style="text-align: center">
                <a href="include/logout.inc.php" style="color: white; text-align: center">Log Out</a>
            </div>
            <ul>
                <li><a href="./admin.php" style="color: white; text-decoration: none">Editor postari</a></li>
                <li><a href="./managerPostari.php" style="color: white; text-decoration: none">Manager postari</a></li>
            </ul>
            <div class="boxContinut">
                <p>I'M A BLOGGER what's your superpower?</p>
            </div>
        </div>
        <div class="postari">
            <?php
            foreach ($array as $item) {
            ?>
            <div class="boxArticol">
                <div class="boxContinutArticol">
                    <h1 style="font-family: Rockwell; font-weight: normal; padding-bottom: 10px"><?php echo mb_strimwidth($item["titlul_articolului"],0,30,"..."); ?></h1>
                    <p><?php echo mb_strimwidth($item["continut_articol"],0,132,"...");?></p>
                        <a href="./vizualizareEditArticol.php?id_art=<?php echo $item["id_articol"];?>"><button style="cursor: pointer">Edit</button></a>
                </div>
            </div>
        <?php
        }
            ?>

    </div>
</body>
</html>