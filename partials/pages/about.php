<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

require($_SERVER['DOCUMENT_ROOT'] . '/upload/upload.php');
?>

<section class="about">
<h1>upload image</h1>
    <div class="wrapper">
        <?php if(!empty($statusMsg)) { ?>
            <p class="status <?php echo $status; ?>"> <?php $statusMsg; ?> </p>
        <?php } ?>
        <form action="#" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Select Image File:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn-primary" value="Upload">
        </form>
    </div>
</section>