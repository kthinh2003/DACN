<?php
    use App\Http\Controllers\Client\CHomeController;
?>

<!-- Tiêu đề chính và bài thơ -->
<div class="wrap-poetry-home py50">
    <div class="wrap-content">
        <!-- Tiêu đề chính -->
        <div style="text-align: center; padding: 30px 0; border-bottom: 3px solid #5070C0; margin-bottom: 40px;">
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
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin: 40px 0; align-items: center;">
            <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); padding: 40px; border-radius: 10px; color: white; text-align: center;">
                <h2 style="font-size: 28px; margin-bottom: 20px;">Nhớ Thương</h2>
                <p style="font-size: 14px; line-height: 1.8;">
                    Những kỷ niệm xơ xác theo năm tháng,<br>
                    Lần lại như những trang sách cũ,<br>
                    Nơi hình bóng em vẫn còn mờ,<br>
                    Nơi yêu thương chưa bao giờ mất.
                </p>
                <p style="font-size: 12px; margin-top: 15px; opacity: 0.9;">Tác giả: Tuấn Minh</p>
            </div>
            <div style="background: #f8f9fa; padding: 30px; border-radius: 10px; border-left: 5px solid #f5576c;">
                <p style="color: #333; line-height: 2; font-size: 15px;">
                    Gió cuốn những lời thì thầm,<br>
                    Mưa gõ vào cửa sổ xưa,<br>
                    Nhưng tim tôi vẫn cất giữ,<br>
                    Tình thương dành riêng cho em.
                </p>
            </div>
        </div>

        <!-- Danh mục bài thơ -->
        <div style="background: linear-gradient(135deg, #f0f2f5 0%, #e8eef7 100%); padding: 50px 40px; border-radius: 15px; margin: 40px 0; box-shadow: 0 8px 24px rgba(80, 112, 192, 0.15);">
            <h2 style="color: #5070C0; font-size: 28px; margin-bottom: 30px; text-align: center; font-weight: 700;">✨ Danh Mục Nội Bật ✨</h2>
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px;">
                <div style="background: white; padding: 25px; border-radius: 12px; text-align: center; box-shadow: 0 4px 12px rgba(102, 126, 234, 0.15); cursor: pointer; transition: all 0.3s; border-top: 5px solid #667eea;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 28px rgba(102, 126, 234, 0.25)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(102, 126, 234, 0.15)';">
                    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 90px; border-radius: 10px; margin-bottom: 20px;"></div>
                    <h4 style="color: #333; margin-bottom: 10px; font-weight: 700; font-size: 16px;">Mùa Xuân</h4>
                    <p style="color: #5070C0; font-size: 13px; font-weight: 600;">✍️ Tường An</p>
                </div>
                <div style="background: white; padding: 25px; border-radius: 12px; text-align: center; box-shadow: 0 4px 12px rgba(245, 87, 108, 0.15); cursor: pointer; transition: all 0.3s; border-top: 5px solid #f5576c;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 28px rgba(245, 87, 108, 0.25)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(245, 87, 108, 0.15)';">
                    <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); height: 90px; border-radius: 10px; margin-bottom: 20px;"></div>
                    <h4 style="color: #333; margin-bottom: 10px; font-weight: 700; font-size: 16px;">Nhớ Thương</h4>
                    <p style="color: #f5576c; font-size: 13px; font-weight: 600;">✍️ Tuấn Minh</p>
                </div>
                <div style="background: white; padding: 25px; border-radius: 12px; text-align: center; box-shadow: 0 4px 12px rgba(118, 75, 162, 0.15); cursor: pointer; transition: all 0.3s; border-top: 5px solid #764ba2;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 28px rgba(118, 75, 162, 0.25)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(118, 75, 162, 0.15)';">
                    <div style="background: linear-gradient(135deg, #764ba2 0%, #667eea 100%); height: 90px; border-radius: 10px; margin-bottom: 20px;"></div>
                    <h4 style="color: #333; margin-bottom: 10px; font-weight: 700; font-size: 16px;">Giấc Mơ</h4>
                    <p style="color: #764ba2; font-size: 13px; font-weight: 600;">✍️ Hương Lan</p>
                </div>
                <div style="background: white; padding: 25px; border-radius: 12px; text-align: center; box-shadow: 0 4px 12px rgba(240, 147, 251, 0.15); cursor: pointer; transition: all 0.3s; border-top: 5px solid #f093fb;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 28px rgba(240, 147, 251, 0.25)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(240, 147, 251, 0.15)';">
                    <div style="background: linear-gradient(135deg, #f093fb 0%, #764ba2 100%); height: 90px; border-radius: 10px; margin-bottom: 20px;"></div>
                    <h4 style="color: #333; margin-bottom: 10px; font-weight: 700; font-size: 16px;">Cuộc Sống</h4>
                    <p style="color: #764ba2; font-size: 13px; font-weight: 600;">✍️ Thanh Tùng</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Danh sách tác giả -->
