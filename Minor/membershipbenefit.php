<?php 
    session_start();
    include "connection.php";
    $membershipbenefit = mysql_fetch_assoc(mysql_query("select * from tbl_content where id =3"));
if(!isset($_SESSION["sess_user"])){
               $content ='<h3><p align ="left">Membership Benefit</p></h3>'
    .$membershipbenefit['description'];
} else { 
    if ($_SESSION['sess_subscription'] == "Advanced") {
            $content ='<h3><p align ="left">Membership Benefit</p></h3>'
    .$membershipbenefit['description'];
    }else{
         $content ='<h3><p align ="left">Membership Benefit</p></h3>'
    .$membershipbenefit['description'].'                
        <form method="post" action="upgrade_subscription.php" enctype="multipart/form-data">
		<div class="form-group">
			  <div class="col-lg-12">
				<p align=center><input type="submit" name="Submit" class="btn btn-primary" value="Upgrade Now" name="submit" /></p>
			  </div><!-- /.col-lg-4 -->

		</div>		
        </form>';   
    }


    
}
include 'Template.php';
    
?>
