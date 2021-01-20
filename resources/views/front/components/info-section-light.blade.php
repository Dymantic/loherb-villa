<div class="bg-cream-light reg-section-space">
    <div class="max-w-2xl mx-auto flex flex-col items-center">
        <p class="type-h1 mb-4 text-green-main">{{ $title }}</p>
        <span>
                @include('svgs.logos.leaf')
            </span>
        {{ $slot }}
    </div>
</div>
