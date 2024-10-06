@extends('layouts.index')

@section('title', 'Batdongsan')

@section('content')

<!-- start chi tiết tin -->
<div class="container dangtin">
    <!-- Swiper -->

    <div class="row">
        <div class="col-lg-9 fix">
            <div class="slide" data-zoom="1">
                <div class="controls">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-out" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                        <path fill-rule="evenodd" d="M3 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                        <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle close-btn" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>

                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" data-zoom="1" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach ($images as $item)
                        <div class="swiper-slide">
                            <img
                                alt="{{ $realState->title }}"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="{{ $item->image_url }}"
                            />
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($images as $item)
                        <div class="swiper-slide">
                            <img
                                alt="{{ $realState->title }}"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="{{ $item->image_url }}"
                            />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="slide-description col-md-12">
                    <div class="title mb-3 re__breadcrumb">
                        <a style="color: #999;" class="re__link-se" href="/">Trang chủ</a> /



                        <a style="color: #999;" class="re__link-se" href="/category?city={{ $realState->city }}">{{ $realState->province->name }}</a> /

                        <a style="color: #999;" class="re__link-se" href="/ban-biet-thu-binh-chanh-ho-chi-minh">{{ $realState->huyen->name }}</a>
                    </div>
                    <div class="content">
                        <h1 style="font-size: 24px; line-height: 34px; font-weight: 600;">{{ $realState->title }}</h1>
                    </div>

                    <div class="footer">
                        {{ $realState->detailAddress }}

                        <div class="box mt-3 pta">
                            <div class="box-text">
                                <div>
                                    <div class="label">Mức giá</div>
                                    <div class="value">
                                        {{ $realState->price }}
                                    </div>
                                </div>
                                <div>
                                    <div class="label">Diện tích</div>
                                    <div class="value">{{ $realState->area }} m²</div>
                                </div>

                                <div>
                                    <div class="label">Phòng ngủ</div>
                                    <div class="value">{{ $realState->num_of_bedrooms }} Phòng ngủ</div>
                                </div>



                            </div>
                            <div class="box-icon d-none d-sm-flex">
                                <div>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonpt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/assets/icon/ant-design_share-alt-outlined.svg" />
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonpt">
                                            <a
                                                class="dropdown-item"
                                                target="_blank"
                                                href="https://www.facebook.com/sharer?u=/ban-biet-thu-2672m2-trinh-quang-nghi-4-tang-phong-phu-binh-chanh-gia-chi-305-ty-r117359/&amp;t=PHẠM VĂN CHÍ;"
                                            >
                                                <img src="/images/icon-fb.svg" alt="" />
                                                Facebook
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="/images/icon-zalo.svg" alt="" />
                                                Zalo
                                            </a>
                                            <span class="dropdown-item" class="copy-to-clipboard">Sao chép liên kết</span>
                                        </div>
                                    </div>
                                </div>

                                <div><img src="/assets/icon/heart.svg" /></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="font-weight-bold">Thông tin mô tả</div>
                    </div>
                </div>
                <div class="col-md-12 text mt-3">
                    @if (Str::length($realState->description) > 100)
                    <div id="more">
                        {!! Str::limit($realState->description, 100) !!}
                        <span id="dots">...</span>
                    </div>
                    <div id="more1" style="display: none;">
                        {!! $realState->description !!}
                    </div>
                    @else
                        <div id="more">
                            {!! $realState->description !!}
                        </div>
                    @endif

                </div>
                @if (Str::length($realState->description) > 100)
                <div class="btn-see-more col-md-12">
                    <p id="myBtn" onclick="myFunction()">Xem Thêm</p>
                </div>
                @endif

            </div>
            <div class="box-characteristics row">
                <div class="col-md-12 title">Đặc điểm bất động sản</div>
                <div class="col-md-12 label">
                    Loại tin đăng:
                </div>
                <div class="col-md-12 content">
                    <div class="">
                        <div class="row rows-col-1 row-cols-sm-2">
                            <div class="col">
                                <div class="line">
                                    <div class="line-label"><img src="/images/icon-dien-tich.svg" /> Diện tích</div>
                                    <div class="line-text">{{ $realState->area }} m²</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="line">
                                    <div class="line-label"><img src="/assets/icon/tabler_sofa.svg" />Số phòng ngủ</div>
                                    <div class="line-text">{{ $realState->num_of_bedrooms }} phòng</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="line">
                                    <div class="line-label"><img src="/assets/icon/document-text.svg" /> Pháp lý</div>
                                    @php
                                        $legal = $realState->legal_documents;
                                        if ($realState->legal_documents == 'none') $legal = 'Không';
                                        else if ($realState->legal_documents == 'red_book') $legal = 'Sổ đỏ/ Sổ hồng';
                                        else if ($realState->legal_documents == 'sale_contract') $legal = 'Hợp đồng mua bán';
                                        else if ($realState->legal_documents == 'pending') $legal = 'Đang chờ sổ';
                                    @endphp
                                    <div class="line-text">{{ $legal }}</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="line">
                                    <div class="line-label"><img src="/assets/icon/moneys.svg" />Mức giá</div>
                                    <div class="line-text">
                                        {{ $realState->price }}
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="line">
                                    <div class="line-label"><img src="/assets/icon/uil_bath.svg" />Số toilet, phòng tắm</div>
                                    <div class="line-text">{{ $realState->num_of_bathrooms }} phòng</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mat-42">
                <div class="box col-md-12">
                    <div class="box-text row row-cols-2 row-cols-md-4 gap-0 flex-grow-1">
                        <div class="col">
                            <div class="label">Ngày đăng</div>
                            <div class="value">{{ $realState->start_date }}</div>
                        </div>
                        <div class="col"></div>
                        <div class="col">
                            <div class="label">Loại tin</div>

                            <div class="value">Tin Thường</div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="row mt-5">
                <div id="batdongsannoibat" class="container">
                    <div>
                        <div class="swiper batdongsannoibat2-swiper">
                            <div class="swiper-controls">
                                <h3 class="title mb-0 mr-auto align-self-end">
                                    Bất động sản dành cho bạn
                                </h3>
                                <button class="batdongsannoibat2-swiper-prev prev">
                                    <img src="/assets/icon/arrow-left.svg" alt="" />
                                </button>
                                <button class="batdongsannoibat2-swiper-next next">
                                    <img src="/assets/icon/arrow-right.svg" alt="" />
                                </button>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/con-duy-nhat-1-lo-dat-dep-45x12-full-tho-tai-hxh-8m-nguyen-anh-thu-quan-12-r117352" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117352_66c9e4965d7dc.jpg"
                                                    alt="Còn duy nhất 1 lô đất đẹp (4.5x12), full thổ. tại HXH 8m Nguyễn Ảnh Thủ, Quận 12"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">3</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    Còn duy nhất 1 lô đất đẹp (4.5x12), full thổ....
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            3 tỷ 490 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            54 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Quận 12, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/nha-ban-hem-ba-huyen-thanh-quan-30-m2-3-tang-gia-5-ty-2-r117351" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117351_66c9dfa4c3271.jpg"
                                                    alt="Nhà Bán Hẻm Bà Huyện Thanh Quan  - 30 m2 - 3 Tầng - ) Giá 5 tỷ 2"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">5</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    Nhà Bán Hẻm Bà Huyện Thanh Quan - 30 m2 - 3...
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            5 tỷ 200 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            30 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Quận 3, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/ban-can-2pn-west-gate-binh-chanh-2ty650-r117350" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117350_66c9cc57b3945.jpg"
                                                    alt="Bán căn 2PN + West Gate Bình Chánh 2ty650"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">5</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    Bán căn 2PN + West Gate Bình Chánh 2ty650
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            2 tỷ 650 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            69 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Bình Chánh, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/chu-gap-ban-giam-luon-2-ty-biet-thu-mini-khu-ten-lua-btan-96m2-4-tang-108-ty-r117342" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117342_66c9a3282af0b.jpg"
                                                    alt="💥Chủ gấp bán giảm luôn 2 tỷ -
