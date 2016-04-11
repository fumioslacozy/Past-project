<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
   
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSocialMedia.php?page=1">Manage Social Media</a></li>
		<li class="active">Add New Social Media</li>
	</ol>
	
	<h2>Add New Social Media</h2>
	<hr>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="newname"  class="form-control" id="inputTitle">
                </div>
		<div class="form-group">
				<label>Header Image</label>
				<input type="file" name="image" class="btn btn-default">
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
                <div class="form-group">
			<label>Link</label>
			<input type="text" name="link" class="form-control" id="inputLink">
                </div>
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';
	
include "connection.php";

if(isset($_POST['submit'])){
   $name = $_POST['newname'];
   $link = $_POST['link'];
   $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
   $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
   $imageSize = mysql_real_escape_string($_FILES["image"]['size']);
   $maxsize    = 559710;
   
    if(!empty($_POST['newname']) && !empty($_POST['link']) && !empty($_FILES["image"]["tmp_name"])) {
    if (substr($imageType,0,5) == "image"){
        if($imageSize <= $maxsize){
        $name = mysql_escape_string($_POST['newname']);
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $description = mysql_escape_string($_POST['desc']);
        $link = mysql_escape_string($_POST['link']);
        $admin_id = $_SESSION['back_id'];
        
    $insert = 'INSERT into tbl_socialmedia(image_name, image, name, link, admin_id) VALUES("'.$imageName.'","'.$imageData.'","'.$name.'","'.$link.'","'.$admin_id.'")';
       mysql_query($insert);
       header("Location: backManageSocialMedia.php?page=1");
        }else{
           $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSocialMedia.php?page=1">Manage Social Media</a></li>
		<li class="active">Add New Social Media</li>
	</ol>
	
	<h2>Add New Social Media</h2>
	<hr>
        <h4><p align ="left">File must be less than 500 kilobytes.</p></h4>
		<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="newname"  class="form-control" id="inputTitle">
                </div>
		<div class="form-group">
				<label>Header Image</label>
				<input type="file" name="image" class="btn btn-default">
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
                <div class="form-group">
			<label>Link</label>
			<input type="text" name="link" class="form-control" id="inputLink">
                </div>
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';
       }

        }else{
            $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSocialMedia.php?page=1">Manage Social Media</a></li>
		<li class="active">Add New Social Media</li>
	</ol>
	
	<h2>Add New Social Media</h2>
	<hr>
        <h4><p align ="left">File Must be Image!</p></h4>
		<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="newname"  class="form-control" id="inputTitle">
                </div>
		<div class="form-group">
				<label>Header Image</label>
				<input type="file" name="image" class="btn btn-default">
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
                <div class="form-group">
			<label>Link</label>
			<input type="text" name="link" class="form-control" id="inputLink">
                </div>
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';
       }
    }else{
           $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSocialMedia.php?page=1">Manage Social Media</a></li>
		<li class="active">Add New Social Media</li>
	</ol>
	
	<h2>Add New Social Media</h2>
	<hr>
        <h4><p align ="left">All fields are required!</p></h4>
		<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="newname"  class="form-control" id="inputTitle">
                </div>
		<div class="form-group">
				<label>Header Image</label>
				<input type="file" name="image" class="btn btn-default">
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
                <div class="form-group">
			<label>Link</label>
			<input type="text" name="link" class="form-control" id="inputLink">
                </div>
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';
}    
}}
    include 'TemplateBackend.php';
?>