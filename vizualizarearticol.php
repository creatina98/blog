<?php require "./include/vizualizareArticol.inc.php"?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/stylevizualizare.css">
    <link rel="stylesheet" href="./dist/spectre.css">
    <link rel="stylesheet" href="./dist/spectre-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>M&E | Blog</title>
    </head>
<body>

    <?php require "./navbar.inc.php" ?>

    <?php
    foreach ($array as $item) {
    ?>
        <div class="columns col-9 col-lg-12" id="main">
            <div class="breton"  id="breton">
                <span id="iconita" style="font-size:30px; cursor:pointer; margin-top: 1px;" onclick="openNav()">&#9776;</span>
                <h1> <?php echo  $item['categorie'];?></h1>
            </div>
           <div class="columns  col-8 col-md-12">
               <div class="titlulDataArticol">
                <h1 style="font-family: 'Rockwell'; margin-bottom: 0;"><?php echo  $item['titlul_articolului'];?></h1>
                <p><?php echo  $item['data_articol'];?> , <?php echo  $item['ora'];?></p>
               </div>
         
            <img class="headimg" src="./upload/<?php echo $item["poza_articol"];?>">

            <div><?php echo  $item['continut_articol'];?> </div>


               <?php
               }
               ?>
           <div class="boxContinutComentarii">
                <hr>
                <div class="boxAperciereArticol">
                    <h1 class="text-center">Imi place acest articol</h1>
                    <button id="likeButton" onclick="myFunction()" style="font-size:24px"><i class="fa fa-heart fe-pulse-w-pause" style="font-size: 30px;"></i></button>
                </div>
                <hr>
                <h2 id="titluLista">Lista comentarii</h2>

                <div class="listaComentarii">
                    <?php
                    foreach ($array2 as $item2) {
                        ?>
                    <div style="padding-bottom: unset" class="boxImgScrisAutor">
                        <img src="./img/icon9.png" alt="icon" width="55px" height="58px">
                        <div class="autorCometariu">
                            <p style="margin-bottom: 0;  font-weight:600 ;"><?php echo  $item2['autor_comentariu'];?></p>
                            <p style="margin-bottom: 0; font-size: smaller">11 iun. 2020, 20:32</p>
                        </div>
                   </div>

                   <p style="padding-top: 12px"><?php echo  $item2['comentariu'];?></p>

               <?php }  ?>
                </div>

                <div class="inputAddComentarii">
                    <h2>Lasa un feedback</h2>
                    <form novalidate="" action="include/insertComentariu.inc.php" method="POST">
                        <textarea name="cometariu" placeholder="Comentariu*"></textarea>
                        <div class="inputBoxComentariu">
                            <input type='checkbox' name='XIAlmnus' value='Yes' id="XIyes" style="width: 50px; margin-top: 15px;"/>
                            <label for="XIyes" style=""> Nume si prenume</label>
                            <input type="textbox" name="XIyop" id="XIyop" value="Anonim*"/>&nbsp&nbsp
                            <input type="text" name="email" placeholder="Email">
                            <input  style="display: none" type="text" name="id_A" value="<?php echo  $item['id_articol'];?>">
                        </div>
                        <button name="adaugaComentariu" type="submit">Adauga comentariu</button>
                    </form>
                </div>
           </div>

           </div>
           <div class="columns  col-4 hide-md">
               <div class="colst" >
                    <div>
                        <h4 class="headrecent">Articole recente</h4>
                        <?php
                        foreach ($array1 as $item1) {
                        ?>
                        <a style="text-decoration: none;color:#1F2732" href="vizualizarearticol.php?id_art=<?php echo $item1["id_articol"];?>"><p><?php echo  $item1['titlul_articolului'];?></p></a>
                            <hr>
                        <?php } ?>
                    </div>
                    <div>
                        <h4 class="headalte">Articol random</h4>
                        <?php
                        foreach ($array3 as $item3) {
                            ?>
                           <p><?php echo  $item3['continut_citat'];?></p>
						   <p><?php echo  " by ".$item3['autor_citat'];?></p>
                            <hr>
                        <?php } ?>
                    </div>
               </div>
           </div>
        </div>
    </div>
  
<script src="./js/sidebar.js"></script>
<script src="./js/jquery-3.5.1.js"></script>
<script src="./js/checkboxComentariu.js"></script>
<script src="./js/animationClickLikeButton.js"></script>
<script src="./js/fade-inVizualizareArticol.js"></script>

</body>
</html> 
