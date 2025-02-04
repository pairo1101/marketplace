<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops! Something went wrong.</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route('loginPost')}}">
        @csrf 
        @method('post')
        <div>
            <input type="text" id="email" name="email" placeholder="email" required>
        </div>
            <input type="password" id="password" name="password" placeholder="password" required>
            
        <div>
            <br>
            <button type="submit">Login </button>

        </div>
    </form>
    <br>

    <div>
        <a href="{{route('registration')}}"><button type="button">Register</button></a>
    </div>


    
</body>
</html>