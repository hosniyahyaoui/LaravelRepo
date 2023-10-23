<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="<?php echo e(route('home')); ?>"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item">
                    <a href="<?php echo e(route('home')); ?>" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            <?php if(Auth::user()->role_name=='Admin'): ?>
                            <span>Name: <span class="fw-bolder"><?php echo e(Auth::user()->name); ?></span></span>
                            <hr>
                            <span>Role Name:</span>
                            <span class="badge bg-success">Admin</span>
                            <?php endif; ?>
                            <?php if(Auth::user()->role_name=='Super Admin'): ?>
                                <span>Name: <span class="fw-bolder"><?php echo e(Auth::user()->name); ?></span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-info">Super Admin</span>
                            <?php endif; ?>
                            <?php if(Auth::user()->role_name=='Normal User'): ?>
                                <span>Name: <span class="fw-bolder"><?php echo e(Auth::user()->name); ?></span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-warning">User Normal</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo e(route('change/password')); ?>" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                
                <?php if(Auth::user()->role_name=='Admin'): ?>
                    <li class="sidebar-title">Page &amp; Controller</li>
                    <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Maintenain</span>
                        </a>
                        <ul class="submenu active">
                            <li class="submenu-item">
                                <a href="<?php echo e(route('userManagement')); ?>">User Control</a>
                            </li>
                            <li class="submenu-item">
                                <a href="<?php echo e(route('activity/log')); ?>">User Activity Log</a>
                            </li>
                            <li class="submenu-item active">
                                <a href="<?php echo e(route('activity/login/logout')); ?>">Activity Log</a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                
                <li class="sidebar-title">Forms &amp; Tables</li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item active">
                            <a href="<?php echo e(route('form/staff/new')); ?>">Staff Input</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>View Record</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="<?php echo e(route('form/view/detail')); ?>">View Detail</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo e(route('logout')); ?>" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div><?php /**PATH C:\Users\wassy\laravel_dashboard_version13\resources\views/sidebar/activity_log.blade.php ENDPATH**/ ?>