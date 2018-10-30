<div class="bg-green-soft reg-section-space">
    <div class="max-w-md mx-auto flex flex-col items-center">
        <p class="heading-text mb-4 text-green-main">{{ $title }}</p>
        <span>
                @include('svgs.logos.leaf')
            </span>
        {{ $slot }}
    </div>
</div>