<?php

?>


<div class="order-view-content">
    <div class="orders-table">
        <table>
            <thead>
                <tr>
                    <th>Order number</th>
                    <th>Date</th>
                    <th>Product</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($orders as $order): ?>
                <tr>
 <!--This adds the order ID to query string (GET)--><td><a href="/order?id=<?=$order['order_id'] ?>" class="text-blue-500 hover:undeline"><?=$order['order_id']?></a></td>
                    <td><?=$order['date_ordered']?></td>
                    <td><?=$order['product']?></td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>
    </div>
</div>
