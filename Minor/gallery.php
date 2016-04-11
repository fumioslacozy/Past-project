<?php
session_start();
include "connection.php";

        include "connection.php";
        $res = mysql_query("SELECT * FROM `tbl_gallery` order by id desc");
        $count  = mysql_num_rows($res);
        $image='';
        
            while($row=mysql_fetch_array($res))
                {

                    $id =$row['id'];
                    $name = $row['name'];
                       $image .= '
                                        <a href=showimage_gallery.php?id='.$id.' title="'.$name.'" data-gallery>
                                            <img src="showimage_gallery.php?id='.$id.'" alt="" width="145px"  class="img-responsive img-rounded" style="display:inline">
                                        </a>        
                                    ';

                    
                }
                
    

    $content ='

	    <form class="form-inline">
        <div class="form-group">
            <button id="image-gallery-button" type="button" class="btn btn-primary btn-lg">
                <i class="glyphicon glyphicon-picture"></i>
                Launch Image Gallery
            </button>
        </div>
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-success btn-lg">
            <i class="glyphicon glyphicon-leaf"></i>
            <input id="borderless-checkbox" type="checkbox"> Borderless
          </label>
          <label class="btn btn-primary btn-lg">
            <i class="glyphicon glyphicon-fullscreen"></i>
            <input id="fullscreen-checkbox" type="checkbox"> Fullscreen
          </label>
        </div>
    </form>
    <hr>
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="links"> <!-- Update image disini .. di a sama di img -->

'.$image.'

</div>
	

	';
	include 'Template.php';
?>
	<script src="js/jquery.blueimp-gallery.min.js"></script>
	<script src="js/bootstrap-image-gallery.min.js"></script>
	<script src="js/gallery.js"></script>

