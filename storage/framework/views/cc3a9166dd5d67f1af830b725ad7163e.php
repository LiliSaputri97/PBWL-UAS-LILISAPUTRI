
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA PELANGGAN</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/pelanggan')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">NAMA PELANGGAN</label>
                        <input type="text" name="pelanggan_nama" class="form-control" placeholder="Nama Pelanggan">
                    </div>
                    <div class="mb-3">
                        <label for="">ALAMAT</label>
                        <input type="text" name="pelanggan_alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="">NO TELEPON</label>
                        <input type="text" name="pelanggan_no_tlpn" class="form-control" placeholder="No Telepon">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-lili\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>