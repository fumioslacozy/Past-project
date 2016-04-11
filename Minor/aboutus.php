<?php
session_start();
    include "connection.php";


    $aboutasii = mysql_fetch_assoc(mysql_query("select * from tbl_content where id =1"));
    $visimisi = mysql_fetch_assoc(mysql_query("select * from tbl_content where id =2"));

    

    $content =  '<h3><p align ="left">About ASII</p></h3>'
            .$aboutasii['description'].'<br>'.
            '<h3><p align ="left">Visi & Misi ASII</p></h3>'
            .$visimisi['description'];
    
 
include 'Template.php';
    
?>
