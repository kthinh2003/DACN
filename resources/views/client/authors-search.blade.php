@extends('client.layouts.index')

@section('title')
    <title>Kết Quả Tìm Kiếm Tác Giả</title>
@endsection

@section('content')

<div class="wrap-content">
    <!-- Tiêu đề -->
    <div style="text-align: center; padding: 40px 0; border-bottom: 3px solid #5070C0; margin-bottom: 40px;">
        <h1 style="color: #5070C0; font-size: 32px; margin-bottom: 10px;">📚 Kết Quả Tìm Kiếm 📚</h1>
        <p style="color: #666; font-size: 16px;">
            @if(count($results) > 0)
                Tìm thấy {{ count($results) }} tác giả phù hợp với "<strong>{{ $query }}</strong>"
            @else
                Không tìm thấy tác giả nào phù hợp với "<strong>{{ $query }}</strong>"
            @endif
        </p>
    </div>

    @if(count($results) > 0)
        <!-- Danh sách kết quả -->
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px; margin-bottom: 50px;">
            
            @foreach($results as $author)
            <div style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 4px 16px rgba(102, 126, 234, 0.2); border-top: 6px solid {{ $author['color'] }}; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 12px 32px rgba(102, 126, 234, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 16px rgba(102, 126, 234, 0.2)';">
                <div style="display: flex; gap: 20px; margin-bottom: 25px;">
                    <div style="background: {{ $author['gradient'] }}; width: 100px; height: 100px; border-radius: 50%; flex-shrink: 0;"></div>
                    <div>
                        <h2 style="color: {{ $author['color'] }}; font-size: 24px; font-weight: 700; margin-bottom: 5px;">{{ $author['name'] }}</h2>
                        <p style="color: #999; font-size: 14px; margin-bottom: 10px;">{{ $author['subtitle'] }}</p>
                        <div style="display: flex; gap: 15px;">
                            <span style="background: {{ $author['color'] }}; color: white; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;">{{ $author['tag1'] }}</span>
                            <span style="background: {{ $author['color'] }}; color: white; padding: 5px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;">{{ $author['tag2'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    @else
        <!-- Không tìm thấy -->
        <div style="text-align: center; padding: 60px 20px; background: #f8f9fa; border-radius: 15px; margin-bottom: 50px;">
            <div style="font-size: 60px; margin-bottom: 20px;">🔍</div>
            <h2 style="color: #333; font-size: 24px; margin-bottom: 10px;">Không tìm thấy tác giả</h2>
            <p style="color: #999; font-size: 16px; margin-bottom: 30px;">
                Xin lỗi, chúng tôi không tìm thấy tác giả nào phù hợp với "<strong>{{ $query }}</strong>". 
            </p>
            <p style="color: #999; font-size: 14px;">
                Vui lòng thử tìm kiếm với từ khóa khác hoặc <a href="{{ route('authors') }}" style="color: #5070C0; text-decoration: none; font-weight: 600;">xem danh sách tác giả đầy đủ</a>
            </p>
        </div>
    @endif

    <!-- Nút quay lại -->
    <div style="text-align: center; margin-bottom: 40px;">
        <a href="{{ route('authors') }}" style="display: inline-block; background: linear-gradient(90deg, #5070C0 0%, #6a8fd4 100%); color: white; padding: 15px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s; box-shadow: 0 4px 12px rgba(80, 112, 192, 0.3);" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 20px rgba(80, 112, 192, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(80, 112, 192, 0.3)';">
            ← Xem Tất Cả Tác Giả
        </a>
    </div>

</div>

@endsection
