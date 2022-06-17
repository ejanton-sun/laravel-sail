<div @class([
    "shadow-md pt-0" => $isCommentForm ? false : true,
    "w-full max-w-xl mx-auto px-4 py-4 bg-white rounded-lg",
])>
    <div class="py-2 flex flex-row items-center justify-between">
        <div class="flex flex-row items-center">
            <a href="#" class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                <img class="rounded-full h-8 w-8 object-cover" src="{{ auth()->user()->providers->first()->avatar }}"
                    alt="User profile picture in github">
                <p class="ml-2 text-base font-medium">{{ auth()->user()->name }}</p>
            </a>
        </div>
    </div>
    <div class="py-2">
        @if (count($errors))
        <div class="my-2 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
            @error('title')
            <p>{{$message}}</p>
            @enderror
            @error('description')
            <p>{{$message}}</p>
            @enderror
        </div>
        @endif


        <div class="mt-2">
            <form method="POST" action="{{ $formAction }}">
                @csrf
                @if (!$post)
                <input type="text" name="title" id="title" placeholder="Title here"
                    class="leading-snug bg-gray-200 w-full rounded p-2" value="{{ old('title') }}">
                @endif
                <textarea name="description" maxlength="254" title="text" placeholder="comment"
                    class="block leading-snug bg-gray-200 w-full mt-2 h-32 rounded p-2">{{ old('description') }}</textarea>
                <button type="submit" class="float-right text-white mt-2 p-2 bg-sky-400 hover:bg-sky-300 rounded">
                    Swoosh
                </button>
            </form>
        </div>
    </div>
</div>
