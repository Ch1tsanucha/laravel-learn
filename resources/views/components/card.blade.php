@props(['highlight' => false])

<div @class(['highlight' => $highlight, 'card'])>
    {{$slot}}
    <a href="{{ $attributes->get('href') }}">View Details</a>
</div>
