<?php
session_start();
ob_start();
   include "connection.php";
   $id= $_GET['id'];
   $res= mysql_query("Select * from tbl_member where id='$id'");
   $row= mysql_fetch_array($res);
   
if (isset($_POST['submit'])) {
    $id =$_POST['id']; 
    $subscription = $_POST['subscription'];
    $todaydate= date("Y-m-d");
    $expireddate = date(("Y-m-d"), strtotime("+1 Year"));
    $date1=date_create($todaydate);
    $date2=date_create($expireddate);
    $diff=date_diff($date1,$date2);
    $diff = $diff->format("%a days");
    $res = mysql_query("UPDATE tbl_member SET subscription='$subscription' where id='$id'");
    if($subscription == "Advanced"){
        $res = mysql_query("UPDATE tbl_member SET start_date='$todaydate' where id='$id'");
        $res = mysql_query("UPDATE tbl_member SET expired_date='$expireddate' where id='$id'");
    }else{
        $remaining = mysql_escape_string("Unlimited");
        $res = mysql_query("UPDATE tbl_member SET start_date='$todaydate' where id='$id'");
        $res = mysql_query("UPDATE tbl_member SET expired_date=null where id='$id'");
    }
    header("Location: backManageMember.php?page=1");
}

if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
} else {
    $content ='
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li><a href="backManageMember.php?page=1">Manage Member</a></li>
		<li class="active">Update Member</li>
	</ol>
	
	<h2>Update Member</h2>
	<hr>
		<form action="backUpdateMember.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" value="'.$row[1].'"class="form-control" id="inputUsername" placeholder="Username" disabled>
                                <input type="hidden" name="id" value="'.$row[0].'"><br />
			<div class="form-group">
				<label>Subscription Level</label>
                                    <div class="radio">
					<label><input type="radio" name="subscription" value="Free">Free</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="subscription" value="Invited">Invited</label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="subscription" value="Advanced">Advanced</label>
                                    </div>
                        </div>
			
			<input type="submit" name="submit" value="Update" class="btn btn-primary">
			
		</form>			
	
	';
}          
    include 'TemplateBackend.php';
    
?>