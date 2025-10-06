@props(['label', 'name', 'checkLabel'])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
        'class' => 'appearance-none h-6 w-6 border border-gray-400 rounded-md checked:bg-blue-500 checked:border-blue-500',
        'checkLabel' => $checkLabel,
    ];
@endphp

<x-forms.field :$label :$name>
    <label class="flex items-center space-x-2 cursor-pointer">
        <input {{ $attributes($defaults) }}>
        <span class="checked:text-white">{{ $checkLabel }}</span>
    </label>
</x-forms.field>

{{-- <label class="flex items-center space-x-2 cursor-pointer">
    <input type="checkbox"
        class="appearance-none h-6 w-6 border border-gray-400 rounded-md checked:bg-blue-500 checked:border-blue-500" />
    <span class="checked:text-white">Custom Checkbox Label</span>
</label> --}}