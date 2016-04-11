<?php
session_start();
    include "connection.php";


    $career = mysql_fetch_assoc(mysql_query("select * from tbl_content where id =4"));
  

    

    $content =  '<h3><p align ="left">A Future in Information Systems</p></h3>'
            .$career['description'];
    
 
include 'Template.php';
    
?>
