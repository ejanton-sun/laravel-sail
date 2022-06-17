<div class="max-w-xl mx-auto px-4 py-4 bg-white shadow-md rounded-lg w-full">
    <div class="py-2 flex flex-row items-center justify-between">
        <div class="flex flex-row items-center">
            <a href="{{ route('profile', $post->user ) }}" class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                <img class="rounded-full h-8 w-8 object-cover" src="{{$post->user->provider->avatar}}"
                    alt="{{$post->user->name . ' avatar'}}">
                <p class="ml-2 text-base font-medium">{{ $post->user->name }}</p>
            </a>
        </div>
        <div class="flex flex-row items-center">
            <p class="text-xs font-semibold text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
        </div>
    </div>
    <div class="py-2">
        <a href="{{ route('post.show', $post) }}">
            <h6 class="text-bold text-lg">{{ $post->title }}</h6>
            <p class="leading-snug text-gray-400">{{ $post->description }}</p>
        </a>
    </div>
    <div>
        <div class="py-2 flex flex-row items-center">
            <button class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="w-5 h-5">
                    <path
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>
                <span class="ml-1">3431</span>
            </button>
            <button class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg ml-3">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" class="w-5 h-5">
                    <path
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                    </path>
                </svg>
                <span class="ml-1">{{ $post->comments_count }}</span>
            </button>
        </div>
    </div>
</div>
