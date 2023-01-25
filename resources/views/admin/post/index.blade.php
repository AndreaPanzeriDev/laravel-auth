@extends('layouts.app')

@section('content')
    <div class="containerM">
        <div class="function">
            <h1>Post</h1>
            <div>
                <button class="buttonN"><a href="{{route('admin.posts.create')}}">+ Add new</a></button>
            </div>
        </div>
        <div class="cards">
            @foreach ($info_posts as $item)
                <div class="cardM">
                    <div class="text-center my-2">{{ $item->title }}</div>
                    <div class="buttons">
                        <!-- web.php/PostController/ipoteticoshow.blade.php-->
                        <button class="editB"><a href="">Edit</a></button>
                        <button class="deleteB"><a href="">Delete</a></button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection