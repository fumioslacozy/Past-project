<?php
include "connection.php";

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysql_escape_string($_GET['email']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable
                 
    $search = mysql_query("SELECT email, hash, active FROM tbl_member WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
    $match  = mysql_num_rows($search);
                 
    if($match > 0){
        // We have a match, activate the account
        mysql_query("UPDATE tbl_member SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
        $content = '<div class="statusmsg"><h3>Your account has been activated, you can now login</h3></div>';
    }else{
        // No match -> invalid url or account has already been activated.
        $content =  '<div class="statusmsg"><h3>The url is either invalid or you already have activated your account.</h3></div>';
    }
                 
}else{
    // Invalid approach
    $content =  '<div class="statusmsg"<h3>Invalid approach, please use the link that has been send to your email.</h3></div>';
}

include 'Template.php';
?>