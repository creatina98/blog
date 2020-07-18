<?php
if (isset($_POST['adaugaArticol'])){
    require 'dbc.inc.php';

    $data =  date("Y-m-d");
    $ora =  date("H:i:s");

    $titlul = $_POST['titlulArticolului'];
    $content = $_POST['content'];
    $categorie = $_POST['categorie'];
    $autor = $_POST['autor'];

    $image = $_FILES['image']['name'];
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "png", "jpeg", "gif");



    if(empty($content)){
        header("Location: ../dashboard/admin.php?emptyFields");
        exit();
    }else{
        $sql = "INSERT INTO articol (titlul_articolului, continut_articol,id_autor,data_articol,poza_articol, categorie,ora) values (?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../dashboard/admin.php?error=sqlerror");
            exit();
        }else{
            $fileNameNew = uniqid('',true).".".$imageFileType;
            mysqli_stmt_bind_param($stmt, "ssissss", $titlul,$content,$autor,$data,$fileNameNew,$categorie,$ora);
            mysqli_stmt_execute($stmt);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $fileNameNew);
        }
    }

    header("Location: ../dashboard/admin.php?success");
    exit();
}