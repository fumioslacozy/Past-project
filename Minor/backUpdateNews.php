<?php
session_start();
ob_start();
   include "connection.php";
    $id= $_GET['id'];
    $res= mysql_query("Select * from tbl_news where id='$id'");
    $row= mysql_fetch_array($res);
    
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {

    $content ='		
        <ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageNews.php?page=1">Manage News</a></li>
		<li class="active">Update News</li>
	</ol>
	
	<h2>Update News</h2>
	<hr>
		<form action="backUpdateNews.php?id='.$id.'" method="post" enctype="multipart/form-data">
                        <div class="form-group">
				<label>News Title</label>
				<input type="text" name="newname" value="'.$row[4].'" class="form-control" id="inputTitle">
                                <input type="hidden" name="id" value="'.$row[0].'"><br />
                        <div class="form-group">
                            <label>Date</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="date" class="form-control" value="'.$row[1].'"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>Header Image</label>
				<input type="file" name="image" class="btn btn-default" multiple>
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="newdesc" id="editor" rows="10" cols="80">
                                '.$row[5].'
				</textarea>
				<script>
						CKEDITOR.replace( "editor" );
				</script>
			</div>

			<input type="submit" name="submit" value="Update" class="btn btn-primary">
			
		</form>';
    
if (isset($_POST['submit'])) {
            $newname = $_POST['newname'];
            $newdesc = $_POST['newdesc'];
            $date = $_POST['date'];
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
                        $res = mysql_query("UPDATE tbl_news SET title='$newname' where id='$id'");
                        $res = mysql_query("UPDATE tbl_news SET description='$newdesc' where id='$id'");
                        $res = mysql_query("UPDATE tbl_news SET datetime='$date' where id='$id'");
                        $res = mysql_query("UPDATE tbl_news SET image_name='$imageName' where id='$id'");
                        $res = mysql_query("UPDATE tbl_news SET image='$imageData' where id='$id'");
                        $res = mysql_query("UPDATE tbl_news SET admin_id='$admin_id' where id='$id'");
                        header("Location: backManageNews.php?page=1");
                    }else{
                         $content ='		
                        <ol class="breadcrumb">
                                <li><a href="backHome.php">Home</a></li>
                                <li><a href="backManageNews.php?page=1">Manage News</a></li>
                                <li class="active">Update News</li>
                        </ol>

                        <h2>Update News</h2>
                        <hr>
                        <h4><p align ="left">File must be less than 500 kilobytes.</p></h4>
                                <form action="backUpdateNews.php?id='.$id.'" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                                <label>News Title</label>
                                                <input type="text" name="newname" value="'.$row[4].'" class="form-control" id="inputTitle">
                                                <input type="hidden" name="id" value="'.$row[0].'"><br />
                                        <div class="form-group">
                                            <label>Date</label>
                                        <div id="sandbox-container">
                                            <div class="input-group date">
                                                <input type="text" name="date" class="form-control" value="'.$row[1].'"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Header Image</label>
                                                <input type="file" name="image" class="btn btn-default" multiple>
                                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                                <p class="help-block">Image file must be in .jpg .png extension</p>  
                                        </div>
                                        <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="newdesc" id="editor" rows="10" cols="80">
                                                '.$row[5].'
                                                </textarea>
                                                <script>
                                                                CKEDITOR.replace( "editor" );
                                                </script>
                                        </div>

                                        <input type="submit" name="submit" value="Update" class="btn btn-primary">

                                </form>';
                    }
                }else{               
                     $content ='		
                        <ol class="breadcrumb">
                                <li><a href="backHome.php">Home</a></li>
                                <li><a href="backManageNews.php?page=1">Manage News</a></li>
                                <li class="active">Update News</li>
                        </ol>

                        <h2>Update News</h2>
                        <hr>
                        <h4><p align ="left">File Must be Image!</p></h4>
                                <form action="backUpdateNews.php?id='.$id.'" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                                <label>News Title</label>
                                                <input type="text" name="newname" value="'.$row[4].'" class="form-control" id="inputTitle">
                                                <input type="hidden" name="id" value="'.$row[0].'"><br />
                                        <div class="form-group">
                                            <label>Date</label>
                                        <div id="sandbox-container">
                                            <div class="input-group date">
                                                <input type="text" name="date" class="form-control" value="'.$row[1].'"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Header Image</label>
                                                <input type="file" name="image" class="btn btn-default" multiple>
                                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                                <p class="help-block">Image file must be in .jpg .png extension</p>  
                                        </div>
                                        <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="newdesc" id="editor" rows="10" cols="80">
                                                '.$row[5].'
                                                </textarea>
                                                <script>
                                                                CKEDITOR.replace( "editor" );
                                                </script>
                                        </div>

                                        <input type="submit" name="submit" value="Update" class="btn btn-primary">

                                </form>';

                }
                
            }else{
                $res = mysql_query("UPDATE tbl_news SET title='$newname' where id='$id'");
                $res = mysql_query("UPDATE tbl_news SET description='$newdesc' where id='$id'");
                $res = mysql_query("UPDATE tbl_news SET datetime='$date' where id='$id'");
                $res = mysql_query("UPDATE tbl_news SET admin_id='$admin_id' where id='$id'");
                header("Location: backManageNews.php?page=1");
            }
}    
}
include "TemplateBackend.php";
?>
