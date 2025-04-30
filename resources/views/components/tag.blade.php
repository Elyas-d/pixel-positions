@props(['tag','size'=>'base'])

@php

    $classes='bg-white/10 rounded-xl hover:bg-white/25 transition-colors duration-300';

    if($size == 'base'){
        $classes .= ' text-md px-2 py-2';
    }
    if($size == 'small'){
        $classes .= ' text-xs px-2 py-1';
    }

@endphp

<a
    {{ $attributes(['class' => $classes]) }} href="/tags/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>
