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
                <h1>"Filozofie"</h1>
            </div>
            <div class="columns col-6 col-xl-12">
                <div class="imgart">
                    <div class="box overlay black">
                        <img src="img/creativity2.jpg" width="100%" >
                        <div class="texthover p-absolute">
                        <p>10/12/2020</p>
                        </div>
                        <div class="texthover1 p-absolute">
                        <p>By:Mihai Popa</p>
                        </div>
                        <div class="texthover2 p-absolute">
                            <p>Si uite asa elvis manaca linistit in timp ce mihaita moare pe interior si altele</p>
                        </div>
                    </div>
                </div>
                <div class="textart">
                    <h4>Pasta termo-conductoare Noctua si proprietatile ei</h4>
                </div>
            </div>
            <div class="columns col-6 col-xl-12 ">
                <div class="imgart">
                    <div class="box overlay black">
                        <img src="img/creativity2.jpg" width="100%" >
                        <div class="texthover p-absolute">
                        <p>10/12/2020</p>
                        </div>
                        <div class="texthover1 p-absolute">
                        <p>By:Mihai Popa</p>
                        </div>
                        <div class="texthover2 p-absolute">
                            <p>Si uite asa elvis manaca linistit in timp ce mihaita moare pe interior si altele</p>
                        </div>
                    </div>
                </div>
                <div class="textart">
                    <h4>Pasta termo-conductoare Noctua si proprietatile ei</h4>
                </div>
            </div>
            <div class="columns col-6 col-xl-12">
                <div class="imgart">
                    <div class="box overlay black">
                        <img src="img/creativity2.jpg" width="100%" >
                        <div class="texthover p-absolute">
                        <p>10/12/2020</p>
                        </div>
                        <div class="texthover1 p-absolute">
                        <p>By:Mihai Popa</p>
                        </div>
                        <div class="texthover2 p-absolute">
                            <p>Si uite asa elvis manaca linistit in timp ce mihaita moare pe interior si altele</p>
                        </div>
                    </div>
                </div>
                <div class="textart">
                    <h4>Pasta termo-conductoare Noctua si proprietatile ei</h4>
                </div>
            </div>
            <div class="columns col-6 col-xl-12">
                <div class="imgart">
                    <div class="box overlay black">
                        <img src="img/creativity2.jpg" width="100%" >
                        <div class="texthover p-absolute">
                        <p>10/12/2020</p>
                        </div>
                        <div class="texthover1 p-absolute">
                        <p>By:Mihai Popa</p>
                        </div>
                        <div class="texthover2 p-absolute">
                            <p>Si uite asa elvis manaca linistit in timp ce mihaita moare pe interior si altele</p>
                        </div>
                    </div>
                </div>
                <div class="textart">
                    <h4>Pasta termo-conductoare Noctua si proprietatile ei</h4>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.5.1.js"></script>
    <script>

    $(".box").mouseenter(function(){
    $(".texthover").fadeIn();
    $(".texthover1").fadeIn();
    $(".texthover2").show('1500');

});
    $(".box").mouseleave(function(){
    $(".texthover").hide();
    $(".texthover1").hide();
    $(".texthover2").hide();
});
</script>
<script src="./js/sidebar.js"></script>
</body>
</html> 
