<?php
session_start();
ob_start();
   include "connection.php";
    $id= $_GET['id'];
    $res= mysql_query("Select * from tbl_socialmedia where id='$id'");
    $row= mysql_fetch_array($res);

if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSocialMedia.php?page=1">Manage Social Media</a></li>
		<li class="active">Update Social Media</li>
	</ol>
	
	<h2>Update Social Media</h2>
	<hr>
	<form action="backUpdateSocialMedia.php?id='.$id.'" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="newname" value="'.$row[3].'" class="form-control" id="inputTitle">
                        <input type="hidden" name="id" value="'.$row[0].'"><br />
                
		<div class="form-group">
				<label>Header Image</label>
				<input type="file" name="image" class="btn btn-default">
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
                <div class="form-group">
			<label>Link</label>
			<input type="text" name="link" value="'.$row[4].'" class="form-control" id="inputLink">
                </div>
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';
    
if (isset($_POST['submit'])) {      
            $newname = $_POST['newname'];
            $id =$_POST['id'];
            $link =$_POST['link'];
            $imageName = mysql_real_escape_string($_FILES["image"]["name"]);
            $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
            $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
            $imageSize = mysql_real_escape_string($_FILES["image"]['size']);
            $maxsize    = 559710;
            $admin_id = $_SESSION['back_id'];
            if (!empty($_FILES["image"]["tmp_name"])){  
                if (substr($imageType,0,5) == "image"){
                    if($imageSize <= $maxsize){
                $res = mysql_query("UPDATE tbl_socialmedia SET name='$newname' where id='$id'");
                $res = mysql_query("UPDATE tbl_socialmedia SET link='$link' where id='$id'");
                $res = mysql_query("UPDATE tbl_socialmedia SET image_name='$imageName' where id='$id'");
                $res = mysql_query("UPDATE tbl_socialmedia SET image='$imageData' where id='$id'");
                $res = mysql_query("UPDATE tbl_socialmedia SET admin_id='$admin_id' where id='$id'");
                header("Location: backManageSocialMedia.php?page=1");
                    }else{
                        $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSocialMedia.php?page=1">Manage Social Media</a></li>
		<li class="active">Update Social Media</li>
	</ol>
	
	<h2>Update Social Media</h2>
                            <hr>
                          <form action="backUpdateSocialMedia.php?id='.$id.'" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="newname" value="'.$row[3].'" class="form-control" id="inputName">
                        <input type="hidden" name="id" value="'.$row[0].'"><br />
                
		<div class="form-group">
				<label>Header Image</label>
				<input type="file" name="image" class="btn btn-default">
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
                <div class="form-group">
			<label>Link</label>
			<input type="text" name="link" value="'.$row[4].'" class="form-control" id="inputLink">
                </div>
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';
                    }
                }else{
                    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSocialMedia.php?page=1">Manage Social Media</a></li>
		<li class="active">Update Social Media</li>
	</ol>
	
	<h2>Update Social Media</h2>
                        <hr>
            <form action="backUpdateSocialMedia.php?id='.$id.'" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="newname" value="'.$row[3].'" class="form-control" id="inputTitle">
                        <input type="hidden" name="id" value="'.$row[0].'"><br />
                
		<div class="form-group">
				<label>Header Image</label>
				<input type="file" name="image" class="btn btn-default">
                                <p class="help-block">Image file must be less than 500 kilobytes</p>
                                <p class="help-block">Image file must be in .jpg .png extension</p>  
		</div>
                <div class="form-group">
			<label>Link</label>
			<input type="text" name="link" value="'.$row[4].'" class="form-control" id="inputLink">
                </div>
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';       
                }
            }else{
                $res = mysql_query("UPDATE tbl_socialmedia SET name='$newname' where id='$id'");
                $res = mysql_query("UPDATE tbl_socialmedia SET link='$link' where id='$id'");
                $res = mysql_query("UPDATE tbl_tbl_socialmedia SET admin_id='$admin_id' where id='$id'");
                header("Location: backManageSocialMedia.php?page=1");
            }
    
}    
}        
    include 'TemplateBackend.php';
    
?>