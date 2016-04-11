<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
     ?>
        
<?php  
} else {
        include "connection.php";
        $id= $_GET['id'];
		$view = mysql_fetch_assoc(mysql_query("SELECT v.id, v.name, v.link, v.updated_time , a.username
											FROM tbl_video v
											JOIN tbl_admin a
											ON v.admin_id = a.id
											WHERE v.id = $id"));

    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageFeatured.php?page=1">Manage Featured</a></li>
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
			<th>Name</th>
			<td>'.$view['name'].'</td>
		</tr>
		<tr>
			<th>Youtube Link</th>
			<td><iframe width="560" height="315" src="//www.youtube.com/embed/'.$view['link'].'" frameborder="0" allowfullscreen></iframe></td>
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