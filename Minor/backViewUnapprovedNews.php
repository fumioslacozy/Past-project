<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");  
} else {
        include "connection.php";
        $id= $_GET['id']; 
		        $view = mysql_fetch_assoc(mysql_query("SELECT n.id, n.status, n.image_name, n.image, n.datetime, n.title, n.description, n.updated_time, m.username, m.email
											FROM tbl_unapproved_news n
											JOIN tbl_member m
											ON n.member_id = m.id
											WHERE n.id = $id"));
    if($view['status'] == "Unapproved"){
        $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageApproveNews.php?page=1">Manage Unapproved News</a></li>
		<li class="active">View Unapproved News</li>
	</ol>
	
	<h2>View Unapproved News</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		
		<tr>
			<th>No.</th>
			<td>'.$view['id'].'</td>
		</tr>
		<tr>
			<th>Title</th>
			<td>'.$view['title'].'</td>
		</tr>
                <tr>
			<th>Date</th>
			<td>'.$view['datetime'].'</td>
		</tr>
		<tr>
			<th>Header Image</th>
			<td><img src="showimage_unapproved_news.php?id='.$id.'" width="20%"></td>
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
			<th>Uploaded By</th>
			<td>'.$view['username'].'</td>
		</tr>
		
		</table>
		<form method="post" action="" enctype="multipart/form-data">
                    <div align="center">
                        <input type="submit" name="approve" value="Approve" class="btn btn-primary">
                        <input type="submit" name="reject" value="Reject" class="btn btn-primary">
                    </div>
                </form>
	</div>
	';
    }else{
        $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageApproveNews.php?page=1">Manage Unapproved News</a></li>
		<li class="active">View Unapproved News</li>
	</ol>
	
	<h2>View Unapproved News</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		
		<tr>
			<th>No.</th>
			<td>'.$view['id'].'</td>
		</tr>
		<tr>
			<th>Title</th>
			<td>'.$view['title'].'</td>
		</tr>
                <tr>
			<th>Date</th>
			<td>'.$view['datetime'].'</td>
		</tr>
		<tr>
			<th>Header Image</th>
			<td><img src="showimage_unapproved_news.php?id='.$id.'" width="20%"></td>
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
			<th>Uploaded By</th>
			<td>'.$view['username'].'</td>
		</tr>
		
		</table>
	</div>
	';
    }
    
include "connection.php";
$email= $view['email'];
$username = $view['username'];
if(isset($_POST['approve'])){
   $id= $view['id'];
   $date = $view['datetime'];
   $title = $view['title'];
   $description = $view['description'];
   $imageName = mysql_real_escape_string($view['image_name']);
   $status = "Approved";
    
        $date = mysql_escape_string($view['datetime']);
        $title = mysql_escape_string($view['title']);
        $imageData = mysql_real_escape_string($view['image']);
        $description = mysql_escape_string($view['description']);
        $status = mysql_escape_string($status);
        $admin_id = $_SESSION['sess_id'];
        
    $insert = 'INSERT into tbl_news(datetime,image_name, image, title, description, admin_id) VALUES("'.$date.'", "'.$imageName.'","'.$imageData.'","'.$title.'","'.$description.'","'.$admin_id.'")';
       mysql_query($insert);
       mysql_query("UPDATE tbl_unapproved_news SET status='$status' where id='$id'");
       header("Location: backManageApproveNews.php?page=1");

$to      = $email; // Send email to our user
$subject = 'Approved News'; // Give the email a subject 
$message = '
 
Thanks for upload news '.$username.',
Your Uploaded News has been Approved

 
'; // Our message above including the link
}      
if(isset($_POST['reject'])){
       $id= $view['id'];
       $status = "Rejected";
       mysql_query("UPDATE tbl_unapproved_news SET status='$status' where id='$id'");
       header("Location: backManageApproveNews.php?page=1");

$to      = $email; // Send email to our user
$subject = 'Rejected News'; // Give the email a subject 
$message = '
 
Thanks for upload news '.$username.',
But we really sorry we must reject your news, for more information please contact
-----------------------------------
Telp : +62898211213 
Email : associawebservice@gmail.com
-----------------------------------
 
'; // Our message above including the link
}    
}
include "TemplateBackend.php";
?>