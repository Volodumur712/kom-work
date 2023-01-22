
<?php
// тут створення нових дописів за цим прикладом
    if(!empty($_POST)) {
        $sql = "INSERT INTO `projects` (`twit`, `user_id`, `created`) 
        VALUES ('" . $_POST['twit'] . "', '" . $_POST['user_id'] . "', current_timestamp());";
        //var_dump($sql);
        // INSERT INTO `projects` (`id`, `image`, `autor`, `scills`) VALUES (NULL, 'img1', 'vova', '1');
        if (mysqli_query($conn, $sql)) {
            echo "Новий проект додано. <a href='/partials/pages/projects.php'>До проектів</a>";
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
    }
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Додати проект</h6>
    </div>
    
    <div class="card-body">
        <form action="?page=addpost" method="POST">
            <div class="form-group">
                <label for="twit">twit</label>
                <input type="text" name="twit" class="form-control" id="twit" placeholder="Enter your twit">
            </div>

            <div class="form-group">
                <label for="twit">ID:</label>
                <input type="text" name="user_id" class="form-control" id="twit" placeholder="Enter id">
            </div>

            <button type="submit" class="btn btn-success btn-lg">Save</button>
        </form>
    </div>   
</div>        


<div class="container">
    <div id="ajaxStatus"></div>
    <form class="form-group" enctype="multipart/form-data" action="#" method="post" id="formTwit">
        <input type="hidden" name="user_id" value="<?php echo getUserID(); ?>">
        <label for="twit">Ваші дописи</label>    
        <textarea class="form-control" name="twit" id="twit" rows="3"></textarea>
        <input id="twitImage" type="file" name="image">

        <button class="btn btn-success">Відправити</button>
    </form>
</div>