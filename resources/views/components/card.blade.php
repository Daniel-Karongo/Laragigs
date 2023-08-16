{{-- The "Attributes" is to accept custom class attributes for individual calling items --}}
{{--The slot is to be a placeholder for whatever is within the "<x-card></x-card>" tags in the calling file--}} 

<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded'])}}>
    {{$slot}}
</div>