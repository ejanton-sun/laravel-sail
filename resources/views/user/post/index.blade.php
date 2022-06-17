@extends('layouts.master')
@section('title', $post->title)

@section('content')
<div class=" md:flex flex-col md:flex-row md:min-h-screen w-full">
    <x-side-nav />
    <div class="mx-auto  max-w-xl w-xl mt-12 w-[36em]">
        <div class=" grid grid-cols-1 gap-6 my-6 px-4 md:px-6 lg:px-8">
            <x-post-item :post="$post" />
            @foreach($post->comments as $comment)
            <x-comment-item :comment="$comment" />
            @endforeach
            <x-form-component :post="$post" formAction="{{ route('comment.store', $post) }}" :isCommentForm=false />
        </div>
    </div>


</div>

@endsection
