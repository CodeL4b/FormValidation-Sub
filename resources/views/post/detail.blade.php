@extends('layouts.app')
@section('content')
@include('pages.header')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Post Details</h3>
				<hr>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Post Title :</strong> {{$post->post_title}}
				</div>	
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>Post Description :</strong> {{$post->post_des}}
				</div>	
			</div>
			<div class="col-md-12">
				<a href="{{route('post.index')}}" class="btn btn-sm btn-success">Back</a>
			</div>
		</div>
	</div>
@include('pages.footer')
@endsection