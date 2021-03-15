@extends('admin.layout.master')
@section('page-title')
Portfolio
@endsection
@section('main-content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Home Portfolio</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if($portfolios)
                <table id="example2" class="table table-bordered table-striped">
                  <a href="/admin/home_portfolio/create"><button class="btn btn-info"><i class="fas fa-plus"></i> Add Portfolio</button></a>
                  <thead>
                  <tr>
                    <th>Language Title</th>
                    <th>Logo</th>
                    <th>Portfolio Image</th>
                    <th>Portfolio Title</th>
                    <th>Portfolio Description</th>
                    <th>Status</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($portfolios as $portfolio)                        
                  <tr>
                    <td>$portfolio->language_title</td>
                    <td>
                      <img src="/uploads/{{ $portfolio->logo }}" width="80" class="img-thumbnail" alt="{{ $portfolio->logo_img_alt }}">
                    </td>
                    <td>{{ $portfolio->portfolio_title }}</td>
                    <td>
                      <img src="/uploads/{{ $portfolio->portfolio_img }}" width="80" class="img-thumbnail" alt="{{ $portfolio->portfolio_img_alt }}">
                    </td>
                    <td>
                      <form method="post" action="/admin/home_portfolio/{{ $portfolio->id }}/status">
                        @csrf
                        {{ method_field('put') }}
                        @if($service->status == 'DEACTIVE')
                      <a href="/admin/home_portfolio/{{ $portfolio->id }}/status"><button class="btn btn-danger">DRAFT</button></a>
                      @else
                      <a href="/admin/home_portfolio/{{ $portfolio->id }}/status"><button class="btn btn-success">PUBLISHED</button></a>
                      @endif
                    </form>
                    <td>
                      <form method="post" action="/admin/home_portfolio/{{ $portfolio->id }}">
                        @csrf
                        {{ method_field('delete') }}
                      <a href="/admin/home_portfolio/{{ $portfolio->id }}/edit" class="btn btn-info btn-flat btn-sm"> <i class="fas fa-edit"></i></a>
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