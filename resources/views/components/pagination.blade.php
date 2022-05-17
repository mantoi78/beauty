@if ($paginator->hasPages())
    <div class="col-lg-12 col-md-12 text-center">
        <div class="pagination-area">
            @if ($paginator->onFirstPage())
                <span class="page-numbers" aria-current="page">
                    <i class="flaticon-arrow-pointing-to-left"></i>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="prev page-numbers">
                    <i class="flaticon-arrow-pointing-to-left"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="page-numbers" aria-current="page">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="page-numbers current" aria-current="page">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="next page-numbers">
                    <i class="flaticon-arrow-pointing-to-right"></i>
                </a>
            @else
                <span class="page-numbers" aria-current="page">
                    <i class="flaticon-arrow-pointing-to-right"></i>
                </span>
            @endif
        </div>
    </div>
@endif
