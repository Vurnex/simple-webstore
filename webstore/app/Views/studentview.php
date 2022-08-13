<head> 
      <meta charset = "utf-8">
      <link href="<?= base_url(); ?>/public/assets/css/studentView.css" rel="stylesheet" type="text/css">
</head>

<title>Students Table</title>

<table class="center" style="color:white">

    <thead>

        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Major</th>
            <th>Current Year</th>
            <th>E-Mail</th>
        </tr>

    </thead>

    <tbody>

        <?php if (! empty($students2) && is_array($students2)): ?>

            <?php foreach ($students2 as $student_item): ?>

                <tr>
                    <td><?= esc($student_item['FirstName']) ?></td>
                    <td><?= esc($student_item['LastName']); ?></td>
                    <td><?= esc($student_item['Major']); ?></td>
                    <td><?= esc($student_item['CurrentYear']); ?></td>
                    <td><?= esc($student_item['Email']); ?></td>
                </tr>

            <?php endforeach ?>

            <?php else: ?>

                <h3 style="text-align:center;">No Students</h3>

                <p style="text-align:center;">Unable to find any students.</p>

        <?php endif ?>

    </tbody>

</table>

<div style="text-align:center; margin-top: 50px">
    <a href="http://localhost:8080/dashboard" style="display:inline-block; font-size: 20px">Return to Dashboard</a>
</div>