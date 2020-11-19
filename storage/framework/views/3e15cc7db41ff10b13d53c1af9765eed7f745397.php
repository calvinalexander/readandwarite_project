<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    Search nanti selesai bikin database buku <br>
    <h3 align="center">Login</h3>
    <div style="margin-left: 40%">
        <form method="POST" action="/login">
            <?php echo e(csrf_field()); ?>

            E-mail Address: 
            <input type="email" name="email"placeholder="E-mail Address" required>
            <br><br>
    
            Password:
            <input type="password" name="password" placeholder="Password" required>
            <br><br>
    
            <input type="checkbox" value="rememberMe">Remember Me
            <br><br>
    
            <button type="submit">Login</button>
        </form>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($error); ?> <br>     
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
    </div>
    
</body>
</html><?php /**PATH E:\LaravelInstall\ReadandWArite\resources\views/login.blade.php ENDPATH**/ ?>