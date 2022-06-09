

<?php $__env->startSection('container'); ?>
<div class="col-md-1"></div>
    <div class="col-md-4" style="margin-top: 8rem; color: white; margin-right: 2rem;">
        <img src="./gambar/gambar login.svg" style="width: 30rem;" alt="">
        <h3 style="font-weight: bold; font-size: 230%; margin-top: 4rem; ">SPECIAL CAR WASH DEAR</h3>
        <p style="font-size: 120%; margin-bottom: 10%;">Selamat berkunjung dilaman kami, disini kami KING WASHER menyediakan layanan cuci mobil. Mari cuci mobil anda dan rasakan kepuasan pelayanan kami.</p>
    </div> 
<div class="col-lg-6" style="background-color: white; border-radius: 25px; margin-left: 40rem; margin-bottom: 15rem; margin-top: -44rem; width: 40rem; box-height: 30rem;">
  <div style="height: 45rem;" class="card-body">
    <h3 style="font-weight: 600; font-style: normal; font-family: 'Rubik', sans-serif; font-size: 48px; margin-top: 7rem; padding-top:3rem; text-align:center;" class="Hallo">Hallo !</h3>
    <p class="kalimatlogin" style="text-align:center">Selamat datang di website kami, jelajahi website ini jangan lupa booking dan nikmati layanan kami</p>
    
    <input type="text" class="form-control" placeholder="Email" required style="height: 2.8rem; border-radius: 10px; width: 90%; margin-left: 2.2rem; margin-top: 2rem; font-weight: 200;">
    <input type="text" class="form-control" placeholder="Password" required style="height: 2.8rem; border-radius: 10px; width: 90%; margin-left: 2.2rem; margin-top: 2rem; font-weight: 200;">
    <a type="button" class="btn btn-primary" href="/login" role="button" style=" margin-left : 16rem; margin-top: 2rem; font-weight: bold; text-align:center; width:500px;">Login</a>
    <h5 style="margin-left: 15rem; font-weight: 300; font-size: 100%; margin-top: 2rem;" class="card-title">Tidak punya akun?<span><span style="margin-right: 10%;"><a style="color: orangered; font-size: 100%;" href="/daftar"> Daftar</a></span></h5>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\applications\King-Wash\resources\views/login/login.blade.php ENDPATH**/ ?>