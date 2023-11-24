@if ($paginator->hasPages())
<div class="h-12 flex gap-2 bg-white shadow-lg border p-2 rounded-lg text-xl">
    @if ($paginator->onFirstPage())
        <a href="#" class="flex items-center justify-center w-7" disabled>&laquo;</a>
    @else
        <a class="active-page bg-gray-200 rounded-full flex items-center justify-center w-7" href="{{$paginator->previousPageUrl() }}">&laquo;</a>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <a href="">{{$element}}</a>
        @endif
        @if (is_array($element))    
            @foreach ($element as $page => $url)
                @if ($page==$paginator->currentPage())
                    <a class="active-page bg-red-600 text-white flex items-center justify-center rounded-full w-7" href="#">{{$page}}</a>
                @else
                    <a href="{{$url}}" class="flex items-center justify-center w-7">{{$page}}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center justify-center w-7 bg-gray-200 rounded-full">&raquo;</a>
    @else
        <a href="#" class="flex items-center justify-center w-7">&raquo;</a>
    @endif
</div>
@endif