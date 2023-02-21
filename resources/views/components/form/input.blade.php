@props([
    'label',
    'id',
    'name',
    'value' => '',
    'type' => 'text',
])

<div>
    <label class="font-bold block" for="{{ $id }}">{{ $label }}</label>
    <input class="border-2 p-2"
        id="{{ $id }}" name="{{ $name }}" type="{{ $type }}" value="{{ $value }}">
</div>