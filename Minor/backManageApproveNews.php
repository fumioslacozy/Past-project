<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");

} else {
    include "connection.php";

    $page=$_GET["page"];
    if ($page=="" || $page=="1") {
    $page1=0;
    }else{
    $page1=($page*5)-5;
    }
            $sql = mysql_query("select * from tbl_unapproved_news limit $page1,5");
            $count  = mysql_num_rows($sql);
            $event='';
            $pagination='';   
                
            while($row = mysql_fetch_array($sql))
            {  
            $id = $row['id'];
            $title = $row['title'];
            $status = $row['status'];

          
             
            $event.= '<tr> 
                <td>'.$id.'</td>
                <td>'.$title.'</td>
                <td>'.$status.'</td>
                 
                    <td><a href="backViewUnapprovedNews.php?id='.$id.'">View</a></td>
                </tr>';
            
            }

    
    $query1=  mysql_query("Select * from tbl_unapproved_news ");
    $cou=  mysql_num_rows($query1);
    
    $a=$cou/3;
    $a=ceil($a);
      
   
                for($b=1;$b<$a;$b++){
                   $pagination.='<ul class="pagination">
                        <li><a href="backManageApproveNews.php?page='.$b.'" class="pagination">'.$b.'</a></li>
                    </ul>';
                }
        
    $content =  '	
        <ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li class="active">Manage Unapproved News</li>
	</ol>
	
	<h2>Manage Unapproved News</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<td>No.</td>
			<td>Name</td>
                        <td>Status</td>
                        <td></td>

		</tr>'.$event.'      
        </table>
        </div>'
        .$pagination;

}
include 'TemplateBackend.php';
          
?>