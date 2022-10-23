@extends('layouts.main')

@section('container')
<h1 class="mb-4">Post Category : {{ $category }}</h1>
  @foreach ($posts as $post) 
  <article>
    <h2>
      <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    {{-- <h5>{{ $post->author }}</h5> --}}
    {{ $post->excerpt }}
  </article>
  @endforeach

@endsection 