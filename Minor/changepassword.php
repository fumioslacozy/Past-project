<?php
session_start();
   include "connection.php";

if(!isset($_SESSION["sess_user"])){
   header("Location: login.php");
} else {
    $content ='	
	<h2>Change Password</h2>
	<hr>
	<form action="changepassword.php" method="post">
				<div class="form-group">
					<label>Current Password</label>
					<input type="password" name="oldpassword" class="form-control" id="inputCurrentPasswordAdmin" placeholder="Current Password">
				</div>
				<div class="form-group">
					<label>New Password</label>
					<input type="password" name="newpassword" class="form-control" id="inputNewPasswordAdmin" placeholder="New Password">
				</div>
				<div class="form-group">
					<label>Confirm New Password</label>
					<input type="password" name="cpassword" class="form-control" id="inputConfirmNewPasswordAdmin" placeholder="Confirm New Password">
				</div>
				
				<input type="submit" name="submit" value="Update" class="btn btn-primary">
	</form>
	';
if (isset($_POST['submit'])) {
            $oldpassword = $_POST['oldpassword'];
            $newpassword = $_POST['newpassword'];
            $cpassword = $_POST['cpassword'];
            $id = $_SESSION['sess_id'];
            $queryget =  mysql_query("SELECT password from tbl_member where id='$id'");
            $row = mysql_fetch_assoc($queryget);
            $oldpassworddb = $row['password'];
    
    if ($oldpassword == $oldpassworddb) {
        if ($newpassword == $cpassword){
               $querychange = mysql_query("UPDATE tbl_member SET password='$newpassword' where id='$id'");
               $content ='
                        <h2>Change Password</h2>
                        <hr>
        			<div class="form-group">
				<label>Your Password has been changed</label>
                        </div>';
        unset($_SESSION['sess_user']); 
         }else{
                 $content ='
	<h2>Change Password</h2>
	<hr>
        <h4>New Password Dont Match</h4>
	<form action="changepassword.php" method="post">
				<div class="form-group">
					<label>Current Password</label>
					<input type="password" name="oldpassword" class="form-control" id="inputCurrentPasswordAdmin" placeholder="Current Password">
				</div>
				<div class="form-group">
					<label>New Password</label>
					<input type="password" name="newpassword" class="form-control" id="inputNewPasswordAdmin" placeholder="New Password">
				</div>
				<div class="form-group">
					<label>Confirm New Password</label>
					<input type="password" name="cpassword" class="form-control" id="inputConfirmNewPasswordAdmin" placeholder="Confirm New Password">
				</div>
				
				<input type="submit" name="submit" value="Update" class="btn btn-primary">
	</form>
	';
         }
    }else{
                         $content ='
	<h2>Change Password</h2>
	<hr>
        <h4>Old Password Dont Match</h4>
	<form action="changepassword.php" method="post">
				<div class="form-group">
					<label>Current Password</label>
					<input type="password" name="oldpassword" class="form-control" id="inputCurrentPasswordAdmin" placeholder="Current Password">
				</div>
				<div class="form-group">
					<label>New Password</label>
					<input type="password" name="newpassword" class="form-control" id="inputNewPasswordAdmin" placeholder="New Password">
				</div>
				<div class="form-group">
					<label>Confirm New Password</label>
					<input type="password" name="cpassword" class="form-control" id="inputConfirmNewPasswordAdmin" placeholder="Confirm New Password">
				</div>
				
				<input type="submit" name="submit" value="Update" class="btn btn-primary">
	</form>
	';
    }
}
    
}            
    include 'Template.php';

?>