<div class="max-w-md mx-auto p-4 mb-8 flex justify-between">
    @if($prev_page)
        <a href="{{ $prev_page }}" class="text-link text-green-main hover:text-hover-green whitespace-nowrap">
            <span class="arrow">&larr;</span>
            {{ trans('journal.index.previous-page') }}
        </a>
    @else
        <p class="text-link text-green-main opacity-50">
            <span class="arrow">&larr;</span>
            {{ trans('journal.index.previous-page') }}
        </p>
    @endif

    @if($next_page)
        <a href="{{ $next_page }}" class="text-link text-green-main hover:text-hover-green whitespace-nowrap">
            {{ trans('journal.index.next-page') }}
            <span class="arrow">→</span>
        </a>
    @else
        <p class="text-link text-green-main opacity-50">
            {{ trans('journal.index.next-page') }}
            <span class="arrow">→</span>
        </p>
    @endif
</div>
