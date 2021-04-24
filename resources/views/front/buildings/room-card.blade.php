<div class="relative w-full my-12">
    <div class="w-3/4">
        <img src="{{ $room['images'][0]['small'] ?? '' }}"
             alt="" class="w-full h-full object-cover">
    </div>
    <div class="bg-cream-light shadow-lg w-1/3 h-64 absolute my-auto right-0 top-50 transform -translate-y-1/2 p-4">
        <p class="type-h2 text-green-main">{{ $room['name'] }}</p>
        <p class="type-b2 text-brown-dark">{{ $room['type'] }}</p>
        <p class="type-b1 text-green-main leading-tight mt-2">{{ $room['intro'] }}</p>
        <p class="type-b2 text-green-main leading-tight mt-2">{{ $room['starting_price'] }}</p>
    </div>
</div>
