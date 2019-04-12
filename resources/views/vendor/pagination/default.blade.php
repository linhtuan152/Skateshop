@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true" class="prev page-number"><i class="fa fa-angle-double-left"></i></span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" class="prev page-number" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa fa-angle-double-left"></i></a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li aria-current="page"><span class="current page-number">{{ $page }}</span></li>
                    @else
                        <li><a class="page-number" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" class="next page-number" rel="next" aria-label="@lang('pagination.next')" ><i class="fa fa-angle-double-right"></i></a>
            </li>
        @else
            <li  aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true" class="next page-number"><i class="fa fa-angle-double-right"></i></span>
            </li>
        @endif
    </ul>
@endif
