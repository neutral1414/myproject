@extends('dashboardlay')

<!-- Section Content Header-->
@section('content_header')
  <section class="content-header">
    <h1>
    {{ $page_title or "Page Title" }}
    <small>{{ $page_description or null }}</small>
    </h1>
    <!-- You can dynamically generate breadcrumbs here -->
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
@endsection

<!-- Section Content-->
@section('content')
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
          @foreach($tasks as $task)
          <h5>
            {{ $task['name'] }}
            <small class="label label-{{$task['color']}} pull-right">{{$task['progress']}}%</small>
          </h5>
          <div class="progress progress-xxs">
            <div class="progress-bar progress-bar-{{$task['color']}}" style="width: {{$task['progress']}}%"></div>
          </div>
          @endforeach

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
                @foreach($uinfo as $key=>$data)
                <tr>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ date("F d, Y h:i A",strtotime($data->created_at)) }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('script')
  <script>
  $(".datatable").DataTable();
  </script>
@endsection