<div class="pb-6 md:pb-12 pt-3 md:pt-6 md:px-4 bg-green-softest">
    <div class="flex flex-wrap justify-center md:justify-center items-center w-9/10 sm:w-full mx-auto">
        @foreach($subcategories as $category)
            <div class="px-4 md:px-8 flex-shrink-0 mt-3">
                <a class="{{ $isCurrent($category['slug']) ? 'underline' : 'no-underline' }} type-h1  text-brown-dark whitespace-no-wrap" href="{{ localUrl('journal/category/' . $category['slug']) }}">{{ $category['title'] }}</a>
            </div>
        @endforeach
    </div>
</div>
