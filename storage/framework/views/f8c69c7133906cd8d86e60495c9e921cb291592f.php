<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>Search nanti selesai bikin database buku <br>
    <?php if(Auth::check()): ?>
        <?php if(Auth::user()->role_id == 1): ?> Admin, Welcome <?php echo e(Auth::user()->name); ?>

        <?php elseif(Auth::user()->role_id == 2): ?> Member, Welcome <?php echo e(Auth::user()->name); ?>

        <?php else: ?> Guest
        <?php endif; ?>
        <a href="/logout" >Log Out</a>
    <?php else: ?>
        <a href="/login"> <button>Login</button></a>
        <a href="/register"><button>Register</button></a>
    <?php endif; ?>
    <br><br>
    <?php if(Auth::user()->role_id == 1): ?>
        <a href="/addStationary"><button>Add New Stationary</button></a>
        <a href="/addType"><button>Add New Stationary Type</button></a>
        <a href="/editType"><button>Edit New Stationary Type</button></a>
    <?php else: ?> Tampilan Product Member
    <?php endif; ?>
    
</body>
</html><?php /**PATH E:\LaravelInstall\ReadandWArite\resources\views/home.blade.php ENDPATH**/ ?>