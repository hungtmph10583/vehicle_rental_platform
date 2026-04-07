@if ($paginator->hasPages())
<ul class="pagination justify-content-end">
    @if ($paginator->onFirstPage())
        <li title="Previous" class="page-item disabled">
            <a class="page-link" href="javascript:void(0);">« Đầu</a>
        </li>
    @else
        <li title="Previous" class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}">« Đầu</a>
        </li>
    @endif

    @foreach ($elements as $element)
            
        @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0);">{{ $page }}</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li class="page-item">
            <a title="Next" class="page-link" href="{{ $paginator->nextPageUrl() }}">Cuối »</a>
        </li>
    @else
        <li class="page-item disabled">
            <a title="Next" class="page-link" href="javascript:void(0);">Cuối »</a>
        </li>
    @endif
</ul>
@endif