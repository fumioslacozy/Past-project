<?php
session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");  
} else {
        include "connection.php";
        $id= $_GET['id']; 
        $view = mysql_fetch_assoc(mysql_query("SELECT e.id, e.start_date, e.end_date, e.title, e.description, e.availability, e.updated_time, a.username
											FROM tbl_event e
											JOIN tbl_admin a
											ON e.admin_id = a.id
											WHERE e.id = $id"));
        $content ='
            <ol class="breadcrumb">
                    <li><a href="backHome.php">Home</a></li>
                    <li><a href="backManageEvents.php?page=1">Manage Events</a></li>
                    <li class="active">View Events</li>
            </ol>

            <h2>View Events</h2>
            <hr>
            <div class="table-responsive">
                    <table class="table table-bordered">

                    <tr>
                            <th>No.</th>
                            <td>'.$view['id'].'</td>
                    </tr>
                    <tr>
                            <th>Name</th>
                            <td>'.$view['title'].'</td>
                    </tr>
                    <tr>
                            <th>Start Date</th>
                            <td>'.$view['start_date'].'</td>
                    </tr>
                    <tr>
                            <th>End Date</th>
                            <td>'.$view['end_date'].'</td>
                    </tr>
                    <tr>
                            <th>Image</th>
                            <td><img src="showimage_event.php?id='.$id.'" width="20%"></td>
                    </tr>
                    <tr>
                            <th>Description</th>
                            <td>'.$view['description'].'</td>
                    </tr>
                    <tr>
                            <th>Availability</th>
                            <td>'.$view['availability'].'</td>
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
    include 'TemplateBackend.php';
    
?>