@extends('layouts.main')

@section('container')
    <h2>
        Post Category : {{ $category }}
    </h2>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h1>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h1>
            <h5>
                {{ $post->author }}
            </h5>
            <p>
                {{ $post->excerpt }}
            </p>
        </article>
    @endforeach
@endsection

