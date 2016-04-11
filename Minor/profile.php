<?php
session_start();
if(!isset($_SESSION["sess_user"])){
   header("Location: login.php");
} else {
            $todaydate= date("Y-m-d");
            $expireddate = $_SESSION['sess_exdate'];
            $date1=date_create($todaydate);
            $date2=date_create($expireddate);
            $diff=date_diff($date1,$date2);
            $diff = $diff->format("%a days");
            
            if ($_SESSION['sess_subscription'] == "Free" || $_SESSION['sess_subscription'] == "Invited"  ) {
                $diff = "Unlimited";
            }
            
            if ($_SESSION['sess_subscription'] == "Advanced") {
                 $content =  '
            <h3><p align ="left">Profile</p></h3>
            <div class="table-responsive">
                <table  class="table center">
                    <tr>
			<th>Username</th>
                        <th>'.$_SESSION['sess_user'].'</th>
                </tr>
                <tr>
			<th>Email</th>
                        <th>'.$_SESSION['sess_email'].'</th>
                </tr>
                <tr>
			<th>First Name</th>
                        <th>'.$_SESSION['sess_fname'].'</th>
                </tr>
                <tr>
			<th>Last Name</th>
                        <th>'.$_SESSION['sess_lname'].'</th>
                </tr>
                <tr>
			<th>Subscription</th>
                        <th>'.$_SESSION['sess_subscription'].'</th>
                </tr>
                <tr>
			<th>Remaining</th>
                        <th>'.$diff.'</th>
                </tr>
                </table>
            </div>';
            }  else {
                 $content =  '
            <h3><p align ="left">Profile</p></h3>
            <div class="table-responsive">
                <table  class="table center">
                    <tr>
			<th>Username</th>
                        <th>'.$_SESSION['sess_user'].'</th>
                </tr>
                <tr>
			<th>Email</th>
                        <th>'.$_SESSION['sess_email'].'</th>
                </tr>
                <tr>
			<th>First Name</th>
                        <th>'.$_SESSION['sess_fname'].'</th>
                </tr>
                <tr>
			<th>Last Name</th>
                        <th>'.$_SESSION['sess_lname'].'</th>
                </tr>
                <tr>
			<th>Subscription</th>
                        <th>'.$_SESSION['sess_subscription'].'</th>
                </tr>
                <tr>
			<th>Remaining</th>
                        <th>'.$diff.'</th>
                </tr>
                </table>
                <form method="post" action="upgrade_subscription.php" enctype="multipart/form-data">
		<div class="form-group">
			  <div class="col-lg-12">
				<p align=center><input type="submit" name="Submit" class="btn btn-primary" value="Upgrade Now" name="submit" /></p>
			  </div><!-- /.col-lg-4 -->
		</div>		
                </form>
            </div>';
            }
   
    
}   
include 'Template.php';
    
?>
