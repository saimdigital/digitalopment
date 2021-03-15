@extends('admin.layout.master')
@section('page-title')
Service Info
@endsection
@section('main-content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Home Service Info</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if($servicesinfo)
                <table id="example2" class="table table-bordered table-striped">
                  <a href="/admin/serviceinfo/create"><button class="btn btn-info"><i class="fas fa-plus"></i> Add Service Info</button></a>
                  <thead>
                  <tr>
                    <th>Service Info Title</th>
                    <th>Service Info Sub Title</th>
                    <th>Status</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($servicesinfo as $serviceinfo)                        
                  <tr>
                    <td>{{ substr($serviceinfo->title,0,15) }}</td>
                    <td>{{ $serviceinfo->sub_title }}</td>
                    <td>
                      <form method="post" action="/admin/serviceinfo/{{ $serviceinfo->id }}/status">
                        @csrf
                        {{ method_field('put') }}
                        @if($serviceinfo->status == 'DEACTIVE')
                      <a href="/admin/serviceinfo/{{ $serviceinfo->id }}/status"><button class="btn btn-danger">DRAFT</button></a>
                      @else
                      <a href="/admin/serviceinfo/{{ $serviceinfo->id }}/status"><button class="btn btn-success">PUBLISHED</button></a>
                      @endif
                    </form>
                    <td>
                      <form method="post" action="/admin/serviceinfo/{{ $serviceinfo->id }}">
                        @csrf
                        {{ method_field('delete') }}
                      <a href="/admin/serviceinfo/{{ $serviceinfo->id }}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fas fa-edit"></i></a>
                      <button onclick="return confirm('Are you sure to want to delete this?')" class="btn btn-danger btn-flat btn-sm"> <i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>   
                  @endforeach
                  </tfoot>
                </table>
                @else
                <div class="alert alert-danger"> 
                  No Record Found!
                </div>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection