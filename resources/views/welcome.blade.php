{{-- tampilan pertama --}}
{{-- 
@section('main')


<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
            </ul>
            <div class="text-end">
                @guest
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-warning">Register</a> 
                @else
                <a href="{{ route('logout') }}" class="nav-link active" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" >Log Out</a>@endguest
            <form action="{{ route('logout') }}" id="logout-form" method="POST">
                @csrf
            </form>
            </div>
        </div>
    </div>
</header> --}}

<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
            </ul>
            <div class="text-end">
                @guest
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-warning">Register</a> 
                @else
            <a href="{{ route('logout') }}" class="btn btn-outline-light me-2" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                @endguest
            <form action="{{ route('logout') }}" id="logout-form" method="POST">
                @csrf
            </form>
            </div>
        </div>
    </div>
</header>