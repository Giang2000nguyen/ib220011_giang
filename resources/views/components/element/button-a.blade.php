@props([
    'href'=>'',
    'theme'=>'primary',
])
@php
    if(!function_exists('getThemeClassForButtonA')){
        function getThemeClassForButtonA($theme){
            return match($theme){
                'primary' => 'text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500',
                'secondary' => 'text-white bg-orange-200 hover:bg-orange-300 focus:ring-red-500',
                default=>' ',
            };
        }
    }
@endphp
<a href="{{$href}}" class="inline-flex justify-center py-2 px-4 border-transparent shadow-sm text-sm font-medium rounded-md b text-white hover:bg-blue-600 bg-blue-500 focus:outline-none focus:ring-2 {{getThemeClassForButtonA($theme)}}" >
    {{$slot}}
</a>