@extends('client.layouts.index')

@section('title')
    <title>{{ $author['name'] }} - Chi Tiết Tác Giả</title>
@endsection

@section('content')

<div class="wrap-content">
    <!-- Tiêu đề và thông tin tác giả -->
    <div style="background: {{ $author['gradient'] }}; color: white; padding: 60px 40px; border-radius: 15px; margin-bottom: 50px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);">
        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 40px; align-items: center;">
            <!-- Avatar -->
            <div style="text-align: center;">
                <div style="width: 250px; height: 250px; background: rgba(255, 255, 255, 0.3); border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center; font-size: 100px; border: 5px solid white;">
                    👤
                </div>
            </div>
            
            <!-- Thông tin -->
            <div>
                <h1 style="font-size: 48px; margin: 0 0 10px 0; font-weight: 700;">{{ $author['name'] }}</h1>
                <p style="font-size: 20px; opacity: 0.9; margin: 0 0 20px 0;">{{ $author['subtitle'] }}</p>
                <div style="display: flex; gap: 15px; margin-bottom: 25px;">
                    <span style="background: rgba(255, 255, 255, 0.3); color: white; padding: 8px 16px; border-radius: 25px; font-weight: 600;">📅 Sinh: {{ $author['birth_year'] }}</span>
                    <span style="background: rgba(255, 255, 255, 0.3); color: white; padding: 8px 16px; border-radius: 25px; font-weight: 600;">{{ $author['tag1'] }}</span>
                    <span style="background: rgba(255, 255, 255, 0.3); color: white; padding: 8px 16px; border-radius: 25px; font-weight: 600;">{{ $author['tag2'] }}</span>
                </div>
                <p style="font-size: 16px; line-height: 1.8; opacity: 0.95; margin: 0;">
                    {{ $author['bio'] }}
                </p>
            </div>
        </div>
    </div>

    <!-- Các bài thơ -->
    <div style="margin-bottom: 50px;">
        <h2 style="text-align: center; color: #333; font-size: 32px; margin-bottom: 40px; padding-bottom: 20px; border-bottom: 3px solid {{ $author['color'] }};">
            📚 Tác Phẩm Nổi Bật 📚
        </h2>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
            @foreach($author['poems'] as $poem)
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1); border-left: 6px solid {{ $author['color'] }}; transition: all 0.3s;" 
                 onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 24px rgba(0, 0, 0, 0.15)';" 
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 16px rgba(0, 0, 0, 0.1)';">
                
                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 20px;">
                    <h3 style="color: {{ $author['color'] }}; font-size: 22px; font-weight: 700; margin: 0;">
                        {{ $poem['title'] }}
                    </h3>
                    <span style="background: {{ $author['color'] }}; color: white; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 600; white-space: nowrap;">
                        🕐 {{ $poem['year'] }}
                    </span>
                </div>

                <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 15px;">
                    <p style="color: #333; font-size: 15px; line-height: 2; margin: 0; white-space: pre-line; font-family: 'Georgia', serif;">
                        {{ $poem['content'] }}
                    </p>
                </div>

                <div style="display: flex; gap: 10px;">
                    <button style="flex: 1; padding: 10px 15px; background: {{ $author['color'] }}; color: white; border: none; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s;" 
                            onmouseover="this.style.opacity='0.9'; this.style.transform='scale(1.05)';" 
                            onmouseout="this.style.opacity='1'; this.style.transform='scale(1)';">
                        ❤️ Thích
                    </button>
                    <button style="flex: 1; padding: 10px 15px; background: transparent; color: {{ $author['color'] }}; border: 2px solid {{ $author['color'] }}; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s;" 
                            onmouseover="this.style.background='rgba(' + parseInt({{ $author['color'] }}.substr(1, 2), 16) + ',' + parseInt({{ $author['color'] }}.substr(3, 2), 16) + ',' + parseInt({{ $author['color'] }}.substr(5, 2), 16) + ', 0.1)'; this.style.transform='scale(1.05)';" 
                            onmouseout="this.style.background='transparent'; this.style.transform='scale(1)';">
                        📤 Chia sẻ
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Nút quay lại -->
    <div style="text-align: center; margin-bottom: 40px;">
        <a href="{{ route('authors') }}" style="display: inline-block; background: linear-gradient(90deg, #5070C0 0%, #6a8fd4 100%); color: white; padding: 15px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s; box-shadow: 0 4px 12px rgba(80, 112, 192, 0.3);" 
           onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 20px rgba(80, 112, 192, 0.4)';" 
           onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(80, 112, 192, 0.3)';">
            ← Quay Lại Danh Sách Tác Giả
        </a>
    </div>

</div>

@endsection
