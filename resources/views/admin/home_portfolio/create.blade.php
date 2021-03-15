@extends('admin.layout.master')
@section('page-title')
Create
@endsection
@section('main-content')
<div class="container">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Service Create</h3>
    </div>
    @if($errors->any())
    <div class="alert alert-danger"> 
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <!-- /.card-header -->
    <!-- form start -->
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Seo</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <form role="form" action="{{ url('/admin/service') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <div class="form-group {{ $errors->has('service_title') ? 'has-error' : null }}">
                  <label>Service Title</label>
                  <input type="text" name="service_title" class="form-control" placeholder="Service Title" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group {{ $errors->has('service_word') ? 'has-error' : null }}">
                  <label>Service Word</label>
                  <input type="text" name="service_word" class="form-control" placeholder="Service Word" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group {{ $errors->has('service_img') ? 'has-error' : null }}">
                  <label>Upload Service Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="service_img" class="custom-file-input" id="exampleInputFile" required>
                      <label class="custom-file-label" for="exampleInputFile">Service Image</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Service Image Alt</label>
                  <input type="text" name="service_img_alt" class="form-control" placeholder="Service Image Alt">
                </div>
              </div>
            </div>
            <div class="row"> 
              <div class="col-6">
                <div class="form-group {{ $errors->has('service_text') ? 'has-error' : null }}">
                  <label>Service Link Text</label>
                  <input type="text" name="service_text" class="form-control" placeholder="Service Link Text" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group {{ $errors->has('service_link') ? 'has-error' : null }}">
                  <label>Service Link</label>
                  <input type="text" name="service_link" class="form-control" placeholder="Service Link" required>
                </div>
              </div>
            </div>
            <div class="row"> 
              <div class="col-12">
                <div class="form-group {{ $errors->has('service_description') ? 'has-error' : null }}">
                  <label>Service Description</label>
                  <textarea name="service_description" class="form-control" placeholder="Service Description" required></textarea>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </div>
      {{-- SEO START --}}
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label>Meta Title</label>
                  <input type="text" name="meta_title" class="form-control" placeholder="Meta Title">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Meta Tags</label>
                  <input type="text" name="meta_tags" class="form-control " placeholder="Meta Tags">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label>Meta Keywords</label>
                  <input type="text" name="meta_keywords" class="form-control " placeholder="Meta Keywords">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Meta Description</label>
                  <textarea type="text" name="meta_description" class="form-control" placeholder="Meta Description"></textarea>
                </div>
              </div>
              
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      {{-- SEO END --}}

    </div>
   
  </div>
</div>
@endsection