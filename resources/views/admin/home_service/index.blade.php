@extends('admin.layout.master')
@section('page-title')
Service
@endsection
@section('main-content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Home Service</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if($services)
                <table id="example2" class="table table-bordered table-striped">
                  <a href="/admin/home_service/create"><button class="btn btn-info"><i class="fas fa-plus"></i> Add Service</button></a>
                  <thead>
                  <tr>
                    <th>Service Title</th>
                    <th>Service Description</th>
                    <th>Service Word</th>
                    <th>Service Image</th>
                    <th>Status</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($services as $service)                        
                  <tr>
                    <td>{{ substr($service->service_title,0,25) }}</td>
                    <td>{{ substr($service->service_description,0,20) }}</td>
                    <td>{{ $service->service_word }}</td>
                    <td>
                      <img src="/uploads/{{ $service->service_img }}" width="80" class="img-thumbnail" alt="{{ $service->service_img_alt }}">
                    </td>
                    <td>
                      <form method="post" action="/admin/home_service/{{ $service->id }}/status">
                        @csrf
                        {{ method_field('put') }}
                        @if($service->status == 'DEACTIVE')
                      <a href="/admin/service/{{ $service->id }}/status"><button class="btn btn-danger">DRAFT</button></a>
                      @else
                      <a href="/admin/service/{{ $service->id }}/status"><button class="btn btn-success">PUBLISHED</button></a>
                      @endif
                    </form>
                    <td>
                      <form method="post" action="/admin/home_service/{{ $service->id }}">
                        @csrf
                        {{ method_field('delete') }}
                      <a href="/admin/home_service/{{ $service->id }}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fas fa-edit"></i></a>
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