@extends('layouts.frontend.app')
@section('content')
<h1 class="title">Nhập Mã Để Tìm Sản Phẩm</h1>
    <form action="" class="search-form" id="search-form">
        <input type="text" name="search__input" id="search__input" class="search-form__input" placeholder="VD: md-6542" autofocus>
        <button class="search-form__button">Tìm kiếm</button>
    </form>
    <div class="container__top">
        <div class="container__top--total_result">
            <p>Hiển thị <span id="total_result">10/20</span></p>
        </div>
        <div class="container__top--orderBy">
            <select name="orderBy" id="orderBy">
                <option value="desc" data-sortby="updated_at">Sắp xếp theo</option>
                <option value="desc" data-sortby="updated_at" selected>Mới nhất</option>
                <option value="desc" data-sortby="total_clicks">Bán chạy</option>
                <option value="desc" data-sortby="price">Giá giảm dần</option>
                <option value="asc"  data-sortby="price">Giá tăng dần</option>
            </select>
        </div>
    </div>
    <div class="container--result_response_search" id="result_response_search">
        @foreach($products as $product)
        <div class="item">
            <div class="item_bg"></div>
            <a href="{{ $product->link_aff }}" class="item__link" target="_blank" data-url="http://127.0.0.1:8000/api/products/{{ $product->code }}/update-click">
                <img src="{{ asset( $product->thumb_url ) }}" alt="{{ $product->name }}" class="item__image" onerror="handleImageError(this)" loading="lazy">
                <p class="item__code">{{ $product->code }}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection