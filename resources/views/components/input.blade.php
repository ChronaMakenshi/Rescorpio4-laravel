@php
    $type ??= 'text';
    $name ??= '';
    $value??= '';
    $placeholder ??= '';
@endphp

<div>
    @if($type == 'textarea')
        <textarea type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" placeholder='{{ __("redscorpio4.input-$placeholder") }}'
                  class="shadow block @error($name) border-rouge @enderror  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-bleu">{{ old($name, $value) }}</textarea>
    @else
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}" placeholder="{{ __("redscorpio4.input-$placeholder") }}"
               class="shadow block @error($name) border-rouge @enderror  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-bleu">
    @endif
    @error($name)
    <div class="bg-red-700 text-center font-bold border border-black rounded mt-2">
        {{ $message }}
    </div>
    @enderror
</div>