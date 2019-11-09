@extends('layouts.app')
@section('content')
@include('pages.header') 
	<div class="container">
		<div class="row">
			<div class="col md 10">
				<h3>Post List</h3>	
			</div>

			<div class="col-sm-2">
				@if(auth::check())
				<a class="btn btn-sm btn-success" href="{{ route('post.create')}}">Create New Post</a>
				@endif
			</div>
		</div>

		@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{$message}}</p>
			</div>
		@endif

		<table class="table table-hover table-sm">
			<tr>
				<th width="50px"><b>No.</b></th>
				<th width="200px">Post Title</th>
				<th>Post Description</th>
				<th width="180px">Action</th>
			</tr>
			
			@foreach ($posts as $post)
				<tr>
					<td><b>{{++$i}}.</b></td>
					<td>{{$post->post_title}}</td>
					<td style="text-align: justify;">{{$post->post_des}}</td>
					<td>
						<form action="{{ route ('post.destroy', $post->id) }}" method="post">
							<a class="btn btn-sm btn-success" href="{{route ('post.show', $post->id)}}">Show</a>
							@if(auth::check())
							<a class="btn btn-sm btn-warning" href="{{route ('post.edit', $post->id)}}">Edit</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-sm btn-danger">Delete</button>
							@endif
						</form>
					</td>
				</tr>
			@endforeach
		</table>
{!! $posts->links() !!}
	</div>
@include('pages.footer')
@endsection