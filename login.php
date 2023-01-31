
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');

require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');


if(!empty($_POST)) {
    $imja = $_POST['login'];
    //$poshta = $_POST['email'];
    $parol = $_POST['password'];
    $sql = "SELECT * FROM userku WHERE u_name = '$imja'";
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();
    var_dump($user);
    // перевірка чи вибрався
    echo $user['id'];
    if($user) {
        $_SESSION["user_id"] = $user['id'];
        echo $user['id'];
    } else {
        $_SESSION["user_id"] = null;
    }
    
    if (password_verify($parol, $user['u_pass'])) {
        setcookie("user", $user['id'], time()+3600*24, "/");
        header("Location: /");
    } else {
     echo 'Invalid password.';
   }
}
?>

<!-- <form method="post">
    <p>
        Login: <br/>
        <input type="text" name="login">
    </p>

    <p>
        Password: <br/>
        <input type="password" name="password">
    </p>

    <p>
        <input type="submit" name="submit" value="Login">
    </p>
</form> -->

<div id="bg-login">

<a href="/?p=home.php"><h3>Back to Home</h3></a>
        <div class="form-login">
            <h1>Login</h1>
                <form method="post">
                    <div class="input-form">
                        <input type="text" name="login" placeholder="Name">
                    </div>

                    <div class="input-form">
                        <input type="password" name="password" placeholder="Password">
                    </div>

                    <div class="input-form">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </form>
        </div>
</div>

