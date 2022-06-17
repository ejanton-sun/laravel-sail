@extends('layouts.master')
@section('title','')

@section('content')
<div class=" md:flex flex-col md:flex-row md:min-h-screen w-full">
    <x-side-nav />
    <div class="mx-auto  max-w-xl w-xl mt-12 w-[36em]">
        <div class=" grid grid-cols-1 gap-6 my-6 px-4 md:px-6 lg:px-8">
            {{-- --}}
            <x-form-component :post="null" formAction="{{ route('post.store') }}" :isCommentForm=false />
            {{-- --}}
            @foreach($posts as $post)
            <x-post-item :post="$post" />
            @endforeach
            {{ $posts->links() }}


        </div>
    </div>


</div>

@endsection
