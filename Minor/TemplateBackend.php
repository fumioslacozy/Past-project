<?php ob_start();?>
<?php
$page = $_SERVER['PHP_SELF'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>AssociaWeb Control Panel</title>

    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap Core CSS -->
    <link href="css/navbar-static-top.css" rel="stylesheet">
	<link href="css/datepicker.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon" />
	<script src="ckeditor/ckeditor.js"></script>
  </head>

  <body onload="JavaScript:function();">

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AssociaWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
			<li><a href="backHome.php">Home</a></li>
            <li><a href="backManageLogo.php">Logo</a></li>
            <li><a href="backManageContent.php">Content</a></li>
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">News <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="backManageNews.php?page=1">Manage News</a></li>
                    <li><a href="backManageApproveNews.php?page=1">Unapproved News</a></li>
				</ul>
			</li>
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="backManageEvents.php?page=1">Manage Events</a></li>
                    <li><a href="backManageApproveEvents.php?page=1">Unapproved Events</a></li>
				</ul>
			</li>
            <li><a href="backManageGallery.php?page=1">Gallery</a></li>
            <li><a href="backManageEbooks.php?page=1">E-Books</a></li>
            			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Membership <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="backManageMember.php?page=1">Manage Member</a></li>
                    <li><a href="backManageConfirmPayment.php?page=1">Confirmation Payment</a></li>
				</ul>
			</li>
			<li><a href="backManageSlider.php?page=1">Slider</a></li>
			<li><a href="backManageFeatured.php?page=1">Featured</a></li>
                        <li><a href="backManageSocialMedia.php?page=1">Social Media</a></li>
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?=$_SESSION['back_user'];?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="backChangePassword.php">Change Password</a></li>
                    <li><a href="backLogout.php">Logout</a></li>
				</ul>
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

				<?php echo $content; ?>

    </div> <!-- /container -->

	<hr>
	<footer class="footer">
		<div class="container">
			<p class="text-muted" align="center">
			Copyright &copy 2014 by AssociaWeb
			</p>
		</div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery-1-11-1.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/workaround.js"></script>
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
  </body>
</html>
