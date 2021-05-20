<div class="flex flex-col md:flex-row relative w-full my-20 {{ $side === 'right' ? 'justify-start' : 'justify-end' }}">
    <div class="w-full md:w-5/6">
        <img src="{{ $cardImage() }}"
             alt="" class="w-full h-full object-cover">
    </div>
    <div class="md:w-1/3 md:absolute my-auto md:top-50 md:transform md:-translate-y-1/2 {{ $side === 'right' ? 'right-0' : 'left-0' }}">
        <div class="rounded-sm bg-ivory md:shadow-lg p-4" data-usher data-usher-name="{{ $side === 'right' ? 'fadeInFromRight' : 'fadeInFromLeft' }}">
            <p class="type-h1 text-green-main leading-none pt-4">{{ $roomAttribute('name') }}</p>
            @if($showType)
                <p class="type-b2 text-brown-dark mb-3">{{ $roomAttribute('type') }}</p>
            @elseif($showBuilding)
                <div class="flex items-center mb-3">
                    @include($roomAttribute('building_icon'), ['classes' => 'h-5 mr-1 text-brown-dark'])
                    <p class="type-b2 text-brown-dark">{{ $roomAttribute('building') }}</p>
                </div>
            @endif
            <p class="type-b8 text-green-main mt-2">{{ $roomAttribute('intro') }}</p>
            <p class="type-b3 text-green-main leading-tight my-3">{{ $roomAttribute('starting_price') }}</p>
            <div class="flex justify-between type-b7 text-green-main mt-3 border-b border-green-main pb-3">
                <div class="flex flex-col items-center mr-4">
                    <img src="/images/icons/room_size.svg" class="h-5 mb-1 block"
                         alt="room size icon">
                    <span>{{ $roomAttribute('size') }}m²</span>
                </div>
                <div class="flex flex-col items-center mr-4">
                    <img src="/images/icons/floor.svg" class="h-5 mb-1 block"
                         alt="room size icon">
                    <span>{{ $roomAttribute('floor') }}</span>
                </div>
                <div class="flex flex-col items-center mr-4">
                    <img src="/images/icons/bed.svg" class="h-5 mb-1 block"
                         alt="room size icon">
                    <span>{{ $roomAttribute('sleeps') }}</span>
                </div>
                <div class="flex flex-col items-center mr-4">
                    <img src="/images/icons/view.svg" class="h-5 mb-1 block"
                         alt="room size icon">
                    <span>{{ $roomAttribute('view') }}</span>
                </div>

            </div>
            <div class="flex justify-end pt-2">
                <x-arrow-link link-to="/rooms/{{ $roomAttribute('slug') }}">{{ trans('rooms.index.buttons.show') }}</x-arrow-link>
            </div>
        </div>
    </div>

</div>
