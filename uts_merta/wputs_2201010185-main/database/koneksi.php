<?php
    include("./konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Error");
    /*
    if($cnn){
        echo "koneksi sukses";
    }else{
        echo "Error";
    }
  
    mysqli_close($cnn);
    */
   
