 

<?php $__env->startSection('content'); ?> 
<div class="container-fluid blue-bg mx-auto">
  <div class="row justify-content-center flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-4">
      <img src="<?php echo e(Vite::asset('resources/images/logistik.png')); ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 text-warning fw-bold lh-1 mb-3 ">Master Barang </h1>
      <p class="lead">Masbang adalah sebuah aplikasi Inventory Management yang dikembangkan sebagai proyek Ujian Tengah Semester (UTS) dalam pemrograman framework. Aplikasi ini dirancang untuk membantu perusahaan dalam mengelola dan mengawasi stok barang dengan menggunakan framework yang relevan.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a class="btn btn-warning"  href="<?php echo e(route('barang.index')); ?>">Cek barang</a>

      </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fariduta/Pictures/uts/uts-framework/resources/views/home.blade.php ENDPATH**/ ?>