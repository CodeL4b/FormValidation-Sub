@extends('layouts.app')
@section('content')
@include('pages.header')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Edit Post</h3>	
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

		<form action="{{route('post.update', $post->id)}}" method="post">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-md-12">
					<strong>Post Title :</strong>
					<input type="text" name="post_title" class="form-control" value="{{$post->post_title}}">
				</div>

				<div class="col-md-12">
					<strong>Post Description :</strong>
					<textarea class="form-control" placeholder="Post Description" name="post_des" rows="8" cols="80">{{$post->post_des}}></textarea>
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