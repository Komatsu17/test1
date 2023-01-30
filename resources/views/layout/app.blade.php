<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title ?? "Meu Site"}}</title>
</head>
<body>
    @if (session('status'))
        <div class="alert alert-sucess">
            {{session('status')}}
        </div>
    @endif
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
</body>
</html>