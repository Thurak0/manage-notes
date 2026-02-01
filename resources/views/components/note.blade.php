@props(['important' => false])

<div @class(['highlight' => $important, 'note'])>
    {{ $slot }}
    <a href='{{ $attributes->get("href") }}' class='btn'>View Details</a>
</div>
