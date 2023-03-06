<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class List</title>
</head>
<body>
    <a href="index.php?controller=class&action=create">Add a class</a>
    <table border="1px" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Amount</th>
            <th></th>
            <th></th>
        </tr>
        <?php
            foreach ($classes as $class){
        ?>
            <tr>
                <td>
                    <?= $class['id'] ?>
                </td>
                <td>
                    <?= $class['name'] ?>
                </td>
                <td>
                    <?= $class['amount'] ?>
                </td>
                <td>
                    <a href="index.php?controller=class&action=edit&id=<?= $class['id'] ?>">Edit</a>
                </td>
                <td>
                    <a href="index.php?controller=class&action=destroy&id=<?= $class['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>