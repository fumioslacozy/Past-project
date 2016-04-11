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
    
            $query = mysql_query("select * from `tbl_ebook` limit $page1,5");
            $count  = mysql_num_rows($query);
            $ebook='';
            $pagination='';
            
            while($row=mysql_fetch_array($query))
            {  
                
            $id = $row['id'];
            $title = $row['title'];
             
            $ebook.= '<tr>
                <td>'.$id.'</td> 
                <td>'.$title.'</td> 
                
             
                <td><a href="backViewEbooks.php?id='.$id.'">View</a></td>
                <td><a href="backUpdateEbooks.php?id='.$id.'">Update</a></td>
                <td><a href="backDeleteEbooks.php?id='.$id.'">Delete</a></td>
                </tr>';
            }

    
    $query1=  mysql_query("Select * from tbl_ebook");
    $cou=  mysql_num_rows($query1);
    
    $a=$cou/3;
    $a=ceil($a);
      
   
                for($b=1;$b<$a;$b++){
                   $pagination.='<ul class="pagination">
                        <li><a href="backManageEbooks.php?page='.$b.'" class="pagination">'.$b.'</a></li>
                    </ul>';
                }
        
    $content =  '        
        <ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li class="active">Manage E-Books</li>
	</ol>
	
        <h2>Manage E-Books</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<td>No.</td>
			<td>Name</td>
			<td colspan="3"></td>
		</tr>'.$ebook.'      
        </table>
        </div>        
        <form action="backAddNewEbooks.php" method="post" enctype="multipart/form-data">
            <p align="center"><input type="submit" value="Add Ebooks" class="btn btn-primary"></p>
        </form>'
        .$pagination;

}
include 'TemplateBackend.php';
?>