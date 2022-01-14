<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>本の一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')
        
        @section('content')
        
        <h1>BOOKS REVIEW</h1>
        <p class = 'create'><a href='/posts/create'>create</a></p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
                @if ($post->image_path)
                    <!-- 画像を表示 -->
                    <img src="{{ $post->image_path }}">
                @endif
            @endforeach
        </div>
        @endsection
    </body>
</html>