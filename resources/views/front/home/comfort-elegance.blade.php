@component('front.components.info-section', ['title' => trans('homepage.comfort-elegance.heading')])
    <p class="my-8 body-text text-green-main">{{ trans('homepage.comfort-elegance.content') }}</p>
    <a class="text-link text-green-main hover:text-hover-green" href="{{ localUrl('/about') }}">Read More <span class="arrow">&rarr;</span></a>
@endcomponent