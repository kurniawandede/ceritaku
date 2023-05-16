<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
 
    <title>Kelompok 4</title>
</head>
<body>
    
 
    <div class="container">
        <form action="<?php echo site_url('admin/login/login'); ?>" 
        method="POST" class="login-email">
            <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-warning text-danger" role="alert">
                <?php echo $_SESSION['error']?>
            </div>
            <?php endif; ?>
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" 
                value="<?php echo set_value('email'); ?>" required>
                <?php echo form_error('email'); ?>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" 
                value="<?php echo set_value('password'); ?>" required>
                <?php echo form_error('password'); ?>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
