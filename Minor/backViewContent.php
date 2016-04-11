<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");
     ?>
        
<?php  
} else {
        include "connection.php";
        $id= $_GET['id'];
        
        $view = mysql_fetch_assoc(mysql_query("SELECT c.id, c.content_name, c.description ,c.updated_time , a.username
											FROM tbl_content c
											JOIN tbl_admin a
											ON c.admin_id = a.id
											WHERE c.id = $id"));

        $content='	
            <ol class="breadcrumb">
                    <li><a href="backHome.php">Home</a></li>
                    <li><a href="backManageContent.php?page=1">Manage Content</a></li>
                    <li class="active">View Content</li>
            </ol>

            <h2>View Content</h2>
            <hr>
            <div class="table-responsive">
                    <table class="table table-bordered">

                    <tr>
                            <th>No.</th>
                            <td>'.$view['id'].'</td>
                    </tr>
                    <tr>
                            <th>Name</th>
                            <td>'.$view['content_name'].'</td>
                    </tr>
                    <tr>
                            <th>Description</th>
                            <td>'.$view['description'].'</td>
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
            </div>';
}
include "TemplateBackend.php";
?>