<?php 
    session_start();
if(!isset($_SESSION["back_user"])){
   header("Location: backLogin.php");

} else {
    include "connection.php";
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $sql="DELETE from tbl_video where id ='$id'";
        $res = mysql_query($sql);
        header("Location: backManageFeatured.php?page=1");
    }
}

?>