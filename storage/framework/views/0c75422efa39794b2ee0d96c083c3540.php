<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(Vite::asset('resources/css/app.css')); ?>">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body class="blue-bg">
    
    <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="wrapper" style="min-height: 768px">
    <div class="container mt-5">
    
    <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="text-center text-white fixed-bottom" style="background-color: hsl(150, 4%, 10%); margin-top: 50px;">
  <!-- Grid container -->
  <div class="container p-4">

    <div class="col text-center">
        <a  class="bi bi-facebook" href="http://www.facebook.com" target="_blank"></a>
        <a  class="bi bi-instagram" href="http://www.instagram.com/fariduta" target="_blank"></a>
        <a  class="bi bi-github" href="https://github.com/PaddlePOPA96" target="_blank"></a>
  </div>
  
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Copyright
        <a  class="text-white" style="text-decoration: none" href="https://github.com/PaddlePOPA96" target="_blank">PaddlePOPA96</a>
     2023 ©
    </div>
</footer>
    </div>
        </div>


    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH /home/fariduta/Pictures/uts/uts-framework/resources/views/layout/app.blade.php ENDPATH**/ ?>