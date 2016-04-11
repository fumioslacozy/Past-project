<?php 
    session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");

} else {

    $content ='
	<ol class="breadcrumb">
		<li class="active">Home</li>
	</ol>
	
	';
            
    include 'TemplateBackend.php';

}
?>