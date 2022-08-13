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
    <title>Edit Products</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">

                <h1 style="margin-top: 50px; margin-bottom: 50px;">Edit Available Products</h1>

                <!-- If session cookie not set, message stays hidden -->
                <?php if(isset($_SESSION['success3'])):?>
                    <div class="alert alert-success">
                        <strong>Changes saved successfully.</strong>
                    </div>
                <?php endif;?>

                <!-- -->
                <?php if(isset($_SESSION['fail1'])):?>
                    <div class="alert alert-danger">
                        <strong>Failed to edit product(s). Either no changes were made or were invalid.</strong>
                    </div>
                <?php endif;?>

                <!-- If errors exist, display them. -->
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>         
                <?php endif;?>

                <!-- Call the save method from the Register controller -->
                <form action="/editproducts/save" method="post">
                    <label for="menu">Make changes and save. Leave options blank that you don't want to change. Both fields of each product must be
                        filled out however if you make changes to one of them. If the product being editted does not exist in the database, 
                        nothing will happen. &nbsp;
                    </label>

                    <br><br>

                    <!-- Smartphone -->
                    <label>Smartphone Price:</label> <br>
                    <input type="number" name="smartphonePrice"> <br>
                    <label>Smartphone Description:</label> <br>
                    <input type="text" id="input" name="smartphoneDesc"> <br><br>

                    <!-- Laptop -->
                    <label>Laptop Price:</label> <br>
                    <input type="number" name="laptopPrice"> <br>
                    <label>Laptop Description:</label> <br>
                    <input type="text" id="input" name="laptopDesc"> <br><br>

                    <!-- Battery Pack -->
                    <label>Battery Pack Price:</label> <br>
                    <input type="number" name="batterypackPrice"> <br>
                    <label>Battery Pack Description:</label> <br>
                    <input type="text" id="input" name="batterypackDesc"> <br><br>

                    <!-- Smartwatch -->
                    <label>Smartwatch Price:</label> <br>
                    <input type="number" name="smartwatchPrice"> <br>
                    <label>Smartwatch Description:</label> <br>
                    <input type="text" id="input" name="smartwatchDesc"> <br><br>

                    <!-- Headphones -->
                    <label>Headphones Price:</label> <br>
                    <input type="number" name="headphonesPrice"> <br>
                    <label>Headphones Description:</label> <br>
                    <input type="text" id="input" name="headphonesDesc"> <br><br>

                    <!-- Wireless Charger -->
                    <label>Wireless Charger Price:</label> <br>
                    <input type="number" name="wirelessPrice"> <br>
                    <label>Wireless Charger Description:</label> <br>
                    <input type="text" id="input" name="wirelessDesc"> <br><br>

                    <!-- Bluetooth Speaker -->
                    <label>Bluetooth Speaker Price:</label> <br>
                    <input type="number" name="bluetoothPrice"> <br>
                    <label>Bluetooth Speaker Description:</label> <br>
                    <input type="text" id="input" name="bluetoothDesc"> <br><br>

                    <br><br><button type="submit" class="btn btn-primary" id="saveButton">Save</button>

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
