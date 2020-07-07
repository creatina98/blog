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
                <p>11 iun. 2020, 20:32</p>
               </div>
         
            <img class="headimg" src="./img/creativity.jpg">
            <p><?php echo  $item['continut_articol'];?> </p>


               <?php
               }
               ?>
           <div class="boxContinutComentarii">
                <hr>
                <div class="boxAperciereArticol">
                    <h1 class="text-center">Imi place acest articol</h1>
                    <button id="likeButton" style="font-size:24px"><i class="fa fa-heart fe-pulse-w-pause" style="font-size: 30px;"></i></button>
                </div>
                <hr>
                <h2>Lista comentarii</h2>
                <div class="listaComentarii">
                    <div class="boxImgScrisAutor">
                        <img src="./img/icon9.png" alt="icon" width="55px" height="58px">
                        <div class="autorCometariu">
                            <p style="margin-bottom: 0;">Anonim</p>
                            <p>11 iun. 2020, 20:32</p>
                        </div>
                   </div>
                   <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                </div>
                
                <div class="inputAddComentarii">
                    <h2>Lasa un feedback</h2>
                    <form accept="" method="POST">
                        <textarea placeholder="Comentariu*"></textarea>
                        <div class="inputBoxComentariu">
                            <input type='checkbox' name='XIAlmnus' value='Yes' id="XIyes" style="width: 50px; margin-top: 15px;"/>
                            <label for="XIyes" style=""> Nume si prenume</label>
                            <input type="textbox" name="XIyop" id="XIyop" value="Anonim*"/>&nbsp&nbsp
                            <input type="text" placeholder="Email">
                        </div>
                        <button>Adauga comentariu</button>
                    </form>
                </div>
           </div>

           </div>
           <div class="columns  col-4 hide-md">
               <div class="colst" >
                    <div>
                        <h4 class="headrecent">Articole recente</h4>
                        <?php
                        $array1 = array();
                        $sql1 = "SELECT * FROM articol limit 5 ;";
                        $result1 = mysqli_query($conn, $sql1);
                        $resultCheck1 = mysqli_num_rows($result1);

                        if ($resultCheck1 > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                $array1[] = $row1;
                            }
                        } ?>
                        <?php
                        foreach ($array1 as $item1) {
                        ?>
                        <p><?php echo  $item1['titlul_articolului'];?></p>
                          <hr>
                        <?php } ?>


                    </div>
                    <div>
                        <h4 class="headalte">Alte sectiuni</h4>
                        <p>Ce este lumea? Cum sa ne integram... Multa fericire si baniiiiii</p>
                        <hr>
                        <p>Ce este lumea? Cum sa ne integram... Multa fericire si baniiiiii</p>
                        <hr>
                        <p>Ce este lumea? Cum sa ne integram... Multa fericire si baniiiiii</p>
                        <hr>
                        <p>Ce este lumea? Cum sa ne integram... Multa fericire si baniiiiii</p>
                        <hr>
                        <p>Ce este lumea? Cum sa ne integram... Multa fericire si baniiiiii</p>
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
