<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageFeatured.php?page=1">Manage Featured</a></li>
		<li class="active">Update Featured</li>
	</ol>
	
	<h2>Update Featured</h2>
	<hr>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Content Name</label>
			<input type="text" name="name" class="form-control" id="inputTitle">
                        <input type="hidden" name="id" ><br />

		<div class="form-group">
			<label>Youtube Link</label>
			<input type="text" name="link" class="form-control" id="inputTitle">
                        <p class="help-block">ex : https://www.youtube.com/watch?v=<b>Qujsd4vkqFI</b></p>
		</div>
		
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>
	
	';
include "connection.php";

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $link = $_POST['link'];

   if(!empty( $_POST['name']) && !empty($_POST['link'])){
        $name = mysql_escape_string($_POST['name']);
        $link  = mysql_escape_string($_POST['link']);
        $admin_id = $_SESSION['back_id'];
        
        $insert = 'INSERT into tbl_video (name, link, admin_id) VALUES("'.$name.'","'.$link.'","'.$admin_id.'")';
       mysql_query($insert);
       header("Location: backManageFeatured.php?page=1");
   }else {
           $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageFeatured.php?page=1">Manage Featured</a></li>
		<li class="active">Update Featured</li>
	</ol>
	
	<h2>Update Featured</h2>
	<hr>
        <h4><p align ="left">All fields are required!</p></h4>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Content Name</label>
			<input type="text" name="name" class="form-control" id="inputTitle">
                        <input type="hidden" name="id" ><br />

		<div class="form-group">
			<label>Youtube Link</label>
			<input type="text" name="link" class="form-control" id="inputTitle">
                        <p class="help-block">ex : https://www.youtube.com/watch?v=<b>Qujsd4vkqFI</b></p>
		</div>
		
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>
	
	';
    }
    }
}
include "TemplateBackend.php";
?>

