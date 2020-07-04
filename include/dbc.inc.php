<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "blog";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn){
    die("Conexiune esuata: ".mysqli_connect_error());
}