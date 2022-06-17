@extends('layouts.master')
@section('title', $comment->title)

@section('content')
<div class=" md:flex flex-col md:flex-row md:min-h-screen w-full">
    <x-side-nav />
    <div class="mx-auto  max-w-xl w-xl mt-12 w-[36em]">
        <div class=" grid grid-cols-1 gap-6 my-6 px-4 md:px-6 lg:px-8">
            <x-comment-item :comment="$comment" />
            @foreach($comment->userReplies() as $reply)
            <div class="ml-12 mr-0">
                <x-comment-item :comment="$reply" />
            </div>
            @endforeach
            {{-- <x-form-component :post="$post" formAction="{{ route('comment.store', $post) }}" /> --}}
        </div>
    </div>


</div>

@endsection
