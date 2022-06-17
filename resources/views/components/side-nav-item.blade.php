<a @class(["block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 rounded-lg dark-mode:bg-gray-700
    dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
    dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
    focus:outline-none focus:shadow-outline" , "bg-gray-200"=> false,
    "bg-gray-200" => basename(URL::current()) == $name,
    "bg-transparent" => basename(URL::current()) != $name,
    ])
    href="{{ $to }}">{{ $title }}</a>

{{-- {{ Request::path() }}
{{basename(URL::current())}} --}}

{{-- @if(in_array(Request::path() ,
['teacher/announcement','teacher/announcement/create','teacher/announcement/'.])) --}}
