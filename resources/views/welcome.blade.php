
            <div class="content">
                <div class="title m-b-md">
                    
                </div>     
            </div>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <div class="content">
                <div class="links">
                    <a href="{{url('post')}}">Post</a>
                    <a href= "{{url('cat')}}" >Category</a>
                </div>
            </div>
  
@include('pages.header')   
@include('pages.footer')