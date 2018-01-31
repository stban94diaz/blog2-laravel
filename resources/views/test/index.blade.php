<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $article->title }}</title>
    <link rel="stylesheet" href="{{ asset('/css/general.css') }}">
  </head>
  <body>
    Hola, {{ $article->user->name }} | {{$article->category->name}}
    <br><hr>
    <h1>
      {{ $article->title }}
    </h1>
    <hr>
    <p>
      {{ $article->content }}
    </p>
    <hr>
    @foreach($article->tags as $tag)
      {{ $tag->name }}
    @endforeach
  </body>
</html>
