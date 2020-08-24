<div class="flex flex-wrap justify-around md:justify-center pb-12 pt-6 px-4 items-center bg-cream-light">
    @foreach($subcategories as $category)
        <div class="px-8 flex-shrink-0 mt-6">
            <a class="{{ $isCurrent($category['slug']) ? 'underline' : 'no-underline' }} font-heading  text-green-main whitespace-no-wrap" href="{{ localUrl('journal/category/' . $category['slug']) }}">{{ $category['title'] }}</a>
        </div>
    @endforeach
</div>
