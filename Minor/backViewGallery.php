<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
     ?>
        
<?php  
} else {
        include "connection.php";
        $id= $_GET['id'];
		$view = mysql_fetch_assoc(mysql_query("SELECT g.id, g.name, g.updated_time , a.username
											FROM tbl_gallery g
											JOIN tbl_admin a
											ON g.admin_id = a.id
											WHERE g.id = $id"));

    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageGallery.php?page=1">Manage Gallery</a></li>
		<li class="active">View Featured</li>
	</ol>
	
	<h2>View Featured</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		
		<tr>
			<th>No.</th>
			<td>'.$view['id'].'</td>
		</tr>
		<tr>
			<th>Gallery Name</th>
			<td>'.$view['name'].'</td>
		</tr>
		<tr>
			<th>Image for Gallery</th>
			<td><img src="showimage_gallery.php?id='.$id.'" class="img"></td>
		</tr>
		<tr>
			<th>Last Edited</th>
			<td>'.$view['updated_time'].'</td>
		</tr>
		<tr>
			<th>Edited By</th>
			<td>'.$view['username'].'</td>
		</tr>
		
		</table>

	</div>
	';
            
}
include "TemplateBackend.php";
?>