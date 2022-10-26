<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="" href="<?php echo e(URL::to('assets/images/favicon.png')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/css/pages/auth.css')); ?>">
    
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    
</head>
<style>
    .form-group[class*=has-icon-].has-icon-left .form-select {
    padding-left: 2.5rem;
}
</style>

<body>
   <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\Users\Hosni\Desktop\laravel_project\laravel_dashboard_version13\resources\views/layouts/app.blade.php ENDPATH**/ ?>