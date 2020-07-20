<?php
    require "dbc.inc.php";
    if (isset($_POST['update'])) {
        $id_art = $_POST['idArt'];
        $titlul = $_POST['titlulArticolului'];
        $continut = $_POST['continutArticol'];

        $sql = "UPDATE articol SET titlul_articolului='$titlul', continut_articol='$continut' where id_articol='$id_art';";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../dashboard/managerPostari.php?err");
            exit();
        }
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        header("Location: ../dashboard/managerPostari.php?success");
        exit();
    }