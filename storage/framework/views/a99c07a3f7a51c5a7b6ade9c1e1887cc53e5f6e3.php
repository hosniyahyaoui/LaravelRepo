
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
                    <h3>User Management Control</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Mangement</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <?php echo Toastr::message(); ?>

        <section class="section">
            <div class="card">
                <div class="card-header">
                    User Datatable
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Profile</th>
                                <th>Email Address</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Role Name</th>
                                <th class="text-center">Modify</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="id"><?php echo e(++$key); ?></td>
                                    <td class="name"><?php echo e($item->name); ?></td>
                                    <td class="name">
                                        <div class="avatar avatar-xl">
                                            <img src="<?php echo e(URL::to('/images/'. $item->avatar)); ?>" alt="<?php echo e($item->avatar); ?>">
                                        </div>
                                    </td>
                                    <td class="email"><?php echo e($item->email); ?></td>
                                    <td class="phone_number"><?php echo e($item->phone_number); ?></td>
                                    <?php if($item->status =='Active'): ?>
                                    <td class="status"><span class="badge bg-success"><?php echo e($item->status); ?></span></td>
                                    <?php endif; ?>
                                    <?php if($item->status =='Disable'): ?>
                                    <td class="status"><span class="badge bg-danger"><?php echo e($item->status); ?></span></td>
                                    <?php endif; ?>
                                    <?php if($item->status ==null): ?>
                                    <td class="status"><span class="badge bg-danger"><?php echo e($item->status); ?></span></td>
                                    <?php endif; ?>
                                    <?php if($item->role_name =='Admin'): ?>
                                    <td class="role_name"><span  class="badge bg-success"><?php echo e($item->role_name); ?></span></td>
                                    <?php endif; ?>
                                    <?php if($item->role_name =='Super Admin'): ?>
                                    <td class="role_name"><span  class="badge bg-info"><?php echo e($item->role_name); ?></span></td>
                                    <?php endif; ?>
                                    <?php if($item->role_name =='Normal User'): ?>
                                    <td class="role_name"><span  class=" badge bg-warning"><?php echo e($item->role_name); ?></span></td>
                                    <?php endif; ?>
                                    <td class="text-center">
                                        <a href="<?php echo e(route('user/add/new')); ?>">
                                            <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                        </a>
                                        <a href="<?php echo e(url('view/detail/'.$item->id)); ?>">
                                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                        </a>  
                                        <a href="<?php echo e(url('delete_user/'.$item->id)); ?>" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
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
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                href="">wassym jaffel</a></p>
            </div>
        </div>
    </footer>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('sidebar.usermanagement', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wassy\laravel_dashboard_version13\resources\views/usermanagement/user_control.blade.php ENDPATH**/ ?>