@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>
            All Categories
        </h2>
        @foreach ($categories as $category)
        <ul>
            <li>
                <h5>
                    <a href="/categories/{{$category->slug }}">{{ $category->name }}</a>
                </h5>
            </li>
        </ul>
        @endforeach
    </article>
@endsection