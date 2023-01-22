<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');

// те що у пост id потрапляє у змінну user_id
$user_id = $_POST['user_id'];
// у текст то що написано
$text = $_POST['twit'];
$imageName = '';

if(!empty ($_FILES)) {
    // додавання зображення
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';  // папка куди буде зберігатися
    
    // випадкове імя до цього зображення
    $ext = pathinfo($_FILES['image']['name']);
    // отримати тип файлу $ext['extension']
    $imageName = generateRandomString(20) . time() . "." . $ext['extension'];
    // шлях до папки + імя картинки
    $uploadfile = $uploaddir . $imageName;

    // якщо файл не завантажений
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        echo "Не завантажено!\n";
        // зупинка дії коду
        die();
    }
    
}