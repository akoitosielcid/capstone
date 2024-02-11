<!-- scholar_info.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholar Information</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Scholar Information</h1>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Actions</th>
                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scholar_info as $scholar) : ?>
                <tr>
                    <td><?= $scholar['hello'] ?></td>
                    <td><?= $scholar['hi'] ?></td>
                    <td><?= $scholar['jjjj'] ?></td>
                    <td><?= $scholar['musta'] ?></td>
                    <td><a href="/delete-scholar/<?= $scholar['scholar_id'] ?>">Delete</a></td>

                    <!-- Add more table cells for other fields -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

.
.
.
.

</html>