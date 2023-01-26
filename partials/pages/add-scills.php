<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<?php

    if(!empty($_POST)) {
        $myscil = $_POST['scill'];
        $sql = "INSERT INTO `scills` (`my_scill`) VALUES ('$myscil')";
        //var_dump($sql);
        
        if (mysqli_query($conn, $sql)) {
            echo "Новий scill додано. <a href='/?p=scills.php'>Назад</a>";
            // redirect
          header("Location: /?p=scills.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
    }
?>

<div class="p-3" id="home-bg">
    <div class="card shadow mb-4" id="home-bg">
        <div class="card-header py-3">
            <h1 class="m-0 font-weight-bold text-success">Додати</h1>
            <a href='/?p=scills.php'>Назад</a>
        </div>
        
        <div class="card-body">
            <form action="?page=addpost" method="POST" id="home-bg">
                <div class="form-group">
                    <label for="twit">scill</label>
                    <input type="text" name="scill" class="form-control m-3" id="scill" placeholder="Enter new scill">
                </div>

                <button type="submit" class="btn btn-success btn-lg">ADD</button>
            </form>
        </div>   
    </div>
</div>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/scrypts.php');
?>