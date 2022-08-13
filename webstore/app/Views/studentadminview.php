<?php

?>

<head>
      <meta charset = "utf-8">
      <link href="<?= base_url(); ?>/public/assets/css/studentView.css" rel="stylesheet" type="text/css">
</head>

<title>Students Table</title>

<table class="center" style="color:white">

<!-- If session cookie not set, message stays hidden -->
<?php if(isset($_SESSION['success2'])):?>
    <div class="alert alert-success" style="text-align:center; width: 64%; position: relative; left: 272px;">
        <strong>Record deleted successfully.</strong>
    </div>
<?php endif;?>

    <thead>

        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Major</th>
            <th>Current Year</th>
            <th>E-Mail</th>
        </tr>

    </thead>

    <tbody>

        <!-- Populate table -->
        <?php if (! empty($students2) && is_array($students2)): ?>

            <?php foreach ($students2 as $student_item): ?>

                <tr>
                    <td><?= esc($student_item['id']) ?></td>
                    <td><?= esc($student_item['FirstName']) ?></td>
                    <td><?= esc($student_item['LastName']); ?></td>
                    <td><?= esc($student_item['Major']); ?></td>
                    <td><?= esc($student_item['CurrentYear']); ?></td>
                    <td><?= esc($student_item['Email']); ?></td>
                    <td><a href="<?= 'http://localhost:8080/students/delete/' . $student_item['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>

            <?php endforeach ?>

            <?php else: ?>

                <h3 style="text-align:center;">No Students</h3>

                <p style="text-align:center;">Unable to find any students.</p>

        <?php endif ?>

    </tbody>

</table>

<div style="text-align:center; margin-top: 50px">
    <a href="http://localhost:8080/createstudents" style="display:inline-block; font-size: 20px">Add Student</a>
</div>

<div style="text-align:center">
    <a href="http://localhost:8080/dashboard" style="display:inline-block; font-size: 20px">Return to Dashboard</a>
</div>