<?php
session_start();
ob_start();
   include "connection.php";
   $id= $_GET['id'];
   $res= mysql_query("Select * from tbl_video where id='$id'");
   $row= mysql_fetch_array($res);
    
if (isset($_POST['submit'])) {
    $id =$_POST['id'];
    $name = $_POST['name'];
    $link = $_POST['link'];
    $admin_id = $_SESSION['back_id'];
    $res = mysql_query("UPDATE tbl_video SET name='$name' where id='$id'");
    $res = mysql_query("UPDATE tbl_video SET link='$link' where id='$id'");
    $res = mysql_query("UPDATE tbl_content SET admin_id='$admin_id' where id='$id'");
    header("Location: backManageFeatured.php?page=1");
}

if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageFeatured.php?page=1">Manage Featured</a></li>
		<li class="active">Update Featured</li>
	</ol>
	
	<h2>Update Featured</h2>
	<hr>
	<form action="backUpdateFeatured.php" method="post">
		<div class="form-group">
			<label>Content Name</label>
			<input type="text" name="name" value="'.$row[1].'"class="form-control" id="inputTitle">
                        <input type="hidden" name="id" value="'.$row[0].'"><br />

		<div class="form-group">
			<label>Youtube Link</label>
			<input type="text" name="link"  value="'.$row[2].'"class="form-control" id="inputTitle">
                        <p class="help-block">ex : https://www.youtube.com/watch?v=<b>Qujsd4vkqFI</b></p>
                </div>
		
		<input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>
	
	';
            
}
include "TemplateBackend.php";
?>