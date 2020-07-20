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

$array1 = array();
$sql1 = "SELECT * FROM articol limit 6 ;";
$result1 = mysqli_query($conn, $sql1);
$resultCheck1 = mysqli_num_rows($result1);

if ($resultCheck1 > 0) {
    while ($row1 = mysqli_fetch_assoc($result1)) {
        $array1[] = $row1;
    }
}
  $array2 = array();
   $sql2 =  "SELECT * FROM comentariu,articol WHERE comentariu.id_articol=articol.id_articol and articol.id_articol=". $_GET['id_art'];
   $result2 = mysqli_query($conn, $sql2);
   $resultCheck2 = mysqli_num_rows($result2);

   if ($resultCheck2 > 0) {
    while ($row2 = mysqli_fetch_assoc($result2)) {
         $array2[] = $row2;
         }
   }else { ?> <style> #titluLista{display: none;} .listaComentarii{display: none}</style> <?php }

$array3 = array();
$sql3 = "SELECT * FROM citat  order by rand() limit 1 ;";
$result3 = mysqli_query($conn, $sql3);
$resultCheck3 = mysqli_num_rows($result3);

if ($resultCheck3 > 0) {
while ($row3 = mysqli_fetch_assoc($result3)) {
$array3[] = $row3;
}
}
