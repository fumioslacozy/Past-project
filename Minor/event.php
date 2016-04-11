<?php
session_start();
    include "connection.php";

    $page=$_GET["page"];
    if ($page=="" || $page=="1") {
    $page1=0;
    }else{
    $page1=($page*3)-3;
    }
    
    if(!isset($_SESSION["sess_user"])){
                    $query=  mysql_query("Select * from tbl_event where availability='Public' order by id desc limit $page1,5");
    
    }else{
                    $query=  mysql_query("Select * from tbl_event order by id desc limit $page1,5");
    
    }

            $count  = mysql_num_rows($query);
            $event='';
            $pagination='';
            
            while($row=  mysql_fetch_array($query)){
            $id = $row['id'];
            $start_date = $row['start_date'];
            $end_date = $row['end_date'];
            $title = $row['title'];
            $event.= '<ul class="list-group">
                <li class="list-group-item">
               <h5>'.$start_date.' - '.$end_date.'</h5>
               <a href="viewEvent.php?id='.$id.'" class="h4"><h4>'.$title.'</h4></a></li>';
             
            
            }

    
    $query1=  mysql_query("Select * from tbl_event");
    $cou=  mysql_num_rows($query1);
    
    $a=$cou/3;
    $a=ceil($a);
   
                for($b=1;$b<$a;$b++){
                   $pagination.='<ul class="pagination">
                        <li><a href="event.php?page='.$b.'" class="pagination">'.$b.'</a></li>
                    </ul>';
                }
        
    $content =  ' <h3><p align ="left">Events</p></h3>
    '.$event.$pagination;


include 'Template.php';
    
?>
