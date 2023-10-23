<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="" href="<?php echo e(URL::to('assets/images/favicon.png')); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/vendors/iconly/bold.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/css/app.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(URL::to('assets/images/favicon.svg')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/vendors/simple-datatables/style.css')); ?>">

    
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
    <div id="app">
        <?php echo $__env->yieldContent('menu'); ?>
        
        <?php echo $__env->yieldContent('content'); ?>
       
    </div>

    <script src="<?php echo e(URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/vendors/apexcharts/apexcharts.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/js/pages/dashboard.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/js/main.js')); ?>"></script>

    <script src="<?php echo e(URL::to('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/js/bootstrap.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(URL::to('assets/vendors/simple-datatables/simple-datatables.js')); ?>"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="<?php echo e(URL::to('assets/js/main.js')); ?>"></script>

    

</body>

</html><?php /**PATH C:\Users\wassy\laravel_dashboard_version13\resources\views/layouts/master.blade.php ENDPATH**/ ?>