<!-- Section Content Header-->
<?php $__env->startSection('content_header'); ?>
  <section class="content-header">
    <h1>
    <?php echo e(isset($page_title) ? $page_title : "Page Title"); ?>

    <small><?php echo e(isset($page_description) ? $page_description : null); ?></small>
    </h1>
    <!-- You can dynamically generate breadcrumbs here -->
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
<?php $__env->stopSection(); ?>

<!-- Section Content-->
<?php $__env->startSection('content'); ?>
  <div class='row'>
    <div class='col-md-6'>
      <!-- Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Randomly Generated Tasks</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
          <h5>
            <?php echo e($task['name']); ?>

            <small class="label label-<?php echo e($task['color']); ?> pull-right"><?php echo e($task['progress']); ?>%</small>
          </h5>
          <div class="progress progress-xxs">
            <div class="progress-bar progress-bar-<?php echo e($task['color']); ?>" style="width: <?php echo e($task['progress']); ?>%"></div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        </div><!-- /.box-body -->
        <div class="box-footer">
          <form action='#'>
            <input type='text' placeholder='New task' class='form-control input-sm' />
          </form>
        </div><!-- /.box-footer-->
      </div><!-- /.box -->
    </div><!-- /.col -->
    <div class='col-md-6'>
      <!-- Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Second Box</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          A separate section to add any kind of widget. Feel free
          to explore all of AdminLTE widgets by visiting the demo page
          on <a href="https://almsaeedstudio.com">Almsaeed Studio</a>.
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
    <div class='col-md-6'>
      <!-- Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Datatable Box</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped datatable">
              <thead>
                <tr>
                  <th>Name</th>
                   <th>Email</th>
                   <th>Created</th>
                 </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $uinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                  <td><?php echo e($data->name); ?></td>
                  <td><?php echo e($data->email); ?></td>
                  <td><?php echo e(date("F d, Y h:i A",strtotime($data->created_at))); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
              </tbody>
            </table>
          </div>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
  <script>
  $(".datatable").DataTable();
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboardlay', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>