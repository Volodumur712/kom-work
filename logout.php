
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

  if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {
    $_SESSION['user_id'] = null;
    // redirect
          header("Location: /?p=home.php");
  }
  
?>  
<a href="/?p=home.php">Home</a>