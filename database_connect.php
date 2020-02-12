<?php

  function dbconnect($dbname) {
    $servername = "mysql";
    $username = "Tara";
    $password = "MyLittleMermaid";

    if(!$dbname) {
        $dbname = "...letter_art";
    }

    $connect = mysql_connect($servername, $username, $password) or die(mysql_error());
    mysql_select_db($dbname) or die(mysql_error());
    
    return $connect;
  }

  //Older version of the function
//  function dbconnect() {
//    $servername = "mysql";
//    $username = "Tara";
//    $password = "MyLittleMermaid";
//    $dbname = "...letter_art";

//    mysql_connect($servername, $username, $password) or die(mysql_error());
//    mysql_select_db($dbname) or die(mysql_error());
//  }

?>