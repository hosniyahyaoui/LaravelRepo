<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verify Your Email Address</div>
                  <div class="card-body">
                   <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                           <?php echo e(__('A fresh verification link has been sent to your email address.')); ?>

                       </div>
                   <?php endif; ?>
                   <a href="<?php echo e(url('/reset-password/'.$token)); ?>">Click Here</a>
               </div>
           </div>
       </div>
   </div>
</div>
<?php /**PATH C:\Users\wassy\laravel_dashboard_version13\resources\views/auth/verify.blade.php ENDPATH**/ ?>