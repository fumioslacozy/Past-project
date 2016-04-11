<?php 
    session_start();
if(!isset($_SESSION["sess_user"])){
   header("Location: login.php");
 
} else {
    $content=
	'
	<h3>Upgrade Subscription</h3>
	<br/>
	<form action="" method="POST">
		<div class="form-group">
			<div class="row">
			  <div class="col-lg-4">
				<p align=right>Username</p>
			  </div><!-- /.col-lg-4 -->
			  <div class="col-lg-4">
				  <input type="text" class="form-control" name="username">
			  </div><!-- /.col-lg-4 -->
			</div><!-- /.row -->

			<div class="row">
			  <div class="col-lg-4">
				<p align=right>Email</p>
			  </div><!-- /.col-lg-4 -->
			  <div class="col-lg-4">
				  <input type="text" class="form-control" name="email">
			  </div><!-- /.col-lg-2 -->
			</div><!-- /.row -->
			
                        <div class="form-group">
				<label>Subscription Level</label>
                                    <div class="radio">
					<label><input type="radio" name="subscription" value="Advanced" checked>Advanced - Rp.200.000 - 1 Tahun</label>
                                    </div>
                        </div>
                        
			<div class="row">
			  <div class="col-lg-12">
				<p align=center><input type="submit" name="submit" class="btn  btn-primary" value="Submit" /></p>
			  </div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
		</div>
	</form>
	'; 
    
include "connection.php";
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   
   if (!empty($_POST['username']) && !empty($_POST['email'])) {
        $username = mysql_escape_string($_POST['username']); 
        $email = mysql_escape_string( $_POST['email']);
        
        $search = mysql_query("SELECT username, password, email FROM tbl_member WHERE username='".$username."' AND email='".$email."'") or die(mysql_error()); 
        $row = mysql_fetch_array($search);
        
        
        if($username == $_SESSION['sess_user'] && $email == $_SESSION['sess_email']){
            $to      = $email; // Send email to our user
            $subject = 'Subscription Upgrade'; // Give the email a subject 
            $message = '
                
Hello '.$username.',  
Ikuti langkah - langkah berikut ini untuk mengupgrade subscription account anda

1. Lakukan Transfer dengan jumlah yang sudah ditentukan ke bank BCA dengan nomor rekening 566232767 a/n Asosiasi Sistem Informasi Indonesia.
2. Lakukan Konfirmasi Pembayaran dengan mengisi form konfirmasi di http://www.oniichanpro.com/confirmpayment.php
3. Account anda akan segera di upgrade oleh admin.
            
            '; // Our message above including the link

            $headers = 'From:associawebnoreply@gmail.com' . "\r\n"; // Set from headers
            mail($to, $subject, $message, $headers); // Send our email
            
             $content ='
                        <h3>Upgrade Subscription</h3>
                        <hr>
        			<div class="form-group">
				<label>The Details for Upgrade your subscription is already sent to your email.</label>
                        </div>';
    
        }else{
            $content ='
                <h3>Upgrade Subscription</h3>
                        <hr>
                        <div class="form-group">
                        <label>Username and your email is not match.</label>
                        </div>  
                        <form action="" method="POST">
                                <div class="form-group">
                                        <div class="row">
                                          <div class="col-lg-4">
                                                <p align=right>Username</p>
                                          </div><!-- /.col-lg-4 -->
                                          <div class="col-lg-4">
                                                  <input type="text" class="form-control" name="username">
                                          </div><!-- /.col-lg-4 -->
                                        </div><!-- /.row -->

                                        <div class="row">
                                          <div class="col-lg-4">
                                                <p align=right>Email</p>
                                          </div><!-- /.col-lg-4 -->
                                          <div class="col-lg-4">
                                                  <input type="text" class="form-control" name="email">
                                          </div><!-- /.col-lg-2 -->
                                        </div><!-- /.row -->

                                        <div class="form-group">
                                                <label>Subscription Level</label>
                                                    <div class="radio">
                                                        <label><input type="radio" name="subscription" value="Advanced" checked>Advanced - Rp.200.000 - 1 Tahun</label>
                                                    </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-lg-12">
                                                <p align=center><input type="submit" name="submit" class="btn  btn-primary" value="Submit" /></p>
                                          </div><!-- /.col-lg-4 -->
                                        </div><!-- /.row -->
                                </div>
                        </form>
                        '; 
    }
        
   }else{
       $content=
	'
	<h3>Upgrade Subscription</h3>
        <hr>
        <div class="form-group">
        <label>All fields are required!</label>
        </div>  
	<form action="" method="POST">
		<div class="form-group">
			<div class="row">
			  <div class="col-lg-4">
				<p align=right>Username</p>
			  </div><!-- /.col-lg-4 -->
			  <div class="col-lg-4">
				  <input type="text" class="form-control" name="username">
			  </div><!-- /.col-lg-4 -->
			</div><!-- /.row -->

			<div class="row">
			  <div class="col-lg-4">
				<p align=right>Email</p>
			  </div><!-- /.col-lg-4 -->
			  <div class="col-lg-4">
				  <input type="text" class="form-control" name="email">
			  </div><!-- /.col-lg-2 -->
			</div><!-- /.row -->
                        
                        <div class="form-group">
				<label>Subscription Level</label>
                                    <div class="radio">
					<label><input type="radio" name="subscription" value="Advanced" checked>Advanced - Rp.200.000 - 1 Tahun</label>
                                    </div>
                        </div>
			
			<div class="row">
			  <div class="col-lg-12">
				<p align=center><input type="submit" name="submit" class="btn  btn-primary" value="Submit" /></p>
			  </div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
		</div>
	</form>
	'; 
   }
}
}
	include 'Template.php';	
    ?>