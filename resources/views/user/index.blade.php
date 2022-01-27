@extends('layouts.master')
@section('title','')

@section('content')
<div class=" md:flex flex-col md:flex-row md:min-h-screen w-full">
    <div @click.away="open = false"
        class="glassmorphism-effect bg-sky-200 fixed top-0 w-full md:w-auto h-auto md:h-full flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0"
        x-data="{ open: false }">
        <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
            <a href="#"
                class="text-lg font-semibold tracking-widest text-white uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Wizards
                UI</a>
            <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline"
                @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Blog</a>
            <a class="text-white block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Portfolio</a>
            <a class="text-white block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">About</a>
            <a class="text-white block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                href="#">Contact</a>
            {{-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>Dropdown</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Link #1</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Link #2</a>
                        <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Link #3</a>
                    </div>
                </div>
            </div> --}}
        </nav>
    </div>
    <div class="mx-auto mt-12">
        <div class="grid grid-cols-1 gap-6 my-6 px-4 md:px-6 lg:px-8">
            <div class="max-w-xl mx-auto px-4 py-4 bg-white shadow-md rounded-lg">
                <div class="py-2 flex flex-row items-center justify-between">
                    <div class="flex flex-row items-center">
                        <a href="#"
                            class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                            <img class="rounded-full h-8 w-8 object-cover"
                                src="https://images.unsplash.com/photo-1520065786657-b71a007dd8a5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80"
                                alt="">
                            <p class="ml-2 text-base font-medium">Jon Doe</p>
                        </a>
                    </div>
                    <div class="flex flex-row items-center">
                        <p class="text-xs font-semibold text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <div class="mt-2">
                    <img class="object-cover w-full rounded-lg"
                        src="https://images.unsplash.com/photo-1586398710270-760041494553?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&q=80"
                        alt="">
                    <div class="py-2 flex flex-row items-center">
                        <button class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                            <span class="ml-1">3431</span>
                        </button>
                        <button
                            class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg ml-3">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            <span class="ml-1">566</span>
                        </button>
                    </div>
                </div>
                <div class="py-2">
                    <p class="leading-snug">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, ratione dicta
                        deleniti, quas distinctio, veniam quo rem eveniet aliquid repudiandae fuga asperiores reiciendis
                        tenetur? Eius quidem impedit et soluta accusamus.</p>
                </div>
            </div>

            <div class="max-w-xl mx-auto px-4 py-4 bg-white shadow-md rounded-lg">
                <div class="py-2 flex flex-row items-center justify-between">
                    <div class="flex flex-row items-center">
                        <a href="#"
                            class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                            <img class="rounded-full h-8 w-8 object-cover"
                                src="https://images.unsplash.com/photo-1520065786657-b71a007dd8a5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80"
                                alt="">
                            <p class="ml-2 text-base font-medium">Jon Doe</p>
                        </a>
                    </div>
                    <div class="flex flex-row items-center">
                        <p class="text-xs font-semibold text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <div class="py-2">
                    <p class="leading-snug">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, ratione dicta
                        deleniti, quas distinctio, veniam quo rem eveniet aliquid repudiandae fuga asperiores reiciendis
                        tenetur? Eius quidem impedit et soluta accusamus.</p>
                </div>
                <div>
                    <div class="py-2 flex flex-row items-center">
                        <button class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                            <span class="ml-1">3431</span>
                        </button>
                        <button
                            class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg ml-3">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            <span class="ml-1">566</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="max-w-xl mx-auto px-4 py-4 bg-white shadow-md rounded-lg">
                <div class="py-2 flex flex-row items-center justify-between">
                    <div class="flex flex-row items-center">
                        <a href="#"
                            class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                            <img class="rounded-full h-8 w-8 object-cover"
                                src="https://images.unsplash.com/photo-1520065786657-b71a007dd8a5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80"
                                alt="">
                            <p class="ml-2 text-base font-medium">Jon Doe</p>
                        </a>
                    </div>
                    <div class="flex flex-row items-center">
                        <p class="text-xs font-semibold text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <div class="mt-2">
                    <img class="object-cover w-full rounded-lg"
                        src="https://images.unsplash.com/photo-1586398710270-760041494553?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&q=80"
                        alt="">
                    <div class="py-2 flex flex-row items-center">
                        <button class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                            <span class="ml-1">3431</span>
                        </button>
                        <button
                            class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg ml-3">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            <span class="ml-1">566</span>
                        </button>
                        <button
                            class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg ml-3">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5">
                                <path
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                </path>
                            </svg>
                            <span class="ml-1">340</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
