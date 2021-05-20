@component('front.components.info-section', ['title' => trans('homepage.comfort-elegance.heading'), 'usherIn' => true])
    <p data-usher class="text-center my-8 body-text text-green-main">{{ trans('homepage.comfort-elegance.content') }}</p>
    <a class="text-link text-green-main hover:text-hover-green" href="{{ localUrl('/about') }}">{{ trans('homepage.comfort-elegance.read_more') }} <span class="arrow">&rarr;</span></a>
@endcomponent
