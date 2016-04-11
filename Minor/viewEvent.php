<?php
session_start();

        include "connection.php";
        $id= $_GET['id'];
        
        $view = mysql_fetch_assoc(mysql_query("select * from tbl_event where id=$id"));
        
    if(!isset($_SESSION["sess_user"]) && $view['availability'] == "Members Only"){    
        $content='            <h3>Event</h3>
            <hr>
            <div class="form-group">
                <label>You cannot see this event</label>
            </div>';	
    }else{
    $content='	

	<h3>'.$view['title'].'</h3>
	<h5>'.$view['start_date'].' - '.$view['end_date'].'</h5>
        <hr>
        <p align="center"><img src="showimage_event.php?id='.$id.'" class="img-responsive img-rounded" width="300px" ></p><br />
        <p>'.$view['description'].'</p>
		<hr>
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
	<fb:comments href="oniichanpro.com/viewEvent.php?id='.$id.'"></fb:comments>

';
    }
include "Template.php";
?>