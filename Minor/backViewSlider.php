<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
     ?>
        
<?php  
} else {
        include "connection.php";
        $id= $_GET['id'];
        $view = mysql_fetch_assoc(mysql_query("SELECT s.id, s.name, s.caption, s.placeholder, s.link, s.updated_time, a.username
											FROM tbl_slider s
											JOIN tbl_admin a
											ON s.admin_id = a.id
											WHERE s.id = $id"));

    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageSlider.php?page=1">Manage Slider</a></li>
		<li class="active">View Slider</li>
	</ol>
	
	<h2>View Slider</h2>
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
			<th>Caption</th>
			<td>'.$view['caption'].'</td>
		</tr>
		<tr>
			<th>Button Placeholder</th>
			<td>'.$view['placeholder'].'</td>
		<tr>
                <tr>
			<th>Link</th>
			<td>'.$view['link'].'</td>
		<tr>
		<tr>
			<th>Slider Image</th>
			<td><img src="showimage_slider.php?id='.$id.'" width="20%"></td>
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