<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");  
} else {
        include "connection.php";
        $id= $_GET['id']; 
		$view = mysql_fetch_assoc(mysql_query("SELECT l.id, l.image, l.name, l.updated_time , a.username
											FROM tbl_logo l
											JOIN tbl_admin a
											ON l.admin_id = a.id
											WHERE l.id = $id"));
        $content ='
            <ol class="breadcrumb">
                    <li><a href="backHome.php">Home</a></li>
                    <li><a href="backManageLogo.php?page=1">Manage Logo</a></li>
                    <li class="active">View Logo</li>
            </ol>

            <h2>View Logo</h2>
            <hr>
            <div class="table-responsive">
                    <table class="table table-bordered">

                    <tr>
                            <th>No.</th>
                            <td>'.$view['id'].'</td>
                    </tr>
                    <tr>
                            <th>Image</th>
                            <td><img src="showimage_logo.php?id='.$id.'" width="20%"></td>
                    </tr>
                    <tr>
                            <th>Name</th>
                            <td>'.$view['name'].'</td>
                    </tr>
                    <tr>
                            <th>Last Edited</th>
                            <td>'.$view['updated_time'].'</td>
                    </tr>
                    <tr>
                            <th>Edited By</th>
                            <td>'.$view['username'].'</td>
                    </tr>

                    </table>

            </div>
            ';
}
include "TemplateBackend.php";
?>