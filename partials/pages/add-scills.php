<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php'); 
?>

<?php

    if(!empty($_POST)) {
        $myscil = $_POST['scill'];
        $sql = "INSERT INTO `scills` (`my_scill`) VALUES ('$myscil')";
        //var_dump($sql);
        
        if (mysqli_query($conn, $sql)) {
            echo "Новий scill додано. <a href='/?p=scills.php'>Назад</a>";
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
    }
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Додати</h6>
    </div>
    
    <div class="card-body">
        <form action="?page=addpost" method="POST">
            <div class="form-group">
                <label for="twit">scill</label>
                <input type="text" name="scill" class="form-control" id="scill" placeholder="Enter new scill">
            </div>

            <button type="submit" class="btn btn-success btn-lg">ADD</button>
        </form>
    </div>   
</div>