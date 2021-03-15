@extends('admin.layout.master')
@section('page-title')
Portfolio Info
@endsection
@section('main-content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Portfolio Info</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if($portinfos)
                <table id="example2" class="table table-bordered table-striped">
                  <a href="/admin/portfolioinfo/create"><button class="btn btn-info"><i class="fas fa-plus"></i> Add Portfolio Info</button></a>
                  <thead>
                  <tr>
                    <th>Portfolio Info Title</th>
                    <th>Portfolio Info Sub Title</th>
                    <th>Status</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($portinfos as $portinfo)                        
                  <tr>
                    <td>{{ substr($portinfo->title,0,15) }}</td>
                    <td>{{ $portinfo->sub_title }}</td>
                    <td>
                      <form method="post" action="/admin/portfolioinfo/{{ $portinfo->id }}/status">
                        @csrf
                        {{ method_field('put') }}
                        @if($portinfo->status == 'DEACTIVE')
                      <a href="/admin/portfolioinfo/{{ $portinfo->id }}/status"><button class="btn btn-danger">DRAFT</button></a>
                      @else
                      <a href="/admin/portfolioinfo/{{ $portinfo->id }}/status"><button class="btn btn-success">PUBLISHED</button></a>
                      @endif
                    </form>
                    <td>
                      <form method="post" action="/admin/portfolioinfo/{{ $portinfo->id }}">
                        @csrf
                        {{ method_field('delete') }}
                      <a href="/admin/portfolioinfo/{{ $portinfo->id }}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fas fa-edit"></i></a>
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