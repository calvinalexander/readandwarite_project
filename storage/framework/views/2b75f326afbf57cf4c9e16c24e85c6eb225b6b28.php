<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    Search nanti selesai bikin database buku <br>
    <h3 align="center">Registration</h3>
    <div style="margin-left: 40%">
        <form method="POST" action="/register">
            <?php echo e(csrf_field()); ?>  
            Username:
            <input class="form-control" name="name" type="text" placeholder="Input Username" required>
            <br><br>
            
            E-mail Address:
            <input class="form-control" name="email" type="email" placeholder="Input E-mail Address" required>
            <br><br>
            
            Password:
            <input class="form-control" name="password" type="password" placeholder="Input Password" required>
            <br><br>
            
            Password Confirmation:
            <input class="form-control" name="confirmation" type="password" placeholder="Confirm Password" required>
            <br><br>

            <button type="submit">Submit</button>
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
</html><?php /**PATH E:\LaravelInstall\ReadandWArite\resources\views/register.blade.php ENDPATH**/ ?>