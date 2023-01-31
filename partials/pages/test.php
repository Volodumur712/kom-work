<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>

<?php 
// проба
    
    if(!empty($_POST)) {
        if(!empty($_FILES["image"]["name"])) {
            // Get file info 
            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    
            $allowTypes = array('jpg','png','jpeg','gif'); 
                if(in_array($fileType, $allowTypes)){ 
                    $image = $_FILES['image']['tmp_name']; 
                    $imgContent = addslashes(file_get_contents($image)); 

            $sql = "INSERT INTO `projects` (`proj_name`, `image`, `discription`, `autor`, `scills`) 
            VALUES ('" . $_POST['project'] . "', '$imgContent', '" . $_POST['twit'] . "', '" . $_POST['autor'] . "', '" . $_POST['scills'] . "');";
            var_dump($sql);
            $insert = $conn->query($sql);
                if (mysqli_query($conn, $sql)) {
                    echo "Новий проект додано.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysql_error($conn); 
                }
                
                }else{ 
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
                } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.'; 
        } 
    }
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="m-0 font-weight-bold text-primary">Проба</h1>
        <a href='/?p=projects.php'>назад</a>
    </div>
    
    <div class="card-body">
        <form action="" method="POST" id="formTwit" enctype="multipart/form-data">
            <div class="form-group">
                <label for="twit"><h2>Project</h2></label>
                <input type="text" name="project" class="form-control" id="twit" placeholder="Type your project name">
                <input type="text" name="autor" class="form-control" id="twit" placeholder="Select autor">
                <textarea class="form-control" name="twit" id="twit" rows="3"placeholder="Type your project discription"></textarea>
                <div class="wrapper">
                    <div class="form-group">
                        <label for="image">Select Image File:</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <input type="text" name="scills" class="form-control" id="twit" placeholder="Select scills">
            </div>
                <button type="submit" name="submit" class="btn btn-success btn-lg">Save</button>
        </form>
    </div>   
</div>        

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/scrypts.php');
?>