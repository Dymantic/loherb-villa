<div class="flex justify-center">
    @foreach(range(1,5) as $index)
        @if($rating - $index >= 0)
            @include('svgs.icons.star_full')
        @elseif($rating - $index < 0 && $rating - $index > -1)
            @include('svgs.icons.star_half')
        @else
            @include('svgs.icons.star_blank')
        @endif
    @endforeach
</div>