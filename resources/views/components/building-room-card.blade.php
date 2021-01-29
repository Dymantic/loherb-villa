<div class="flex flex-col md:flex-row relative w-full my-20 {{ $side === 'right' ? 'justify-start' : 'justify-end' }}">
    <div class="w-full md:w-5/6">
        <img src="{{ $cardImage() }}"
             alt="" class="w-full h-full object-cover">
    </div>
    <div class="bg-cream-light md:shadow-lg md:w-1/3 md:absolute my-auto md:top-50 md:transform md:-translate-y-1/2 p-4 {{ $side === 'right' ? 'right-0' : 'left-0' }}">
        <p class="type-h2 text-green-main">{{ $roomAttribute('name') }}</p>
        <p class="type-b7 text-brown-dark">{{ $roomAttribute('type') }}</p>
        <p class="type-b1 text-green-main leading-tight mt-2">{{ $roomAttribute('intro') }}</p>
        <p class="type-b1 text-green-main leading-tight my-3">{{ $roomAttribute('starting_price') }}</p>
        <div class="flex type-b7 text-green-main mt-3 border-b border-green-main pb-3">
            <div class="flex items-center mr-3">
                @include('svgs.icons.room_size', ['classes' => 'h-5 mr-2'])
                <span>{{ $roomAttribute('size') }}m²</span>
            </div>
            <div class="flex items-center mr-3">
                @include('svgs.icons.bed', ['classes' => 'h-5 mr-2'])
                <span>Sleeps {{ $roomAttribute('sleeps') }}</span>
            </div>
            <div class="flex items-center mr-3">
                @include('svgs.icons.view', ['classes' => 'h-5 mr-2'])
                <span>Mountain View</span>
            </div>
        </div>
        <div class="flex justify-end pt-2">
            <a href="" class="type-a1 text-green-main hover:text-green-mid">View Room &rarr;</a>
        </div>
    </div>
</div>
