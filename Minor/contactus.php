<?php
session_start();
    include "connection.php";


    $contact = mysql_fetch_assoc(mysql_query("select * from tbl_content where id =5"));
 
    

    $content =  '<h3><p align ="left">Contact Us</p></h3>'
            .$contact['description'];
            
 
include 'Template.php';
    
?>
