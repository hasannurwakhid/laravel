@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/posts/{{ $post->slug }}">
                <h2>
                    {{ $post->title }}
                </h2>
            </a>
            <p>By Hasan Nur Wakhid in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <h5>
                {{ $post->author }}
            </h5>
            <p>
                {{ $post->excerpt }}
            </p>
        </article>
    @endforeach
@endsection

