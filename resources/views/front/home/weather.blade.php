<div class="lg-section-space">
    @include('front.partials.heading-green', ['text' => trans('homepage.weather.heading')])
    <div class="max-w-3xl mx-auto flex mt-12">
        @foreach($weather['days'] as $day)
            <div class="flex-1 {{ $day['is_today'] ? 'text-black' : 'text-green-mid hidden md:block' }}">
                <p class="text-center relative"><span class="type-h0">{{ $day['temp'] }}</span><sup class="absolute top-4 right-2 font-serif text-lg">&deg;C</sup></p>
                <p class="text-center type-b7">{{ trans('weather.' . $day['condition']) }}</p>
                <p class="text-center type-h1">{{ $day['day_name_short'] }}</p>
            </div>
        @endforeach
    </div>
</div>
