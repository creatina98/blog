<?php require "../include/vizualizareArticol.inc.php"?>

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
    <div class="editSection">
        <?php
        foreach ($array as $item) {
        ?>
        <form action="../include/updateArticolDashboard.inc.php" method="post">
            <input name="idArt" value="<?php echo $item["id_articol"];?>" style="display: none;">
            <input name="titlulArticolului" value="<?php echo $item["titlul_articolului"];?>"><br/>
             <textarea name="continutArticol"><?php echo $item["continut_articol"];?></textarea>
            <button name="update" type="submit">Update</button>
        </form>
        <?php
        }
        ?>

    </div>

</body>
</html>