<?php
    include 'index.php';
  //  include 'p.php';
//    include 'dbService.php';
  
 
    $jscuont = $_POST[math];
    echo $jscuont;
    $cuont = "UPDATE `howmeny` SET `count`= math  WHERE count 1";
    
    mysql_query($cuont);
?>