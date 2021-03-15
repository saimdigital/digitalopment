@extends('admin.layout.master')
@section('page-title')
Edit
@endsection
@section('main-content')
<div class="container">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Slider Edit</h3>
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
        <form role="form" action="/admin/home_slider/{{ $slider->id }}" method="POST" enctype="multipart/form-data">
          @csrf
          {{ method_field('put') }}
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <div class="form-group {{ $errors->has('title') ? 'has-error' : null }}">
                  <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $slider->title }}" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group {{ $errors->has('short_title') ? 'has-error' : null }}">
                  <input type="text" name="short_title" class="form-control " placeholder="Enter Short Title" value="{{ $slider->short_title }}" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="slider_img" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Slider image</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                  <img src="/uploads/{{ $slider->slider_img }}" class="img-thumbnail mt-2" width="80">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group {{ $errors->has('slider_alt') ? 'has-error' : null }}">
                  <input type="text" name="slider_alt" class="form-control" value="{{ $slider->slider_alt }}" placeholder="Image Alt">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group {{ $errors->has('button') ? 'has-error' : null }}">
                  <input type="text" name="button" class="form-control" placeholder="Button" value="{{ $slider->button }}" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group {{ $errors->has('button_link') ? 'has-error' : null }}">
                  <input type="text" name="button_link" class="form-control" placeholder="Button Link" value="{{ $slider->button_link }}" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <div class="form-group {{ $errors->has('background_color') ? 'has-error' : null }}">
                    <input type="text" name="background_color" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="" placeholder="Background Color" value="{{ $slider->background_color }}" required="">
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group {{ $errors->has('description') ? 'has-error' : null }}">
                  <textarea type="text" name="description" class="form-control" placeholder="Description" required>{{ $slider->description }}</textarea>
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
                  <input type="text" name="meta_title" class="form-control" value="{{ $slider->meta_title }}" placeholder="Meta Title">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input type="text" name="meta_tags" class="form-control" value="{{ $slider->meta_tags }}" placeholder="Meta Tags">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <input type="text" name="meta_keywords" class="form-control" value="{{ $slider->meta_keywords }}" placeholder="Meta Keywords">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <textarea type="text" name="meta_description" class="form-control" placeholder="Meta Description">{{ $slider->meta_description }}</textarea>
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