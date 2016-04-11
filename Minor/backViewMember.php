<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");  
} else {
    include "connection.php";
        $id= $_GET['id']; 
		$view = mysql_fetch_assoc(mysql_query("SELECT * FROM tbl_member WHERE id = $id"));
                    $todaydate= date("Y-m-d");
                    $expireddate = $view['expired_date']; 
                    $subscription = $view['subscription'];
                    $date1=date_create($todaydate);
                    $date2=date_create($expireddate);
                    $diff=date_diff($date1,$date2);
                    $diff = $diff->format("%a days");
                if ($view['active'] == 0) {
                    $active = "Waiting for activation";
                }else{
                $active = "Activated";
                }
                if ($subscription == "Free" || $subscription == "Invited"  ) {
                $diff = "Unlimited";
                }
                
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageMember.php?page=1">Manage Content</a></li>
		<li class="active">View Member</li>
	</ol>
	
	<h2>View Member</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		
		<tr>
			<th>No.</th>
			<td>'.$view['id'].'</td>
		</tr>
		<tr>
			<th>Username</th>
			<td>'.$view['username'].'</td>
		</tr>
		<tr>
			<th>First Name</th>
			<td>'.$view['fname'].'</td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td>'.$view['lname'].'</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>'.$view['email'].'</td>
		</tr>
		<tr>
			<th>Subscription Level</th>
			<td>'.$view['subscription'].'</td>
		</tr>
                <tr>
			<th>Subscription Remaining</th>
			<td>'.$diff.'</td>
		</tr>
		<tr>
			<th>Status</th>
			<td>'.$active.'</td>
		</tr>
		<tr>
                        <th>Last Edited</th>
                        <td>'.$view['updated_time'].'</td>
               </tr>
		</table>
	</div>
	';
}          
    include 'TemplateBackend.php';
    
?>