<?php
include "connection.php";
if(!empty($_POST)){
$output1 = '';
$output2 = '';
$output3 = '';
 if(isset($_POST['submit'])) {
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
        $count1 = 0;
        $count2 = 0;
        $count2 = 3;
	if(!empty($_POST['search'])){
            $query1 = mysql_query("SELECT * FROM tbl_news WHERE title LIKE '%$searchq%' OR description LIKE '%$searchq%'") or die("Could not search !!!");
            $count1 = mysql_num_rows($query1);
                    if($count1 == 0){
                            $output1 = 'There was no search results';
                    }else {
                            while($row1 = mysql_fetch_array($query1)) {
                                    $title = $row1['title'];
                                    $desc = substr($row1['description'], 0, 250);
                                    $id = $row1['id'];
                                    
                                    $output1 .= '

                                                <div class="media">
						  <a class="media-left" href="#">
							<img src="showimage_news.php?id='.$id.'" alt="" width="64px" height="64px">
						  </a>
						  <div class="media-body">
							<a href="viewNews.php?id='.$id.'""><h4 class="media-heading">'.$title.'</h4></a>
							'.$desc.'
						  </div>
						</div>
                                        
                                            ';
                            }
                    }
        }else{
            $output1 = 'There was no search results';
        }
        
        if(!empty($_POST['search'])){
            $query2 = mysql_query("SELECT * FROM tbl_event WHERE title LIKE '%$searchq%' OR description LIKE '%$searchq%'") or die("Could not search !!!");
            $count2 = mysql_num_rows($query2);
                    if($count2 == 0){
                            $output2 = 'There was no search results';
                    }else {
                            while($row2 = mysql_fetch_array($query2)) {
                                    $title = $row2['title'];
                                    $desc = substr($row2['description'], 0, 250);
                                    $id = $row2['id'];

                                    $output2 .= '

                                                <div class="media">
						  <a class="media-left" href="#">
							<img src="showimage_event.php?id='.$id.'" alt="" width="64px" height="64px">
						  </a>
						  <div class="media-body">
							<a href="viewEvent.php?id='.$id.'"><h4 class="media-heading">'.$title.'</h4></a>
							'.$desc.'
						  </div>
						</div>
                                        
                                            ';
                            }
                    }
        }else{
            $output2 = 'There was no search results';
        }
         if(!empty($_POST['search'])){
            $query3 = mysql_query("SELECT * FROM tbl_ebook WHERE author LIKE '%$searchq%' OR title LIKE '%$searchq%' OR description LIKE '%$searchq%'") or die("Could not search !!!");
            $count3 = mysql_num_rows($query3);
                    if($count3 == 0){
                            $output3 = 'There was no search results';
                    }else {
                            while($row3 = mysql_fetch_array($query3)) {
                                    $title = $row3['title'];
                                    $desc = substr($row3['description'], 0, 250);
                                    $id = $row3['id'];
                                    $author = $row3['author'];

                                    $output3 .= '

                                                <div class="media">
						  <a class="media-left" href="#">
							<img src="showimage_ebook.php?id='.$id.'" alt="" width="64px" height="64px">
						  </a>
						  <div class="media-body">
							<a href="viewEvent.php?id='.$id.'"><h4 class="media-heading">'.$title.'</h4> by '.$author.'</a>
							'.$desc.'
						  </div>
						</div>
                                        
                                            ';
                            }
                    }
        }else{
            $output3 = 'There was no search results';
        }
 }  

    $content ='
	<h3><p align ="left">Search</p></h3>

				<form action="searchAll.php" method="post">
				<div class="row">
					<div class="col-lg-10">
						<div class="form-group">
							<input type="search" name="search" placeholder="Search..." class="form-control">
							
						</div>
					</div>
					<div class="col-lg-1">
							<button type="submit" name="submit" class="btn btn-primary">Search</button>
					</div>
				<div class="col-lg-12">
				<div class="panel panel-default">
                                        <div class="panel-heading">
					'.$count1.' News found for results of the search word "'.$_POST['search'].'"
					</div>
                                        <div class="panel-body" >
                                       '.$output1.'
					</div>
                                        
                                        
                                        <div class="panel-heading">
					'.$count2.' Events found for results of the search word "'.$_POST['search'].'"
					</div>
                                        <div class="panel-body" >
                                       '.$output2.'
					</div>
                                        
                                        <div class="panel-heading">
					'.$count3.' E-books found for results of the search word "'.$_POST['search'].'"
					</div>
                                        <div class="panel-body" >
                                       '.$output3.'
					</div>
				</div>
			</div><!-- /.col-lg-4 -->
					
				</div>
				
				
				</form>
	';
       }else{
              $content ='
	<h3><p align ="left">Search Query</p></h3>

				<form action="searchAll.php" method="post">
				<div class="row">
					<div class="col-lg-10">
						<div class="form-group">
							<input type="search" name="search" placeholder="Search..." class="form-control">
							
						</div>
					</div>
					<div class="col-lg-1">
							<button type="submit" name="submit" class="btn btn-primary">Search</button>
					</div>
				<div class="col-lg-12">

			</div><!-- /.col-lg-4 -->
					
				</div>
				
				
				</form>
	';
            
        }
include 'Template.php';
    
?>