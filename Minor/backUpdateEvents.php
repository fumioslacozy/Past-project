<?php
session_start();
ob_start();
   include "connection.php";
    $id= $_GET['id'];
    $res= mysql_query("Select * from tbl_event where id='$id'");
    $row= mysql_fetch_array($res);
    
    if ($row[7] == "Members Only") {
        $check = "checked";
    }else{
        $check = "";
    }
    

if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageEvents.php?page=1">Manage Events</a></li>
		<li class="active">Update Events</li>
	</ol>
	
	<h2>Update Event</h2>
	<hr>
		<form action="backUpdateEvents.php?id='.$id.'" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Event Title</label>
				<input type="text" name="newname" value="'.$row[5].'" class="form-control" id="inputTitle">
                                <input type="hidden" name="id" value="'.$row[0].'"><br />
                        
			<div class="form-group">
				<label>Start Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="start_date" class="form-control" value="'.$row[1].'"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>End Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="end_date" class="form-control" value="'.$row[2].'"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
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
				<textarea name="newdesc" id="editor" rows="10" cols="80">
                                '.$row[6].'
				</textarea>
				<script>
						CKEDITOR.replace( "editor" );
				</script>
			</div>
                        <div class="form-group">
                                <label>Availability</label><br/>
				<input type="checkbox" name ="availability" value="Members Only" '.$check.'> Members Only</input>
			</div>

			<input type="submit" name="submit" value="Update" class="btn btn-primary">
			
		</form>
	
	';
    
if (isset($_POST['submit'])) {
            if(empty($_POST['availability'])){
                $availability = "Public";
            }else{
                $availability = $_POST['availability'];
            }
            $newname = $_POST['newname'];
            $newdesc = $_POST['newdesc'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $id =$_POST['id'];
            $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
            $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
            $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
            $imageSize = mysql_real_escape_string($_FILES["image"]['size']);
            $maxsize    = 559710;
            $admin_id = $_SESSION['back_id'];
            if (!empty($_FILES["image"]["tmp_name"])){ 
                if (substr($imageType,0,5) == "image"){
                    if($imageSize <= $maxsize){
                $res = mysql_query("UPDATE tbl_event SET title='$newname' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET description='$newdesc' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET start_date='$start_date' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET end_date='$end_date' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET image_name='$imageName' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET image='$imageData' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET availability='$availability' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET admin_id='$admin_id' where id='$id'");
                header("Location: backManageEvents.php?page=1");
                    }else{
                        $content ='
                            <ol class="breadcrumb">
                                    <li><a href="backHome.php">Home</a></li>
                                    <li><a href="backManageEvents.php?page=1">Manage Events</a></li>
                                    <li class="active">Update Events</li>
                            </ol>

                            <h2>Update Event</h2>
                            <hr>
                            		<form action="backUpdateEvents.php?id='.$id.'" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Event Title</label>
				<input type="text" name="newname" value="'.$row[5].'" class="form-control" id="inputTitle">
                                <input type="hidden" name="id" value="'.$row[0].'"><br />
                        
			<div class="form-group">
				<label>Start Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="start_date" class="form-control" value="'.$row[1].'"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>End Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="end_date" class="form-control" value="'.$row[2].'"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
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
				<textarea name="newdesc" id="editor" rows="10" cols="80">
                                '.$row[6].'
				</textarea>
				<script>
						CKEDITOR.replace( "editor" );
				</script>
			</div>
                        <div class="form-group">
                                <label>Availability</label><br/>
				<input type="checkbox" name ="availability" value="Members Only" '.$check.'> Members Only</input>
			</div>

			<input type="submit" name="submit" value="Update" class="btn btn-primary">
			
		</form>
	
	';
                    }
                }else {
                    $content ='
                        <ol class="breadcrumb">
                                <li><a href="backHome.php">Home</a></li>
                                <li><a href="backManageEvents.php?page=1">Manage Events</a></li>
                                <li class="active">Update Events</li>
                        </ol>

                        <h2>Update Event</h2>
                        <hr>
                       		<form action="backUpdateEvents.php?id='.$id.'" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Event Title</label>
				<input type="text" name="newname" value="'.$row[5].'" class="form-control" id="inputTitle">
                                <input type="hidden" name="id" value="'.$row[0].'"><br />
                        
			<div class="form-group">
				<label>Start Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="start_date" class="form-control" value="'.$row[1].'"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>End Date</label>
			<div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="end_date" class="form-control" value="'.$row[2].'"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
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
				<textarea name="newdesc" id="editor" rows="10" cols="80">
                                '.$row[6].'
				</textarea>
				<script>
						CKEDITOR.replace( "editor" );
				</script>
			</div>
                        <div class="form-group">
                                <label>Availability</label><br/>
				<input type="checkbox" name ="availability" value="Members Only" '.$check.'> Members Only</input>
			</div>

			<input type="submit" name="submit" value="Update" class="btn btn-primary">
			
		</form>
	
	';
                }
            }else{
                $res = mysql_query("UPDATE tbl_event SET title='$newname' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET description='$newdesc' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET start_date='$start_date' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET end_date='$end_date' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET availability='$availability' where id='$id'");
                $res = mysql_query("UPDATE tbl_event SET admin_id='$admin_id' where id='$id'");
                header("Location: backManageEvents.php?page=1");
            }
}    
}        
    include 'TemplateBackend.php';
    
?>