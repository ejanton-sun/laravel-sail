<div class="w-full max-w-xl mx-auto bg-white rounded-lg">
    <div class="py-2 flex flex-row items-start justify-between ">
        <p class="font-medium p-1">{{ $title }}</p>
        <div class="w-3/5">
            <input class="leading-snug bg-gray-200 w-full rounded p-1 m-1" type="{{ $type }}" name="{{ $name }}"
                id="{{ $name }}" value="{{ old($field) }}">
            @error($field)
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
