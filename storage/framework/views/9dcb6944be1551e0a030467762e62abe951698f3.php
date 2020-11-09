<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Hurtownia</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo e(asset("/bower_components/bootstrap/dist/css/bootstrap.min.css")); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset("/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css")); ?>" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>

    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="<?php echo e(asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")); ?>" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="<?php echo e(asset("/bower_components/admin-lte/dist/css/skins/skin-black-light.min.css")); ?>" rel="stylesheet" type="text/css"/>

<?php echo $__env->yieldContent('styles'); ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-black-light">
<div class="wrapper">

    <!-- Main Header -->
<?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Left side column. contains the logo and sidebar -->

<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->

    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="<?php echo e(asset ("bower_components/jquery/dist/jquery.min.js")); ?>"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo e(asset ("bower_components/bootstrap/dist/js/bootstrap.min.js")); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset ("bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js")); ?>" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="<?php echo e(asset ("bower_components/jquery-slimscroll/jquery.slimscroll.min.js")); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset ("bower_components/fastclick/lib/fastclick.js")); ?>"></script>


<!-- AdminLTE App -->
<script src="<?php echo e(asset ("/bower_components/admin-lte/dist/js/adminlte.min.js")); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset ("/bower_components/admin-lte/dist/js/demo.js")); ?>" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $('.my-colorpicker').colorpicker({
            format: 'hex',
            align: 'left'
        });
    });
</script>

<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>