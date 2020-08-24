<div class="flex justify-start md:justify-center my-6 overflow-x-auto px-4 h-12 items-center">
    @foreach($subcategories as $category)
        <div class="px-8 flex-shrink-0">
            <a class="{{ $isCurrent($category['slug']) ? 'underline' : 'no-underline' }} font-heading  text-green-main whitespace-no-wrap" href="{{ localUrl('journal/category/' . $category['slug']) }}">{{ $category['title'] }}</a>
        </div>
    @endforeach
</div>
