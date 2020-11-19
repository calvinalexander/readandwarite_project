<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Stationary</title>
</head>
<body>
    <form method="POST" action="/addStationary" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <input type="file" name="image"><br>
        <input type="text" name="name" placeholder="Input Stationary Name" required><br>
        <input type="text" name="type" placeholder="Input Stationary Type Name" required><br>
        <input type="text" name="description" placeholder="Input Description" required><br>
        <input type="text" name="price" placeholder="Input Price" required><br>
        <input type="text" name="stock" placeholder="Input Stock" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html><?php /**PATH E:\LaravelInstall\ReadandWArite\resources\views//addStationary.blade.php ENDPATH**/ ?>