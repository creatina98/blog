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
                <li>Editor postari</li>
                <li>Manager postari</li>
            </ul>
            <div class="boxContinut">
                <p>I'M A BLOGGER what's your superpower?</p>
            </div>
        </div>
        <div class="editor">
            <h1>Titlul articolului</h1>
            <div class="inputTitlu">
            <form action="" method="POST" enctype='multipart/form-data'>
                <input type="text" id="fname" name="fname"><br><br>
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
                            <option value="psigologie">Psigologie</option>
                        </select>
                    </div>
                    <div class="coloana">
                        <h4>Contributori/Autori</h4>
                        <!-- chose file-->
                        <select name="categorie" id="categorie">
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
                     <button name="submit" type="submit">Adauga Articol</button>
                </div>
            </div>
            <div class="previzualizareArticol">
                <?php
                if(!empty($_POST['content'])){
                    ?>
                    <div class="output" style="font-size:20px;line-height: 0.9;">
                        <h1>Rezultat</h1>
                        <?php echo $_POST['content']; ?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
   </div> 
   <script src="../ckeditor/ckeditor.js"></script>
   <script>
       CKEDITOR.replace('content');
   </script>
</body>
</html>