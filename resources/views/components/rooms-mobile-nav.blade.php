@foreach($buildings() as $building_name => $building)
    <div class="nav-sub-list fixed bg-cream-light {{ $building['building_icon'] }} md:hidden">
        <div class="p-6">
            <button class="subnav-close type-a1 text-green-main">&larr;</button>
        </div>
        <div class="flex px-4 items-center mb-6">
            @include('svgs.buildings.' . $building['building_icon'], ['classes' => 'text-green-main h-8 mr-3'])
            <p class="type-a1 text-green-main uppercase">{{ $building_name }}</p>

        </div>
        @foreach($building['types'] as $room_type => $rooms)
            <div class="pl-16 mb-4">
                <p class="type-a1 text-brown-dark mb-2 uppercase">{{ $room_type }}</p>
                @foreach($rooms as $room)
                    <p class="text-green-main type-b7">{{ $room->name() }}</p>
                @endforeach
            </div>

        @endforeach
    </div>
@endforeach
