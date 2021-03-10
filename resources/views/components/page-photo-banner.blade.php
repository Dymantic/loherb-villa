<div id="page-photo-banner"
     class="w-full flex flex-col items-center justify-end md:justify-center min-h-120w md:min-h-50w bg-cover">
    <div class="flex flex-col items-start w-full px-8 md:px-16 text-cream-light pb-12 md:pb-0">
        @if($icon !== '')
            @include($icon, ['classes' => 'h-12 mb-3'])
        @endif
        <p class="type-h0">{{ $title }}</p>
        @if($text)
            <p class="type-b1 max-w-md my-3 hidden md:block">{{ $text }}</p>
        @endif
        @if(count($roomInfo))
            <div class="flex items-center">
                @include($roomInfo['building_icon'], ['classes' => 'h-8 mr-2'])
                <p class="type-h1">{{ $roomInfo['building'] }}</p>
                <p class="mx-1 type-b2">.</p>
                <p class="type-h1">{{ $roomInfo['type'] }}</p>
            </div>

        @endif
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
<div class="w-full bg-green-main md:hidden py-4 px-8">
    <p class="type-b1 max-w-md text-white">{{ $text }}</p>
</div>