<div style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); padding: 50px 40px; border-radius: 15px; margin: 40px 0; box-shadow: 0 8px 24px rgba(80, 112, 192, 0.1);">
    <div class="wrap-content">
        <h2 style="color: #5070C0; font-size: 28px; margin-bottom: 10px; text-align: center; font-weight: 700;">📚 Danh Sách Tác Giả 📚</h2>
        <p style="color: #666; text-align: center; margin-bottom: 40px; font-size: 15px;">Những nhà thơ tài ba với những tác phẩm đắm say</p>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
            <!-- Tác giả 1 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(102, 126, 234, 0.15); border-left: 5px solid #667eea; transition: all 0.3s;" onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 8px 24px rgba(102, 126, 234, 0.25)';" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 4px 12px rgba(102, 126, 234, 0.15)';">
                <h3 style="color: #667eea; font-size: 20px; font-weight: 700; margin-bottom: 10px;">✍️ Tường An</h3>
                <p style="color: #999; font-size: 13px; margin-bottom: 15px;">Nhà thơ trẻ tài năng</p>
                <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
                    <p style="margin: 0; line-height: 1.8; font-size: 14px;">
                        <strong>"Mùa Xuân"</strong><br>
                        Xuân đến với những cơn gió êm,<br>
                        Hoa nở rực rỡ trên từng nhánh cây.
                    </p>
                </div>
                <p style="color: #666; font-size: 13px;">Tác giả Tường An chuyên viết những bài thơ về tình yêu thiên nhiên và hy vọng.</p>
            </div>

            <!-- Tác giả 2 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(245, 87, 108, 0.15); border-left: 5px solid #f5576c; transition: all 0.3s;" onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 8px 24px rgba(245, 87, 108, 0.25)';" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 4px 12px rgba(245, 87, 108, 0.15)';">
                <h3 style="color: #f5576c; font-size: 20px; font-weight: 700; margin-bottom: 10px;">✍️ Tuấn Minh</h3>
                <p style="color: #999; font-size: 13px; margin-bottom: 15px;">Nhà thơ của tình yêu và ký ức</p>
                <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
                    <p style="margin: 0; line-height: 1.8; font-size: 14px;">
                        <strong>"Nhớ Thương"</strong><br>
                        Những kỷ niệm xơ xác theo năm tháng,<br>
                        Nơi yêu thương chưa bao giờ mất.
                    </p>
                </div>
                <p style="color: #666; font-size: 13px;">Tuấn Minh nổi tiếng với những bài thơ sâu sắc về tình cảm và ký ức.</p>
            </div>

            <!-- Tác giả 3 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(118, 75, 162, 0.15); border-left: 5px solid #764ba2; transition: all 0.3s;" onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 8px 24px rgba(118, 75, 162, 0.25)';" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 4px 12px rgba(118, 75, 162, 0.15)';">
                <h3 style="color: #764ba2; font-size: 20px; font-weight: 700; margin-bottom: 10px;">✍️ Hương Lan</h3>
                <p style="color: #999; font-size: 13px; margin-bottom: 15px;">Nhà thơ của giấc mơ</p>
                <div style="background: linear-gradient(135deg, #764ba2 0%, #667eea 100%); color: white; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
                    <p style="margin: 0; line-height: 1.8; font-size: 14px;">
                        <strong>"Giấc Mơ"</strong><br>
                        Trong giấc mơ, tôi bay cao,<br>
                        Vượt qua những đám mây trắng.
                    </p>
                </div>
                <p style="color: #666; font-size: 13px;">Hương Lan sáng tác những bài thơ lãng mạn về giấc mơ và niềm tin.</p>
            </div>

            <!-- Tác giả 4 -->
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(240, 147, 251, 0.15); border-left: 5px solid #f093fb; transition: all 0.3s;" onmouseover="this.style.transform='translateX(8px)'; this.style.boxShadow='0 8px 24px rgba(240, 147, 251, 0.25)';" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 4px 12px rgba(240, 147, 251, 0.15)';">
                <h3 style="color: #764ba2; font-size: 20px; font-weight: 700; margin-bottom: 10px;">✍️ Thanh Tùng</h3>
                <p style="color: #999; font-size: 13px; margin-bottom: 15px;">Nhà thơ về cuộc sống</p>
                <div style="background: linear-gradient(135deg, #f093fb 0%, #764ba2 100%); color: white; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
                    <p style="margin: 0; line-height: 1.8; font-size: 14px;">
                        <strong>"Cuộc Sống"</strong><br>
                        Cuộc sống như một hành trình dài,<br>
                        Mỗi bước chân đều quý giá.
                    </p>
                </div>
                <p style="color: #666; font-size: 13px;">Thanh Tùng viết về những giá trị của cuộc sống và con đường con người.</p>
            </div>
        </div>
    </div>
