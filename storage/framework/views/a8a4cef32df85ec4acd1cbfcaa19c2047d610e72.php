
<?php $__env->startSection('menu'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>View Record</h3>
                    <p class="text-subtitle text-muted">staff information list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <?php echo Toastr::message(); ?>

        <section class="section">
            <div class="card">
                <div class="card-header">
                    Staff list
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Sex</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Salary</th>
                                <th class="text-center">Modify</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="id"><?php echo e(++$key); ?></td>
                                    <td class="name"><?php echo e($item->rec_id); ?></td>
                                    <td class="name"><?php echo e($item->full_name); ?></td>
                                    <td class="name"><?php echo e($item->sex); ?></td>
                                    <td class="email"><?php echo e($item->email_address); ?></td>
                                    <td class="phone_number"><?php echo e($item->phone_number); ?></td>
                                    <td class="phone_number"><?php echo e($item->position); ?></td>
                                    <td class="phone_number"><?php echo e($item->department); ?></td>
                                    <td class="phone_number"><?php echo e($item->salary); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(route('form/staff/new')); ?>">
                                            <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                        </a>
                                        <a href="<?php echo e(url('form/view/detail/'.$item->id)); ?>">
                                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                        </a>    
                                        <a href="<?php echo e(url('delete/'.$item->id)); ?>" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="footer clearfix mb-0 text-muted ">
            <div class="float-start">
                <p>2022 &copy; wassym jaffel</p>
            </div>
            <div class="float-end">
                <p>Crafted with<span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="">wassym jaffel</a></p>
            </div>
        </div>
    </footer>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar.viewrecord', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hosni\Desktop\laravel_project\laravel_dashboard_version13\resources\views/view_record/viewrecord.blade.php ENDPATH**/ ?>