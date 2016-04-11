<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
   
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageEbooks.php?page=1">Manage E-Books</a></li>
		<li class="active">Add New E-Books</li>
	</ol>
	
	<h2>Add New E-Books</h2>
	<hr>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control" id="inputTitle">
		</div>
                <div class="form-group">
			<label>Author</label>
			<input type="text" name="author" class="form-control" id="inputAuthor">
		</div>
		<div class="form-group">
			<label>Header Image</label>
			<input type="file" name="image" class="btn btn-default">
			<p class="help-block">Image file must be less than 500 kilobytes</p>
                        <p class="help-block">Image file must be in .jpg .png extension</p>             
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea name="desc" id="editor" rows="10" cols="80">
			</textarea>
			<script>
					CKEDITOR.replace( "editor" );
			</script>
		</div>
		<div class="form-group">
			<label>Download Link</label>
			<input type="text" name="link" class="form-control" id="inputAuthor">
		</div>
		<input type="submit" name="submit"value="Submit" class="btn btn-primary">
		
	</form>
	
	';
include "connection.php";

if(isset($_POST['submit'])){
   $author = $_POST['author'];
   $title = $_POST['title'];
   $description = $_POST['desc'];
   $link = $_POST['link'];
   $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
   $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
   $imageSize = mysql_real_escape_string($_FILES["image"]['size']);
   $maxsize    = 559710;
   
    if(!empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['desc'])&& !empty($_FILES["image"]["tmp_name"]) && !empty($_POST['link'])) {
    if (substr($imageType,0,5) == "image"){
        if($imageSize <= $maxsize){
        $date = mysql_escape_string($_POST['date']);
        $title = mysql_escape_string($_POST['title']);
        $author = mysql_escape_string($_POST['author']);
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $description = mysql_escape_string($_POST['desc']);
        $link = mysql_escape_string($_POST['link']);
        $admin_id = $_SESSION['back_id'];
        
    $insert = 'INSERT into tbl_ebook(image_name, image, author, title, description, download_link, admin_id) VALUES("'.$imageName.'","'.$imageData.'","'.$author.'","'.$title.'","'.$description.'","'.$link.'","'.$admin_id.'")';
       mysql_query($insert);
       header("Location: backManageEbooks.php?page=1");
        }else{
           $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageEbooks.php?page=1">Manage E-Books</a></li>
		<li class="active">Add New E-Books</li>
	</ol>
	
	<h2>Add New E-Books</h2>
	<hr>
        <h4><p align ="left">File must be less than 500 kilobytes.</p></h4>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control" id="inputTitle">
		</div>
                <div class="form-group">
			<label>Author</label>
			<input type="text" name="author" class="form-control" id="inputAuthor">
		</div>
		<div class="form-group">
			<label>Header Image</label>
			<input type="file" name="image" class="btn btn-default">
			<p class="help-block">Image file must be less than 500 kilobytes</p>
                        <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea name="desc" id="editor" rows="10" cols="80">
			</textarea>
			<script>
					CKEDITOR.replace( "editor" );
			</script>
		</div>
		<div class="form-group">
			<label>Download Link</label>
			<input type="text" name="link" class="form-control" id="inputAuthor">
		</div>
		<input type="submit" name="submit"value="Submit" class="btn btn-primary">
		
	</form>
	
	';
       }

        }else{
            $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageEbooks.php?page=1">Manage E-Books</a></li>
		<li class="active">Add New E-Books</li>
	</ol>
	
	<h2>Add New E-Books</h2>
	<hr>
        <h4><p align ="left">File Must be Image!</p></h4>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control" id="inputTitle">
		</div>
                <div class="form-group">
			<label>Author</label>
			<input type="text" name="author" class="form-control" id="inputAuthor">
		</div>
		<div class="form-group">
			<label>Header Image</label>
			<input type="file" name="image" class="btn btn-default">
			<p class="help-block">Image file must be less than 500 kilobytes</p>
                        <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea name="desc" id="editor" rows="10" cols="80">
			</textarea>
			<script>
					CKEDITOR.replace( "editor" );
			</script>
		</div>
		<div class="form-group">
			<label>Download Link</label>
			<input type="text" name="link" class="form-control" id="inputAuthor">
		</div>
		<input type="submit" name="submit"value="Submit" class="btn btn-primary">
		
	</form>
	
	';
       }
    }else{
           $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageEbooks.php?page=1">Manage E-Books</a></li>
		<li class="active">Add New E-Books</li>
	</ol>
	
	<h2>Add New E-Books</h2>
	<hr>
        <h4><p align ="left">All fields are required!</p></h4>
	<form method="post" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control" id="inputTitle">
		</div>
                <div class="form-group">
			<label>Author</label>
			<input type="text" name="author" class="form-control" id="inputAuthor">
		</div>
		<div class="form-group">
			<label>Header Image</label>
			<input type="file" name="image" class="btn btn-default">
			<p class="help-block">Image file must be less than 500 kilobytes</p>
                        <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea name="desc" id="editor" rows="10" cols="80">
			</textarea>
			<script>
					CKEDITOR.replace( "editor" );
			</script>
		</div>
		<div class="form-group">
			<label>Download Link</label>
			<input type="text" name="link" class="form-control" id="inputAuthor">
		</div>
		<input type="submit" name="submit"value="Submit" class="btn btn-primary">
		
	</form>
	
	';
}    
}}
    include 'TemplateBackend.php';
?>