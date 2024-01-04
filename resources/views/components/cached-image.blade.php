@props(['imagePath'])

@php
    $cacheKey = 'cached_image_' . md5($imagePath);
@endphp

@if (Cache::has($cacheKey))
    <img src="{{ Cache::get($cacheKey) }}" {{ $attributes }}>
@else
    @php
        $imageContents = file_get_contents(public_path($imagePath));
        Cache::put($cacheKey, 'data:image/png;base64,' . base64_encode($imageContents), now()->addHours(6));
    @endphp
    <img src="{{ Cache::get($cacheKey) }}" {{ $attributes }}>
@endif
