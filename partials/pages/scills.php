<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');  
?>

<section class="scills">
    <div class="row">
        <div class="col-md-4">
            <h1>My Scills</h1>
        </div>
        <div class="col-md-4">
            <a href="/partials/pages/add-scills.php"><h3>ADD Scills</h3></a>
        </div>
    </div>

    <?php
    $sql = "SELECT * FROM scills";
    $result = $conn->query($sql);
    ?>    
    
    

    <!-- цикл для вибору даних з таблиці-->
    <?php
        while($row = $result->fetch_assoc())   //отримати всі строки по одній
        {
        ?>
            <div class="col-md-4"><?php echo $row['my_scill']; ?></div>    
            
        <?php
        }
        ?>
    
</section>