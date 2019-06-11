@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4 class="mb-1">{{ $post->title }}</h4>
                    <small>
                        <a href="#">{{ $post->author ?: 'Administrator' }}</a> 
                        创建自 <code>{{ $post->created_at }}</code> 
                        最后修改于 <code>{{ $post->updated_at->diffForHumans() }}</code>
                    </small>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <vue-markdown v-highlight>{{ $post->content }}</vue-markdown>
                </div>

                <div class="card-footer">
                    <small>
                        @foreach ($post->tags as $tag)
                            <a href="{{ route("tags.posts", $tag->slug) }}" 
                                class="btn btn-outline-dark btn-sm">{{ $tag->name }}</a>
                        @endforeach
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
