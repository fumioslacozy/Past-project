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
    
            $query = mysql_query("select * from `tbl_socialmedia` limit $page1,5");
            $count  = mysql_num_rows($query);
            $view='';
            $pagination='';
            
            while($row=mysql_fetch_array($query))
            {  
                
            $id = $row['id'];
            $name = $row['name'];
             
            $view.= '<tr>
                <td>'.$id.'</td> 
                <td>'.$name.'</td> 
                
             
                <td><a href="backViewSocialMedia.php?id='.$id.'">View</a></td>
                <td><a href="backUpdateSocialMedia.php?id='.$id.'">Update</a></td>
                <td><a href="backDeleteSocialMedia.php?id='.$id.'">Delete</a></td>
                </tr>';
            }

    
    $query1=  mysql_query("Select * from tbl_socialmedia");
    $cou=  mysql_num_rows($query1);
    
    $a=$cou/3;
    $a=ceil($a);
      
   
                for($b=1;$b<$a;$b++){
                   $pagination.='<ul class="pagination">
                        <li><a href="backManageSocialMedia.php?page='.$b.'" class="pagination">'.$b.'</a></li>
                    </ul>';
                }
        
    $content =  '        
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li class="active">Manage Social Media</li>
	</ol>
	
	<h2>Manage Social Media</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<td>No.</td>
			<td>Name</td>
			<td colspan="3"></td>

		</tr>'.$view.'      
        </table>
        </div>
        <form action="backAddNewSocialMedia.php" method="post" enctype="multipart/form-data">
            <p align="center"><input type="submit" value="Add Social Media" class="btn btn-primary"></p>
        </form>'
        .$pagination;

}
include 'TemplateBackend.php';
?>