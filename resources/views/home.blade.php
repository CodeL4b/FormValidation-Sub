@extends('layouts.app')
@include('pages.header')
@section('content')
 
        
   

    <div class="content">
        <div class="links">
            <a href="{{url('post')}}">Post</a>
            <a href= "{{url('cat')}}" >Category</a>
        </div>
    </div>


@include('pages.footer')
@endsection
