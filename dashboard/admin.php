<?php require "../include/insertArticolDashboard.inc.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styleAdmin.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Admin</title>
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
        <div class="editor">
            <h1>Titlul articolului</h1>
            <div class="inputTitlu">
            <form action="" method="POST" enctype='multipart/form-data'>
                <input type="text" id="fname" name="titlulArticolului"><br><br>
            </div>
            <h1>Continut</h1>
            <textarea name="content" id="content">
                <?php echo !empty($_POST['content'])?$_POST['content']:''; ?>
            </textarea>
            <div class="buttons">
                <div class="left">
                    <div class="coloana">
                        <h4>Imagine Articol</h4>
                        <!-- chose file-->
                        <input type='file' name='image' />
                    </div>
                    <div class="coloana">
                        <h4>Categorie articol</h4>
                        <!-- chose file-->
                        <select name="categorie" id="categorie">
                            <option value="tech">Tech/It</option>
                            <option value="creativitate">Creativitate</option>
                            <option value="psihologie">Psigologie</option>
                        </select>
                    </div>
                    <div class="coloana">
                        <h4>Autor</h4>
                        <!-- chose file-->
                        <select name="autor" id="categorie">
                            <option value="2">Elvis</option>
                            <option value="1">Mihaita</option>
                        </select>
                    </div>
                    <div class="coloana">
                        <h4>Contributori</h4>
                        <!-- chose file-->
                        <select name="contribuitor" id="categorie" disabled>
                            <option value="Anonim">Anonim</option>
                            <option value="elvis">Elvis</option>
                            <option value="mihaita">Mihaita</option>
                            <option value="elvisandmihaita">Elvis & mihaita</option>
                        </select>
                    </div>
                    <!-- /chose file-->
                </div>
                <div style="border-left:1px solid rgb(114, 114, 114);height:200px; margin-top: 50px;"></div>

                <div class="right">
                     <button name="adaugaArticol" type="submit">Adauga Articol</button>
                </div>
            </div>
            <div class="row mt-5" style="font-family: 'Lato', sans-serif">
   </div>
   <script src="../ckeditor/ckeditor.js"></script>

</body>
</html>

<script>
    CKEDITOR.replace( 'content', {
        height: 300,
        filebrowserUploadUrl: "upload.php"
    });
</script>

