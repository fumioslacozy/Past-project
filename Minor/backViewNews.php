<?php
session_start();
ob_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");  
} else {
        include "connection.php";
        $id= $_GET['id']; 
        $view = mysql_fetch_assoc(mysql_query("SELECT n.id, n.datetime, n.title, n.description, n.updated_time, a.username
											FROM tbl_news n
											JOIN tbl_admin a
											ON n.admin_id = a.id
											WHERE n.id = $id"));

    $content='	
        <ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageNews.php?page=1">Manage News</a></li>
		<li class="active">View News</li>
	</ol>
	
	<h2>View News</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		
		<tr>
			<th>No.</th>
			<td>'.$view['id'].'</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>'.$view['title'].'</td>
		</tr>
                <tr>
			<th>Date</th>
			<td>'.$view['datetime'].'</td>
		</tr>
		<tr>
			<th>Image</th>
			<td><img src="showimage_news.php?id='.$id.'" width="20%"></td>
		</tr>
		<tr>
			<th>Description</th>
			<td>'.$view['description'].'</td>
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
	</div>';
}
include "TemplateBackend.php";
?>