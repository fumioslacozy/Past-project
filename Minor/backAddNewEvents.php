<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageEvents.php?page=1">Manage Events</a></li>
		<li class="active">Add New Events</li>
	</ol>
	
	<h2>Add New Event</h2>
	<hr>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label>Event Title</label>
				<input type="text" name="title" class="form-control" id="inputTitle">
                                </div>
			<div class="form-group">
				<label>Start Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="start_date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>End Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="end_date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
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
			<div class="form-group">
                                <label>Availability</label><br/>
				<input type="checkbox" name ="availability" value="Members Only"> Members Only</input>
			</div>

			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			
		</form>
	
	';
 include "connection.php";

if(isset($_POST['submit'])){
   $start_date = $_POST['start_date'];
   $end_date = $_POST['end_date'];
   $title = $_POST['title'];
   $description = $_POST['desc'];
   $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
   $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
   $imageSize = mysql_real_escape_string($_FILES["image"]['size']);
   $maxsize    = 559710;
   
    if(!empty($_POST['start_date']) && !empty($_POST['end_date']) && !empty($_POST['title']) && !empty($_FILES["image"]["tmp_name"])) {
    if (substr($imageType,0,5) == "image"){
        if($imageSize <= $maxsize){
            if(empty($_POST['availability'])){
                $availability = "Public";
            }else{
                $availability = $_POST['availability'];
            }
        $start_date = mysql_escape_string($_POST['start_date']);
        $end_date = mysql_escape_string($_POST['end_date']);
        $title = mysql_escape_string($_POST['title']);
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $description = mysql_escape_string($_POST['desc']);
        $availability = mysql_escape_string($availability);
        $admin_id = $_SESSION['back_id'];
        
    $insert = 'INSERT into tbl_event(start_date, end_date, image_name, image, title, description, availability, admin_id) VALUES("'.$start_date.'","'.$end_date.'","'.$imageName.'","'.$imageData.'","'.$title.'","'.$description.'","'.$availability.'","'.$admin_id.'")';
       mysql_query($insert);
       header("Location: backManageEvents.php?page=1");
        }else{
                         $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageEvents.php?page=1">Manage Events</a></li>
		<li class="active">Add New Events</li>
	</ol>
	
	<h2>Add New Event</h2>
	<hr>
        <h4><p align ="left">File must be less than 500 kilobytes.</p></h4>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label>Event Title</label>
				<input type="text" name="title" class="form-control" id="inputTitle">
                                </div>
			<div class="form-group">
				<label>Start Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="start_date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>End Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="end_date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
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
			<div class="form-group">
                                <label>Availability</label><br/>
				<input type="checkbox" name ="availability" value="Members Only"> Members Only</input>
			</div>

			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			
		</form>
	
	';
       }
       }else{
            $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageEvents.php?page=1">Manage Events</a></li>
		<li class="active">Add New Events</li>
	</ol>
	
	<h2>Add New Event</h2>
	<hr>
        <h4><p align ="left">File Must be Image!</p></h4>
				<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label>Event Title</label>
				<input type="text" name="title" class="form-control" id="inputTitle">
                                </div>
			<div class="form-group">
				<label>Start Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="start_date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>End Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="end_date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
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
			<div class="form-group">
                                <label>Availability</label><br/>
				<input type="checkbox" name ="availability" value="Members Only"> Members Only</input>
			</div>

			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			
		</form>
	
	';
       }
    }else{
            $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageEvents.php?page=1">Manage Events</a></li>
		<li class="active">Add New Events</li>
	</ol>
	
	<h2>Add New Event</h2>
	<hr>
        <h4><p align ="left">All fields are required!</p></h4>
				<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label>Event Title</label>
				<input type="text" name="title" class="form-control" id="inputTitle">
                                </div>
			<div class="form-group">
				<label>Start Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="start_date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>End Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="end_date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
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
			<div class="form-group">
                                <label>Availability</label><br/>
				<input type="checkbox" name ="availability" value="Members Only"> Members Only</input>
			</div>

			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			
		</form>
	
	';
}    
}
    include 'TemplateBackend.php';
}
?>