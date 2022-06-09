

<?php $__env->startSection('container'); ?>
<div class="container mt-5" style="background-color: white; width: 80rem; height: 28rem; border-radius: 1rem;">
    <form method="POST" action="/update/<?php echo e($edit->id); ?>" class="row g-3 mx-auto" style="width: 70rem; margin-top: 1rem;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>
        <div class="col-6">
            <label for="text" class="form-label">Nama</label>
            <input type="text" value="<?php echo e($edit->nama); ?>" class="form-control" id="inputAddress" placeholder="Username" name="nama">
          </div>
        <div class="col-md-6">
          <label for="category" class="form-label ms-auto">Layanan</label>
          <select class="form-select" value="<?php echo e($edit->layanan); ?>" aria-label="Default select example" name="layanan">
            <option selected>Pilih Layanan</option>
            <option value="Cuci Luar">Cuci Luar (Rp. 100.000)</option>
            <option value="Cuci Dalam">Cuci Dalam (Rp. 150.000)</option>
            <option value="Cuci Luar Dalam">Cuci Luar Dalam (Rp. 250.000)</option>
          </select>
        </div>
          <div class="col-6">
            <label for="inputAddress2" class="form-label">No WA/Telp</label>
            <input type="text" value="<?php echo e($edit->notelp); ?>" class="form-control" id="inputAddress2" placeholder="0812xxxxxxxx" name="notelp">
          </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Tanggal Booking</label>
            <input type="date" value="<?php echo e($edit->tanggal); ?>" class="form-control" id="inputAddress" placeholder="dd/xx/yyyy" name="tanggal">
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">Merk</label>
          <input type="text" value="<?php echo e($edit->merk); ?>" class="form-control" id="inputAddress" placeholder="Toyota Avanza" name="merk">
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">Plat Nomor</label>
          <input type="text" value="<?php echo e($edit->plat); ?>" class="form-control" id="inputAddress2" placeholder="L 1234 XY" name="plat">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-success"  role="button" style="font-weight: bold; text-align:center; width:500px;">Booking Sekarang</button>
        </div>
      </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\applications\King-Wash\resources\views/user/edit.blade.php ENDPATH**/ ?>