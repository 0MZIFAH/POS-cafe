<?php if(session('alert')): ?>
<div class="card-body pt-0">
    <div class="alert alert-<?php echo e(session('alert')['type']); ?> m-0"><?php echo e(session('alert')['msg']); ?></div>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\cafe_db\resources\views/includes/alert.blade.php ENDPATH**/ ?>