BIỆT THỰ MINI KHU TÊN LỬA - B.TÂN - 96M2 - 4 TẦNG - 10,8 TỶ"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">5</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    💥Chủ gấp bán giảm luôn 2 tỷ - BIỆT THỰ MINI...
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            10 tỷ 800 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            96 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Bình Tân, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/ban-nha-nguyen-thai-binh-tien-ich-xung-quanh-thiet-ke-hien-dai-gai-chi-113-toi-r117341" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117341_66c9a2844f175.jpg"
                                                    alt="BÁN NHÀ NGUYỄN THÁI BÌNH-TIỆN ÍCH XUNG QUANH-THIẾT KẾ HIỆN ĐẠI-GÁI CHỈ-11.3  tỏi"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">5</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    BÁN NHÀ NGUYỄN THÁI BÌNH-TIỆN ÍCH XUNG QUANH-...
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            11 tỷ 300 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            51 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Tân Bình, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/ban-dat-mat-tien-kinh-doanh-quan-2-100m2-dong-duc-r117339" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117339_66c99ddda6fea.jpg"
                                                    alt="Bán đất mặt tiền kinh doanh quận 2, 100m2 đông đúc"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">3</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    Bán đất mặt tiền kinh doanh quận 2, 100m2 đôn...
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            10 tỷ 500 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            1000 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Quận 2, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/ngo-gia-tu-phuong-9-quan-10-gia-52-ty-tl-r117337" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117337_66c996f9371ab.jpg"
                                                    alt="Ngô Gia Tự Phường 9 Quận 10


