
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA BARANG</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/barang/' .$row->barang_id)); ?>" method="post">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">NAMA BARANG</label>
                        <input type="text" name="barang_nama" class="form-control" value="<?php echo e($row->barang_nama); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">STOCK</label>
                        <input type="text" name="barang_stock" class="form-control" value="<?php echo e($row->barang_stock); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA BARANG</label>
                        <input type="text" name="barang_harga" class="form-control" value="<?php echo e($row->barang_harga); ?>">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-lili\resources\views/barang/edit.blade.php ENDPATH**/ ?>