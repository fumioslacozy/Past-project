<?php 
include "connection.php";
if(!isset($_SESSION["sess_user"])){
   ?>
	<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo 'ASII'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap Core CSS -->
    <link href="css/carousel.css" rel="stylesheet">
	<link href="css/datepicker.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dzstooltip/dzstooltip.css"/>
	<link rel='stylesheet' type="text/css" href="dzscalendar/dzscalendar.css"/>
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
	<link rel="shortcut icon" href="img/icon.png" type="image/x-icon" />
    <script src="ckeditor/ckeditor.js"></script>
	<!-- CSS End -->

</head>
	
<body onload="Javascript:function()">
    <!-- Navigation Bar -->
    <div class="navbar-wrapper">
    <div class="container">

    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"><img src="showimage_logo.php?id=1=" width="50px" height="23px"></img></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About ASII <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="membershipbenefit.php">Membership benefits</a></li>
		</ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">News & Events <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="news.php?page=<?php echo 1 ?>">Recent News</a></li>
                    <li><a href="event.php?page=<?php echo 1 ?>">Events</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
		</ul>
            </li>
            <li><a href="research.php">Research</a></li>
            <li><a href="career.php">Career</a></li>
            <li><a href="elibrary.php?page=<?php echo 1 ?>">E-Library</a></li> 
        </ul>
        
	<form class="navbar-form navbar-right" action="searchAll.php" method="post">
            <div class="form-group">
			<input type="search" name="search" placeholder="Search..." class="form-control">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Search</button>
	</form>
			
	<ul class="nav navbar-nav navbar-right">
		<li><a href="login.php">Login</a></li>
		<li><a href="signup.php">Sign Up</a></li>
	</ul>
    </div>
    </div>
    </nav>

    </div>
    </div>
	
   <?php
        include "connection.php";
        $res = mysql_query("SELECT * FROM `tbl_slider` order by id desc limit 6");
        $count  = mysql_num_rows($res);
        $slides='';
        $Indicators='';
        $counter= 0;
        
            while($row=mysql_fetch_array($res))
                {

                    $id =$row['id'];
                    $title = $row['name'];
                    $caption = $row['caption'];
                    $placeholder = $row['placeholder'];
                    $link_slider = $row['link'];
                    if($counter == 0)
                    {
                        $Indicators .='<li data-target="#carousels" data-slide-to="'.$counter.'" class="active"></li>';
                        $slides .= '<div class="item active">
                                    <img src="showimage_slider.php?id='.$id.'" alt="'.$title.'" />
                                            <div class="carousel-caption">
                                                <h3>'.$title.'</h3>
                                                <p>'.$caption.'</p>
                                                <p><a class="btn btn-lg btn-primary" href="'.$link_slider.'" role="button">'.$placeholder.'</a></p>  
                                            </div>
                                      </div>
                                    ';

                    }else{
                        $Indicators .='<li data-target="#carousels" data-slide-to="'.$counter.'"></li>';
                        $slides .= '<div class="item">
                                    <img src="showimage_slider.php?id='.$id.'" alt="'.$title.'" />
                                            <div class="carousel-caption">
                                                <h3>'.$title.'</h3>
                                                <p>'.$caption.'</p>
                                                <p><a class="btn btn-lg btn-primary" href="'.$link_slider.'" role="button">'.$placeholder.'</a></p>
                                            </div>
                                      </div>
                                    ';
                    }
                    $counter++;
                    
                }
                
    
    ?>
   <!-- Carousel
    ================================================== -->
    <div id="carousels" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php echo $Indicators; ?>
        </ol>
      
       <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
            <?php echo $slides; ?>  
      </div>
       
      <!-- Controls -->
      <a class="left carousel-control" href="#carousels" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousels" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="container index">
		<div class="row">
			<div class="col-lg-8"> <!-- CONTENT -->
				<?php echo $content; ?>
			</div><!-- /.col-lg-8 -->

<?php
        include "connection.php";
        $res = mysql_query("SELECT * FROM `tbl_video` order by id desc limit 2");
        $count  = mysql_num_rows($res);
        $video='';
        
            while($row=mysql_fetch_array($res))
                {

                    $id =$row['id'];
                    $link=$row['link'];
                    {
                        $video .='  <iframe width="90%" height="90%" src="http://www.youtube.com/embed/'.$link.'" frameborder="0" allowfullscreen alt="video YouTube"></iframe>';
                     
                }      
                        }

  ?>
<?php
        include "connection.php";
        $res = mysql_query("SELECT * FROM tbl_event where availability='Public'");
        $count  = mysql_num_rows($res);
        $event='';
        
            while($row=mysql_fetch_array($res))
                {

                    $id =$row['id'];
                    $title = $row['title'];
                    $startdate = $row['start_date'];
                    $date = date('m-d-Y', strtotime($startdate));
                    $enddate = $row['end_date'];
                    $date2 = date('m-d-Y', strtotime($enddate));
                    $event .= '								
                            <div  data-startdate="'.$date.'" data-enddate="'.$date2.'">
				<div>
                                    <h5><a href="viewEvent.php?id='.$id.'">'.$title.'</a></h5>
				</div>
                            </div>
                                    ';                           
                }
                
    
    ?>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Event</h3>
					</div>
                    <div class="panel-body">
						<div class="dzscalendar skin-responsive" id="dzscalendarevent" style="">
							<div class="events">
                                    <?php echo $event; ?>
							</div>
						</div>
						<div>
							<label style="background-color: #6fb6ce; color:#fff;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  Events &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<label style="background-color: #77618a; color:#fff;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  Today
						</div>
					</div>
					<div class="panel-heading">
						<h3 class="panel-title">Featured</h3>
					</div>
					<div class="panel-body">
						<?php echo $video; ?>
					</div>
				</div>
			</div><!-- /.col-lg-4 -->
		</div>
	</div>
<?php
        include "connection.php";
        $res = mysql_query("SELECT * FROM `tbl_socialmedia` order by id desc limit 3");
        $count  = mysql_num_rows($res);
        $social='';

        
            while($row=mysql_fetch_array($res))
                {

                    $id =$row['id'];
                    $link=$row['link'];
                    $social .= '<a target="_blank" href="https://'.$link.'/"><img src="showimage_socialmedia.php?id='.$id.'" width="30px" height="30px"></img></a>';

                    
                }
                
    
    ?>        
    <div class="footer">
		<div class="footer-main">
		  <div class="container">
				<div class="row">
					<div class="col-lg-12">
					<p>
                                            <a href="contactus.php">Contact Us</a>
					</p>
					<div align="right">
						<?php echo $social ?>
                                        </div>
					<p>
                                        <large>Copyright © 2014 ASII · All right reserved</large>
					</p>
					</div>
				</div>
			</div>
		 </div>
	</div>
	

	
	<!-- JavaScript -->
	<script src="js/jquery-1-11-1.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
    <script src="dzscalendar/dzscalendar.js" type="text/javascript"></script>
	<script src="js/docs.min.js"></script>
	<script src="js/workaround.js"></script>
    <script>
		jQuery(document).ready(function($){
		$('#dzscalendarevent').dzscalendar({
		start_format: "mm/dd/yyyy"

		});
		})
	</script>
	<script>
	$('#sandbox-container input').datepicker({format: "yyyy-mm-dd"
        });
	</script>
	<script type='text/javascript'>
	(function()
	{
	  if( window.localStorage )
	  {
		if( !localStorage.getItem( 'firstLoad' ) )
		{
		  localStorage[ 'firstLoad' ] = true;
		  window.location.reload();
		}  
		else
		  localStorage.removeItem( 'firstLoad' );
	  }
	})();
	</script>
	<!-- JavaScript End -->
        
</body>
</html>
<?php
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo 'ASII'; ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap Core CSS -->
    <link href="css/carousel.css" rel="stylesheet">
	<link href="css/datepicker.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dzstooltip/dzstooltip.css"/>
	<link rel='stylesheet' type="text/css" href="dzscalendar/dzscalendar.css"/>
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
	<script src="ckeditor/ckeditor.js"></script>

</head>
	
<body onload="Javascript:function()">
    <!-- Navigation Bar -->
    <div class="navbar-wrapper">
		<div class="container">

		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					       <a class="navbar-brand"><img src="showimage_logo.php?id=1" width="50px" height="23px"></img></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About ASII <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="aboutus.php">About Us</a></li>
								<li><a href="membershipbenefit.php">Membership benefits</a></li>
					</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">News & Events <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="news.php?page=<?php echo 1 ?>">Recent News</a></li>
								<li><a href="event.php?page=<?php echo 1 ?>">Events</a></li>
                                                                <li><a href="gallery.php">Gallery</a></li>
					</ul>
						</li>
						<li><a href="research.php">Research</a></li>
						<li><a href="career.php">Career</a></li>
						<li><a href="elibrary.php?page=<?php echo 1 ?>">E-Library</a></li> 
					</ul>
					
                                <form class="navbar-form navbar-right" action="searchAll.php" method="post">
                                    <div class="form-group">
                                                <input type="search" name="search" placeholder="Search..." class="form-control">
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                </form>
						
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?=$_SESSION['sess_user'];?><span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="profile.php">My Profile</a></li>
								<li><a href="uploadstatus.php?page=<?php echo 1; ?>">Upload Status</a></li>
                                                                <li class="divider"></li>
								<li><a href="confirmpayment.php">Confirm Payment</a></li>
								<li class="divider"></li>
								<li><a href="changepassword.php">Change Password</a></li>
								<li class="divider"></li>
								<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
				</ul>
				</div>
			</div>
		</nav>

		</div>
    </div>
	
      <?php
        include "connection.php";
        $res = mysql_query("SELECT * FROM `tbl_slider` order by id desc limit 6");
        $count  = mysql_num_rows($res);
        $slides='';
        $Indicators='';
        $counter= 0;
        
            while($row=mysql_fetch_array($res))
                {

                    $id =$row['id'];
                    $title = $row['name'];
                    $caption = $row['caption'];
                    $placeholder = $row['placeholder'];
                    $link_slider = $row['link'];
                    if($counter == 0)
                    {
                        $Indicators .='<li data-target="#carousels" data-slide-to="'.$counter.'" class="active"></li>';
                        $slides .= '<div class="item active">
                                    <img src="showimage_slider.php?id='.$id.'" alt="'.$title.'" />
                                            <div class="carousel-caption">
                                                <h3>'.$title.'</h3>
                                                <p>'.$caption.'</p>
                                                <p><a class="btn btn-lg btn-primary" href="'.$link_slider.'" role="button">'.$placeholder.'</a></p>

                                            </div>
                                      </div>
                                    ';

                    }else{
                        $Indicators .='<li data-target="#carousels" data-slide-to="'.$counter.'"></li>';
                        $slides .= '<div class="item">
                                    <img src="showimage_slider.php?id='.$id.'" alt="'.$title.'" />
                                            <div class="carousel-caption">
                                                <h3>'.$title.'</h3>
                                                <p>'.$caption.'</p>
                                                <p><a class="btn btn-lg btn-primary" href="'.$link_slider.'" role="button">'.$placeholder.'</a></p>
                                            </div>
                                      </div>
                                    ';
                    }
                    $counter++;
                    
                }
                
    
    ?>
   <!-- Carousel
    ================================================== -->
    <div id="carousels" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php echo $Indicators; ?>
        </ol>
      
       <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
            <?php echo $slides; ?>  
      </div>
       
      <!-- Controls -->
      <a class="left carousel-control" href="#carousels" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousels" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="container index">
		<div class="row">
			<div class="col-lg-8"> <!-- CONTENT -->
				<?php echo $content; ?>
			</div><!-- /.col-lg-8 -->
			
<?php
        include "connection.php";
        $res = mysql_query("SELECT * FROM `tbl_video` order by id desc limit 2");
        $count  = mysql_num_rows($res);
        $video='';
        
            while($row=mysql_fetch_array($res))
                {

                    $id =$row['id'];
                    $link=$row['link'];
                    {
                        $video .='  <iframe width="90%" height="90%" src="http://www.youtube.com/embed/'.$link.'" frameborder="0" allowfullscreen alt="video YouTube"></iframe>';
                     
                }      
                        }

  ?>
<?php
        include "connection.php";
        $res = mysql_query("SELECT * FROM `tbl_event`");
        $count  = mysql_num_rows($res);
        $event='';
        
            while($row=mysql_fetch_array($res))
                {

                    $id =$row['id'];
                    $title = $row['title'];
                    $startdate = $row['start_date'];
                    $date = date('m-d-Y', strtotime($startdate));
                    $enddate = $row['end_date'];
                    $date2 = date('m-d-Y', strtotime($enddate));
                    $event .= '								
                            <div  data-startdate="'.$date.'" data-enddate="'.$date2.'">
								<div>
                                    <h5><a href="viewEvent.php?id='.$id.'">'.$title.'</a></h5>
								</div>
                            </div>
                                    ';                           
                }
                
    
?>
                        
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Welcome, <?=$_SESSION['sess_user'];?></h3>
					</div>
					<div class="panel-body list-group" align="left">
						<a href="uploadnews.php" class="list-group-item">Upload News</a>
						<a href="uploadevent.php" class="list-group-item">Upload Events</a>
					</div>
					<div class="panel-heading">
						<h3 class="panel-title">Event</h3>
					</div>
                    <div class="panel-body">
						<div class="dzscalendar skin-responsive" id="dzscalendarevent" style="">
							<div class="events">
                                 <?php echo $event; ?>
							</div>
						</div>
							<div>
								<label style="background-color: #6fb6ce; color:#fff;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  Events &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<label style="background-color: #77618a; color:#fff;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>  Today
							</div>
					</div>
					<div class="panel-heading">
						<h3 class="panel-title">Featured</h3>
					</div>
					<div class="panel-body">
						<?php echo $video; ?>
					</div>
				</div>
			</div><!-- /.col-lg-4 -->
		</div>
	</div>

<?php
        include "connection.php";
        $res = mysql_query("SELECT * FROM `tbl_socialmedia` order by id desc limit 3");
        $count  = mysql_num_rows($res);
        $social='';

        
            while($row=mysql_fetch_array($res))
                {

                    $id =$row['id'];
                    $link=$row['link'];
                    $social .= '<a target="_blank" href="https://'.$link.'/"><img src="showimage_socialmedia.php?id='.$id.'" width="30px" height="30px"></img></a>';

                    
                }
                
    
    ?>    
    
    <div class="footer">
		<div class="footer-main">
		  <div class="container">
				<div class="row">
					<div class="col-lg-12">
					<p>
					<a href="contactus.php">Contact Us</a>
					</p>
					<div align="right">
						<?php echo $social ?>
                                        </div>
					<p>
					<small>Copyright © 2014 ASII · All right reserved</small>
					</p>
					</div>
				</div>
			</div>
		 </div>
	</div>
	

	
	<!-- JavaScript -->
	<script src="js/jquery-1-11-1.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
    <script src="dzscalendar/dzscalendar.js" type="text/javascript"></script>
	<script src="js/docs.min.js"></script>
	<script src="js/workaround.js"></script>
    <script>
		jQuery(document).ready(function($){
		$('#dzscalendarevent').dzscalendar({
		start_format: "mm/dd/yyyy"

		});
		})
	</script>
	<script>
	$('#sandbox-container input').datepicker({format: "yyyy-mm-dd"
        });
	</script>
	<script type='text/javascript'>
	(function()
	{
	  if( window.localStorage )
	  {
		if( !localStorage.getItem( 'firstLoad' ) )
		{
		  localStorage[ 'firstLoad' ] = true;
		  window.location.reload();
		}  
		else
		  localStorage.removeItem( 'firstLoad' );
	  }
	})();
	</script>
	<!-- JavaScript End -->
        
</body>
</html>
<?php
}
?>