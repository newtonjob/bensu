@if ($paginator->hasPages())
    <div class="col-lg-12">
        <div class="mbp_pagination mt30 text-center">
            <ul class="page_navigation">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" tabindex="-1" aria-disabled="true" aria-label="@lang('pagination.previous')"> 
                            <span class="fas fa-angle-left" aria-hidden="true"></span>
                        </a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" style="border: 1px solid #112137" href="{{ $paginator->previousPageUrl() }}" tabindex="-1" aria-disabled="true" rel="prev" aria-label="@lang('pagination.previous')">
                            <span class="fas fa-angle-left"></span>
                        </a>
                    </li>
                @endif    
                
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true">
                            <a class="page-link">{{ $element }}</a>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link">
                                        {{ $page }}<span class="sr-only">(current)</span>
                                    </a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" style="border: 1px solid #112137" href="{{ $paginator->nextPageUrl() }}" tabindex="-1" rel="next" aria-label="@lang('pagination.next')">
                            <span class="fas fa-angle-right"></span>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link" style="border: 1px solid #eaeaea" tabindex="-1" aria-disabled="true" aria-label="@lang('pagination.previous')"> 
                            <span class="fas fa-angle-right" aria-hidden="true"></span>
                        </a>
                    </li>
                @endif
            </ul>
            <p class="mt20 pagination_page_count text-center">
                {!! __('Showing') !!}
                <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                {!! __('to') !!}
                <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                {!! __('of') !!}
                <span class="fw-semibold">{{ $paginator->total() }}</span>
                {!! __('products') !!}
            </p>
        </div>
    </div>
@endif
