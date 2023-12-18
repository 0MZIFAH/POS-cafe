<?php $__env->startSection('title','Tambah Menu'); ?>
<?php $__env->startSection('menu','active'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.page-title',['title' => 'Tambah Menu','paragraph' => 'Silahkan tambah menu sesuai form yang
disediakan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Data Menu</h4>
    </div>
    <div class="card-content">
        <div class="card-body pt-0">
            <form class="form form-vertical" action="<?php echo e(route('menu.store')); ?>" method="POST"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">Nama Menu
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger">(<?php echo e($message); ?>)</span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </label>
                                <div class="position-relative">
                                    <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="name" placeholder="Nama Menu" id="name" value="<?php echo e(old('name') ?? ''); ?>"
                                        autocomplete="off">
                                    <div class="form-control-icon">
                                        <i data-feather="book-open" class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">Harga Menu
                                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger">(<?php echo e($message); ?>)</span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </label>
                                <div class="position-relative">
                                    <input type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="price" placeholder="Harga Menu" id="price"
                                        value="<?php echo e(old('price') ?? ''); ?>" autocomplete="off">
                                    <div class="form-control-icon">
                                        <i data-feather="tag" class="<?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">Jenis Menu
                                    <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger">(<?php echo e($message); ?>)</span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </label>
                                <div class="position-relative">
                                    <div class="input-group">
                                        <label class="input-group-text bg-white border-right-0 p-0 pl-2" for="category">
                                            <i data-feather="menu" class="<?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></i>
                                        </label>
                                        <select class="form-select border-left-0  text-muted <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="category" id="category">
                                            <option value="" selected>Pilih Jenis Menu</option>
                                            <option value="Makanan"
                                                <?php echo e(old('category') ?? '' == 'Makanan' ? 'Selected' : ''); ?>>Makanan
                                            </option>
                                            <option value="Minuman"
                                                <?php echo e(old('category') ?? ''== 'Minuman' ? 'Selected' : ''); ?>>Minuman
                                            </option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">Foto Menu
                                    <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger">(<?php echo e($message); ?>)</span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </label>
                                <div class="form-file">
                                    <input type="file" class="form-file-input <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="photo" id="photo">
                                    <label class="form-file-label" for="photo">
                                        <span
                                            class="form-file-button rounded-left border-right-0 pl-0 pl-2 bg-white "><i
                                                data-feather="image"
                                                class="<?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></i></span>
                                        <span class="form-file-text border-left-0 text-muted ">Pilih Foto...</span>
                                        <span class="form-file-button btn-primary ">
                                            <i data-feather="upload"></i>
                                        </span>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="button" class="btn btn-warning mb-1 ingredient">Tambah Bahan</button>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-success  mb-1">Tambah</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    const inputNode = document.querySelector('input[type="file"]');
        inputNode.onchange = (input) => input.target.labels[0].firstChild.nextElementSibling.nextElementSibling.innerHTML = input.target.files[0].name;
    
    const ingredientBtn = document.querySelector('.ingredient');
        ingredientBtn.onclick = (event) => {
            fetch('<?php echo e(route("ingredients.all")); ?>')
            .then(response => response.json())
            .then(result => {
                let selectNode = document.createElement('select');
                    selectNode.classList.add('form-select');
                    selectNode.classList.add('border-left-0');
                    selectNode.name = 'ingredients[]';
                for(let i = 0; i < result.length; i++){
                    let option = document.createElement('option');
                        option.value = result[i].id;
                        option.innerText = result[i].name;
                    selectNode.appendChild(option);
                }
                event.target.parentNode.insertAdjacentHTML('beforebegin',`
                    <div class='col-6'>
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">List bahan-bahan
                            </label>
                            <div class="position-relative">
                                <div class="input-group">
                                    <label class="input-group-text bg-white border-right-0 p-0 pl-2" for="category">
                                        <i data-feather="feather"></i>
                                    </label>
                                    ${selectNode.outerHTML}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">Jumlah dalam (Pcs/gr) </label>
                                <div class="position-relative">
                                    <input type="text" class="form-control"
                                        name="quantity[]" placeholder="Jumlah" id="quantity" autocomplete="off">
                                    <div class="form-control-icon">
                                        <i data-feather="tag" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                `);
                
                feather.replace();
            });
           
            // console.log(event.target.parentNode);
        }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cafe_db\resources\views/pages/admin/menu/create.blade.php ENDPATH**/ ?>