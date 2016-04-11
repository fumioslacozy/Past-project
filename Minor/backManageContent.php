<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");

} else {

    include "connection.php";

            $sql = mysql_query("select * from tbl_content");
            $count  = mysql_num_rows($sql);
            $content='';
            $pagination='';   
                
            while($row = mysql_fetch_array($sql))
            {  
            $id = $row['id'];
            $name = $row['content_name'];
          
             
            $content.= '<tr> 
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                 
                <td><a href="backViewContent.php?id='.$id.'">View</a></td>
                <td><a href="backUpdateContent.php?id='.$id.'">Update</a></td>';
             
            
            }

        
    $content =  '	
        <ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li class="active">Manage Content</li>
	</ol>
	
	<h2>Manage Content</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<td>No.</td>
			<td>Name</td>
			<td colspan="2"></td>

		</tr>

		</tr>'.$content.'      
        </table>
        </div>';

}
include 'TemplateBackend.php';
          
?>
