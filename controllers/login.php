<?php 
require('partials/nav.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $config = require('config.php');
    $db = new Database($config['database']);//config is passed to the class when it's instantiated

    $email = $_POST['email_address'];
    $password = $_POST['password'];

    $db->query('INSERT INTO users (email_address, password) VALUES(:email_address, :password)',[
        'email_address' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
    ]);
} 

require('views/login.view.php');

require('partials/footer.php');