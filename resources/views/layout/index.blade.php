<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>西川_Laravel課題</title>

</head>
<body>
    <header>
        <a href="{{ route('signin.create') }}">新規登録</a>
        <a href="">ログイン</a>
    </header>

    @yield('content')
    
</body>

</html>