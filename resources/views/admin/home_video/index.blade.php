@extends('admin.layout.master')
@section('page-title')
Home Video
@endsection
@section('main-content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Home Video</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if($videos)
                <table id="example2" class="table table-bordered table-striped">
                  <a href="/admin/home_video/create"><button class="btn btn-info"><i class="fas fa-plus"></i> Add Video</button></a>
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>Background Image</th>
                    <th>Video Link</th>
                    <th>Status</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($videos as $video)                        
                  <tr>
                    <td>{{ substr($video->title,0,15) }}</td>
                    <td>
                      <img src="/uploads/{{ $video->background_img }}" width="100" class="img-thumbnail" alt="{{ $video->background_img_alt }}">
                    </td>
                    <td>{{ substr($video->popup_video,0,20) }}</td>
                    <td>
                      <form method="post" action="/admin/home_video/{{ $video->id }}/status">
                        @csrf
                        {{ method_field('put') }}
                        @if($video->status == 'DEACTIVE')
                      <a href="/admin/home_video/{{ $video->id }}/status"><button class="btn btn-danger">DRAFT</button></a>
                      @else
                      <a href="/admin/home_video/{{ $video->id }}/status"><button class="btn btn-success">PUBLISHED</button></a>
                      @endif
                    </form>
                    <td>
                      <form method="post" action="/admin/home_video/{{ $video->id }}">
                        @csrf
                        {{ method_field('delete') }}
                      <a href="/admin/home_video/{{ $video->id }}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fas fa-edit"></i></a>
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