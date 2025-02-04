<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <p>Create an account to join our pet-friendly community!</p>

        <form method="POST" action="{{ route('postUser') }}" class="form-container">
            @csrf

            <div class="form-group">
                <input type="text" name="name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="text" name="age" placeholder="Age" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <button type="submit" class="btn">Register</button>
        </form>

        <br>
        <a href="{{ route('index') }}" class="btn-link">Already have an account? Login</a>
        <br>
    </div>
</body>
</html>
