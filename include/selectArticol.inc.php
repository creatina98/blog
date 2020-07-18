<?php
require "dbc.inc.php" ;

        $array = array();
        $sql = "SELECT * FROM articol,autor where articol.id_autor=autor.id_autor order by id_articol ASC;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
            }
        }
