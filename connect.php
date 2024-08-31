<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    // nama database
    $dbname = 'aici';
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn){
        die('Gagal terhubung dengan database MySQL :' .mysqli_connect_error());
        echo("gagal");
    }
?>