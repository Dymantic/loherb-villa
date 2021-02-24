<div class="bg-ivory py-2 px-6 shadow-md">
    <div class="max-w-full w-full flex justify-start md:justify-center overflow-x-auto">
        @foreach($options as $option)
            <a @if($jump) href="#{{ $option['url'] }}" data-jump-target="{{ $option['url'] }}" @else href="{{ $option['url'] }}" @endif
               class="whitespace-nowrap text-brown-dark hover:text-gold type-a1 uppercase mr-8 md:mr-12">{{ $option['option'] }}</a>
        @endforeach
    </div>

</div>
