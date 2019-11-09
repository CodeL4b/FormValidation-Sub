@extends('layouts.app')
@section('content')
@include('pages.header')
	<div class="container">
		<div class="row">
			<div class="col md 10">
				<h3>Category List</h3>	
			</div>
			<div class="col-sm-2">
				@if(auth::check())
				<a class="btn btn-sm btn-success" href="{{ route('cat.create')}}">Create New Category</a>
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
				<th width="300px">Category Title</th>
				<th>Category Description</th>
				<th  width="180px">Action</th>
			</tr>
			
			@foreach ($cats as $cat)
				<tr>
					<td><b>{{++$i}}.</b></td>
					<td>{{$cat->cat_title}}</td>
					<td>{{$cat->cat_des}}</td>
					<td>
						<form action="{{ route ('cat.destroy', $cat->id) }}" method="post">
							<a class="btn btn-sm btn-success" href="{{route ('cat.show', $cat->id)}}">Show</a>
							@if(auth::check())
							<a class="btn btn-sm btn-warning" href="{{route ('cat.edit', $cat->id)}}">Edit</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-sm btn-danger">Delete</button>
							@endif
						</form>
					</td>
				</tr>
			@endforeach
		</table>
{!! $cats->links() !!}
	</div>
@include('pages.footer')
@endsection