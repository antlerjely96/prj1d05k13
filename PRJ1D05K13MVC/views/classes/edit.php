<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a class</title>
</head>
<body>
    <?php
        foreach ($classes as $class){
    ?>
        <form method="post" action="index.php?controller=class&action=update">
            <input type="hidden" name="id" value="<?= $class['id'] ?>">
            Name: <input type="text" name="name" value="<?= $class['name'] ?>"><br>
            Amount: <input type="number" name="amount" value="<?= $class['amount'] ?>"><br>
            <button>Update</button>
        </form>
    <?php
        }
    ?>
</body>
</html>