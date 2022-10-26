
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
                    <p class="text-subtitle text-muted">locales information list</p>
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
                    locaux list
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                
                                <th>Name</th>
                                <th>description</th>
                                <th>datedeNaissance</th>
                                <th>datedubutTraitement</th>
                                <th>typeMaladie</th>
                                <th>dureeTraitement</th>
                                <th>prixTraitement</th>
                                <th>espece</th>
                                <th>age</th>
                                <th>poids</th>
                                <th>locaux</th>
                                <th class="text-center">Modify</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $animaux; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="name"><?php echo e($item->id); ?></td>
                                    <td class="name"><?php echo e($item->description); ?></td>
                                    <td class="name"><?php echo e($item->datedeNaissance); ?></td>
                                    <td class="email"><?php echo e($item->datedubutTraitement); ?></td>
                                    <td class="phone_number"><?php echo e($item->type_maladie); ?></td>
                                    <td class="phone_number"><?php echo e($item->dureeTraitement); ?></td>
                                    <td class="phone_number"><?php echo e($item->prixTraitement); ?></td>
                                    <td class="phone_number"><?php echo e($item->espece); ?></td>
                                    <td class="phone_number"><?php echo e($item->age); ?></td>
                                    <td class="phone_number"><?php echo e($item->poid); ?></td>
                                    <td class="phone_number"><?php echo e($item->local_id); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(url('/animaux/create')); ?>">
                                            <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                        </a>
                                        <a href="<?php echo e(url('/admin/animaux/edit/'.$item->id)); ?>">
                                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                        </a>    
                                        <a href="<?php echo e(url('/animaux/delete/'.$item->id)); ?>" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hosni\Desktop\laravel_project\laravel_dashboard_version13\resources\views/animaux/index.blade.php ENDPATH**/ ?>