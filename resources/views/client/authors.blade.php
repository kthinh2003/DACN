@extends('client.layouts.index')

@section('title')
    <title>Danh Sách Tác Giả</title>
@endsection

@section('content')

<div class="wrap-content">
    <!-- Tiêu đề chính -->
    <div style="text-align: center; padding: 40px 0; border-bottom: 3px solid #5070C0; margin-bottom: 40px;">
        <h1 style="color: #5070C0; font-size: 32px; margin-bottom: 10px;">📚 Danh Sách Tác Giả 📚</h1>
        <p style="color: #666; font-size: 16px;">Khám phá những nhà thơ tài ba với những tác phẩm đắm say</p>
    </div>

    <!-- Form Tìm Kiếm -->
    <div style="margin-bottom: 40px;">
        <form method="GET" action="{{ route('authors') }}" style="display: flex; gap: 10px; max-width: 500px; margin: 0 auto;">
            <input type="text" name="search" placeholder="Tìm kiếm theo tên tác giả..." 
                   value="{{ request('search') }}" 
                   style="flex: 1; padding: 12px 15px; border: 2px solid #5070C0; border-radius: 8px; font-size: 14px;">
            <button type="submit" style="padding: 12px 30px; background: #5070C0; color: white; border: none; border-radius: 8px; cursor: pointer; font-weight: 600;">
                🔍 Tìm Kiếm
            </button>
        </form>
    </div>
    @if($authors->count() > 0)
    <div style="margin-bottom: 50px;">
        @foreach($authors as $author)
        <a href="{{ route('author.detail', $author->id) }}" style="text-decoration: none; display: block; margin-bottom: 40px;">
            <div class="author-section" style="color: white; padding: 60px 40px; border-radius: 15px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15); transition: all 0.3s;" 
                 data-gradient="{{ $author->gradient ?? 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' }}"
                 onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 32px rgba(0, 0, 0, 0.2)';" 
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 24px rgba(0, 0, 0, 0.15)';">
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 40px; align-items: center;">
                    <!-- Avatar -->
                    <div style="text-align: center;">
                        <div style="width: 200px; height: 200px; background: rgba(255, 255, 255, 0.3); border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; font-size: 80px; border: 5px solid white;">
                            👤
                        </div>
                    </div>
                    
                    <!-- Thông tin -->
                    <div>
                        <h2 style="font-size: 40px; margin: 0 0 10px 0; font-weight: 700;">{{ $author->name }}</h2>
                        <p style="font-size: 18px; opacity: 0.9; margin: 0 0 20px 0;">{{ $author->subtitle ?? 'Nhà thơ' }}</p>
                        <div style="display: flex; gap: 15px; margin-bottom: 25px; flex-wrap: wrap;">
                            @if($author->birth_year)
                            <span style="background: rgba(255, 255, 255, 0.3); color: white; padding: 8px 16px; border-radius: 25px; font-weight: 600;">📅 Sinh: {{ $author->birth_year }}</span>
                            @endif
                            @if($author->tag1)
                            <span style="background: rgba(255, 255, 255, 0.3); color: white; padding: 8px 16px; border-radius: 25px; font-weight: 600;">{{ $author->tag1 }}</span>
                            @endif
                            @if($author->tag2)
                            <span style="background: rgba(255, 255, 255, 0.3); color: white; padding: 8px 16px; border-radius: 25px; font-weight: 600;">{{ $author->tag2 }}</span>
                            @endif
                        </div>
                        <p style="font-size: 16px; line-height: 1.8; opacity: 0.95; margin: 0;">
                            {{ substr($author->bio ?? 'Nhà thơ tài năng', 0, 200) }}...
                        </p>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    @else
    <div style="text-align: center; padding: 60px 20px; background: #f8f9fa; border-radius: 10px;">
        @if(request('search'))
        <p style="color: #999; font-size: 16px;">🔍 Không tìm thấy tác giả nào với tên "<strong>{{ request('search') }}</strong>"</p>
        <p style="color: #999; font-size: 14px; margin-top: 10px;">
            <a href="{{ route('authors') }}" style="color: #5070C0; text-decoration: none;">← Xem tất cả tác giả</a>
        </p>
        @else
        <p style="color: #999; font-size: 16px;">📚 Chưa có tác giả nào. Vui lòng quay lại sau!</p>
        @endif
    </div>
    @endif

</div>

<style>
    [style*="cursor"]:hover {
        cursor: pointer;
    }
    .author-section {
        cursor: pointer;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.author-section').forEach(section => {
        const gradient = section.dataset.gradient || 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
        section.style.background = gradient;
    });
});
</script>

@endsection

