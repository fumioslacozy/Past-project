<?php 
    session_start();
if(!isset($_SESSION["sess_user"])){
   header("Location: login.php");
 
} else {
    if($_SESSION['sess_subscription'] == "Advanced" || $_SESSION['sess_subscription'] == "Invited") {
                $content ='<h3><p align ="left">Confirm Payment</p></h3>
                        <hr>
                        <h4><p align ="left">This page is not available because you are not Free Member</p></h4>
	
                </form>'; 
                include 'Template.php';
                exit();
            }
    if(isset($_GET['thankyou'])){
            $content ='
                <h3>Confirm Payment</h3>
                <hr>
                    <div class="form-group">
                    <label>Thank You for your confirmation, we will check immediately</label>
                </div>';
            }else{
    $content=
	'
	<h3>Confirm Payment</h3>
	<br/>
	<form method="post" action="" enctype="multipart/form-data">
            		<div class="form-group">
				<label>Payer’s Name</label>
				<input type="text" name="name" class="form-control" id="inputName">
                        </div>
			<div class="form-group">
                            <label>Payment Date</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>Payment Amount</label>
				<input type="text" name="amount" class="form-control" id="inputNilai">
                        </div>

			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
				
		</form>
	';
            }

include "connection.php";

if(isset($_POST['submit'])){
   $date = $_POST['date'];
   $name = $_POST['name'];
   $amount = $_POST['amount'];
   $status = "Waiting";

   if(!empty($_POST['date']) && !empty($_POST['name']) && !empty($_POST['amount'])) {
       if (is_numeric($_POST['amount'])){
            $date = mysql_escape_string($_POST['date']);
            $name = mysql_escape_string($_POST['name']);
            $amount = mysql_escape_string($_POST['amount']);
            $member_id = $_SESSION['sess_id'];


            $insert = 'INSERT into tbl_confirmpayment(name, date, amount, member_id, status) VALUES("'.$name.'","'.$date.'","'.$amount.'","'.$member_id.'","'.$status.'")';
            mysql_query($insert); 

            header("Location: confirmpayment.php?thankyou");     
            
       }else{
             $content=
	'
	<h3>Confirm Payment</h3>
	<br/>
        <h4><p align ="left">Payment Amount must Numeric</p></h4>
		<form method="post" action="" enctype="multipart/form-data">
            		<div class="form-group">
				<label>Payer’s Name</label>
				<input type="text" name="name" class="form-control" id="inputName">
                        </div>
			<div class="form-group">
                            <label>Payment Date</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>Payment Amount</label>
				<input type="text" name="amount" class="form-control" id="inputNilai">
                        </div>

			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
				
		</form>
	';
       }
   }else{
           $content=
	'
	<h3>Confirm Payment</h3>
	<br/>
        <h4><p align ="left">All fields are required!</p></h4>
		<form method="post" action="" enctype="multipart/form-data">
            		<div class="form-group">
				<label>Payer’s Name</label>
				<input type="text" name="name" class="form-control" id="inputName">
                        </div>
			<div class="form-group">
                            <label>Payment Date</label>
                        <div id="sandbox-container">
                            <div class="input-group date">
                                <input type="text" name="date" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        </div>
			<div class="form-group">
				<label>Payment Amount</label>
				<input type="text" name="amount" class="form-control" id="inputNilai">
                        </div>

			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
				
		</form>
	';
   }
   }
}
	include 'Template.php';	
 ?>   