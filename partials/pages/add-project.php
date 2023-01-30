<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
require($_SERVER['DOCUMENT_ROOT'] . '/upload/upload.php');
?>

<?php
    // так працює
    if(!empty($_POST)) {
        $sql = "INSERT INTO `projects` (`proj_name`, `discription`, `autor`, `scills`) 
        VALUES ('" . $_POST['project'] . "', '" . $_POST['twit'] . "', '" . $_POST['autor'] . "', '" . $_POST['scills'] . "');";
        var_dump($sql);
        if (mysqli_query($conn, $sql)) {
            echo "Новий проект додано.";
            // redirect
          header("Location: /");
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
    } // так працює
?>
<div class="p-4" id="home-bg">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-primary">Додати проект</h1>
            <a href='/?p=projects.php'>До проектів</a>
        </div>
        
        <div class="card-body">
            <form action="#" method="POST" id="formTwit">
                <div class="form-group">
                    <label for="twit"><h2>Project</h2></label>
                    <input type="text" name="project" class="form-control m-3 text-success" id="twit" placeholder="Type your project name">
                    <input type="text" name="autor" class="form-control m-3" id="twit" placeholder="Select autor">
                    <textarea class="form-control m-3" name="twit" id="twit" rows="3"placeholder="Type your project discription"></textarea>
                    <!-- <div class="wrapper">
            <?php //if(!empty($statusMsg)) { ?>
                <p class="status <?php //echo $status; ?>"> <?php //$statusMsg; ?> </p>
            <?php //} ?>
                    
                        <div class="form-group">
                            <label for="image">Select Image File:</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    
                    </div> -->
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                        </div>
                    <input type="text" name="scills" class="form-control text-danger" id="twit" placeholder="Select scills">
                </div>
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Save</button>
            </form>
        </div>   
    </div>   
</div>     

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/scrypts.php');
?>