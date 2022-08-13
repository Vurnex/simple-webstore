<?php

?>

<head>
      <meta charset = "utf-8">
      <link href="<?= base_url(); ?>/public/assets/css/userView.css" rel="stylesheet" type="text/css">
</head>

<title>Products</title>

<table class="center" style="color:white">

<!-- If session cookie not set, message stays hidden -->
<?php if(isset($_SESSION['success2'])):?>
    <div class="alert alert-success" style="text-align:center; width: 64%; position: relative; left: 272px;">
        <strong>Product deleted successfully.</strong>
    </div>
<?php endif;?>

    <thead>

        <tr>
            <th>Database Record #</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Product ID</th>
        </tr>

    </thead>

    <tbody>

        <!-- Populate table -->
        <?php if (! empty($products) && is_array($products)): ?>

            <?php foreach ($products as $product_item): ?>

                <tr>
                    <td><?= esc($product_item['id']) ?></td>
                    <td><?= esc($product_item['name']) ?></td>
                    <td><?= esc($product_item['price']); ?></td>
                    <td><?= esc($product_item['description']); ?></td>
                    <td><?= esc($product_item['prodID']); ?></td>
                    <td><a href="<?= 'http://localhost:8080/products/delete?id=' . $product_item['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
                </tr>

            <?php endforeach ?>

            <?php else: ?>

                <h3 style="text-align:center;">No Products</h3>

                <p style="text-align:center;">Unable to find any products.</p>

        <?php endif ?>

    </tbody>

</table>

<div style="text-align:center; margin-top: 50px">
    <a href="http://localhost:8080/addproducts" style="display:inline-block; font-size: 20px">Add Products</a>
</div>

<div style="text-align:center; margin-top: 20px">
    <a href="http://localhost:8080/editproducts" style="display:inline-block; font-size: 20px">Edit Products</a>
</div>

<div style="text-align:center">
    <a href="http://localhost:8080/dashboard" style="display:inline-block; font-size: 20px">Return to Dashboard</a>
</div>