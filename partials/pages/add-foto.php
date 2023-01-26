<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php'); 
require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');

require($_SERVER['DOCUMENT_ROOT'] . '/upload/upload.php');
?>
<div class="wrapper">
        <form action="#" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Select Image File:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn-primary" value="Upload">
        </form>
    </div>