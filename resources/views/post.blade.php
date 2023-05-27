@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>
            {{ $post->title }}
        </h2>
       
         {{$post->author}}
    
    
        {!! $post->body !!}
        
    </article>
    <a href="/blog">back to posts</a>
@endsection