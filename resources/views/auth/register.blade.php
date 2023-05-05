<head>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<div class="container" id="container">
	<div class="form-container sign-in-container">

        <form action="{{ route('register') }}" method="POST">
            @csrf
			<h1>Register</h1>
			<input type="text" name="name" placeholder="Username" class="form-control" value="{{ old('name') }}"/>
            @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
            @enderror
			<input type="email" name="email" placeholder="Email"  class="form-control" value="{{ old('email') }}"/>
            @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
            @enderror
			<input type="password" name="password" placeholder="Password" class="form-control" value="{{ old('name') }}"/>
            @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
            @enderror
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" value="{{ old('name') }}"/>
            @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
            @enderror
            <a href="{{ route('password.request') }}">Forgot your password?</a>
			<button type="submit">register</button>
		</form>
    </div>
 <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and get more information from us</p>
                <button class="ghost" id="signIn" href="{{ route('register') }}">Register</button>
            </div>
            <div class="overlay-panel overlay-right"></div>
        </div>
    </div>
    <script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');
    
    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
    </script>
