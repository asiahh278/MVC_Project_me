<head>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<div class="container" id="container">
	<div class="form-container sign-up-container">

		<form action="{{ route('login') }}" method="POST">
            @csrf
			<h1>Login</h1>
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
            <a href="{{ route('password.request') }}">Forgot your password?</a>
			<button type="submit">login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left"></div>
            <div class="overlay-panel overlay-right">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signUp" href="{{ route('login') }}">Login</button>
			</div>
		</div>
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