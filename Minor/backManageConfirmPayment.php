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
    
            $query = mysql_query("SELECT c.id, c.status, m.username
						FROM tbl_confirmpayment c
						JOIN tbl_member m
						ON c.member_id = m.id limit $page1,5");
            
            $count  = mysql_num_rows($query);
            $view='';
            $pagination='';
            
            while($row=mysql_fetch_array($query))
            {  
                
            $id = $row['id'];
            $username = $row['username'];
            $status = $row['status'];
             
            $view.= '<tr>
                <td>'.$id.'</td> 
                <td>'.$username.'</td> 
                <td>'.$status.'</td> 
                
             
                <td><a href="backViewConfirmPayment.php?id='.$id.'">View</a></td>
                </tr>';
            }

    
    $query1=  mysql_query("Select * from tbl_confirmpayment");
    $cou=  mysql_num_rows($query1);
    
    $a=$cou/3;
    $a=ceil($a);
      
   
                for($b=1;$b<$a;$b++){
                   $pagination.='<ul class="pagination">
                        <li><a href="backManageConfirmPayment.php?page='.$b.'" class="pagination">'.$b.'</a></li>
                    </ul>';
                }
        
    $content =  '        
        <ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li class="active">Manage Confirm Payment</li>
	</ol>
	
        <h2>Confirm Payment</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<td>No.</td>
			<td>Name</td>
                        <td>Status</td>
			<td></td>
		</tr>'.$view.'      
        </table>
        </div>'        
        .$pagination;

}
include 'TemplateBackend.php';
?>