@if ($paginator->hasPages())
    <nav class="woocommerce-pagination">
        <ul class="page-numbers">
            @if (!$paginator->onFirstPage())
                <li><a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}">←</a></li>
            @endif

            @foreach ($elements as $element)
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

            @if ($paginator->hasMorePages())

                <li><a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">→</a></li>

            @endif
        </ul>
    </nav>

@endif

