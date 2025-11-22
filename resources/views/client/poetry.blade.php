@extends('client.layouts.index')

@section('title')
    <title>Văn Thơ</title>
@endsection

@section('content')
<div class="wrap-content">
    <div class="title-main">
        <span>Thơ Văn</span>
    </div>
    
    <div class="content-main">
        <div class="poetry-container" style="max-width: 800px; margin: 0 auto; padding: 40px 20px;">
            
            <!-- Poem 1 -->
            <div class="poetry-item" style="margin-bottom: 60px; padding: 30px; background: #f8f9fa; border-left: 4px solid #5070C0; border-radius: 5px;">
                <h2 style="color: #5070C0; font-size: 24px; margin-bottom: 10px;">Mùa Xuân</h2>
                <p style="color: #999; font-size: 14px; margin-bottom: 20px;">Tác giả: Tường An</p>
                <div style="line-height: 2; color: #333; font-size: 16px;">
                    <p>Xuân đến với những cơn gió êm,</p>
                    <p>Hoa nở rực rỡ trên từng nhánh cây,</p>
                    <p>Chim hót líu lo giữa trời xanh,</p>
                    <p>Đất trời lại tươi tắn một lần.</p>
                    <br>
                    <p>Tình yêu trở lại như mùa xuân,</p>
                    <p>Trong tim tôi nở những hy vọng mới,</p>
                    <p>Bước chân nhẹ trên con đường đời,</p>
                    <p>Khỏe mạnh mạnh như những nụ hoa.</p>
                </div>
            </div>

            <!-- Poem 2 -->
            <div class="poetry-item" style="margin-bottom: 60px; padding: 30px; background: #f8f9fa; border-left: 4px solid #5070C0; border-radius: 5px;">
                <h2 style="color: #5070C0; font-size: 24px; margin-bottom: 10px;">Nhớ Thương</h2>
                <p style="color: #999; font-size: 14px; margin-bottom: 20px;">Tác giả: Tuấn Minh</p>
                <div style="line-height: 2; color: #333; font-size: 16px;">
                    <p>Những kỷ niệm xơ xác theo năm tháng,</p>
                    <p>Lần lại như những trang sách cũ,</p>
                    <p>Nơi hình bóng em vẫn còn mờ,</p>
                    <p>Nơi yêu thương chưa bao giờ mất.</p>
                    <br>
                    <p>Gió cuốn những lời thì thầm,</p>
                    <p>Mưa gõ vào cửa sổ xưa,</p>
                    <p>Nhưng tim tôi vẫn cất giữ,</p>
                    <p>Tình thương dành riêng cho em.</p>
                </div>
            </div>

            <!-- Poem 3 -->
            <div class="poetry-item" style="margin-bottom: 60px; padding: 30px; background: #f8f9fa; border-left: 4px solid #5070C0; border-radius: 5px;">
                <h2 style="color: #5070C0; font-size: 24px; margin-bottom: 10px;">Giấc Mơ</h2>
                <p style="color: #999; font-size: 14px; margin-bottom: 20px;">Tác giả: Hương Lan</p>
                <div style="line-height: 2; color: #333; font-size: 16px;">
                    <p>Trong giấc mơ, tôi bay cao,</p>
                    <p>Vượt qua những đám mây trắng,</p>
                    <p>Tìm kiếm một thế giới tươi đẹp,</p>
                    <p>Nơi tất cả đều yên bình.</p>
                    <br>
                    <p>Nhưng khi thức dậy, tôi biết,</p>
                    <p>Thực tế phũ phàng hơn nhiều,</p>
                    <p>Những giấc mơ chỉ là ảo,</p>
                    <p>Nhưng chúng giúp ta sống tiếp.</p>
                </div>
            </div>

            <!-- Poem 4 -->
            <div class="poetry-item" style="margin-bottom: 60px; padding: 30px; background: #f8f9fa; border-left: 4px solid #5070C0; border-radius: 5px;">
                <h2 style="color: #5070C0; font-size: 24px; margin-bottom: 10px;">Cuộc Sống</h2>
                <p style="color: #999; font-size: 14px; margin-bottom: 20px;">Tác giả: Thanh Tùng</p>
                <div style="line-height: 2; color: #333; font-size: 16px;">
                    <p>Cuộc sống như một hành trình dài,</p>
                    <p>Có lúc sáng tươi, có lúc tối tăm,</p>
                    <p>Nhưng mỗi bước chân đều quý giá,</p>
                    <p>Mỗi khó khăn là một bài học.</p>
                    <br>
                    <p>Hãy sống với trái tim yêu thương,</p>
                    <p>Đối với mọi người xung quanh,</p>
                    <p>Khi ta đi, ta sẽ để lại,</p>
                    <p>Những dấu chân tươi đẹp trên cát.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .poetry-container {
        animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .poetry-item:hover {
        box-shadow: 0 4px 12px rgba(80, 112, 192, 0.15);
        transition: all 0.3s ease;
    }
</style>
@endsection
