
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA TRANSAKSI</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/transaksi')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">NAMA BARANG</label>
                        <select name="transaksi_nama_barang" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($brg->barang_id); ?>"><?php echo e($brg->barang_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA PELANGGAN</label>
                        <select name="transaksi_nama_pelanggan" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plgn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($plgn->pelanggan_id); ?>"><?php echo e($plgn->pelanggan_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">TANGGAL</label>
                        <input type="date" name="transaksi_tanggal" class="form-control" placeholder="Tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH BELI</label>
                        <input type="text" name="transaksi_jumlah_beli" class="form-control" placeholder="Jumlah Beli">
                    </div>
                    <div class="mb-3">
                        <label for="">TOTAL</label>
                        <input type="text" name="transaksi_total" class="form-control" placeholder="Total">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-lili\resources\views/transaksi/create.blade.php ENDPATH**/ ?>