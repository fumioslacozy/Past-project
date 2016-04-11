<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("Location: login.php");

   
} else {
        if($_SESSION['sess_subscription'] == "Free") {
            $content ='<h3><p align ="left">Upload News</p></h3>
                    <hr>
                    <h4><p align ="left">You must upgrade your subscription to upload News</p></h4>
                            <form method="post" action="upgrade_subscription.php" enctype="multipart/form-data">
                    <div class="form-group">
                              <div class="col-lg-12">
                                    <p align=center><input type="submit" name="Submit" class="btn btn-primary" value="Upgrade Now" name="submit" /></p>
                              </div><!-- /.col-lg-4 -->

                    </div>		
            </form>'; 
            include 'Template.php';
            exit();
        }
        
    $content ='
	<h3><p align ="left">Upload News</p></h3>
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
   $status = "Unapproved";
   
    if(!empty($_POST['date']) && !empty($_POST['title']) && !empty($_POST['desc'])&& !empty($_FILES["image"]["tmp_name"])) {
    if (substr($imageType,0,5) == "image"){
        if($imageSize <= $maxsize){
        $date = mysql_escape_string($_POST['date']);
        $title = mysql_escape_string($_POST['title']);
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $description = mysql_escape_string($_POST['desc']);
        $status = mysql_escape_string($status);
        $member_id = $_SESSION['sess_id'];
        
    $insert = 'INSERT into tbl_unapproved_news(status, datetime, image_name, image, title, description, member_id) VALUES("'.$status.'","'.$date.'","'.$imageName.'","'.$imageData.'","'.$title.'","'.$description.'","'.$member_id.'")';
       mysql_query($insert);    
       header("Location: uploadstatus.php?page=1");
       }else{
            $content ='
	<h3><p align ="left">Upload Event</p></h3>
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
	<h3><p align ="left">Upload Event</p></h3>
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
	<h3><p align ="left">Upload Event</p></h3>
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
    include 'Template.php';
}
?>