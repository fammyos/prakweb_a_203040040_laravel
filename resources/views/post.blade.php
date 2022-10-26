@extends('layouts.main')

@section('container')
<article>
    <h2 class="mb-5 mt-3">{{ $post->title }}</h2>
    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></p>
    {!! $post->body !!}
</article>

<a href="/blog" class="display-block text-decoration-none">Back to Post</a>
@endsection