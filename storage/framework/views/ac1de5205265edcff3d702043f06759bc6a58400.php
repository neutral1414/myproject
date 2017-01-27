
<?php if($isactive) {foreach($isactive as $key=>$val){ $isactive = $val; }} ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($page_title) ? $page_title : "AdminLTE Dashboard"); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo e(asset("/bower_components/admin-lte/bootstrap/font-awesome/css/font-awesome.min.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("/bower_components/admin-lte/dist/css/ionicons.min.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset("/DataTables/media/css/jquery.dataTables.min.css")); ?>" rel="stylesheet" type="text/css" />

  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Header -->
      <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

      <!-- Sidebar -->
      <?php echo $__env->make('sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      
        <!-- Content Header (Page header) -->
          <?php echo $__env->yieldContent('content_header'); ?>

        <!-- Main content -->
        <section class="content">          
          <!-- Your Page Content Here -->
          <?php echo $__env->yieldContent('content'); ?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <script src="<?php echo e(asset("/bower_components/admin-lte/plugins/jQuery/jQuery-2.2.3.min.js")); ?>"></script>
    <script src="<?php echo e(asset("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js")); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset("/bower_components/admin-lte/dist/js/app.min.js")); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset("/DataTables/media/js/jquery.dataTables.js")); ?>" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->

    <!-- Additional Script -->
    <?php echo $__env->yieldContent('script'); ?>
  </body>
</html>

<script type="text/javascript">$(".sidebar-menu li > a").on("click", function(){$('.sidebar-menu li').removeClass();$(this).parent().addClass('active');});</script>
<!--
<script>
  function loadmodules(page=""){
      $.ajax({
        url: page,
        type: 'GET',
        success: function (msg) {
            $(".content").html(msg);
        }
      });
  }
</script>
-->