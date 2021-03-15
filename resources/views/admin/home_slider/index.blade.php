@extends('admin.layout.master')
@section('page-title')
Home Slider
@endsection
@section('main-content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Home Slider</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if($sliders)
                <table id="example2" class="table table-bordered table-striped">
                  <a href="/admin/home_slider/create"><button class="btn btn-info"><i class="fas fa-plus"></i> Add Slider</button></a>
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Slider Image</th>
                    <th>Status</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($sliders as $slider)                        
                  <tr>
                    <td>{{ substr($slider->title,0,15) }}</td>
                    <td>{{ substr($slider->description,0,15) }}</td>
                    <td>
                      <img src="/uploads/{{ $slider->slider_img }}" width="100" class="img-thumbnail" alt="{{ $slider->title }}">
                    </td>
                    <td>
                      <form method="post" action="/admin/home_slider/{{ $slider->id }}/status">
                        @csrf
                        {{ method_field('put') }}
                        @if($slider->status == 'DEACTIVE')
                      <a href="/admin/home_slider/{{ $slider->id }}/status"><button class="btn btn-danger">DRAFT</button></a>
                      @else
                      <a href="/admin/home_slider/{{ $slider->id }}/status"><button class="btn btn-success">PUBLISHED</button></a>
                      @endif
                    </form>
                    <td>
                      <form method="post" action="/admin/home_slider/{{ $slider->id }}">
                        @csrf
                        {{ method_field('delete') }}
                      <a href="/admin/home_slider/{{ $slider->id }}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fas fa-edit"></i></a>
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