
<?php if($isactive) {foreach($isactive as $key=>$val){ $isactive = $val; }} ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/dist/css/ionicons.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/DataTables/media/css/jquery.dataTables.min.css") }}" rel="stylesheet" type="text/css" />

  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Header -->
      @include('header') 

      <!-- Sidebar -->
      @include('sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      
        <!-- Content Header (Page header) -->
          @yield('content_header')

        <!-- Main content -->
        <section class="content">          
          <!-- Your Page Content Here -->
          @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      @include('footer')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    <script src="{{ asset("/bower_components/admin-lte/plugins/jQuery/jQuery-2.2.3.min.js") }}"></script>
    <script src="{{ asset("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("/DataTables/media/js/jquery.dataTables.js") }}" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->

    <!-- Additional Script -->
    @yield('script')
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