</div>

{{-- Comment phần sản phẩm nổi bật
@isset($productFeatured)
    @if (!$productFeatured->isEmpty())
        <div class="wrap-product-outstanding py50">
            <div class="wrap-content">
                <div class="feature-product">
                    <div class="title-main title-left">
                        <span>Sản phẩm nổi bật</span>
                    </div>
                    <div class="slick-product-outstanding-cover">
                        <div class="slick-product-outstanding">
                            @foreach ($productFeatured as $v)
                                <div class="product-outstanding-item" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="product" data-aos="zoom-in-up">
                                        <div class="box-product text-decoration-none">
                                            <div class="position-relative overflow-hidden  ">
                                                <a class="pic-product "
                                                    href="{{ route('product.detail', ['id' => $v->id]) }}" title="Sản phẩm">
                                                    <div class="pic-product-img scale-img hover_light">
                                                        @if ($v->photo_path)
                                                            <img class="w-100" src="{{ $v->photo_path }}"
                                                                alt="{{ $v->name }}">
                                                        @else
                                                            <img class="w-100" src="{{ asset('assets/noimage.jpg') }}"
                                                                alt="{{ $v->name }}">
                                                        @endif
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="info-product">
                                                <div class="name-product"><a class="text-split-2"
                                                        href="{{ route('product.detail', ['id' => $v->id]) }}"
                                                        title="{{ $v->name }}">{{ $v->name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endisset
{{--
@isset($category_featured)
    @if (!$category_featured->isEmpty())
        @foreach ($category_featured as $v)
            <div class="wrap-product-list-cat product-from-ajax">
                <div class="wrap-content">
                    <div class="category-group d-flex justify-content-between flex-wrap relative">
                        <div class="title-main categoryfirst">
                            <div class="wrap-name">
                                <span>{{ $v->name }}</span>
                            </div>
                        </div>
                        <div class="flex-categorysecond">
                            @foreach ($v->children()->where('featured', 1)->where('status', 1)->whereNull('deleted_at')->get() as $category_second)
                                <div class="categorysecond" data-idf="{{ $v->id }}"
                                    data-ids="{{ $category_second->id }}"
                                    data-url="{{ route('get-category-data', ['categoryId' => $category_second->id]) }}">
                                  <div class="category-second-name">{{ $category_second->name }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="paging-product-category-style paging-product-category-{{ $v->id }}"
                        data-route="{{ route('add_index.cart', ['id'=> $v->id , 'quantity' => 1]) }}">
                    </div>

                </div>
            </div>
        @endforeach
    @endif
@endisset
@isset($publisher)
    @if (!$publisher->isEmpty())
        <div class="wrap-publisher">
            <div class="wrap-content">
                <div class="title-main title-left">
                    <span>
                        Thương hiệu sản phẩm
                    </span>
                </div>
                <div class="slick-publisher-ex">
                    @foreach ($publisher as $v)
                        <div class="publisher-box-ex">
                            <a href="{{ route('publisher.publisherproduct', ['id' => $v->id]) }}"
                                title="{{ $v->name }}">
                                <div class="publisher-ex-img">
                                    <img class="w-100" src="{{ $v->photo_path }}" alt="{{ $v->name }}">
                                </div>
                                <div class="publisher-ex-name text-split-2">
                                    {{ $v->name }}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endisset
{{--
@isset($news)
    @if (!$news->isEmpty())
        <div class="wrap-news-ex py50">
            <div class="wrap-content">
                <div class="title-main title-left">
                    <span>Tin tức & sự kiện</span>
                </div>
                <div class="slick-news-ex">
                    @foreach ($news as $v)
                        <div class="news-box-ex" data-aos="fade-up" data-aos-duration="1000">
                            <a href="{{ route('news.detail', ['id' => $v->id]) }}">
                                <div class="news-box-ex-img scale-img hover_light">
                                    <img src="{{ $v->photo_path }}" alt="{{ $v->name }}" class="w-100">
                                </div>
                                <div class="news-box-ex-info">
                                    <div class="news-box-ex-name text-split-2"> {{ $v->name }}</div>
                                    <div class="news-box-ex-desc text-split-3">{!! $v->description !!}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endisset
--}}
