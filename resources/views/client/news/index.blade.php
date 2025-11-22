@extends('client.layouts.index')

@section('title')
    <title>Tin tức & sự kiện</title>
@endsection

@section('content')
    <div class="wrap-content">
        <div class="title-main">
            <span>
                Tin tức & sự kiện
            </span>
        </div>
        <div class="content-main">
            @isset($newsInternal)
                @if (!$newsInternal->isEmpty())
                    <div class="grid-news-internal" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
                        @foreach ($newsInternal as $v)
                            <div class="news-box-in" data-aos="fade-up" data-aos-duration="1000">
                                <a href="{{ route('news.detail', ['id' => $v->id]) }}" style="text-decoration: none; color: inherit;">
                                    <div class="news-box-in-img scale-img hover_light">
                                        <img src="{{ $v->photo_path }}" alt="{{ $v->name }}" class="w-100" style="height: 250px; object-fit: cover;">
                                    </div>
                                    <div class="news-box-ex-info" style="padding: 15px;">
                                        <div class="news-box-ex-name" style="font-weight: bold; font-size: 14px; line-height: 1.4; margin-bottom: 10px;">{{ $v->name }}</div>
                                        <div class="news-box-ex-desc" style="font-size: 12px; color: #666; line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">{!! strip_tags($v->description) !!}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-12 mt-3 text-center">
                        {{ $newsInternal->links('pagination::bootstrap-5') }}
                    </div>
                @else
                    <div class="alert alert-warning w-100">
                        <strong>Đang cập nhật dữ liệu !!</strong>
                    </div>
                @endif
            @endisset
        </div>
    </div>
@endsection
