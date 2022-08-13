<?php

$session = session();

$currentUser = $session->get('user_name');

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>/public/assets/css/addProdStyle.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url(); ?>/public/assets/js/addProdScript.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Add Products</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">

                <h1 style="margin-top: 50px; margin-bottom: 50px;">Add Available Products</h1>

                <!-- If session cookie not set, message stays hidden -->
                <?php if(isset($_SESSION['success3'])):?>
                    <div class="alert alert-success">
                        <strong>Product added successfully.</strong>
                    </div>
                <?php endif;?>

                <!-- -->
                <?php if(isset($_SESSION['fail1'])):?>
                    <div class="alert alert-danger">
                        <strong>Failed to add product. Either the product entered is invalid or the product already exists in the database.</strong>
                    </div>
                <?php endif;?>

                <!-- If errors exist, display them. -->
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>         
                <?php endif;?>

                <!-- Call the save method from the Register controller -->
                <form action="/addproducts/save" method="post">
                    <label for="menu">Choose a product ready for distribution: Enter exactly: smartphone, laptop, batterypack, 
                        smartwatch, headphones, wirelesscharger, or bluetoothspeaker.&nbsp;
                    </label>

                    <br><br>

                    <input type="text" id="input" name="iteminput" required>
                    <button type="submit" class="btn btn-primary" id="inputButton">Add Product</button>

                </form>

                <div style="text-align:center; color:white; margin-top: 50px">
                    <a href="http://localhost:8080/products" style="display:inline-block; font-size: 20px">View Products</a>
                </div>

                <div style="text-align:center; margin-top: 50px">
                    <a href="http://localhost:8080/dashboard" style="display:inline-block; font-size: 20px">Return to Dashboard</a>
                </div>

            </div>
        </div>
    </div>

<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<script src="<?= base_url(); ?>/public/assets/js/addProdScript.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
