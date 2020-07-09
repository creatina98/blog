<?php
require "dbc.inc.php";

if (isset($_POST['adaugaComentariu'])) {
    $nume = $_POST['XIyop'];
    if ($nume=="")
    {$nume="Anonim";}
    $email = $_POST['email'];
    $comentariu = $_POST['cometariu'];
    $id_A = $_POST['id_A'];
    $sql = "Insert into comentariu(id_articol,autor_Comentariu,comentariu,email)VALUES ('$id_A','$nume','$comentariu','$email'); ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../vizualizarearticol.php?eroaresql");
        exit();
    }
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    header("Location: ../vizualizarearticol.php?id_art=".$id_A);
    exit();
} else {
    header("Location: ../vizualizarearticol.php?eroare");
    exit();
}