<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSlider.php?page=1">Manage Slider</a></li>
		<li class="active">Add Slider</li>
	</ol>
	
	<h2>Add Slider</h2>
	<hr>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label>Slider Name</label>
				<input type="text" name="name" class="form-control" id="inputTitleEvent">
			<input type="hidden" name="id"><br />   
			<div class="form-group">
				<label>Caption</label>
				<input type="text" name="caption"  class="form-control" id="inputCaptionSlider">
			</div>
			<div class="form-group">
				<label>Button Placeholder</label>
				<input type="text" name="placeholder" class="form-control" id="inputButton Placeholder" >
			</div>
                        <div class="form-group">
				<label>Link</label>
				<input type="text" name="link" class="form-control" id="Link" >
			</div>
			<div class="form-group">
				<label>Slider Image</label>
				<input type="file" name="image" class="btn btn-default">
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
			</div>


			<input type="submit" name="submit"value="Submit" class="btn btn-primary">
			
		</form>
	
	';
include "connection.php";

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $caption = $_POST['caption'];
   $placeholder = $_POST['placeholder'];
   $link = $_POST['link'];
   $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
   $imageType = mysql_real_escape_string($_FILES["image"]["type"]);  
   $imageSize = mysql_real_escape_string($_FILES["image"]['size']);
   $maxsize    = 559710;
   
   if(!empty($_POST['name']) && !empty($_POST['caption']) && !empty($_POST['placeholder'])&& !empty($_POST['link']) && !empty($_FILES["image"]["tmp_name"])) {
        if (substr($imageType,0,5) == "image"){
            if($imageSize <= $maxsize){
            $name = mysql_escape_string($_POST['name']);
            $caption = mysql_escape_string($_POST['caption']);
            $placeholder = mysql_escape_string($_POST['placeholder']);
            $link = mysql_escape_string($_POST['link']);
            $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
            $admin_id = $_SESSION['back_id'];
            
       $insert = 'INSERT into tbl_slider(image_name, image, name, caption, placeholder, link, admin_id) VALUES("'.$imageName.'","'.$imageData.'","'.$name.'","'.$caption.'","'.$placeholder.'","'.$link.'","'.$admin_id.'")';
       mysql_query($insert);
       header("Location: backManageSlider.php?page=1");
       }else{
                $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSlider.php?page=1">Manage Slider</a></li>
		<li class="active">Add Slider</li>
	</ol>
	
	<h2>Add Slider</h2>
	<hr>
        <h4><p align ="left">File must be less than 500 kilobytes.</p></h4>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label>Slider Name</label>
				<input type="text" name="name" class="form-control" id="inputTitleEvent">
			<input type="hidden" name="id"><br />   
			<div class="form-group">
				<label>Caption</label>
				<input type="text" name="caption"  class="form-control" id="inputCaptionSlider">
			</div>
			<div class="form-group">
				<label>Button Placeholder</label>
				<input type="text" name="placeholder" class="form-control" id="inputButton Placeholder" >
			</div>
                        <div class="form-group">
				<label>Link</label>
				<input type="text" name="link" class="form-control" id="Link" >
			</div>
			<div class="form-group">
				<label>Slider Image</label>
				<input type="file" name="image" class="btn btn-default">
				<p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
			</div>


			<input type="submit" name="submit"value="Submit" class="btn btn-primary">
			
		</form>
	
	';
       }
       }else{
                $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSlider.php?page=1">Manage Slider</a></li>
		<li class="active">Add Slider</li>
	</ol>
	
	<h2>Add Slider</h2>
	<hr>
        <h4><p align ="left">File Must be Image!</p></h4>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label>Slider Name</label>
				<input type="text" name="name" class="form-control" id="inputTitleEvent">
			<input type="hidden" name="id"><br />   
			<div class="form-group">
				<label>Caption</label>
				<input type="text" name="caption"  class="form-control" id="inputCaptionSlider">
			</div>
			<div class="form-group">
				<label>Button Placeholder</label>
				<input type="text" name="placeholder" class="form-control" id="inputButton Placeholder" >
			</div>
                        <div class="form-group">
				<label>Link</label>
				<input type="text" name="link" class="form-control" id="Link" >
			</div>
			<div class="form-group">
				<label>Slider Image</label>
				<input type="file" name="image" class="btn btn-default">
				<p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
			</div>


			<input type="submit" name="submit"value="Submit" class="btn btn-primary">
			
		</form>
	
	';
       }
       }else{
               $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSlider.php?page=1">Manage Slider</a></li>
		<li class="active">Add Slider</li>
	</ol>
	
	<h2>Add Slider</h2>
	<hr>
        <h4><p align ="left">All fields are required!</p></h4>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label>Slider Name</label>
				<input type="text" name="name" class="form-control" id="inputTitleEvent">
			<input type="hidden" name="id"><br />   
			<div class="form-group">
				<label>Caption</label>
				<input type="text" name="caption"  class="form-control" id="inputCaptionSlider">
			</div>
			<div class="form-group">
				<label>Button Placeholder</label>
				<input type="text" name="placeholder" class="form-control" id="inputButton Placeholder" >
			</div>
                        <div class="form-group">
				<label>Link</label>
				<input type="text" name="link" class="form-control" id="Link" >
			</div>
			<div class="form-group">
				<label>Slider Image</label>
				<input type="file" name="image" class="btn btn-default">
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
			</div>


			<input type="submit" name="submit"value="Submit" class="btn btn-primary">
			
		</form>
	
	';
       }
   }
}
include "TemplateBackend.php";
?>