<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageGallery.php?page=1">Manage Gallery</a></li>
		<li class="active">Add New Gallery</li>
	</ol>
	
	<h2>Add New Gallery</h2>
	<hr>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Gallery Name</label>
			<input type="text" name="name" class="form-control" id="inputTitle">
                        <input type="hidden" name="id" ><br />

		<div class="form-group">
			<label>Image for Gallery</label>
				<input type="file" name="image" class="btn btn-default" multiple>
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
		
		<input type="submit" name="submit" value="Add New" class="btn btn-primary">
		
	</form>
	
	';
include "connection.php";

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
   $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
   $imageSize = mysql_real_escape_string($_FILES["image"]['size']);
   $maxsize    = 559710;
   
    if(!empty($_POST['name']) && !empty($_FILES["image"]["tmp_name"])) {
    if (substr($imageType,0,5) == "image"){
        if($imageSize <= $maxsize){
        $name = mysql_escape_string($_POST['name']);
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $admin_id = $_SESSION['back_id'];
        
        $insert = 'INSERT into tbl_gallery (name, image_name, image, admin_id) VALUES("'.$name.'","'.$imageName.'","'.$imageData.'","'.$admin_id.'")';
       mysql_query($insert);
       header("Location: backManageGallery.php?page=1");
        }else{
            $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageGallery.php?page=1">Manage Gallery</a></li>
		<li class="active">Add New Gallery</li>
	</ol>
	
	<h2>Add New Gallery</h2>
	<hr>
        <h4><p align ="left">File must be less than 500 kilobytes.</p></h4>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Gallery Name</label>
			<input type="text" name="name" class="form-control" id="inputTitle">
                        <input type="hidden" name="id" ><br />

		<div class="form-group">
			<label>Image for Gallery</label>
				<input type="file" name="image" class="btn btn-default" multiple>
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
		
		<input type="submit" name="submit" value="Add New" class="btn btn-primary">
		
	</form>
	
	'; 
        }
    }else{
       $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageGallery.php?page=1">Manage Gallery</a></li>
		<li class="active">Add New Gallery</li>
	</ol>
	
	<h2>Add New Gallery</h2>
	<hr>
        <h4><p align ="left">File Must be Image!</p></h4>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Gallery Name</label>
			<input type="text" name="name" class="form-control" id="inputTitle">
                        <input type="hidden" name="id" ><br />

		<div class="form-group">
			<label>Image for Gallery</label>
				<input type="file" name="image" class="btn btn-default" multiple>
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
		
		<input type="submit" name="submit" value="Add New" class="btn btn-primary">
		
	</form>
	
	';  
    }
   }else {
           $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageGallery.php?page=1">Manage Gallery</a></li>
		<li class="active">Add New Gallery</li>
	</ol>
	
	<h2>Add New Gallery</h2>
	<hr>
        <h4><p align ="left">All fields are required!</p></h4>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Gallery Name</label>
			<input type="text" name="name" class="form-control" id="inputTitle">
                        <input type="hidden" name="id" ><br />

		<div class="form-group">
			<label>Image for Gallery</label>
				<input type="file" name="image" class="btn btn-default" multiple>
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
		
		<input type="submit" name="submit" value="Add New" class="btn btn-primary">
		
	</form>
	
	';
    }
    }
}
include "TemplateBackend.php";


?>