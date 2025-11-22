@extends('client.layouts.index')
@section('title')
    <title> {{$pageName }}</title>
@endsection
@section('content')
    <div class="wrap-content">
        <div class="flex-news-internal row">
            <div class="news-internal-left col-lg-9">
                <div class="title-main">
                    <span>
                        {{ $newsDetail->name }}
                    </span>
                </div>
                <div class="content-main">
                    <div class="time-main">
                        <span class="mr-2"><i class="fa-regular fa-calendar-check"></i> {!! $newsDetail->created_at !!}</span>
                    </div>
                    <div class="content-main-text">
                        {!! $newsDetail->content !!}
                    </div>
                </div>
            </div>
            <div class="news-internal-right col-lg-3">
                <div class="other-news-internal">
                    <div class="other-news-internal-title text-center mb-4 pb-3" style="border-bottom: 2px solid #FFA500;">
                        <strong style="font-size: 18px; color: #FFA500;">Bài viết khác</strong>
                    </div>
                    <div class="other-news-list">
                        @foreach ($newsInternal as $v)
                            <div class="other-news-item mb-4 pb-3" style="border-bottom: 1px solid #eee;">
                                <a href="{{ route('news.detail', ['id' => $v->id]) }}" style="text-decoration: none; color: inherit;">
                                    <div class="other-news-item-img mb-2">
                                        <img src="{{ $v->photo_path }}" alt="{{ $v->name }}" class="w-100" style="height: 140px; object-fit: cover; border-radius: 4px;">
                                    </div>
                                    <div class="other-news-item-title">
                                        <strong style="font-size: 13px; line-height: 1.4;">{{ $v->name }}</strong>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
