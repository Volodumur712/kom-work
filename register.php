
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

<form method="post">
    <p>
        Login: <br/>
        <input type="text" name="login">
    </p>

    <p>
        Email: <br/>
        <input type="text" name="email">
    </p>

    <p>
        Password: <br/>
        <input type="password" name="password">
    </p>

    <p>
        <input type="submit" name="submit" value="registr">
    </p>
</form>