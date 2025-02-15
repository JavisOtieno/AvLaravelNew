@if ($paginator->hasPages())
    <nav class="woocommerce-pagination" role="navigation">
        <ul class="page-numbers">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><span class="page-numbers disabled" aria-disabled="true">@lang('pagination.previous')</span></li>
            @else
                <li>
                    <a class="page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        @lang('pagination.previous')
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><span class="page-numbers dots">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span class="page-numbers current">{{ $page }}</span></li>
                        @else
                            <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li>
                <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next">
                    @lang('pagination.next')
                </a>
            </li>
            @else
            <li><span class="page-numbers disabled" aria-disabled="true">@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif
