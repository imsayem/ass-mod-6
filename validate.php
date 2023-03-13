<?php

if (!isset($_POST['name']) || empty($_POST['name']) ||
    !isset($_POST['email']) || empty($_POST['email']) ||
    !isset($_POST['password']) || empty($_POST['password']) ||
    !isset($_FILES['profile_picture']) || empty($_FILES['profile_picture'])) {
    die('Please fill out all required fields.');
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Invalid email format.');
}

$target_dir = 'uploads/';
$target_file = $target_dir . date('YmdHis') . '_' . basename($_FILES['profile_picture']['name']);
if (!move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
    die('Error uploading file.');
}

$user_data = array($name, $email, $target_file);
$fp = fopen('users.csv', 'a');
fputcsv($fp, $user_data);
fclose($fp);

session_start();
setcookie('name', $name);

header('Location: success.php');
exit();
