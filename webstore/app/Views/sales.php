<?php

?>

<head>
      <meta charset = "utf-8">
      <link href="<?= base_url(); ?>/public/assets/css/userView.css" rel="stylesheet" type="text/css">
      <link href="<?= base_url(); ?>/public/assets/css/salesView.css" rel="stylesheet" type="text/css">
</head>

<title>Sales</title>

<div class="container" style="text-align: center; margin-top: 50px">
    <p>Search by username: </p>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." style="margin-bottom: 50px;">
</div>

<table class="center" style="color:white" id="myTable">

<!-- If session cookie not set, message stays hidden -->
<?php if(isset($_SESSION['success2'])):?>
    <div class="alert alert-success" style="text-align:center; width: 64%; position: relative; left: 272px;">
        <strong>Record deleted successfully.</strong>
    </div>
<?php endif;?>

    <thead>

        <tr>
            <th>#</th>
            <th>Date Purchased</th>
            <th>Subtotal</th>
            <th>Items Purchased</th>
            <th>Purchased By</th>
        </tr>

    </thead>

    <tbody>

        <!-- Populate table -->
        <?php if (! empty($transactions) && is_array($transactions)): ?>

            <?php foreach ($transactions as $transaction_item): ?>

                <tr>
                    <td><?= esc($transaction_item['id']) ?></td>
                    <td><?= esc($transaction_item['datepurchased']) ?></td>
                    <td><?= esc($transaction_item['subtotal']); ?></td>
                    <td><?= esc($transaction_item['itemspurchased']); ?></td>
                    <td><?= esc($transaction_item['user']); ?></td>
                    <td><a href="<?= 'http://localhost:8080/sales/delete/' . $transaction_item['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>

            <?php endforeach ?>

            <?php else: ?>

                <h3 style="text-align:center;">No Sales</h3>

                <p style="text-align:center;">Unable to find any sales.</p>

        <?php endif ?>

    </tbody>

</table>

<div style="text-align:center">
    <a href="http://localhost:8080/dashboard" style="display:inline-block; font-size: 20px">Return to Dashboard</a>
</div>

<script src="<?= base_url(); ?>/public/assets/js/salesScript.js" type="text/javascript"></script>