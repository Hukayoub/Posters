<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>POSTERS</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-3">
        <ul class="flex items-center">
            <li>
                <a href="{{route('home')}}" class="p-3">Home</a>
            </li>
                <a href="{{route('dashboard')}}" class="p-3">DASHBOARD</a>
            <li>
                <a href="{{route('posts')}}" class="p-3">POSTS</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
           {{-- @if (auth()->user()) --}}
            <li>
                <a href="" class="p-3">{{auth()->user()->name}}</a>
             </li>

             <li>
                 <form action="{{route('logout')}}" method="POST" class="p-3 inline">
                    @csrf
                     <button type="submit">LOGOUT</button>
                 </form>
                
            </li>
            {{-- @else --}}
            @endauth

            @guest
                
            <li>
                <a href="{{route('login')}}" class="p-3">LOGIN</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="p-3">REGISTER</a>
            </li>
            {{-- @endif --}}
            @endguest

        </ul>
    </nav>
    @yield('content')
</body>
</html>