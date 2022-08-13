<?php

$session = session();

$currentUser = $session->get('user_name');

?>

<head> 
      <meta charset = "utf-8">
      <link href="<?= base_url(); ?>/public/assets/css/userView.css" rel="stylesheet" type="text/css">
</head>

<h1 style="text-align:center; font-size:20px; color: white;">Welcome back, <?= $currentUser; ?></h1>

<div style="text-align:center; color:white; margin-top: 50px">
    <a href="http://localhost:8080/products" style="display:inline-block; font-size: 20px">View Products</a>
</div>

<div style="text-align:center; color:white;">
    <a href="http://localhost:8080/addproducts" style="display:inline-block; font-size: 20px">Add Products</a>
</div>

<div style="text-align:center; color:white;">
    <a href="http://localhost:8080/editproducts" style="display:inline-block; font-size: 20px">Edit Products</a>
</div>

<div style="text-align:center; color:white;">
    <a href="http://localhost:8080/sales" style="display:inline-block; font-size: 20px">View Sales</a>
</div>

<div class="container" style="text-align: center; margin-top: 50px">
    <form action="/login/logout" method="post">
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
</div>