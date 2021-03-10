<div class="bg-ivory py-2 px-6 shadow-md relative">
    <div class="max-w-full w-full flex justify-start md:justify-center overflow-x-auto horizontal-scroll-menu">
        @foreach($options as $option)
            <a @if($jump) href="#{{ $option['url'] }}" data-jump-target="{{ $option['url'] }}" @else href="{{ $option['url'] }}" @endif
               class="whitespace-nowrap text-brown-dark hover:text-gold type-a1 uppercase mr-8 md:mr-12">{{ $option['option'] }}</a>
        @endforeach
    </div>
    <div class="md:hidden absolute top-0 bottom-0 right-0 w-10 bg-gradient-to-r from-transparent to-ivory flex items-center justify-end horizontal-scroll-arrow-indicator">
        <span class="type-h1 mr-1 text-brown-dark">&gt;</span>
    </div>
</div>
