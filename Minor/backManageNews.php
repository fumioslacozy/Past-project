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
    
            $query = mysql_query("select * from `tbl_news` limit $page1,5");
            $count  = mysql_num_rows($query);
            $news='';
            $pagination='';
            
            while($row=mysql_fetch_array($query))
            {  
                
            $id = $row['id'];
            $title = $row['title'];
             
            $news.= '<tr>
                <td>'.$id.'</td> 
                <td>'.$title.'</td> 
                
             
                <td><a href="backViewNews.php?id='.$id.'">View</a></td>
                <td><a href="backUpdateNews.php?id='.$id.'">Update</a></td>
                <td><a href="backDeleteNews.php?id='.$id.'">Delete</a></td>
                </tr>';
            }

    
    $query1=  mysql_query("Select * from tbl_news");
    $cou=  mysql_num_rows($query1);
    
    $a=$cou/3;
    $a=ceil($a);
      
   
                for($b=1;$b<$a;$b++){
                   $pagination.='<ul class="pagination">
                        <li><a href="backManageNews.php?page='.$b.'" class="pagination">'.$b.'</a></li>
                    </ul>';
                }
        
    $content =  '        
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li class="active">Manage News</li>
	</ol>
	
	<h2>Manage News</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<td>No.</td>
			<td>Name</td>
			<td colspan="3"></td>

		</tr>'.$news.'      
        </table>
        </div>        
        <form action="backAddNewNews.php" method="post" enctype="multipart/form-data">
            <p align="center"><input type="submit" value="Add News" class="btn btn-primary"></p>
        </form>'
        .$pagination;

}
include 'TemplateBackend.php';
?>