<?php
session_start();
unset($_SESSION['sess_user']);
        $content ='
            <h3>Log Out</h3>
            <hr>
            <div class="form-group">
                <label>You Succesfully Log Out</label>
            </div>';
    include 'Template.php';
    
?>
