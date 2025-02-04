<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>PetDeed - Login</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to <span class="highlight">Marketplace</span></h1>
        <p>Your companion for all daily necessities</p>
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops! Something went wrong:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{ route('loginPost') }}" class="login-form">
            @csrf 
            @method('post')
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>

        <div class="button-group">
            <a href="{{ route('registration') }}">
                <button type="button" class="btn-secondary">Register</button>
            </a>
        </div>
    </div>
</body>
</html>
