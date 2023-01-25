@extends('layouts.app')

@section('content')
    <div class="containerM">
        <h1>stampiamo lista</h1>

        <div class="cards">
            @foreach ($info_posts as $item)
                <div class="cardM">
                    <div>{{ $item->title }}</div>
                    <div>
                        <button><a href="{{ route('admin.posts.show', $item->id) }}"></a>Show</button> <!-- web.php/PostController/ipoteticoshow.blade.php-->
                        <button></button>
                        <button></button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
