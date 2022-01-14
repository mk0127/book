<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">Book Review</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </nav>
            
            <div class="row">
                <div class="col-md-4">
                    @if ($post->image_path)
                        <!-- 画像を表示 -->
                        <img src="{{ $post->image_path }}" class="imag-fluid">
                    @endif
                </div>
            
                <div class="col-md-4">    
                    <div class='post'>
                        <h2 class='title'>{{$post->title}}</h2>
                        <p class='body'>{{$post->body}}</p>
                        <p class='updated_at'>{{$post->updated_at}}</p>
                    </div>
                    <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
                    <form action="/posts/{{$post->id}}" id="form_delete" method="post">
                        {{csrf_field()}}
                        {{method_field('delete')}}
                            <input type="submit" style="display:none">
                            <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
                    </form>
                    <div class="back">[<a href="/">back</a>]</div>
                        <script>
                            function deletePost(e){
                                'use strict';
                                if(confirm('消去しますか？')){
                                document.getElementById('form_delete').submit();
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>