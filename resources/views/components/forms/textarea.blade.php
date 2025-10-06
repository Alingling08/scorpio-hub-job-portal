@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'value' => old($name)
    ];
@endphp

<x-forms.field :$label :$name>
    <textarea rows="3" {{ $attributes($defaults) }}>{{ old($name) }}</textarea>

</x-forms.field>