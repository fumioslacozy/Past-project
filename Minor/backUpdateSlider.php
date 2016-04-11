<?php
session_start();
ob_start();
   include "connection.php";
    $id= $_GET['id'];
    $res= mysql_query("Select * from tbl_slider where id='$id'");
    $row= mysql_fetch_array($res);
    
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSlider.php?page=1">Manage Slider</a></li>
		<li class="active">Update Slider</li>
	</ol>
	
	<h2>Update Slider</h2>
	<hr>
		<form action="backUpdateSlider.php?id='.$id.'" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Slider Name</label>
				<input type="text" name="newname" value="'.$row[3].'" class="form-control" id="inputTitleEvent">
			<input type="hidden" name="id" value="'.$row[0].'"><br />   
			<div class="form-group">
				<label>Caption</label>
				<input type="text" name="caption" value="'.$row[4].'" class="form-control" id="inputCaptionSlider">
			</div>
			<div class="form-group">
				<label>Button Placeholder</label>
				<input type="text" name="placeholder" value="'.$row[5].'" class="form-control" id="inputButton Placeholder" >
			</div>
                        <div class="form-group">
				<label>Link</label>
				<input type="text" name="link" value="'.$row[6].'" class="form-control" id="Link" >
			</div>
			<div class="form-group">
				<label>Slider Image</label>
				<input type="file" name="image" class="btn btn-default">
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
			</div>


			<input type="submit" name="submit" value="Update" class="btn btn-primary">
			
		</form>';
    
if (isset($_POST['submit'])) {
            $newname = $_POST['newname'];
            $caption = $_POST['caption'];
            $placeholder = $_POST['placeholder'];
            $link = $_POST['link'];
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
                $res = mysql_query("UPDATE tbl_slider SET name='$newname' where id='$id'");
                $res = mysql_query("UPDATE tbl_slider SET caption='$caption' where id='$id'");
                $res = mysql_query("UPDATE tbl_slider SET placeholder='$placeholder' where id='$id'");
                                $res = mysql_query("UPDATE tbl_slider SET link='$link' where id='$id'");
                $res = mysql_query("UPDATE tbl_slider SET image_name='$imageName' where id='$id'");
                $res = mysql_query("UPDATE tbl_slider SET image='$imageData' where id='$id'");
                $res = mysql_query("UPDATE tbl_slider SET admin_id='$admin_id' where id='$id'");
                header("Location: backManageSlider.php?page=1");
                    }else{
                        $content ='
                            <ol class="breadcrumb">
                                    <li><a href="backHome.php">Home</a></li>
                                    <li><a href="backManageSlider.php?page=1">Manage Slider</a></li>
                                    <li class="active">Update Slider</li>
                            </ol>

                            <h2>Update Slider</h2>
                            <hr>
                            <h4><p align ="left">File must be less than 500 kilobytes.</p></h4>
                                    <form action="backUpdateSlider.php?id='.$id.'" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                    <label>Slider Name</label>
                                                    <input type="text" name="newname" value="'.$row[3].'" class="form-control" id="inputTitleEvent">
                                            <input type="hidden" name="id" value="'.$row[0].'"><br />   
                                            <div class="form-group">
                                                    <label>Caption</label>
                                                    <input type="text" name="caption" value="'.$row[4].'" class="form-control" id="inputCaptionSlider">
                                            </div>
                                            <div class="form-group">
                                                    <label>Button Placeholder</label>
                                                    <input type="text" name="placeholder" value="'.$row[5].'" class="form-control" id="inputButton Placeholder" >
                                            </div>
                                            <div class="form-group">
                                                    <label>Link</label>
                                                    <input type="text" name="link" value="'.$row[6].'" class="form-control" id="Link" >
                                            </div>
                                            <div class="form-group">
                                                    <label>Slider Image</label>
                                                    <input type="file" name="image" class="btn btn-default">
                                                    <p class="help-block">Image file must be less than 500 kilobytes</p>
                                                    <p class="help-block">Image file must be in .jpg .png extension</p>  
                                            </div>


                                            <input type="submit" name="submit" value="Update" class="btn btn-primary">

                                    </form>';                        
                    }
                }else{
                    $content ='
                        <ol class="breadcrumb">
                                <li><a href="backHome.php">Home</a></li>
                                <li><a href="backManageSlider.php?page=1">Manage Slider</a></li>
                                <li class="active">Update Slider</li>
                        </ol>

                        <h2>Update Slider</h2>
                        <hr>
                        <h4><p align ="left">File Must be Image!</p></h4>
                                <form action="backUpdateSlider.php?id='.$id.'" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                                <label>Slider Name</label>
                                                <input type="text" name="newname" value="'.$row[3].'" class="form-control" id="inputTitleEvent">
                                        <input type="hidden" name="id" value="'.$row[0].'"><br />   
                                        <div class="form-group">
                                                <label>Caption</label>
                                                <input type="text" name="caption" value="'.$row[4].'" class="form-control" id="inputCaptionSlider">
                                        </div>
                                        <div class="form-group">
                                                <label>Button Placeholder</label>
                                                <input type="text" name="placeholder" value="'.$row[5].'" class="form-control" id="inputButton Placeholder" >
                                        </div>
                                        <div class="form-group">
                                                <label>Link</label>
                                                <input type="text" name="link" value="'.$row[6].'" class="form-control" id="Link" >
                                        </div>
                                        <div class="form-group">
                                                <label>Slider Image</label>
                                                <input type="file" name="image" class="btn btn-default">
                                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                                <p class="help-block">Image file must be in .jpg .png extension</p>  
                                        </div>


                                        <input type="submit" name="submit" value="Update" class="btn btn-primary">

                                </form>';                    
                }
            }else{
                $res = mysql_query("UPDATE tbl_slider SET name='$newname' where id='$id'");
                $res = mysql_query("UPDATE tbl_slider SET caption='$caption' where id='$id'");
                $res = mysql_query("UPDATE tbl_slider SET placeholder='$placeholder' where id='$id'");
                $res = mysql_query("UPDATE tbl_slider SET link='$link' where id='$id'");
                $res = mysql_query("UPDATE tbl_slider SET admin_id='$admin_id' where id='$id'");
                header("Location: backManageSlider.php?page=1");    
                
            }
}            
}
include "TemplateBackend.php";
?>