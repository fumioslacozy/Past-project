<?php
if(isset($_GET['email'])){
             $content ='
                        <h3>Recover Password</h3>
                        <hr>
        			<div class="form-group">
				<label>Your password is already sent to your email.</label>
                        </div>';
}else{
    $content=
	'
	<h3>Recover Password</h3>
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
			
			<div class="row">
			  <div class="col-lg-12">
				<p align=center><input type="submit" name="submit" class="btn  btn-primary" value="Submit" name="submit" /></p>
			  </div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
		</div>
	</form>
	'; 
}
include "connection.php";
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   
   if (!empty($_POST['username']) && !empty($_POST['email'])) {
        $username = mysql_escape_string($_POST['username']); 
        $email = mysql_escape_string( $_POST['email']);
        
        $search = mysql_query("SELECT username, password, email FROM tbl_member WHERE username='".$username."' AND email='".$email."'") or die(mysql_error()); 
        $match  = mysql_num_rows($search);
        $row = mysql_fetch_array($search);
        $password = $row['password'];  
        
        if($match > 0){
            $to      = $email; // Send email to our user
            $subject = 'Recover Password'; // Give the email a subject 
            $message = '

            Thanks for recover your password!
            Your account has been recover, you can login with the following credentials.

            ------------------------
            Username: '.$username.'
            Password: '.$password.'
            ------------------------


            ';

            $headers = 'From:associawebnoreply@gmail.com' . "\r\n"; // Set from headers
            mail($to, $subject, $message, $headers); // Send our email
            
            header("Location: forgotpassword.php?email=$email");     
    
        }else{
            $content ='
                        <h3>Recover Password</h3>
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

                                        <div class="row">
                                          <div class="col-lg-12">
                                                <p align=center><input type="submit" name="submit" class="btn  btn-primary" value="Submit" name="submit" /></p>
                                          </div><!-- /.col-lg-4 -->
                                        </div><!-- /.row -->
                                </div>
                        </form>
                        ';
    }
        
   }else{
       $content=
	'
        <h3>Recover Password</h3>
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
			
			<div class="row">
			  <div class="col-lg-12">
				<p align=center><input type="submit" name="submit" class="btn  btn-primary" value="Submit" name="submit" /></p>
			  </div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
		</div>
	</form>
	'; 
   }
}
	include 'Template.php';	
    ?>