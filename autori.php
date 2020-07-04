<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/styleautori.css">
    <link rel="stylesheet" href="./dist/spectre.css">
    <link rel="stylesheet" href="./dist/spectre-icons.css">
    <title>M&E | Blog</title>
    </head>
<body>

    <?php require "./navbar.inc.php" ?>
    
        <div class="columns col-9 col-lg-12" id="main">
            <div class="breton"  id="breton">
                <span id="iconita" style="font-size:30px; cursor:pointer; margin-top: 1px;" onclick="openNav()">&#9776;</span>
                <h1>"Autori"</h1>
            </div>
            <div class="fullBackground">
                <div class="gridContinutAutori">
                    <div class="containerAutor1">
                            <img class="imagineContainer" src="./img/mihu.jpg" width="300px" height="300px" alt="Mihu">
                            <div class="continutNume">
                                <p id="numeContainer" style="padding-bottom: 0;margin-bottom: 0;">Popa Mihai</p>
                                <p id="numeContainer" style="padding-top: 0; font-size: 22px; text-align: left; font-weight:600; color: #4DF0DA;">EDITOR CHIEF</p>
                            </div>
                        <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="containerAutor1" style="padding-top: 60px;">
                        <img class="imagineContainer" src="./img/elvi.jpg" width="300px" height="300px" alt="Elvis">
                        <div class="continutNume">
                            <p id="numeContainer"  style="padding-bottom: 0;margin-bottom: 0;">Lazar Elvis</p>
                            <p id="numeContainer"  style="padding-top: 0; font-size: 22px; text-align: left; font-weight:600; color: #4DF0DA;">EDITOR CHIEF</p>
                        </div>
                        <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    
                </div>
                <div class="backgroundSquare">
                    <div class="pinkSquare"></div>
                    <div class="purpleSquare"></div>
                    <div class="greenSquare"></div>
                </div>
                <div class="yellowSquare"></div>
            </div>
        </div>
    </div>
  
<script src="./js/sidebar.js"></script>
</body>
</html> 
