@extends('layouts.app')
@section('content')
@include('pages.header')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Category Details</h3>
				<hr>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Category Title :</strong> {{$cat->cat_title}}
				</div>	
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>Category Description :</strong> {{$cat->cat_des}}
				</div>	
			</div>
			<div class="col-md-12">
				<a href="{{route('cat.index')}}" class="btn btn-sm btn-success">Back</a>
			</div>
		</div>
	</div>
@include('pages.footer')
@endsection