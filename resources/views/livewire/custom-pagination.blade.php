@if ($paginator->hasPages())
    <nav class="flex items-center justify-between">
        <div>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="px-2 py-1 rounded text-gray-500 cursor-not-allowed"
                      aria-disabled="true"
                      aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&laquo;</span>
                </span>
            @else
                <a href="#" class="px-2 py-1 rounded hover:bg-gray-100 focus:bg-gray-100"
                   wire:click.prevent="previousPage"
                   rel="prev"
                   aria-label="@lang('pagination.previous')">
                    <span>&laquo;</span>
                </a>
            @endif
        </div>

        <div class="flex-1 flex justify-center">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="px-2 py-1 rounded text-gray-500 cursor-not-allowed"
                          aria-disabled="true">
                        {{ $element }}
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-2 py-1 rounded bg-gray-200 text-gray-700 hover:bg-gray-300 focus:bg-gray-300"
                                  aria-current="page">
                                {{ $page }}
                            </span>
                        @else
                            <a href="#" class="px-2 py-1 rounded hover:bg-gray-100 focus:bg-gray-100"
                               wire:click.prevent="gotoPage({{ $page }})"
                               aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        <div>
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="#" class="px-2 py-1 rounded hover:bg-gray-100 focus:bg-gray-100"
                   wire:click.prevent="nextPage"
                   rel="next"
                   aria-label="@lang('pagination.next')">
                    <span>&raquo;</span>
                </a>
            @else
                <span class="px-2 py-1 rounded text-gray-500 cursor-not-allowed"
                      aria-disabled="true"
                      aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&raquo;</span>
                </span>
            @endif
        </div>
    </nav>
@endif
