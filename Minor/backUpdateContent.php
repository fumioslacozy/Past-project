<?php
session_start();
ob_start();
   include "connection.php";
   $id= $_GET['id'];
   $res= mysql_query("Select * from tbl_content where id='$id'");
   $row= mysql_fetch_array($res);
    
if (isset($_POST['submit'])) {
    $id =$_POST['id'];
    $newname = $_POST['newname'];
    $newdesc = $_POST['newdesc'];
    $admin_id = $_SESSION['back_id'];
    $res = mysql_query("UPDATE tbl_content SET description='$newdesc' where id='$id'");
    $res = mysql_query("UPDATE tbl_content SET content_name='$newname' where id='$id'");
    $res = mysql_query("UPDATE tbl_content SET admin_id='$admin_id' where id='$id'");
    header("Location: backManageContent.php?page=1");
}

if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content='				
            <ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageContent.php?page=1">Manage Content</a></li>
		<li class="active">Update Content</li>
	</ol>
	
	<h2>Update Contents</h2>
	<hr>
	<form action="backUpdateContent.php" method="post">
		<div class="form-group">
			<label>Content Name</label>
                        <input type="text" name="newname" value="'.$row[1].'" class="form-control" id="inputTitle">
                        <input type="hidden" name="id" value="'.$row[0].'"><br />
		<div class="form-group">
			<label>Description</label>
			<textarea name="newdesc" id="editor" rows="10" cols="80">
                        '.$row[2].'
			</textarea>
			<script>
					CKEDITOR.replace( "editor" );
			</script>
		</div>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
		
	</form>';
    
}
include "TemplateBackend.php";
?>