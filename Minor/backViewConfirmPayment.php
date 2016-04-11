<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");  
} else {
        include "connection.php";
        $id= $_GET['id']; 
        $view = mysql_fetch_assoc(mysql_query("SELECT * from tbl_confirmpayment WHERE id = $id"));
        $view = mysql_fetch_assoc(mysql_query("SELECT c.id, c.status, c.name, c.date, c.amount, c.status, c.updated_time, m.username, m.email
											FROM tbl_confirmpayment c
											JOIN tbl_member m
											ON c.member_id = m.id
											WHERE c.id = $id"));
    
        
    if($view['status'] == "Waiting"){
        $content ='
        <ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
                <li><a href="backManageConfirmPayment.php?page=1">Manage Confirm Payment</a></li>
		<li class="active">View Confirm Payment</li>
	</ol>
	
        <h2>Confirm Payment</h2>
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
			<th>Email</th>
			<td>'.$view['email'].'</td>
		</tr>
		<tr>
			<th>Payer’s Name</th>
			<td>'.$view['name'].'</td>
		</tr>
		<tr>
			<th>Payment Date</th>
			<td>'.$view['date'].'</td>
		</tr>
		<tr>
			<th>Payment Amount</th>
			<td>'.$view['amount'].'</td>
		</tr>
                <tr>
			<th>Status</th>
			<td>'.$view['status'].'</td>
		</tr>
		<tr>
			<th>Last Edited</th>
			<td>'.$view['updated_time'].'</td>
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
                <li><a href="backManageConfirmPayment.php?page=1">Manage Confirm Payment</a></li>
		<li class="active">View Confirm Payment</li>
	</ol>
	
        <h2>Confirm Payment</h2>
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
			<th>Email</th>
			<td>'.$view['email'].'</td>
		</tr>
		<tr>
			<th>Payer’s Name</th>
			<td>'.$view['name'].'</td>
		</tr>
		<tr>
			<th>Payment Date</th>
			<td>'.$view['date'].'</td>
		</tr>
		<tr>
			<th>Payment Amount</th>
			<td>'.$view['amount'].'</td>
		</tr>
                <tr>
			<th>Status</th>
			<td>'.$view['status'].'</td>
		</tr>
		<tr>
			<th>Last Edited</th>
			<td>'.$view['updated_time'].'</td>
		</tr>

		
		</table>
		
	</div>
	';
    }
        
            
include "connection.php";
$email = $view['email'];
$username = $view['username'];
if(isset($_POST['approve'])){
       $id= $view['id'];
       $status = "Approved";
	   $status1 = "Advanced";
	   $todaydate= date("Y-m-d");
       $expireddate = date(("Y-m-d"), strtotime("+1 Year"));
       mysql_query("UPDATE tbl_confirmpayment SET status='$status' where id='$id'");
	   mysql_query("UPDATE tbl_member SET subscription='$status1' , start_date='$todaydate' , expired_date='$expireddate' where username='$username'");
       header("Location: backManageConfirmPayment.php?page=1");
       
$to      = $email; // Send email to our user
$subject = 'Subscription Upgrade'; // Give the email a subject 
$message = '
 
Terima kasih atas pembayaran anda '.$username.',

Kunjungi link berikut ini untuk mendapatkan informasi tentang Membership Benefit
http://www.oniichanpro.com/membershipbenefit.php
 
'; // Our message above including the link
                     
$headers = 'From:associawebnoreply@gmail.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
 
}      
if(isset($_POST['reject'])){
       $id= $view['id'];
       $status = "Rejected";
	   $status1 = "Free";
	   $todaydate= date("Y-m-d");
       $expireddate = date(("0000-00-00"));
       mysql_query("UPDATE tbl_confirmpayment SET status='$status' where id='$id'");
	   mysql_query("UPDATE tbl_member SET subscription='$status1' , start_date='$todaydate' , expired_date='$expireddate' where username='$username'");
       header("Location: backManageConfirmPayment.php?page=1");

$to      = $email; // Send email to our user
$subject = 'Subscription Upgrade'; // Give the email a subject 
$message = '
 
Hello '.$username.',

Mohon maaf konfirmasi pembayaran anda ditolak, untuk informasi lebih lanjut tolong hubungi Asosiasi Sistem Informasi Indonesia:

-----------------------------------
Telp : +62898211213 
Email : associawebservice@gmail.com
-----------------------------------
 
'; // Our message above including the link
                     
$headers = 'From:associawebnoreply@gmail.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
  
}    
}
include "TemplateBackend.php";
?>