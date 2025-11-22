@extends('client.layouts.index')

@section('title')
    <title>{{ $pageName }}</title>
@endsection

@section('content')
    <div class="wrap-content">
        <div class="author-detail-content">
            <div class="author-info-section mb-5">
                <div class="row">
                    <div class="col-md-4 text-center mb-4">
                        <div class="author-photo-wrapper">
                            <img src="{{ !empty($author->photo_path) ? $author->photo_path : asset('assets/noimage.jpg') }}" 
                                 alt="{{ $author->name }}" 
                                 class="author-photo img-fluid rounded"
                                 style="max-width: 300px; max-height: 400px; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h1 class="author-name mb-3">{{ $author->name }}</h1>
                        @if($author->age)
                            <div class="author-age mb-2">
                                <strong>Tuổi:</strong> {{ $author->age }}
                            </div>
                        @endif
                        @if($author->information)
                            <div class="author-information mt-4">
                                <h3>Thông tin về tác giả</h3>
                                <div class="author-description">
                                    {!! $author->information !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            @if($products->count() > 0)
                <div class="author-products-section">
                    <h2 class="mb-4">Sách của tác giả</h2>
                    <div class="grid-product-internal">
                        @foreach ($products as $product)
                            <div class="product-item" data-aos="fade-up" data-aos-duration="1000">
                                <div class="product" data-aos="zoom-in-up">
                                    <div class="box-product text-decoration-none">
                                        <div class="position-relative overflow-hidden">
                                            <a class="pic-product" href="{{ route('product.detail', ['id' => $product->id]) }}"
                                                title="Sản phẩm">
                                                <div class="pic-product-img scale-img hover_light">
                                                    <img class="w-100"
                                                        src="{{ $product->photo_path ? $product->photo_path : asset('assets/noimage.jpg') }}"
                                                        alt="{{ $product->name }}">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="info-product">
                                            <div class="name-product">
                                                <a class="text-split-2"
                                                    href="{{ route('product.detail', ['id' => $product->id]) }}"
                                                    title="{{ $product->name }}">{{ $product->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-12 mt-3 text-center">
                        {{ $products->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            @else
                <div class="alert alert-info">
                    <strong>Hiện chưa có sách của tác giả này!</strong>
                </div>
            @endif
        </div>
    </div>
@endsection

