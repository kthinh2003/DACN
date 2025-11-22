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
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px; margin-bottom: 50px;">
        @foreach($authors as $author)
        <a href="{{ route('author.detail', $author->id) }}" style="text-decoration: none; display: block;">
        <div class="author-card" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 4px 16px rgba(102, 126, 234, 0.2); border-top: 6px solid; transition: all 0.3s; cursor: pointer;" 
             data-color="{{ $author->color ?? '#667eea' }}"
             data-gradient="{{ $author->gradient ?? 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' }}"
             onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 12px 32px rgba(102, 126, 234, 0.3)';" 
             onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 16px rgba(102, 126, 234, 0.2)';">
            <div style="display: flex; gap: 20px; margin-bottom: 25px;">
                <div class="author-avatar" style="width: 100px; height: 100px; border-radius: 50%; flex-shrink: 0;"></div>
                <div>
                    <h2 class="author-title" style="font-size: 24px; font-weight: 700; margin-bottom: 5px;">{{ $author->name }}</h2>
                    <p style="color: #999; font-size: 14px; margin-bottom: 10px;">{{ $author->subtitle ?? 'Nhà thơ' }}</p>
                    <div style="display: flex; gap: 15px;">
                        @if($author->tag1)
                        <span class="author-tag1" style="color: white; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;">{{ $author->tag1 }}</span>
                        @endif
                        @if($author->tag2)
                        <span class="author-tag2" style="color: white; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;">{{ $author->tag2 }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="author-bio" style="background: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 20px; border-left: 4px solid;">
                <p style="color: #333; font-size: 14px; line-height: 1.8; margin-bottom: 0;">{{ substr($author->bio ?? 'Nhà thơ tài năng', 0, 150) }}...</p>
            </div>
            @if($author->birth_year)
            <div style="border-top: 2px solid #e0e0e0; padding-top: 20px;">
                <p style="color: #999; font-size: 13px; margin: 0;">📅 Năm sinh: <strong>{{ $author->birth_year }}</strong></p>
            </div>
            @endif
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
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.author-card').forEach(card => {
        const color = card.dataset.color || '#667eea';
        const gradient = card.dataset.gradient || 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
        
        card.style.borderTopColor = color;
        
        const avatar = card.querySelector('.author-avatar');
        if (avatar) {
            avatar.style.background = gradient;
        }
        
        const title = card.querySelector('.author-title');
        if (title) {
            title.style.color = color;
        }
        
        const tag1 = card.querySelector('.author-tag1');
        if (tag1) {
            tag1.style.background = color;
        }
        
        const tag2 = card.querySelector('.author-tag2');
        if (tag2) {
            tag2.style.background = color;
        }
        
        const bio = card.querySelector('.author-bio');
        if (bio) {
            bio.style.borderLeftColor = color;
        }
    });
});
</script>

@endsection

