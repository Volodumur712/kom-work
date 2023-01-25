<?php
// $servername = "sql207.epizy.com";
//      $database = "epiz_33448594_123";
//      $username = "epiz_33448594";
//      $password = "Pcgoy8OclCguS";

    // нова
    // $servername = "sql207.epizy.com";
    //  $database = "epiz_33448594_123";
    //  $username = "epiz_33448594";
    //  $password = "Pcgoy8OclCguS";

     // заблокована
    //  $servername = "sql11.freemysqlhosting.net";
    //  $database = "sql11591844";
    //  $username = "sql11591844";
    //  $password = "rPP8UYAFSx"; 

    // загальна
      $servername = "localhost";
      $database = "122";
      $username = "root";
      $password = ""; 
    
    // створення зєднання
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }