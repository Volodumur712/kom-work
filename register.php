
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');

if(!empty($_POST)) {

    $imja = $_POST['login'];
    $poshta = $_POST['email'];

    $parol = $_POST['password'];
    $passwordHash = password_hash($parol, PASSWORD_BCRYPT);
    // INSERT INTO `userku` (`id`, `u_name`, `u_email`, `u_pass`, `comit`) VALUES (NULL, 'we', 'we@we', 'we', 'we');
      $sql = "INSERT INTO userku (`u_name`, `u_email`, `u_pass`) VALUES ('$imja', '$poshta', '$passwordHash');";
      //var_dump($sql);
      if (mysqli_query($conn, $sql)) {
          echo "Нового користувача додано";
          header("Location: /login.php");
      } else {
          echo "Error: " . $sql . "<br>" . mysql_error($conn); 
      }
      mysqli_close($conn);
  }
?>


<div id="bg-register">
<a href="/?p=home.php"><h3>Back Home</h3></a>
        <div class="form-login">
            <h1>Register</h1>

                <form method="post">
                    <div class="input-form">
                        
                        <input type="text" name="login" placeholder="login">
                    </div>

                    <div class="input-form">
                        
                        <input type="text" name="email" placeholder="e-mail">
                    </div>

                    <div class="input-form">
                        
                        <input type="password" name="password" placeholder="password">
                    </div>

                    <div class="input-form">
                        <input type="submit" name="submit" value="Registr">
                    </div>
                </form>

        </div>
</div>

<!-- 
            <div class="input-form">
                <input type="text" name="login" placeholder="login">
            </div>
            <div class="input-form">
                <input type="text" name="email" placeholder="e-mail">
            </div>
            <div class="input-form">
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="input-form">
                <input type="submit" name="submit" value="Enter">
            </div>
        -->