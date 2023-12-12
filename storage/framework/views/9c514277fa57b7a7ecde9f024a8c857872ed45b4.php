<?php $__env->startSection('title','Daftar Pengguna'); ?>
<?php $__env->startSection('user','active'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.page-title',['title' => 'Pengguna','paragraph' => ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Borderless table start -->
<div class="row" id="table-borderless">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar Pengguna</h4>
                <a href="<?php echo e(route('user.create')); ?>" class="btn btn-outline-success mt-2">Tambah</a>
            </div>
            <div class="card-content">
                <?php echo $__env->make('includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- table with no border -->
                <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-bold-500"><?php echo e($loop->iteration); ?></td>
                                <td>
                                    <img src="<?php echo e($item->photo); ?>" width="50" height="50" class="rounded-circle"
                                        style="object-fit: cover">
                                </td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->level); ?></td>
                                <td>
                                    <a href="<?php echo e(route('user.edit',$item->id)); ?>">
                                        <i data-feather="edit" class="text-success"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="delete" data-id='<?php echo e($item->id); ?>'>
                                        <i data-feather="trash-2" class="text-danger "></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <?php echo e($users->links()); ?>

            </div>
        </div>
    </div>
</div>
<!-- Borderless table end -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    const deleteBtn = document.querySelectorAll('.delete');
        deleteBtn.forEach(btn => {
            btn.onclick = function(){
                const id = this.dataset.id;
                fetch('<?php echo e(route("user.index")); ?>/'+id,{
                    headers:{
                        Accept: 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                    },
                    method:'DELETE'
                })
                .then(response =>response.json())
                .then(result => {
                    console.log(result);
                    if(document.querySelector('.card-body') != null){
                        document.querySelector('.card-body').remove()
                    }  
                    if(result.msg == 'sukses'){
                        this.parentNode.parentNode.remove();
                        document.querySelector('.card-content').insertAdjacentHTML('afterbegin',`
                        <div class="card-body pt-0">
                            <div class="alert alert-success m-0">Data pengguna berhasil dihapus !!</div>
                        </div>
                        `)
                    }
                })
            }
        });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cafe_db\resources\views/pages/admin/user/index.blade.php ENDPATH**/ ?>