

<?php $__env->startSection('container'); ?>

<div class="container mt-5">
    <h1 style="text-align: center; color: white;">Tabel Booking</h1>
    <div class="d-flex">
      <a type="button" class="btn btn-danger" href="/home" role="button" style="margin-top: 2rem; font-weight: bold; text-align:center; width:500px;">Kembali</a>
      <a type="button" class="btn btn-primary" href="/booking" role="button" style=" margin-left : 64rem; margin-top: 2rem; font-weight: bold; text-align:center; width:500px;">+Booking</a>
    </div>      
    <table class="table table-light table-bordered mx-auto" style="width: 80rem; margin-top: 1.3rem;">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No. Wa/Telp</th>
            <th scope="col">Layanan</th>
            <th scope="col">Merk</th>
            <th scope="col">Plat Nomor</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Edit</th>            
            <th scope="col">Hapus</th>            
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($posts->nama); ?></td>
            <td><?php echo e($posts->notelp); ?></td>
            <td><?php echo e($posts->layanan); ?></td>
            <td><?php echo e($posts->merk); ?></td>
            <td><?php echo e($posts->plat); ?></td>
            <td><?php echo e($posts->tanggal); ?></td>
            <td><a href="/edit/<?php echo e($posts->id); ?>"type="button" class="btn btn-primary">Edit</a></td>
            <td>
              <form action="/delete/<?php echo e($posts->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\coding\King-Wash\King-Wash\resources\views/user/history.blade.php ENDPATH**/ ?>