<?php
session_start();
    include "connection.php";

    $page=$_GET["page"];
    if ($page=="" || $page=="1") {
    $page1=0;
    }else{
    $page1=($page*3)-3;
    }
    
            $query=  mysql_query("Select * from tbl_news order by id desc limit $page1,5");
            $count  = mysql_num_rows($query);
            $news='';
            $pagination='';
            
            while($row=  mysql_fetch_array($query)){
            $id = $row['id'];
            $datetime = $row['datetime'];
            $title = $row['title'];
            $news.= '<ul class="list-group">
           <li class="list-group-item"><h5>'.$datetime.'<br></h5><a href="viewNews.php?id='.$id.'" class="h4"><h4>'.$title.'</h4></a></li>';
             
            
            }

    
    $query1=  mysql_query("Select * from tbl_news");
    $cou=  mysql_num_rows($query1);
    
    $a=$cou/3;
    $a=ceil($a);
      
   
                for($b=1;$b<$a;$b++){
                   $pagination.='<ul class="pagination">
                        <li><a href="news.php?page='.$b.'" class="pagination">'.$b.'</a></li>
                    </ul>';
                }
        
    $content =  ' <h3><p align ="left">News</p></h3>
    '.$news.$pagination;


include 'Template.php';
    
?>
