@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>stampiamo lista</h1>

        @foreach ($info_posts as $item)
            <a href="{{ route('admin.posts.show', $item->id) }}">
                <div>{{ $item->id }}</div>
            </a>
            <div>{{ $item->title }}</div>
            <div>{{ $item->body }}</div>
        @endforeach
    </div>
@endsection
