<div class="max-w-4xl my-12 md:flex mx-auto relative leading-zero room-preview {{ $left_side ? 'left' : '' }}">
    <picture class="w-full md:w-1/2 block">
        <source srcset="{{ $room_image_sm }}" media="(max-width: 576px)">
        <source srcset="{{ $room_image_lg }}" media="(min-width: 577px)">
        <img srcset="{{ $room_image_lg }}" alt="The {{ $room['name'] }} room">
    </picture>
    <div class="w-full md:w-1/2 bg-green-soft md:bg-opaque flex flex-col justify-between p-4 leading-normal">
        <div>
            <p class="type-h1 text-green-main mb-4">{{ $room['name'] }}</p>
            <p class="text-green-main">{{ $room['description'] }}</p>
            <p class="reviews-text text-green-main">{{ $room['starting_price'] }}</p>
        </div>
        <div class="mt-8 md:mt-0 flex justify-around md:justify-start">
            <a href="{{ $links_to }}" class="inline-button btn-green-ghost no-underline">{{ trans('rooms.index.buttons.show') }}</a>
            <a href="{{ localUrl('/book') }}" class="inline-button btn-green-ghost no-underline ml-8">{{ trans('rooms.index.buttons.book') }}</a>
        </div>
    </div>
</div>
