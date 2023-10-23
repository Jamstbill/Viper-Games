<?php

$config = require('config.php');
$db = new Database($config['database']);

$currentUserId = 1;


$orders = $db->query('SELECT * FROM orders WHERE customer_id = 1')->get();


require('partials/nav.php');

require('views/account.view.php');

require('partials/footer.php');