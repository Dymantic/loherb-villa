<div class="max-w-sm mx-auto p-4 mb-8 flex flex-col md:flex-row justify-between">
    @if($prev_page)
        <a href="{{ $prev_page }}" class="text-link text-green-main hover:text-hover-green">
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
        <a href="{{ $next_page }}" class="text-link text-green-main hover:text-hover-green">
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