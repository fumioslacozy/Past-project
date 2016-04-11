<?php
session_start();
        include "connection.php";
        $id= $_GET['id'];
        
        $view = mysql_fetch_assoc(mysql_query("select * from tbl_news where id=$id"));

    $content='	

	<h3>'.$view['title'].'</h3>
	<h5>'.$view['datetime'].'</h5>
        <hr>
        <p align="center"><img src="showimage_news.php?id='.$id.'" class="img-responsive img-rounded" width="300px" ></p><br />
        <p>'.$view['description'].'</p>
		<hr>
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
	<fb:comments href="oniichanpro.com/viewNews.php?id='.$id.'"></fb:comments>
';

include "Template.php";
?>