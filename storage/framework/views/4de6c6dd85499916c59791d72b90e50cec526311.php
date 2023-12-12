<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <h4>Cafe Tutuk</h4>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu Utama</li>

                <li class="sidebar-item <?php echo $__env->yieldContent('dashboard'); ?>">
                    <a href="<?php echo e(route('dashboard.index')); ?>" class="sidebar-link">
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item <?php echo $__env->yieldContent('menu'); ?>">
                    <a href="<?php echo e(route('menu.index')); ?>" class="sidebar-link">
                        <i data-feather="pie-chart" width="20"></i>
                        <span>Manajemen Menu</span>
                    </a>
                </li>

                <li class="sidebar-item <?php echo $__env->yieldContent('ingredients'); ?>">
                    <a href="<?php echo e(route('ingredients.index')); ?>" class="sidebar-link">
                        <i data-feather="box" width="20"></i>
                        <span>Manajemen Bahan-Bahan</span>
                    </a>
                </li>
                <li class="sidebar-item <?php echo $__env->yieldContent('user'); ?>">
                    <a href="<?php echo e(route('user.index')); ?>" class="sidebar-link <?php echo $__env->yieldContent('user'); ?>">
                        <i data-feather="user" width="20"></i>
                        <span>Manajemen Pengguna</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x">
            <i data-feather="x"></i>
        </button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\cafe_db\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>