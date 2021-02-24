<div id="page-photo-banner"
     class="w-full flex items-center justify-center min-h-120w md:min-h-50w bg-cover">
    <div class="flex flex-col items-start w-full px-8 md:px-16 text-cream-light">
        @if($icon !== '')
        @include($icon, ['classes' => 'h-12 mb-3'])
        @endif
        <p class="type-h0">{{ $title }}</p>
        <p class="type-b1 max-w-md my-3">{{ $text }}</p>
    </div>
    @push('headspace')
        <style>
            #page-photo-banner {
                background-image: linear-gradient(to right, rgba(0, 0, 0, .6), transparent), url({{ $imgLarge }});
            }

            @if($imgSmall)
                @media screen and (max-width: 650px) {
                #page-photo-banner {
                    background-image: linear-gradient(to right, rgba(59, 59, 59, .7), transparent), url({{ $imgSmall }})
                }
            }
            @endif
        </style>
    @endpush
</div>
