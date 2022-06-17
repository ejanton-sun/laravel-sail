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
            <form action="{{ route('settings.password.update', $user) }}" method="POST">
                @csrf
                @if (!!auth()->user()->password)
                <x-form-input-component title="Old Password" field="old_pw" name="old_pw" type="password" />
                @endif
                <x-form-input-component title="New Password" field="new_pw" name="new_pw" type="password" />
                <x-form-input-component title="Retype New Password" field="re_new_pw" name="re_new_pw"
                    type="password" />
                <button type="submit" href="{{ route('settings.details.show', $user) }}"
                    class="bg-sky-500 p-2 rounded text-white text-center hover:bg-sky-400">Confirm changes</button>
            </form>

        </div>
    </div>


</div>


@endsection