- Giá 5.2 tỷ TL"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">5</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    Ngô Gia Tự Phường 9 Quận 10 - Giá 5.2 tỷ T...
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            5 tỷ 200 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            38 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Quận 10, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/ong-anh-gui-ban-lo-dat-160m2-gia-1-ty-650tr-ngay-thi-tran-hoc-mon-goi-xem-dat-r117336" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117336_66c992a2cc553.jpg"
                                                    alt="ÔNG ANH GỬI BÁN LÔ ĐẤT 160M2 GIÁ 1 TỶ 650TR NGAY THỊ TRẤN HOC MÔN GỌI XEM ĐẤT"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">3</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    ÔNG ANH GỬI BÁN LÔ ĐẤT 160M2 GIÁ 1 TỶ 650TR N...
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            1 tỷ 650 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            160 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Hóc Môn, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/nha-1do-nhuan-ngay-son-ky-sat-mat-tien-3-tang-3pn-27m2-gia-35-ty-r117332" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117332_66c98a94a7607.jpg"
                                                    alt="NHÀ 1/ĐỖ NHUẬN - NGAY SƠN KỲ - SÁT MẶT TIỀN - 3 TẦNG 3PN - 27M2 - GIÁ 3.5 TỶ"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">4</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    NHÀ 1/ĐỖ NHUẬN - NGAY SƠN KỲ - SÁT MẶT TIỀN -...
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            3 tỷ 500 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            27 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Tân Phú, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/tan-binh-nha-dep-23m2-2-tang-hem-bagac-cach-1-can-ra-hxt-nhinh-3ty-r117327" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117327_66c983f2696e7.jpg"
                                                    alt="TÂN BINH - NHÀ ĐẸP - 23M2 - 2 TẦNG - HẺM BAGAC - CÁCH 1 CĂN RA HXT - NHỈNH 3TY"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">5</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    TÂN BINH - NHÀ ĐẸP - 23M2 - 2 TẦNG - HẺM BAGA...
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            3 tỷ 400 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            23 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Tân Bình, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/biet-thu-da-lat-pho-giua-long-go-vap-8-x15m-vuong-vuc-hem-xe-tai-thong-nhinh-13ty-r117323" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117323_66c97337af18a.jpg"
                                                    alt='BIỆT THỰ" ĐÀ LẠT PHỐ" GIỮA LÒNG GÒ VẤP _ 8 X15M VUÔNG VỨC_ HẺM XE TẢI THÔNG_ NHỈNH 13TY'
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">5</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    BIỆT THỰ&quot; ĐÀ LẠT PHỐ&quot; GIỮA LÒNG GÒ VẤP _ 8 X1...
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            13 tỷ 200 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            120 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Gò Vấp, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                                        <a href="/ban-toa-nha-goc-2mt-hai-ba-trung-quan-1-noi-dai-ham-7-tang-r117321" class="main-item noi-bat">
                                            <div class="image-item h-150">
                                                <img
                                                    class="news_image img-thumbnail-home"
                                                    lazy-src="https://media.batdongsan.vn/crop/250x150/posts/117321_66c96c567aef0.jpg"
                                                    alt="Bán tòa nhà góc 2MT Hai Bà Trưng Quận 1 nối dài Hầm 7 tầng"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                />
                                                <div class="list-img">
                                                    <img src="/assets/img/camera.png" alt="" />
                                                    <span class="qty">3</span>
                                                </div>
                                            </div>

                                            <div class="info">
                                                <h3 class="title">
                                                    Bán tòa nhà góc 2MT Hai Bà Trưng Quận 1 nối d...
                                                </h3>
                                                <div class="price-area">
                                                    <span class="price">
                                                        <img src="/assets/img/price.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            62 tỷ 500 triệu
                                                        </span>
                                                    </span>

                                                    <span class="area">
                                                        <img src="/assets/img/area.png" alt="" />
                                                        <span style="margin-left: 5px;">
                                                            127 m2
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="address">
                                                    Phú Nhuận, Hồ Chí Minh
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row text footer-text mb-4">
                <p>
                    Quý vị đang xem nội dung tin rao "<strong style="font-weight: bold !important;">{{ $realState->title }}</strong>" -
                    Mọi thông tin, nội dung liên quan tới tin rao này là do người đăng tin đăng tải và chịu trách nhiệm. Batdongsan.vn luôn cố gắng để các thông tin được
                    hữu ích nhất cho quý vị tuy nhiên Batdongsan.vn không đảm bảo và không chịu trách nhiệm về bất kỳ thông tin, nội dung nào liên quan tới tin rao này. Trường hợp phát hiện nội dung tin đăng không chính xác, Quý vị hãy
                    thông báo và cung cấp thông tin cho Ban quản trị Batdongsan.vn theo <span style="font-weight: bold;">Hotline ..... </span>
                    để được hỗ trợ nhanh và kịp thời nhất.
                </p>
            </div>
        </div>

        <div class="col-md-3 left-element d-lg-block d-none" style="min-width: 330px; flex: 0 0 330px;">
            <div class="profile-element">
                <div class="profile-avatar">
                    <span class="re__contact-avatar">P</span>
                    <span class="upload-by">Được đăng bởi</span>
                    <span class="name">{{ $realState->name }}</span>
                </div>
                <div class="detail-container">
                    <div
                        class="btn"
                        data-show="{{ $realState->phone }} - Ẩn số"
                        data-hide="{{ Str::limit($realState->phone, 7) }}*** - Hiện số"
                        data-isShow="true"
                        style="background: #c8f1df; border-radius: 8px; font-weight: 600; font-size: 14px; line-height: 22px;"
                        onclick="showHide.call(this)"
                    >
                        {{ Str::limit($realState->phone, 7) }}***- Hiện số
                    </div>
                    <a class="btn" href="">
                        Gửi email
                    </a>
                    <button class="btn" data-toggle="modal" data-target="#contactModal">Yêu cầu liên hệ lại</button>
                </div>

                <!-- Modal -->
            </div>

            {{-- <div class="list-bds">
                <div class="title">
                    Dự án nổi bật
                </div>
                <div class="link-bds">
                    <div>
                        <div id="listResults">
                            <div class="col-xs-12">
                                <div class="col-xs-2 text-left">
                                    <ul class="re__sidebar-box re__price-box">
                                        <li class="re__sidebar-box-item">
                                            <a href="/du-an-khu-dan-cu-hong-long" title="Khu dân cư Hồng Long">Khu dân cư Hồng Long </a>
                                        </li>
                                        <li class="re__sidebar-box-item">
                                            <a href="/du-an-khu-dan-cu-an-dien-phat" title="Khu dân cư An Điền Phát">Khu dân cư An Điền Phát </a>
                                        </li>
                                        <li class="re__sidebar-box-item">
                                            <a href="/du-an-best-western-premier-sapphire-ha-long" title="Best Western Premier Sapphire Hạ Long">Best Western Premier Sapphire Hạ Long </a>
                                        </li>
                                        <li class="re__sidebar-box-item">
                                            <a href="/du-an-khu-dan-cu-duc-linh-11" title="Khu dân cư Đức Linh 11">Khu dân cư Đức Linh 11 </a>
                                        </li>
                                        <li class="re__sidebar-box-item">
                                            <a href="/du-an-khang-an-residence" title="Khang An Residence">Khang An Residence </a>
                                        </li>
                                        <li class="re__sidebar-box-item">
                                            <a href="/du-an-nha-pho-one-palace-2" title="Nhà phố One Palace 2">Nhà phố One Palace 2 </a>
                                        </li>
                                        <li class="re__sidebar-box-item">
                                            <a href="/du-an-marina-diamond-town" title="Marina Diamond Town">Marina Diamond Town </a>
                                        </li>
                                        <li class="re__sidebar-box-item">
                                            <a href="/du-an-epic-town-dien-thang" title="Epic Town Điện Thắng">Epic Town Điện Thắng </a>
                                        </li>
                                        <li class="re__sidebar-box-item">
                                            <a href="/du-an-sunshine-crystal-river" title="Sunshine Crystal River">Sunshine Crystal River </a>
                                        </li>
                                        <li class="re__sidebar-box-item">
                                            <a href="/du-an-duc-linh-center" title="Đức Linh Center">Đức Linh Center </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yêu cầu liên hệ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/request-contact" method="post" data-sitekey="6LeDHhYqAAAAADnhqvjYEccw4teIrS7cNXkwqu3I">
                    <input type="hidden" name="_token" value="0mTnDMqOd3qiYpZnVndGJ01fPgjgapaJAEwN7ATF" /> <input type="hidden" name="post_id" value="117359" />
                    <div class="modal-body" style="padding-bottom: 0px;">
                        <div class="form-group">
                            <input value="" type="text" name="name" placeholder="Họ và tên" class="form-control" style="width: 100%; border-radius: 8px;" />
                        </div>
                        <div class="form-group">
                            <input value="" type="text" name="phone" placeholder="Số điện thoại *" class="form-control" style="width: 100%; border-radius: 8px;" />
                        </div>
                        <div class="form-group">
                            <label style="font-size: 14px; color: #2c2c2c;">Lời nhắn </label>
                            <textarea type="text" rows="3" name="message" class="form-control" style="width: 100%; border-radius: 8px;">Tôi quan tâm đến bất động sản này.</textarea>
                        </div>
                        <input type="hidden" name="g-recaptcha-response" id="recaptcha-token" />
                    </div>
                    <div class="modal-footer" style="border: none;">
                        <button type="submit" class="btn btn-danger">Gửi yêu cầu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end dangtin -->
<nav id="nav-footer-mobile" class="navbar navbar-expand-lg navbar-light bg-light d-flex d-sm-none">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
        </svg>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <div class="header">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" onclick="mobileBackToMain.call(this)">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                <span>Chức năng khác</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.closest('.navbar-collapse').previousElementSibling.previousElementSibling.click()">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
            <div class="body">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" href="#contactModal"> Yêu cầu người đăng liên hệ lại</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cdn-cgi/l/email-protection#eeded6d7d7d6d7dcdfdcdfae89838f8782c08d8183">Gửi email đến người đăng tin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Lưu tin đăng</a>
                </li>
                <li class="nav-item" onclick="showShareMenu.call(this)">
                    <a class="nav-link">Chia sẻ</a>
                </li>
            </div>
            <div class="share-body d-none">
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://www.facebook.com/sharer?u=/ban-biet-thu-2672m2-trinh-quang-nghi-4-tang-phong-phu-binh-chanh-gia-chi-305-ty-r117359/&amp;t=PHẠM VĂN CHÍ;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#007aff" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                            />
                        </svg>
                        Facebook
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link copy-to-clipboard" href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg>
                        Sao chép liên kết
                    </a>
                </li>
            </div>
        </ul>
    </div>
    <div class="nav-overlay" onclick="this.previousElementSibling.previousElementSibling.previousElementSibling.click()"></div>
    <div class="btn" data-show="0706306647 - Ẩn số" data-hide="0706306*** - Hiện số" data-isShow="true" style="background: #c8f1df; border-radius: 8px; font-weight: 600; font-size: 14px; line-height: 22px;" onclick="showHide.call(this)">
        0706306*** Hiện số
    </div>
</nav>

<script>
    function mobileBackToMain() {
        const parent = this.closest(".navbar-collapse");
        parent.style.height = "260px";
        parent.querySelector(".body").classList.remove("d-none");
        parent.querySelector(".share-body").classList.add("d-none");
        this.classList.add("d-none");
    }

    function showShareMenu() {
        const parent = this.parentNode;
        parent.classList.add("d-none");
        parent.nextElementSibling.classList.remove("d-none");
        parent.previousElementSibling.children[0].classList.remove("d-none");
        this.closest(".navbar-collapse").style.height = "180px";
    }

    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more1");
        var more = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Xem Thêm";
            $("#more1").css("display", "none");
            $("#more").css("display", "block");
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            more.style.display = "none";
            $("#more1").css("display", "block");
            btnText.innerHTML = "Ẩn bớt";
            moreText.style.display = "inline";
        }
    }
