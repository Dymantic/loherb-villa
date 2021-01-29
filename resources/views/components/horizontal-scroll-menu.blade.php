<div class="bg-cream-light py-2 px-6">
    <div class="max-w-full w-full flex justify-start md:justify-center overflow-x-auto">
        @foreach($options as $option)
            <a href="{{ $option['url'] }}"
               class="whitespace-nowrap text-brown-dark hover:text-gold type-a1 uppercase mr-6">{{ $option['option'] }}</a>
        @endforeach
    </div>

</div>
