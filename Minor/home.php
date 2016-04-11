<?php
session_start();
    include "connection.php";
            
            $query=  mysql_query("Select * from tbl_news order by id desc limit 4");
            $count  = mysql_num_rows($query);
            $news='';
            
    
            while($row=  mysql_fetch_array($query)){
            $id = $row['id'];
            $title = $row['title'];
            $desc = substr($row['description'], 0, 250);
            $news.= '<div class="col-lg-6" align="center">
                    <img class="img-circle" src="showimage_news.php?id='.$id.'" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <div style="height:50px;">
                    <h4>'.$title.'</h4>
                    </div>
                    <div style="height:150px;">
                    <p>'.$desc.'......</a></p>
                    </div>
                    <div style="height:50px;">
                    <p><a class="btn btn-default" href="viewNews.php?id='.$id.'" role="button">View details &raquo;</a></p>
                    </div>
                    </div>';
            }
            $content = $news
	;
            
    include 'Template.php';
    
?>

				