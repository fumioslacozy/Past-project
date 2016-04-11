<?php
session_start();
    include "connection.php";
    

    $research = mysql_fetch_assoc(mysql_query("select * from tbl_content where id =6"));

    

    $content =  '<h3><p align ="left">Information Systems Research</p></h3>'
            .$research['description'];
    

            
    include 'Template.php';
    
?>
