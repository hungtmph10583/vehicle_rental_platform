
    @foreach($categories as $item)
    <tr class="m-datatable__row" style="left: 0px;">
        <td data-field="Category" class="m-datatable__cell">
            <span style="width: 250px;">
                <span class="d-inline-block text-truncate" style="max-width: 200px;" class="text-bold">
                    <span class="text-capitalize m--font-boldest">{{ $item->name }}</span>
                </span>
            </span>
        </td>
        <td data-field="Thumbnail" class="m-datatable__cell">
            <span style="width: 150px;">
                @if(!empty($item->thumb_url))
                    <img src="{{ asset( $item->thumb_url ) }}" class="rounded m--marginless" style="width: 40px; height: auto; overflow: hidden; object-fit: cover;" alt="{{ $item->name }}" />
                @endif
            </span>
        </td>
        <td data-field="Status" class="m-datatable__cell">
            <span style="width: 110px;">
                <span class="m-badge m-badge--{{ $item->getStatus($item->status)['class'] }} m-badge--wide">{{ $item->getStatus($item->status)['name'] }}</span>
            </span>
        </td>
        <td data-field="Actions" class="m-datatable__cell text-right">
            <span style="overflow: visible; position: relative; width: 110px; float: right;">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                        <a class="dropdown-item" href="{{ route('backend.category.edit', [$item->id]) }}" title="Edit">Edit</a>
                        <a class="dropdown-item destroy_category" href="javascript:void(0);" data-url="{{ route('backend.category.destroy', [$item->id]) }}" title="Delete">Delete</a>
                    </div>
                </div>
            </span>
        </td>
    </tr>
    @endforeach
    @if($categories->isEmpty())
        <tr class="m-datatable__row" style="">
            <td class="m-datatable__cell"><span class="py-3 text-center">Không tìm thấy bản ghi nào.</span></td>
        </tr>
    @endif
