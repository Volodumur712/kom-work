<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/head_menu.php');
?>

<?php

   $page = 'home';
   if(isset($_GET['p'])) {
    
   switch ($_GET['p']) {
     case 'home.php':
     $page = 'home';
     break;
     case 'projects.php':
     $page = 'projects';
     break;
     case 'scills.php':
     $page = 'Scills';
     break;
     case 'testimonial.php':
     $page = 'testimonial';
     break;
     case 'about.php':
     $page = 'about';
     break;
     case 'contact.php':
     $page = 'contact';
     break;
     case 'login.php':
     $page = 'login';
     break;

     default:
     $page = 'home';
     break;
     }
   }
   require($_SERVER['DOCUMENT_ROOT'] . "/partials/pages/$page.php"); // обовязково подвійні лапки

?>