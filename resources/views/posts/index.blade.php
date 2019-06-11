@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="list-group">
                @foreach ($posts as $post)
                    <div class="list-group-item list-group-item-action flex-column align-items-start"
                        style="margin-bottom: 10px;cursor: pointer;"
                        >
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="mb-1">{{ $post->title }}</h4>
                            <small>
                                <a href="#">{{ $post->author ?: 'Administrator' }}</a> @
                                <span>{{ $post->updated_at }}</span>
                            </small>
                        </div>
                        <p class="mb-1"
                            style="text-overflow: -o-ellipsis-lastline;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            display: -webkit-box;
                            -webkit-line-clamp: 5;
                            -webkit-box-orient: vertical;"
                        >
                            简介
                        </p>
                        <div class="d-flex w-100 justify-content-between">
                            <small>
                                <a class="btn btn-dark btn-sm" 
                                    href="{{ route("posts.show", $post->slug) }}">查看全文</a>
                            </small>
                            <small>
                                <span class="btn btn-outline-dark btn-sm">标签1</button>
                            </small>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
