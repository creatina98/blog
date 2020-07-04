<?php

    require "dbc.inc.php";

    $categorie = $_GET['categorie'];
    $array = array();
    $sql = "SELECT * FROM articol WHERE categorie ='$categorie'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
    }else{
        echo "<h1 style='text-align: center'>Nici un articol scris, momentan</h1>";
    }
