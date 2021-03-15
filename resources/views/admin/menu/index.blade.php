@extends('admin.layout.master')
@section('page-title')
Menus
@endsection
<div class="container">
	<div class="row">
		<div class="col-12">
			@section('main-content')
			    {!! Menu::render() !!}
			@endsection
		</div>
	</div>
</div>

{{-- YOU MUST HAVE JQUERY LOADED BEFORE menu scripts --}}
@push('scripts')
    {!! Menu::scripts() !!}
@endpush