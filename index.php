
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

require($_SERVER['DOCUMENT_ROOT'] . 'upload.php');

?>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/body.php');
?>

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

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/scrypts.php');
?>