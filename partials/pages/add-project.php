<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<?php
    if(!empty($_POST)) {
        // INSERT INTO `projects` (`id`, `proj_name`, `image`, `discription`, `autor`, `scills`) 
        // VALUES (NULL, 'war', 'image11.pnj', 'game for war', 'vova', '2');
        $sql = "INSERT INTO `projects` (`proj_name`, `discription`, `autor`, `scills`) 
        VALUES ('" . $_POST['project'] . "', '" . $_POST['twit'] . "', '" . $_POST['autor'] . "', '" . $_POST['scills'] . "');";
        //var_dump($sql);
        if (mysqli_query($conn, $sql)) {
            echo "Новий проект додано. <a href='/partials/pages/projects.php'>До проектів</a>";
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
    }
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-primary">Додати проект</h1>
        <a href='/partials/pages/projects.php'>До проектів</a>
    </div>
    
    <div class="card-body">
        <form action="#" method="POST" id="formTwit">
            <div class="form-group">
                <label for="twit"><h2>Project</h2></label>
                <input type="text" name="project" class="form-control" id="twit" placeholder="Type your project name">
                <input type="text" name="autor" class="form-control" id="twit" placeholder="Select autor">
                <textarea class="form-control" name="twit" id="twit" rows="3"placeholder="Type your project discription"></textarea>
                <input id="projImage" type="file" name="image">
                <input type="text" name="scills" class="form-control" id="twit" placeholder="Select scills">
            </div>

            <button type="submit" class="btn btn-success btn-lg">Save</button>
        </form>
    </div>   
</div>        

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/scrypts.php');
?>