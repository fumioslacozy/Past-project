<?php
session_start();
ob_start();
   include "connection.php";
    $id= $_GET['id'];
    $res= mysql_query("Select * from tbl_logo where id='$id'");
    $row= mysql_fetch_array($res);

if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageLogo.php?page=1">Manage Logo</a></li>
		<li class="active">Update Logo</li>
	</ol>
	
	<h2>Update Logo</h2>
	<hr>
	<form action="backUpdateLogo.php?id='.$id.'" method="post" enctype="multipart/form-data">
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
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';
    
if (isset($_POST['submit'])) {      
            $newname = $_POST['newname'];
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
                $res = mysql_query("UPDATE tbl_logo SET name='$newname' where id='$id'");
                $res = mysql_query("UPDATE tbl_logo SET image_name='$imageName' where id='$id'");
                $res = mysql_query("UPDATE tbl_logo SET image='$imageData' where id='$id'");
                $res = mysql_query("UPDATE tbl_logo SET admin_id='$admin_id' where id='$id'");
                header("Location: backManageLogo.php?page=1");
                    }else{
                        $content ='
                            <ol class="breadcrumb">
                                    <li><a href="backHome.php">Home</a></li>
                                    <li><a href="backManageLogo.php?page=1">Manage Logo</a></li>
                                    <li class="active">Update Logo</li>
                            </ol>

                            <h2>Update Logo</h2>
                            <hr>
                            <h4><p align ="left">File must be less than 500 kilobytes.</p></h4>
                            	<form action="backUpdateLogo.php?id='.$id.'" method="post" enctype="multipart/form-data">
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
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';                      
                    }
                }else{
                    $content ='
                        <ol class="breadcrumb">
                                <li><a href="backHome.php">Home</a></li>
                                <li><a href="backManageLogo.php?page=1">Manage Logo</a></li>
                                <li class="active">Update Logo</li>
                        </ol>

                        <h2>Update Logo</h2>
                        <hr>
                        <h4><p align ="left">File Must be Image!</p></h4>
                        	<form action="backUpdateLogo.php?id='.$id.'" method="post" enctype="multipart/form-data">
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
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';                   
                }
            }else{
                $res = mysql_query("UPDATE tbl_logo SET name='$newname' where id='$id'");
                $res = mysql_query("UPDATE tbl_logo SET admin_id='$admin_id' where id='$id'");
                header("Location: backManageLogo.php?page=1");
            }
    
}    
}        
    include 'TemplateBackend.php';
    
?>