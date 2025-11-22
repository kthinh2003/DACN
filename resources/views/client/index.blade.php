<?php
use App\Http\Controllers\Client\CHomeController;
?>

@extends('client.layouts.index')
@section('title')
    <title>{{ CHomeController::settings()->name }}</title>
@endsection
@section('content')

<div class="wrap-content">
    <!-- Tiêu đề chính -->
    <div style="text-align: center; padding: 40px 0; border-bottom: 3px solid #5070C0;">
        <h1 style="color: #5070C0; font-size: 32px; margin-bottom: 10px;">Thơ Văn Việt</h1>
        <p style="color: #666; font-size: 16px;">Khám phá những bài thơ hay và ý nghĩa</p>
    </div>

    <!-- Bài thơ nổi bật 1 -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin: 40px 0; align-items: center;">
        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px; border-radius: 10px; color: white; text-align: center;">
            <h2 style="font-size: 28px; margin-bottom: 20px;">Mùa Xuân</h2>
            <p style="font-size: 14px; line-height: 1.8;">
                Xuân đến với những cơn gió êm,<br>
                Hoa nở rực rỡ trên từng nhánh cây,<br>
                Chim hót líu lo giữa trời xanh,<br>
                Đất trời lại tươi tắn một lần.
            </p>
            <p style="font-size: 12px; margin-top: 15px; opacity: 0.9;">Tác giả: Tường An</p>
        </div>
        <div style="background: #f8f9fa; padding: 30px; border-radius: 10px; border-left: 5px solid #667eea;">
            <p style="color: #333; line-height: 2; font-size: 15px;">
                Tình yêu trở lại như mùa xuân,<br>
                Trong tim tôi nở những hy vọng mới,<br>
                Bước chân nhẹ trên con đường đời,<br>
                Khỏe mạnh mạnh như những nụ hoa.
            </p>
        </div>
    </div>

    <!-- Bài thơ nổi bật 2 -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin: 40px 0; align-items: center; direction: rtl;">
        <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); padding: 40px; border-radius: 10px; color: white; text-align: center;">
            <h2 style="font-size: 28px; margin-bottom: 20px; direction: ltr;">Nhớ Thương</h2>
            <p style="font-size: 14px; line-height: 1.8; direction: ltr;">
                Những kỷ niệm xơ xác theo năm tháng,<br>
                Lần lại như những trang sách cũ,<br>
                Nơi hình bóng em vẫn còn mờ,<br>
                Nơi yêu thương chưa bao giờ mất.
            </p>
            <p style="font-size: 12px; margin-top: 15px; opacity: 0.9; direction: ltr;">Tác giả: Tuấn Minh</p>
        </div>
        <div style="background: #f8f9fa; padding: 30px; border-radius: 10px; border-left: 5px solid #f5576c; direction: ltr;">
            <p style="color: #333; line-height: 2; font-size: 15px;">
                Gió cuốn những lời thì thầm,<br>
                Mưa gõ vào cửa sổ xưa,<br>
                Nhưng tim tôi vẫn cất giữ,<br>
                Tình thương dành riêng cho em.
            </p>
        </div>
    </div>

    <!-- Danh mục bài thơ -->
    <div style="background: #f0f2f5; padding: 40px; border-radius: 10px; margin: 40px 0;">
        <h2 style="color: #5070C0; font-size: 24px; margin-bottom: 30px; text-align: center;">Danh Mục Nội Bật</h2>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
            <div style="background: white; padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s;">
                <div style="background: #667eea; height: 80px; border-radius: 8px; margin-bottom: 15px;"></div>
                <h4 style="color: #333; margin-bottom: 8px;">Bài thơ 1</h4>
                <p style="color: #999; font-size: 13px;">Tình yêu và hy vọng</p>
            </div>
            <div style="background: white; padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s;">
                <div style="background: #f5576c; height: 80px; border-radius: 8px; margin-bottom: 15px;"></div>
                <h4 style="color: #333; margin-bottom: 8px;">Bài thơ 2</h4>
                <p style="color: #999; font-size: 13px;">Nhớ thương và ký ức</p>
            </div>
            <div style="background: white; padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s;">
                <div style="background: #764ba2; height: 80px; border-radius: 8px; margin-bottom: 15px;"></div>
                <h4 style="color: #333; margin-bottom: 8px;">Bài thơ 3</h4>
                <p style="color: #999; font-size: 13px;">Giấc mơ và niềm tin</p>
            </div>
            <div style="background: white; padding: 20px; border-radius: 8px; text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s;">
                <div style="background: #f093fb; height: 80px; border-radius: 8px; margin-bottom: 15px;"></div>
                <h4 style="color: #333; margin-bottom: 8px;">Bài thơ 4</h4>
                <p style="color: #999; font-size: 13px;">Cuộc sống và đường đời</p>
            </div>
        </div>
    </div>

    <!-- Bài thơ nổi bật -->
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px; border-radius: 10px; margin: 40px 0; color: white; text-align: center;">
        <h2 style="font-size: 28px; margin-bottom: 20px;">Giấc Mơ</h2>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 30px;">
            <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 8px;">
                <p style="line-height: 2; font-size: 15px;">
                    Trong giấc mơ, tôi bay cao,<br>
                    Vượt qua những đám mây trắng,<br>
                    Tìm kiếm một thế giới tươi đẹp,<br>
                    Nơi tất cả đều yên bình.
                </p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 8px;">
                <p style="line-height: 2; font-size: 15px;">
                    Nhưng khi thức dậy, tôi biết,<br>
                    Thực tế phũ phàng hơn nhiều,<br>
                    Những giấc mơ chỉ là ảo,<br>
                    Nhưng chúng giúp ta sống tiếp.
                </p>
            </div>
        </div>
        <p style="font-size: 12px; margin-top: 20px; opacity: 0.9;">Tác giả: Hương Lan</p>
    </div>
</div>

<style>
    [style*="cursor: pointer"]:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(80, 112, 192, 0.2) !important;
    }
</style>

@endsection
