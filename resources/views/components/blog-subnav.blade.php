<div class="flex justify-start md:justify-center my-12 overflow-x-auto px-4">
    @foreach($subcategories as $category)
        <div class="px-8 flex-shrink-0">
            <a class="font-heading no-underline text-green-main whitespace-no-wrap" href="{{ localUrl('journal/category/' . $category['slug']) }}">{{ $category['title'] }}</a>
        </div>
    @endforeach
</div>
