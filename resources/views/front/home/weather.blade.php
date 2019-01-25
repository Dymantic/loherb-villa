<div class="lg-section-space">
    @include('front.partials.heading-green', ['text' => trans('homepage.weather.heading')])
    <div class="max-w-lg mx-auto flex mt-12">
        @foreach($weather['days'] as $day)
            <div class="flex-1 {{ $day['is_today'] ? 'text-black' : 'text-green-mid hidden md:block' }}">
                <p class="text-center"><span class="text-5xl">{{ $day['temp'] }}</span><sup class="align-text-top">&deg;C</sup></p>
                <p class="text-center reviews-text text-sm">{{ trans('weather.' . $day['condition']) }}</p>
                <p class="text-center mt-8 heading-text">{{ $day['day_name_short'] }}</p>
            </div>
        @endforeach
    </div>
</div>