<div class="w-full px-8 fixed top-20 left-0 rooms-nav-panel opacity-0 transition-opacity hidden">
    <div class="shadow-lg bg-ivory py-6 relative z-50">
        <div class="grid grid-cols-3 divide-brown-dark divide-x-2">
            @foreach($buildings() as $building_name => $building)
                <div class="flex flex-col items-center">
                    @include("svgs.buildings.{$building['building_icon']}", ['classes' => 'h-6 text-green-main'])
                    <p class="type-a1 text-green-main uppercase">
                        <a class="hover:text-gold" href="/buildings/{{$building['building_icon']}}">{{ $building_name }}</a>
                    </p>
                    <div class="w-40 max-w-full border-b-2 border-brown-dark my-4"></div>
                    @foreach($building['types'] as $room_type => $rooms)
                        <div class="mb-4">
                            <p class="type-a1 text-brown-dark uppercase text-center">
                                <a class="hover:text-gold" href="{{ $building['building_slug'] }}#{{$room_type}}">{{ trans("rooms.types.{$room_type}") }}</a>
                            </p>
                            @foreach($rooms as $room)
                                <p class="text-green-main type-b7 text-center">
                                    <a href="/rooms/{{ $room->slug() }}">{{ $room->name() }}</a>
                                </p>
                            @endforeach
                        </div>

                    @endforeach
                </div>

            @endforeach

        </div>
        <div class="text-center mt-6">
            <div class="mb-3">
                <x-arrow-link link-to="/buildings">Visit Villas Page</x-arrow-link>
            </div>
            <a class="inline-button btn-green-ghost" href="/rooms">See All Rooms</a>
        </div>
        <button class="rooms-panel-trigger absolute top-0 right-0 m-3 text-gray-400 hover:text-green-main">
            <svg viewBox="0 0 100 100" class="stroke-current h-8">
                <path d="M 0 0 L 100 100 M 100 0 L 0 100" stroke-width="2"></path>
            </svg>
        </button>
    </div>


</div>
