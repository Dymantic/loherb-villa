@foreach($buildings() as $building_name => $building)
    <div class="nav-sub-list fixed bg-cream-light {{ $building['building_icon'] }} md:hidden h-full overflow-y-auto pb-20">
        <div class="p-6">
            <button class="subnav-close type-a1 text-green-main">&larr;</button>
        </div>
        <a href="{{ $building['building_slug'] }}" class="flex px-4 items-center mb-6">
            @include('svgs.buildings.' . $building['building_icon'], ['classes' => 'text-green-main h-8 mr-3'])
            <p class="type-a1 text-green-main uppercase">{{ $building_name }}</p>

        </a>
        @foreach($building['types'] as $room_type => $rooms)
            <div class="pl-16 mb-4">
                <p class="type-a1 text-brown-dark mb-2 uppercase">
                    <a href="{{ $building['building_slug'] }}#{{ $room_type }}" class="hover:text-gold">
                        {{ trans("rooms.types.{$room_type}") }}
                    </a>
                </p>
                @foreach($rooms as $room)
                    <p class="text-green-main type-b7">
                        <a href="/rooms/{{ $room->slug() }}" class="hover:text-gold">
                            {{ $room->name(app()->getLocale()) }}
                        </a>

                    </p>
                @endforeach
            </div>

        @endforeach
        <div class="mt-8 flex justify-center">
            <x-arrow-link link-to="{{ $building['building_slug'] }}">{{ trans('navbar.see_rooms') }}</x-arrow-link>
        </div>
    </div>
@endforeach
