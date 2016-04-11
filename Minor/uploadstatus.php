<?php 
    session_start();
if(!isset($_SESSION["sess_user"])){
   header("Location: login.php");
   
} else {
if(!isset($_SESSION["sess_user"])){
   header("Location: login.php");
 
} else {
    include "connection.php";

    $page=$_GET["page"];
    if ($page=="" || $page=="1") {
    $page1=0;
    }else{
    $page1=($page*5)-5;
    }
            $id = $_SESSION["sess_id"];
            $sql_news = mysql_query("select * from tbl_unapproved_news where member_id=$id limit $page1,5");
            $sql_event = mysql_query("select * from tbl_unapproved_event where member_id=$id limit $page1,5");
            $count_news  = mysql_num_rows($sql_news);
            $news='';
            $event='';
            $pagination1='';
            $pagination2='';

            
            while($view = mysql_fetch_array($sql_news))
            {  
            $id = $view['id'];
            $title = $view['title'];
            $status = $view['status'];
             
            $news.= '<tr> 
                <td></td>
                <td>'.$title.'</td>
                <td>'.$status.'</td>
                </tr>';
            }
            
            while($view = mysql_fetch_array($sql_event))
            {  
            $id = $view['id'];
            $title = $view['title'];
            $status = $view['status'];
             
            $event.= '<tr> 
                <td></td>
                <td>'.$title.'</td>
                <td>'.$status.'</td>
                </tr>';
            }

    
    $query1=  mysql_query("Select * from tbl_unapproved_news");
    $cou1=  mysql_num_rows($query1);
    $a1=$cou1/3;
    $a1=ceil($a1);
    
    $query2=  mysql_query("Select * from tbl_unapproved_event");
    $cou2=  mysql_num_rows($query2);
    $a2=$cou2/3;
    $a2=ceil($a2);
      
                for($b=1;$b<$a1;$b++){
                   $pagination1.='<ul class="pagination">
                        <li><a href="uploadstatus.php?page='.$b.'" class="pagination">'.$b.'</a></li>       
                    </ul>';
                }
                for($b=1;$b<$a2;$b++){
                   $pagination2.='<ul class="pagination">
                        <li><a href="uploadstatus.php?page='.$b.'" class="pagination">'.$b.'</a></li>       
                    </ul>';
                }
        
    $content =  ' 
        <h3><p align ="left">Status News</p></h3>
        <div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<td>No.</td>
			<td>Title</td>
                        <td>Status</td>

		</tr>'.$news.'      
        </table>
        </div>'
        .$pagination1.'
        <h3><p align ="left">Status Events</p></h3>
        <div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<td>No.</td>
			<td>Title</td>
                        <td>Status</td>

		</tr>'.$event.'            
                </table>
        </div>'
        .$pagination2;

}
}
include 'Template.php';
?>