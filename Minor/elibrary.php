<?php 
    session_start();
if(!isset($_SESSION["sess_user"])){
   header("Location: login.php");
 
} else {
    include "connection.php";

    $page=$_GET["page"];
    if ($page=="" || $page=="1") {
    $page1=0;
    }else{
    $page1=($page*3)-3;
    }
    
            $query = mysql_query("select * from `tbl_ebook` limit $page1,3");
            $count  = mysql_num_rows($query);
            $ebook='';
            $pagination='';
            
            while($row=mysql_fetch_array($query))
            {  
                
            $id = $row['id'];
            $author = $row['author'];
            $title = $row['title'];
            $description = $row['description']; 
            $download = $row['download_link']; 
             if($_SESSION['sess_subscription'] == "Free"){
                 $download_link = "<td>Download</td>";
             }else{
                 $download_link = '<td><a href="http://'.$download.'/">Download</a></td>';
             }
            $ebook.= '<tr>
                <td><img src="showimage_ebook.php?id='.$id.'" class="img"></td> 
                <td>'.$author.'</td>
                <td>'.$title.'</td> 
                <td>'.$description.'</td> 
                '.$download_link.'
                </tr>';
             
            
            }

    
    $query1=  mysql_query("Select * from tbl_ebook");
    $cou=  mysql_num_rows($query1);
    
    $a=$cou/2;
    $a=ceil($a);
      
   
                for($b=1;$b<$a;$b++){
                   $pagination.='<ul class="pagination">
                        <li><a href="elibrary.php?page='.$b.'" class="pagination">'.$b.'</a></li>
                    </ul>';
                }
        
    $content =  '<h3><p align ="left">E-Books</p></h3>
    <div class="table-responsive">
	<table  class="table center">
	<tr>
			<th>Books</th>
			<th>Author</th>
			<th>Title</th>
			<th>Description</th>
			<th>Download</th>
	</tr>'.$ebook.'      
        </table>
        </div>'
        .$pagination;

}
include 'Template.php';
?>