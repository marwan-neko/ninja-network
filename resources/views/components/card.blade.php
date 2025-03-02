@props(['isHighlight'=>false])

<div @class(['highlight' => $isHighlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }}" class="btn">View & Edit Details</a>
</div>