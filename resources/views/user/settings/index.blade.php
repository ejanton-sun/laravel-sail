@extends('layouts.master')
@section('title', 'Settings')

@section('content')
<div class=" md:flex flex-col md:flex-row md:min-h-screen w-full">
    <x-side-nav />
    <div class="mx-auto  max-w-xl w-xl mt-12 w-[36em]">
        <div class="grid grid-cols-1 gap-6 my-6 px-4 md:px-6 lg:px-8">
            {{-- --}}
            <div class="w-full max-w-xl mx-auto px-4 py-4 bg-white shadow-md rounded-lg">
                <div class="py-2 flex flex-row items-center justify-between">
                    <div class="flex flex-row items-center">
                        <a href="#"
                            class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                            <img class="rounded-full h-8 w-8 object-cover" src="{{ $user->provider->avatar }}"
                                alt="{{ $user->name }} avatar">
                            <p class="ml-2 text-base font-medium">{{ $user->name }}</p>
                        </a>
                    </div>

                </div>
            </div>
            <x-settings-component :field="$user->name" title="Name" />
            {{-- <x-settings-component :field="$user->username ?? 'No username'" title="Username" /> --}}
            <x-settings-component :field="$user->email" title="Email" />
            <x-settings-component :field="$user->password ?? 'No password set'" title="Password" />
            <a @if (!$user->provider)
                href="{{ route('settings.details.show', $user) }}"
                @endif
                @class([
                "bg-sky-500 p-2 rounded text-white text-center hover:bg-sky-400",
                "cursor-not-allowed" => $user->provider
                ])
                >Change Settings</a>
            <a href="{{ route('settings.password.show',$user) }}"
                class="bg-amber-500 p-2 rounded text-white  text-center hover:bg-amber-400">Change Password</a>

        </div>
    </div>


</div>


@endsection