</script>
<script>
    var swiper = new Swiper('.mySwiper', {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 0,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper('.mySwiper2', {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: swiper,
        },
    });
    new Swiper('.batdongsannoibat2-swiper', {
        navigation: {
            nextEl: '.batdongsannoibat2-swiper-next',
            prevEl: '.batdongsannoibat2-swiper-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 16,
                slidesPerGroup: 3,
            },
        },
    });
    const activedSlide = document.querySelectorAll(
        '.slide .mySwiper2 .swiper-wrapper > .swiper-slide  img'
    );
    if (activedSlide) {
        activedSlide.forEach((item) => {
            item.onclick = () => {
                document.querySelector('.slide').classList.add('show');
            };
        });
    }
    document.querySelector('.slide > .controls .close-btn').onclick = () =>
        document.querySelector('.slide').classList.remove('show');

    document.querySelector('.slide > .controls .bi-zoom-in').onclick = () => {
        document.querySelector('.slide').dataset.zoom = '1.5';
    };
    document.querySelector('.slide > .controls .bi-zoom-out').onclick =
        () => {
            document.querySelector('.slide').dataset.zoom = '1';
        };

    document.addEventListener('keydown', (e) => {
        if (e.keyCode === 27)
            document.querySelector('.slide').classList.remove('show');
    });

    document.querySelectorAll('.copy-to-clipboard').forEach((item) => {
        item.onclick = () => {
            var dummy = document.createElement('input'),
                text = window.location.href;

            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);
        };
    });

    function showHide() {
        this.classList.toggle('show');
        this.innerText = this.classList.contains('show')
            ? this.dataset.show
            : this.dataset.hide;
    }

    var rating_data = 0;

    $('#add_review').click(function () {

        $('#review_modal').addClass('show');

    });


    function reset_background() {
        for (var count = 1; count <= 5; count++) {
            $('#submit_star_' + count).addClass('star-light');

            $('#submit_star_' + count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function () {

        reset_background();

        for (var count = 1; count <= rating_data; count++) {

            $('#submit_star_' + count).removeClass('star-light');

            $('#submit_star_' + count).addClass('text-warning');
        }

    });

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };




</script>
@endsection
