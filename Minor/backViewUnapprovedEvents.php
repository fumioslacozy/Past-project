<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");  
} else {
        include "connection.php";
        $id= $_GET['id']; 
        $view = mysql_fetch_assoc(mysql_query("SELECT e.id, e.status, e.image_name, e.image, e.start_date, e.end_date, e.title, e.description, e.availability, e.updated_time, m.username, m.email
											FROM tbl_unapproved_event e
											JOIN tbl_member m
											ON e.member_id = m.id
											WHERE e.id = $id"));
    if($view['status'] == "Unapproved"){
        $content ='
		<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageApproveEvents.php?page=1">Manage Unapproved Events</a></li>
		<li class="active">View Unapproved Events</li>
	</ol>
	
	<h2>View Unapproved Events</h2>
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
			<th>Start Date</th>
			<td>'.$view['start_date'].'</td>
		</tr>
		<tr>
			<th>End Date</th>
			<td>'.$view['end_date'].'</td>
		</tr>
		<tr>
			<th>Header Image</th>
			<td><img src="showimage_unapproved_event.php?id='.$id.'" width="20%"></td>
		</tr>
		<tr>
			<th>Description</th>
			<td>'.$view['description'].'</td>
		</tr>
                <tr>
			<th>Availability</th>
			<td>'.$view['availability'].'</td>
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
		<li><a href="backManageApproveEvents.php?page=1">Manage Unapproved Events</a></li>
		<li class="active">View Unapproved Events</li>
	</ol>
	
	<h2>View Unapproved Events</h2>
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
			<th>Start Date</th>
			<td>'.$view['start_date'].'</td>
		</tr>
		<tr>
			<th>End Date</th>
			<td>'.$view['end_date'].'</td>
		</tr>
		<tr>
			<th>Header Image</th>
			<td><img src="showimage_unapproved_event.php?id='.$id.'" width="20%"></td>
		</tr>
		<tr>
			<th>Description</th>
			<td>'.$view['description'].'</td>
		</tr>
                <tr>
			<th>Availability</th>
			<td>'.$view['availability'].'</td>
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
   $start_date = $view['start_date'];
   $end_date =$view['end_date'];
   $title = $view['title'];
   $description = $view['description'];
   $imageName = mysql_real_escape_string($view['image_name']);
   $availability = $view['availability'];
   $status = "Approved";
    
        $start_date = mysql_escape_string($view['start_date']);
        $end_date = mysql_escape_string($view['end_date']);
        $title = mysql_escape_string($view['title']);
        $imageData = mysql_real_escape_string($view['image']);
        $description = mysql_escape_string($view['description']);
        $admin_id = $_SESSION['sess_id'];
        
    $insert = 'INSERT into tbl_event(start_date, end_date, image_name, image, title, description,availability, admin_id) VALUES("'.$start_date.'","'.$end_date.'","'.$imageName.'","'.$imageData.'","'.$title.'","'.$description.'","'.$availability.'","'.$admin_id.'")';
       mysql_query($insert);
       mysql_query("UPDATE tbl_unapproved_event SET status='$status' where id='$id'");
       header("Location: backManageApproveEvents.php?page=1");

$to      = $email; // Send email to our user
$subject = 'Approved Event'; // Give the email a subject 
$message = '
 
Thanks for upload event '.$username.',
Your Uploaded Event has been Approved

 
'; // Our message above including the link
 
}      
if(isset($_POST['reject'])){
       $id= $view['id'];
       $status = "Rejected";
       mysql_query("UPDATE tbl_unapproved_event SET status='$status' where id='$id'");
       header("Location: backManageApproveEvents.php?page=1");

$to      = $email; // Send email to our user
$subject = 'Rejected Event'; // Give the email a subject 
$message = '
 
Thanks for upload event '.$username.',
But we really sorry we must reject your event, for more information please contact
-----------------------------------
Telp : +62898211213 
Email : associawebservice@gmail.com
-----------------------------------
 
'; // Our message above including the link 
}    
}
include "TemplateBackend.php";
?>