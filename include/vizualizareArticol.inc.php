<?php
if (isset($_GET['id_art'])) {
    require "dbc.inc.php";
    $id_art = $_GET['id_art'];

    $array = array();
    $sql = "SELECT * FROM articol where id_articol=". $id_art;
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
    }
}
