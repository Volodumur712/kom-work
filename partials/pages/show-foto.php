<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');  

    $sql = "SELECT image FROM projects ORDER BY id DESC";
    $result = $conn->query($sql);
?>


<div class="gallery">
<?php if($result->num_rows > 0){ ?> 
    <div class="img-box"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
</div>


