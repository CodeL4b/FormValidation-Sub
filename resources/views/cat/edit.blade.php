@extends('layouts.app')
@section('content')
@include('pages.header')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Edit Category</h3>	
			</div>
		</div>


		@if ($errors->any())
			<div class="alart alart-danger">
				<strong>Whoops! </strong> there are some problems in your input <br>
				<ul>
					@foreach ($errors as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form action="{{route('cat.update', $cat->id)}}" method="post">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-md-12">
					<strong>Category Title :</strong>
					<input type="text" name="cat_title" class="form-control" value="{{$cat->cat_title}}">
				</div>

				<div class="col-md-12">
					<strong>Category Description :</strong>
					<textarea class="form-control" placeholder="Category Description" name="cat_des" rows="8" cols="80">{{$cat->cat_des}}></textarea>
				</div>

				<div class="col-md-12">
					<a href="{{route('cat.index')}}" class="btn btn-sm btn-success">Back</a>
					<button type="submit" class="btn btn-sm btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
@include('pages.footer')
@endsection