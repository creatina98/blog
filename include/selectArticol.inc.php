<?php
require "dbc.inc.php" ;

        $array = array();
        $sql = "SELECT * FROM articol ;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
            }
        }
