<?php

$config = require('config.php');
$db = new Database($config['database']);

$currentCustomerId = 1;//replaced by session at some point.
//Login will add user array to session where the currentUserId will be set.

$order = $db->query('SELECT * FROM orders WHERE order_id = :id',
    [
        'id' => $_GET['id'],
    ]
)->findOrFail();

authorise($order['customer_id'] != $currentCustomerId);//if there is an order but the customer_id doesn't match, 403

require('partials/nav.php');

require('views/order.view.php');

require('partials/footer.php');