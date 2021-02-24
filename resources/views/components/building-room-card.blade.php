<div class="flex flex-col md:flex-row relative w-full my-20 {{ $side === 'right' ? 'justify-start' : 'justify-end' }}">
    <div class="w-full md:w-5/6">
        <img src="{{ $cardImage() }}"
             alt="" class="w-full h-full object-cover">
    </div>
    <div class="bg-ivory md:shadow-lg md:w-1/3 md:absolute my-auto md:top-50 md:transform md:-translate-y-1/2 p-4 {{ $side === 'right' ? 'right-0' : 'left-0' }}">
        <p class="type-h2 text-green-main leading-none pt-4">{{ $roomAttribute('name') }}</p>
        @if($showType)
        <p class="type-b7 text-brown-dark mb-3">{{ $roomAttribute('type') }}</p>
        @elseif($showBuilding)
            <div class="flex items-center mb-3">
                @include($roomAttribute('building_icon'), ['classes' => 'h-5 mr-1 text-brown-dark'])
                <p class="type-b7 text-brown-dark">{{ $roomAttribute('building') }}</p>
            </div>
        @endif
        <p class="type-b1 text-green-main leading-tight mt-2">{{ $roomAttribute('intro') }}</p>
        <p class="type-b2 text-green-main leading-tight my-3">{{ $roomAttribute('starting_price') }}</p>
        <div class="flex type-b7 text-green-main mt-3 border-b border-green-main pb-3">
            <div class="flex items-center mr-4">
                @include('svgs.icons.room_size', ['classes' => 'h-5 mr-1'])
                <span>{{ $roomAttribute('size') }}m²</span>
            </div>
            <div class="flex items-center mr-4">
                @include('svgs.icons.bed', ['classes' => 'h-5 mr-1'])
                <span>Sleeps {{ $roomAttribute('sleeps') }}</span>
            </div>
            <div class="flex items-center mr-4">
                @include('svgs.icons.view', ['classes' => 'h-5 mr-1'])
                <span>{{ $roomAttribute('view') }}</span>
            </div>
        </div>
        <div class="flex justify-end pt-2">
            <x-arrow-link link-to="/rooms/{{ $roomAttribute('slug') }}">View Room</x-arrow-link>
        </div>
    </div>
</div>
