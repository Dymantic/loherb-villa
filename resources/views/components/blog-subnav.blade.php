<div class="">
{{--    <div class="flex flex-wrap justify-center md:justify-center items-center w-9/10 sm:w-full mx-auto">--}}
{{--        @foreach($subcategories as $category)--}}
{{--            <div class="px-4 md:px-8 flex-shrink-0 mt-3">--}}
{{--                <a class="{{ $isCurrent($category['slug']) ? 'underline' : 'no-underline' }} type-h1  text-brown-dark whitespace-no-wrap" href="{{ localUrl('journal/category/' . $category['slug']) }}">{{ $category['title'] }}</a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
    <x-horizontal-scroll-menu :jump="false" :options="$subcategories"></x-horizontal-scroll-menu>
</div>
