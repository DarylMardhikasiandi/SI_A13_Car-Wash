

<?php $__env->startSection('container'); ?>   
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
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\King-Wash\King-Wash\resources\views/admin/riwayat.blade.php ENDPATH**/ ?>