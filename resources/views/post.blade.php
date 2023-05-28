@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>
            {{ $post->title }}
        </h2>
        <p>By Hasan Nur Wakhid in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
       
         {{$post->author}}
    
    
        {!! $post->body !!}
        
    </article>
    <a href="/blog">back to posts</a>
@endsection