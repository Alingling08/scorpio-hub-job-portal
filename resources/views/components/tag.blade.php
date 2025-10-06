@props(['tag', 'size' => 'base'])

@php
    $classes = "bg-white/5 hover:bg-white/10 rounded-xl font-bold transition-colors duration-300";
    if ($size === 'base') {
        $classes .= ' px-3 py-1 text-md';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-2 text-2xs';
    } 
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>