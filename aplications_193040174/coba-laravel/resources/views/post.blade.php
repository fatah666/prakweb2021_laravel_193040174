
@extends('layouts.main')

@section('container')
  <h2 class="mb-5">{{ $post->title }}</h2>
<p>By. <a href="/author/{{ $post->author->user_name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

 {!! $post->body !!}
  
  <a href="/blog" class="d-block mt-3 text-decoration-none">Back to posts</a>
  @endsection

