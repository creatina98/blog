<?php require "../include/selectArticol.inc.php"?>

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
            <h1>Nume prenume editor</h1>
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
                        <button style="">Update</button>
                </div>
            </div>
        <?php
        }
            ?>

    </div>
</body>
</html>