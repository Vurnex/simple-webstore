<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <title>Add Students</title>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-6">

                <h1 style="margin-top: 50px">Add Student</h1>


                <!-- If errors exist, display them. Otherwise, display success message. -->
                <?php if(isset($validation)):?>

                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>

                    <?php elseif(isset($_SESSION['success'])): ?>

                        <div class="alert alert-success">
                            <strong>Record added successfully.</strong>
                        </div>

                <?php endif;?>

                     <!-- Call the create method from the CreateStudents controller -->   
                    <form action="/createstudents/create" method="post">
                        
                        <div class="mb-3">
                            <label for="InputForFirstName" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" id="InputForFirstName" value="<?= set_value('firstname') ?>">
                        </div>

                        <div class="mb-3">
                            <label for="InputForLastName" class="form-label">Last Name</label>
                            <input type="text" name="lname" class="form-control" id="InputForFirstName" value="<?= set_value('lname') ?>">
                        </div>

                        <div class="mb-3">
                            <label for="InputForMajor" class="form-label">Major</label>
                            <input type="text" name="major" class="form-control" id="InputForMajor" value="<?= set_value('major') ?>">
                        </div>

                        <div class="mb-3">
                            <label for="InputForCurrentYear" class="form-label">Current Year (eg. Freshman, Sophomore, etc)</label>
                            <input type="text" name="currentyear" class="form-control" id="InputForCurrentYear" value="<?= set_value('currentyear') ?>">
                        </div>

                        <div class="mb-3">
                            <label for="InputForEmail" class="form-label">Email Address</label>
                            <input type="text" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div style="text-align:center">
            <a href="http://localhost:8080/dashboard" style="display:inline-block; font-size: 20px">Return to Dashboard</a>
        </div>

        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </body>
</html>