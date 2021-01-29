<div class="w-full px-8 fixed top-20 left-0 rooms-nav-panel opacity-0 transition-opacity hidden">
    <div class="shadow-lg bg-cream-light py-6 relative">
        <div class="grid grid-cols-3 divide-brown-dark divide-x-2">
            @foreach($buildings() as $building_name => $building)
                <div class="flex flex-col items-center">
                    @include("svgs.buildings.{$building['building_icon']}", ['classes' => 'h-6 text-green-main'])
                    <p class="type-a1 text-green-main uppercase">{{ $building_name }}</p>
                    <div class="w-40 max-w-full border-b-2 border-brown-dark my-4"></div>
                    @foreach($building['types'] as $room_type => $rooms)
                        <div class="mb-4">
                            <p class="type-a1 text-brown-dark mb-2 uppercase text-center">{{ $room_type }}</p>
                            @foreach($rooms as $room)
                                <p class="text-green-main type-b7 text-center">{{ $room->name() }}</p>
                            @endforeach
                        </div>

                    @endforeach
                </div>

            @endforeach

        </div>
        <div class="text-center">
            <a href="/buildings" class="type-a1 text-green-main hover:text-green-mid">Visit Buildings Page &rarr;</a>
        </div>
        <button class="rooms-panel-trigger absolute top-0 right-0 m-3 text-gray-400 hover:text-green-main">
            <svg viewBox="0 0 100 100" class="stroke-current h-8">
                <path d="M 0 0 L 100 100 M 100 0 L 0 100" stroke-width="2"></path>
            </svg>
        </button>
    </div>


</div>
