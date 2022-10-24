@extends('layouts.main')

@section('container')
<h1 class="mb-4">Halaman Blog Posts</h1>
  @foreach ($posts as $post) 
  <article class="mb-5 border-bottom pb-3">
    <h2 class="text-decoration-none">
      <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>

    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug  }}">{{ $post->category->name }}</a></p>
    
    {{ $post->excerpt }}

    <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read More...</a>
  </article>
  @endforeach

@endsection 