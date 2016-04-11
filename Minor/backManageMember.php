<?php 
    session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");

} else {
    include "connection.php";

    $page=$_GET["page"];
    if ($page=="" || $page=="1") {
    $page1=0;
    }else{
    $page1=($page*5)-5;
    }
    
            $query = mysql_query("select * from `tbl_member` limit $page1,5");
            $count  = mysql_num_rows($query);
            //date
            $sql = mysql_fetch_assoc(mysql_query("select * from tbl_member"));
            $event='';
            $pagination='';
            $todaydate= date("Y-m-d");

            $status = "Free";
           
            while($row=mysql_fetch_array($query))
            {    
            $id = $row['id'];
            $username = $row['username'];
            $active = $row['active'];
            $subscription = $row['subscription'];
            $expireddate = $row['expired_date']; 
            $date1=date_create($todaydate);
            $date2=date_create($expireddate);
            $diff=date_diff($date1,$date2);
            $diff = $diff->format("%a days");

            if($active == 0){
                $active = "Waiting for activation";
            }else{
                $active = "Activated";
            }
            if ($subscription == "Free" || $subscription == "Invited"  ) {
                $diff = "Unlimited";
            }
            if ($todaydate==$expireddate) {
                $res= mysql_query("Select * from tbl_member where where '$todaydate' = '$expireddate'");
                $res = mysql_query("UPDATE tbl_member SET subscription='Free' where id='$id'");
                $res = mysql_query("UPDATE tbl_member SET start_date='$todaydate' where id='$id'");
                $res = mysql_query("UPDATE tbl_member SET expired_date=null where id='$id'");
            }


            $event.= '<tr>
                <td>'.$id.'</td> 
                <td>'.$username.'</td>
                <td>'.$active.'</td>
                <td>'.$subscription.'</td> 
                <td>'.$diff.'</td> 
                
             
                <td><a href="backViewMember.php?id='.$id.'">View</a></td>
                <td><a href="backUpdateMember.php?id='.$id.'">Update</a></td>
                <td><a href="backDeleteMember.php?id='.$id.'">Delete</a></td>
                </tr>';
            }

    $query1=  mysql_query("Select * from tbl_member");
    $cou=  mysql_num_rows($query1);
    
    $a=$cou/3;
    $a=ceil($a);
      
   
                for($b=1;$b<$a;$b++){
                   $pagination.='<ul class="pagination">
                        <li><a href="backManageMember.php?page='.$b.'" class="pagination">'.$b.'</a></li>
                    </ul>';
                }
   
    $content =  '        
	<ol class="breadcrumb">
		<li><a href="backHome.php">Home</a></li>
		<li class="active">Manage Member</li>
	</ol>
	
	<h2>Manage Member</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<td>No.</td>
			<td>Username</td>
                        <td>Status</td>
                        <td>Subscription</td>
                        <td>Remaining</td>
			<td colspan="3"></td>

		</tr>'.$event.'      
        </table>
        </div>
        <form action="backAddNewMember.php" method="post" enctype="multipart/form-data">
            <p align="center"><input type="submit" value="Add Member" class="btn btn-primary"></p>
        </form>'
        .$pagination;

}
include 'TemplateBackend.php';
?>