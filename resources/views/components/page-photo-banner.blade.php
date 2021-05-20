<div id="page-photo-banner"
     class="w-full flex flex-col items-center justify-end md:justify-center min-h-120w md:min-h-50w bg-cover">
    <div class="flex flex-col items-start w-full px-8 md:px-16 lg:pl-28 text-cream-light pb-4 pb-12 md:pb-0">
        @if($icon !== '')
            @include($icon, ['classes' => 'h-12 md:mb-3'])
        @endif
        <p class="type-h0 fadeUpOnLoad">{{ $title }}</p>
        @if($text)
            <p class="type-b1 max-w-md my-3 hidden md:block fadeUpAfterLoad">{{ $text }}</p>
        @endif
        @if(count($roomInfo))
            <div class="flex flex-col md:flex-row items-center fadeUpAfterLoad mt-3">
                <div class="flex items-center">
                    @include($roomInfo['building_icon'], ['classes' => 'h-8 mr-2'])
                    <p class="type-b2">{{ $roomInfo['building'] }}</p>
                </div>

                <p class="mx-1 type-b2 hidden md:block">.</p>
                <p class="type-b2">{{ $roomInfo['type'] }}</p>
            </div>

        @endif
    </div>
    @push('headspace')
        <style>
            #page-photo-banner {
                background-image: linear-gradient(to right, rgba(0, 0, 0, .6) 10%, transparent 50%, transparent), url({{ $imgLarge }});
            }

            @media screen and (max-width: 650px) {
                #page-photo-banner {
                    background-image: linear-gradient(to top, rgba(0, 0, 0, .6) 10%, transparent 50%, transparent), url({{ $imgSmall ? $imgSmall : $imgLarge }})
                }
            }
        </style>
    @endpush
</div>
<div class="w-full bg-green-main md:hidden py-4 px-8 hidden">
    <p class="type-b1 max-w-md text-white">{{ $text }}</p>
</div>
