@extends('layouts.app')
@section('content')
@include('pages.header') 

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>New Post</h3>	
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

		<form action="{{route('post.store')}}" method="post">
			@csrf
			<div class="row">
				<div class="col-md-12">
					<strong>Post Title :</strong>
					<input type="text" name="post_title" class="form-control" placeholder="Post Title">
				</div>

				<div class="col-md-12">
					<strong>Post Description :</strong>
					<textarea class="form-control" placeholder="Post Description" name="post_des" rows="8" cols="80"></textarea>
				</div>

				<div class="col-md-12">					
				</div>
			
				<div class="col-md-12">
					<select class="form-control">
						@foreach ($cats as $cat)
							<option>{{$cat->cat_title}}</option>
						@endforeach
					</select>
				</div>

				<div class="col-md-12">					
				</div>

				<div class="col-md-12">
					<a href="{{route('post.index')}}" class="btn btn-sm btn-success">Back</a>
					<button type="submit" class="btn btn-sm btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
@include('pages.footer')
@endsection