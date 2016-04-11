<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
   
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageNews.php?page=1">Manage News</a></li>
		<li class="active">Add New News</li>
	</ol>
	
	<h2>Add New News</h2>
	<hr>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
                            <label>News Title</label>
				<input type="text" name="title" class="form-control" id="inputTitle">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
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

			<input type="submit" name="submit"value="Submit" class="btn btn-primary">
		</form>
	
	';
    
include "connection.php";

if(isset($_POST['submit'])){
   $date = $_POST['date'];
   $title = $_POST['title'];
   $description = $_POST['desc'];
   $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
   $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
   $imageSize = mysql_real_escape_string($_FILES["image"]['size']);
   $maxsize    = 559710;
   
    if(!empty($_POST['date']) && !empty($_POST['title']) && !empty($_POST['desc'])&& !empty($_FILES["image"]["tmp_name"])) {
    if (substr($imageType,0,5) == "image"){
        if($imageSize <= $maxsize){        
        $date = mysql_escape_string($_POST['date']);
        $title = mysql_escape_string($_POST['title']);
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $description = mysql_escape_string($_POST['desc']);
        $admin_id = $_SESSION['back_id'];
        
    $insert = 'INSERT into tbl_news(datetime,image_name, image, title, description, admin_id) VALUES("'.$date.'", "'.$imageName.'","'.$imageData.'","'.$title.'","'.$description.'","'.$admin_id.'")';
       mysql_query($insert);
       header("Location: backManageNews.php?page=1");
       }else{
            $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageNews.php?page=1">Manage News</a></li>
		<li class="active">Add New News</li>
	</ol>
	
	<h2>Add New News</h2>
	<hr>
        <h4><p align ="left">File must be less than 500 kilobytes.</p></h4>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
                            <label>News Title</label>
				<input type="text" name="title" class="form-control" id="inputTitle">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
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

			<input type="submit" name="submit"value="Submit" class="btn btn-primary">
		</form>
	
	';   
       }
       }else{
            $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageNews.php?page=1">Manage News</a></li>
		<li class="active">Add New News</li>
	</ol>
	
	<h2>Add New News</h2>
	<hr>
        <h4><p align ="left">File Must be Image!</p></h4>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
                            <label>News Title</label>
				<input type="text" name="title" class="form-control" id="inputTitle">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
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

			<input type="submit" name="submit"value="Submit" class="btn btn-primary">
		</form>
	
	';   
       }
    }else{
        $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageNews.php?page=1">Manage News</a></li>
		<li class="active">Add New News</li>
	</ol>
	
	<h2>Add New News</h2>
	<hr>
        <h4><p align ="left">All fields are required!</p></h4>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
                            <label>News Title</label>
				<input type="text" name="title" class="form-control" id="inputTitle">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
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

			<input type="submit" name="submit"value="Submit" class="btn btn-primary">
		</form>
	
	';   
}    
}
    include 'TemplateBackend.php';
}
?>