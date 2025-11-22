<?php
use App\Http\Controllers\Client\CHomeController;

?>
<div class="header">
    <div class="header-top">
        @if(isset($banner) && count($banner) > 0)
            <img src="{{$banner[0]->photo_path}}" alt="banner" width="100%">
        @else
            <div style="width: 100%; height: 0;"></div>
        @endif
    </div>
    <div class="header-bottom">
        <div class="wrap-content">
            <div class="flex-header-bottom">
                <div class="header-bottom-logo peShiner">
                    <a href="{{route('index')}}">
                        <div class="main-logo" style="margin-top: 10px">
                            <img src="{{ CHomeController::settings()->logo_path }}" alt="TP-Store" width="200px" height="200px">
                        </div>
                    </a>
                </div>
                <div class="header-bottom-searchbox ">
                    <div class="search-box">
                        <form class="d-flex" method="GET" id="search-form">
                            <div class="search-box-group d-flex">
                                <select id="search-type" style="padding: 10px; border-radius: 5px 0 0 5px; border: none; font-weight: 600; color: #333; background: white; cursor: pointer;">
                                    <option value="author">Tác Giả</option>
                                    <option value="product">Sản Phẩm</option>
                                </select>
                                <input type="text" id="search-input" class="form-control" placeholder="Tìm kiếm..." autocomplete="off" style="border-radius: 0;">
                                <button class="btn btn-primary" type="submit">
                                    <div class="search-icon">
                                        <i class="fa-regular fa-magnifying-glass"></i>
                                    </div>
                                </button>
                            </div>
                        </form>

                        <div id="search-result" class="search-result-list">
                            <div id="loading" class="search-loading loading-spinner">Đang tìm kiếm...</div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom-end">
                    <a class="header-bottom-item" href="{{route('user.info')}}">
                        <i class="fa-solid fa-user"></i>
                        <h6>Tài khoản</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Thanh menu nằm dưới search -->
    <div class="header-menu-bar" style="background: linear-gradient(90deg, #5070C0 0%, #6a8fd4 100%); padding: 0; margin-top: 0; box-shadow: 0 4px 12px rgba(80, 112, 192, 0.3);">
        <div class="wrap-content">
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: flex-start;">
                <li style="margin-right: 0;"><a href="{{ route('index') }}" style="display: block; padding: 15px 25px; color: white; text-decoration: none; transition: all 0.3s; border-bottom: 4px solid transparent; font-weight: 600; font-size: 15px;" onmouseover="this.style.background='rgba(255,255,255,0.15)'; this.style.borderBottom='4px solid white'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='transparent'; this.style.borderBottom='4px solid transparent'; this.style.transform='scale(1)';">Trang Chủ</a></li>
                <li style="margin-right: 0;"><a href="{{ route('authors') }}" style="display: block; padding: 15px 25px; color: white; text-decoration: none; transition: all 0.3s; border-bottom: 4px solid transparent; font-weight: 600; font-size: 15px;" onmouseover="this.style.background='rgba(255,255,255,0.15)'; this.style.borderBottom='4px solid white'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='transparent'; this.style.borderBottom='4px solid transparent'; this.style.transform='scale(1)';">Tác Giả</a></li>
                <li style="margin-right: 0;"><a href="{{ route('news') }}" style="display: block; padding: 15px 25px; color: white; text-decoration: none; transition: all 0.3s; border-bottom: 4px solid transparent; font-weight: 600; font-size: 15px;" onmouseover="this.style.background='rgba(255,255,255,0.15)'; this.style.borderBottom='4px solid white'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='transparent'; this.style.borderBottom='4px solid transparent'; this.style.transform='scale(1)';">Tin Tức & Sự Kiện</a></li>
                <li style="margin-right: 0;"><a href="{{ route('poetry') }}" style="display: block; padding: 15px 25px; color: white; text-decoration: none; transition: all 0.3s; border-bottom: 4px solid transparent; font-weight: 600; font-size: 15px;" onmouseover="this.style.background='rgba(255,255,255,0.15)'; this.style.borderBottom='4px solid white'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='transparent'; this.style.borderBottom='4px solid transparent'; this.style.transform='scale(1)';">Văn Thơ</a></li>
            </ul>
        </div>
    </div>

    <!-- Thanh menu Tác giả -->
    <div class="header-author-bar" style="background: linear-gradient(90deg, #f5f7fa 0%, #ffffff 100%); padding: 0; margin-top: 0; border-top: 2px solid #e0e0e0; border-bottom: 2px solid #e0e0e0;">
        <div class="wrap-content">
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: flex-start; flex-wrap: wrap;">
                <li style="margin-right: 0;"><a href="#" style="display: block; padding: 10px 20px; color: #5070C0; text-decoration: none; transition: all 0.3s; font-weight: 500; font-size: 13px; border-left: 3px solid transparent;" onmouseover="this.style.background='rgba(80, 112, 192, 0.05)'; this.style.borderLeft='3px solid #5070C0'; this.style.color='#f5576c';" onmouseout="this.style.background='transparent'; this.style.borderLeft='3px solid transparent'; this.style.color='#5070C0';">👤 Tường An</a></li>
                <li style="margin-right: 0;"><a href="#" style="display: block; padding: 10px 20px; color: #5070C0; text-decoration: none; transition: all 0.3s; font-weight: 500; font-size: 13px; border-left: 3px solid transparent;" onmouseover="this.style.background='rgba(80, 112, 192, 0.05)'; this.style.borderLeft='3px solid #5070C0'; this.style.color='#764ba2';" onmouseout="this.style.background='transparent'; this.style.borderLeft='3px solid transparent'; this.style.color='#5070C0';">👤 Tuấn Minh</a></li>
                <li style="margin-right: 0;"><a href="#" style="display: block; padding: 10px 20px; color: #5070C0; text-decoration: none; transition: all 0.3s; font-weight: 500; font-size: 13px; border-left: 3px solid transparent;" onmouseover="this.style.background='rgba(80, 112, 192, 0.05)'; this.style.borderLeft='3px solid #5070C0'; this.style.color='#667eea';" onmouseout="this.style.background='transparent'; this.style.borderLeft='3px solid transparent'; this.style.color='#5070C0';">👤 Hương Lan</a></li>
                <li style="margin-right: 0;"><a href="#" style="display: block; padding: 10px 20px; color: #5070C0; text-decoration: none; transition: all 0.3s; font-weight: 500; font-size: 13px; border-left: 3px solid transparent;" onmouseover="this.style.background='rgba(80, 112, 192, 0.05)'; this.style.borderLeft='3px solid #5070C0'; this.style.color='#f093fb';" onmouseout="this.style.background='transparent'; this.style.borderLeft='3px solid transparent'; this.style.color='#5070C0';">👤 Thanh Tùng</a></li>
            </ul>
        </div>
    </div>
</div>
