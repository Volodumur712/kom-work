<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php'); 

//require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
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
    <?php
        while($row = $result->fetch_assoc()) 
        {
        ?>
            <div class="col-md-4" id="home-bg">
                <div class="skill mb-4 font-weight-bold border 3px border-success p-5">
                    <div class="d-flex justify-content-between text-primary">
                        <?php echo $row['my_scill']; ?>
                    </div>
                </div>
            </div>    
        <?php
        }
        ?>

</section>