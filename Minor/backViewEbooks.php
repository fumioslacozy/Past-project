<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");  
} else {
        include "connection.php";
        $id= $_GET['id']; 
		$view = mysql_fetch_assoc(mysql_query("SELECT e.id, e.author, e.title, e.description, e.download_link ,e.updated_time , a.username
											FROM tbl_ebook e
											JOIN tbl_admin a
											ON e.admin_id = a.id
											WHERE e.id = $id"));
        $content ='
            <ol class="breadcrumb">
                    <li><a href="backHome.php">Home</a></li>
                    <li><a href="backManageEbooks.php?page=1">Manage E-Books</a></li>
                    <li class="active">View E-Books</li>
            </ol>

            <h2>View E-Books</h2>
            <hr>
            <div class="table-responsive">
                    <table class="table table-bordered">

                    <tr>
                            <th>No.</th>
                            <td>'.$view['id'].'</td>
                    </tr>
                    <tr>
                            <th>Title</th>
                            <td>'.$view['title'].'</td>
                    </tr>
                    <tr>
                            <th>Author</th>
                            <td>'.$view['author'].'</td>
                    </tr>
                    <tr>
                            <th>Image</th>
                            <td><img src="showimage_ebook.php?id='.$id.'" width="20%"></td>
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

            </div>
            ';
}
include "TemplateBackend.php";
?>