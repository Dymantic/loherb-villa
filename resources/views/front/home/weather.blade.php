<div class="lg-section-space">
    @include('front.partials.heading-green', ['text' => trans('homepage.weather.heading')])
    <div class="max-w-3xl mx-auto flex mt-12">
        @foreach($weather['days'] as $day)
            <div class="flex-1 {{ $day['is_today'] ? 'text-black' : 'text-green-mid hidden md:block' }}">
                <div class="text-center">
                    <span class="type-h0">{{ $day['temp'] }}</span>
                    <sup class="font-serif text-lg">&deg;C</sup>
                </div>
                <p class="text-center type-b7">{{ trans('weather.' . $day['condition']) }}</p>
                <p class="text-center type-h1 mt-2">{{ $day['day_name_short'] }}</p>
            </div>
        @endforeach
    </div>
</div>
