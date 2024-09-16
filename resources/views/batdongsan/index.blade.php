@extends('layouts.index')

@section('title', 'Batdongsan')

@section('content')


<form action="/search-duan" id="submit-search" method="get">
    <div id="sub-filter">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active btn-ban">
                <input type="radio" name="options" id="option1" autocomplete="off" checked />
                Bán
            </label>
            <label class="btn btn-secondary btn-chothue">
                <input type="radio" name="options" id="option3" autocomplete="off" />
                Cho thuê
            </label>
        </div>

        <div class="search-main">
            <input name="KeywordOrigin" type="text" placeholder="Tìm kiếm địa chỉ, dự án..." />
            <button type="button">
                <img src="/assets/img/search-normal.svg" alt="" />
            </button>
        </div>

        <div class="right-container">
            <div class="filter-container filter-dropdown d-flex gap-24">
                <div class="row row-cols-sm-4 row-cols-2-5" style="flex: 1;">
                    <div class="col">
                        <div class="filter-dropdown category-filter">
                            <input class="switch" type="checkbox" />
                            <div class="dropdown-btn">
                                <p>
                                    <span class="title-container">
                                        <span class="title">Loại nhà đất</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-auto">
                                            <path
                                                d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="category-filter-value loai-nha-dat-value" data-default="Tất cả"> Tất cả </span>
                                </p>
                                <ul class="dropdown-container dropdown-location-menu form-checkbox-container">
                                    <div class="dropdown-menu-mobile-header d-flex d-lg-none">
                                        <label>Loại nhà đất</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                            />
                                        </svg>
                                    </div>

                                    <li class="form-footer">
                                        <p class="form-checkbox-resetall">
                                            <img src="/assets/img/refresh-2.svg" alt="" />
                                            Đặt lại
                                        </p>

                                        <span class="form-close">
                                            <button type="submit" style="background: none; border: none;" class="text-white">Tìm kiếm</button>
                                        </span>
                                    </li>
                                </ul>
                                <div class="overlay" onclick="this.previousElementSibling.querySelector('.form-close').click()"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="location-filter filter-dropdown">
                            <input class="switch" type="checkbox" />
                            <div class="dropdown-btn">
                                <p>
                                    <span class="title-container">
                                        <span class="title">Khu vực & Dự án</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-auto">
                                            <path
                                                d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z"
                                            />
                                        </svg>
                                    </span>
                                    <span data-default="Toàn quốc" class="location-filter-value"> Toàn quốc </span>
                                </p>
                                <ul class="dropdown-location-menu">
                                    <span class="d-none d-lg-block">Khu vực & Dự án</span>
                                    <div class="dropdown-menu-mobile-header d-flex d-lg-none">
                                        <label>Khu vực & Dự án </label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                            />
                                        </svg>
                                    </div>
                                    <li>
                                        <select
                                            title="Tỉnh/Thành"
                                            name="gia_tri_tinh_chon"
                                            class="selectpicker filter-select-boostrap"
                                            id="select-tinh-thanh"
                                            data-live-search="true"
                                            data-size="200"
                                            data-live-search-placeholder="Tìm tỉnh thành"
                                            data-dependance-name="tinhthanh"
                                        >
                                            <option title="Hồ Chí Minh" value="1">Hồ Chí Minh</option>
                                            <option title="Hà Nội" value="2">Hà Nội</option>
                                            <option title="Đà Nẵng" value="3">Đà Nẵng</option>
                                            <option title="Bình Dương" value="4">Bình Dương</option>
                                            <option title="Đồng Nai" value="5">Đồng Nai</option>
                                            <option title="Khánh Hòa" value="6">Khánh Hòa</option>
                                            <option title="Hải Phòng" value="7">Hải Phòng</option>
                                            <option title="Long An" value="8">Long An</option>
                                            <option title="Quảng Nam" value="9">Quảng Nam</option>
                                            <option title="Bà Rịa Vũng Tàu" value="10">Bà Rịa Vũng Tàu</option>
                                            <option title="Đắk Lắk" value="11">Đắk Lắk</option>
                                            <option title="Cần Thơ" value="12">Cần Thơ</option>
                                            <option title="Bình Thuận  " value="13">Bình Thuận </option>
                                            <option title="Lâm Đồng" value="14">Lâm Đồng</option>
                                            <option title="Thừa Thiên Huế" value="15">Thừa Thiên Huế</option>
                                            <option title="Kiên Giang" value="16">Kiên Giang</option>
                                            <option title="Bắc Ninh" value="17">Bắc Ninh</option>
                                            <option title="Quảng Ninh" value="18">Quảng Ninh</option>
                                            <option title="Thanh Hóa" value="19">Thanh Hóa</option>
                                            <option title="Nghệ An" value="20">Nghệ An</option>
                                            <option title="Hải Dương" value="21">Hải Dương</option>
                                            <option title="Gia Lai" value="22">Gia Lai</option>
                                            <option title="Bình Phước" value="23">Bình Phước</option>
                                            <option title="Hưng Yên" value="24">Hưng Yên</option>
                                            <option title="Bình Định" value="25">Bình Định</option>
                                            <option title="Tiền Giang" value="26">Tiền Giang</option>
                                            <option title="Thái Bình" value="27">Thái Bình</option>
                                            <option title="Bắc Giang" value="28">Bắc Giang</option>
                                            <option title="Hòa Bình" value="29">Hòa Bình</option>
                                            <option title="An Giang" value="30">An Giang</option>
                                            <option title="Vĩnh Phúc" value="31">Vĩnh Phúc</option>
                                            <option title="Tây Ninh" value="32">Tây Ninh</option>
                                            <option title="Thái Nguyên" value="33">Thái Nguyên</option>
                                            <option title="Lào Cai" value="34">Lào Cai</option>
                                            <option title="Nam Định" value="35">Nam Định</option>
                                            <option title="Quảng Ngãi" value="36">Quảng Ngãi</option>
                                            <option title="Bến Tre" value="37">Bến Tre</option>
                                            <option title="Đắk Nông" value="38">Đắk Nông</option>
                                            <option title="Cà Mau" value="39">Cà Mau</option>
                                            <option title="Vĩnh Long" value="40">Vĩnh Long</option>
                                            <option title="Ninh Bình" value="41">Ninh Bình</option>
                                            <option title="Phú Thọ" value="42">Phú Thọ</option>
                                            <option title="Ninh Thuận" value="43">Ninh Thuận</option>
                                            <option title="Phú Yên" value="44">Phú Yên</option>
                                            <option title="Hà Nam" value="45">Hà Nam</option>
                                            <option title="Hà Tĩnh" value="46">Hà Tĩnh</option>
                                            <option title="Đồng Tháp" value="47">Đồng Tháp</option>
                                            <option title="Sóc Trăng" value="48">Sóc Trăng</option>
                                            <option title="Kon Tum" value="49">Kon Tum</option>
                                            <option title="Quảng Bình" value="50">Quảng Bình</option>
                                            <option title="Quảng Trị" value="51">Quảng Trị</option>
                                            <option title="Trà Vinh" value="52">Trà Vinh</option>
                                            <option title="Hậu Giang" value="53">Hậu Giang</option>
                                            <option title="Sơn La" value="54">Sơn La</option>
                                            <option title="Bạc Liêu" value="55">Bạc Liêu</option>
                                            <option title="Yên Bái" value="56">Yên Bái</option>
                                            <option title="Tuyên Quang" value="57">Tuyên Quang</option>
                                            <option title="Điện Biên" value="58">Điện Biên</option>
                                            <option title="Lai Châu" value="59">Lai Châu</option>
                                            <option title="Lạng Sơn" value="60">Lạng Sơn</option>
                                            <option title="Hà Giang" value="61">Hà Giang</option>
                                            <option title="Bắc Kạn" value="62">Bắc Kạn</option>
                                            <option title="Cao Bằng" value="63">Cao Bằng</option>
                                        </select>
                                        <div class="clear-select-bootstrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                                />
                                            </svg>
                                        </div>
                                    </li>

                                    <li>
                                        <select
                                            id="select-huyen"
                                            title="Quận/Huyện"
                                            name="DistrictIdsAsString[]"
                                            class="selectpicker filter-select-boostrap"
                                            data-live-search="true"
                                            data-size="2000"
                                            data-max-options="3"
                                            data-max-options-text="Cho phép tối đa 3 lựa chọn"
                                            multiple
                                            data-dependance-name="quanhuyen"
                                            data-dependance="tinhthanh"
                                            data-live-search-placeholder="Tìm Quận/Huyện"
                                            data-actions-box="true"
                                            data-deselect-all-text="Đặt lại"
                                            data-select-all-text="Áp dụng"
                                        >
                                        </select>
                                        <div class="clear-select-bootstrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                                />
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <select
                                            id="select-phuong-xa"
                                            name="WardIdsAsString[]"
                                            title="Phương/Xã"
                                            data-dependance="quanhuyen"
                                            class="selectpicker filter-select-boostrap"
                                            multiple
                                            data-live-search="true"
                                            data-live-search-placeholder="Tìm Phương/Xã"
                                            data-actions-box="true"
                                            data-deselect-all-text="Đặt lại"
                                            data-select-all-text="Áp dụng"
                                        >
                                        </select>

                                        <div class="clear-select-bootstrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                                />
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <select
                                            id="select-duong"
                                            name="StreetIdsAsString"
                                            title="Đường/Phố"
                                            class="selectpicker filter-select-boostrap"
                                            data-live-search="true"
                                            data-dependance="quanhuyen"
                                            data-live-search-placeholder="Tìm Đường/Phố"
                                            data-size="2000"
                                        >
                                        </select>
                                        <div class="clear-select-bootstrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                                />
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <select
                                            id="select-duan"
                                            name="ProjectIdsAsString[]"
                                            title="Dự án"
                                            class="selectpicker filter-select-boostrap"
                                            data-live-search="true"
                                            multiple
                                            data-size="2000"
                                            data-dependance="tinhthanh"
                                            data-live-search-placeholder="Tìm Dự án"
                                            data-actions-box="true"
                                            data-deselect-all-text="Đặt lại"
                                            data-select-all-text="Áp dụng"
                                            data-max-options="3"
                                            data-max-options-text="Cho phép tối đa 3 lựa chọn"
                                        >
                                        </select>
                                        <div class="clear-select-bootstrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                                />
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="form-footer">
                                        <p class="form-checkbox-resetall">
                                            <img src="/assets/img/refresh-2.svg" alt="" />
                                            Đặt lại
                                        </p>
                                        <span class="form-close">
                                            <button class="text-white" type="submit" style="border: none; background: none;">
                                                Tìm kiếm
                                            </button>
                                        </span>
                                    </li>
                                </ul>
                                <div class="overlay" onclick="this.previousElementSibling.querySelector('.form-close').click()"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="price-filter filter-dropdown">
                            <input class="switch" type="checkbox" />
                            <div class="dropdown-btn">
                                <p>
                                    <span class="title-container">
                                        <span class="title">Mức giá</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-auto">
                                            <path
                                                d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z"
                                            />
                                        </svg>
                                    </span>

                                    <span data-default="Tất cả" class="price-filter-value"> Tất cả </span>
                                </p>
                                <ul class="dropdown-location-menu">
                                    <div class="dropdown-menu-mobile-header d-flex d-lg-none">
                                        <label>Mức giá</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                            />
                                        </svg>
                                    </div>
                                    <div class="output-value">
                                        <p class="item">Từ <span class="from-value">0 Triệu</span></p>
                                        <p class="item">Đến <span class="to-value">60 Tỷ</span></p>
                                    </div>
                                    <div class="range-slider range-slider-home-price" data-ticks-position="top" style="--min: 0; --max: 600; --value-a: 0; --value-b: 400; --suffix: '%'; --text-value-a: '0 Triệu'; --text-value-b: '60 Tỷ';">
                                        <input class="input-min" type="range" min="0" name="priceMin" max="600" value="0" />

                                        <input
                                            type="range"
                                            class="input-max"
                                            min="0"
                                            max="600"
                                            name="priceMax"
                                            value="400"
                                            oninput="this.parentNode.style.setProperty('--value-b',this.value); this.parentNode.style.setProperty('--text-value-b', JSON.stringify(this.value))"
                                        />
                                        <div class="range-slider__progress"></div>
                                    </div>
                                    <ul class="list-value">
                                        <div style="max-height: 250px; overflow: auto; width: 100%;">
                                            <li class="value-item form-submit">Tất cả mức giá</li>
                                            <li class="value-item form-submit">
                                                < 500 triệu
                                            </li>
                                            <li class="value-item form-submit">
                                                500 - 800 triệu
                                            </li>
                                            <li class="value-item form-submit">800 triệu - 1 tỷ</li>
                                            <li class="value-item form-submit">1 - 2 tỷ</li>
                                            <li class="value-item form-submit">2 - 3 tỷ</li>
                                            <li class="value-item form-submit">3 - 5 tỷ</li>
                                            <li class="value-item form-submit">5 - 7 tỷ</li>
                                            <li class="value-item form-submit">7 - 10 tỷ</li>
                                            <li class="value-item form-submit">10 - 20 tỷ</li>
                                            <li class="value-item form-submit">20 - 30 tỷ</li>
                                            <li class="value-item form-submit">30 - 40 tỷ</li>
                                            <li class="value-item form-submit">40 - 60 tỷ</li>
                                            <li class="value-item form-submit">Trên 60 tỷ</li>
                                            <li class="value-item form-submit">Thỏa thuận</li>
                                        </div>
                                        <li class="form-footer">
                                            <p class="form-checkbox-resetall">
                                                <img src="/assets/img/refresh-2.svg" alt="" />
                                                Đặt lại
                                            </p>
                                            <span class="form-close">
                                                <button class="text-white form-submit" type="submit" style="border: none; background: none;">
                                                    Tìm kiếm
                                                </button>
                                            </span>
                                        </li>
                                    </ul>
                                </ul>
                                <div class="overlay" onclick="this.previousElementSibling.querySelector('.form-close').click()"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="price-filter filter-dropdown area-filter">
                            <input class="switch" type="checkbox" />
                            <div class="dropdown-btn">
                                <p>
                                    <span class="title-container">
                                        <span class="title">Diện tích</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-auto">
                                            <path
                                                d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z"
                                            />
                                        </svg>
                                    </span>

                                    <span data-default="Tất cả" class="price-filter-value"> Tất cả </span>
                                </p>
                                <ul class="dropdown-location-menu">
                                    <div class="dropdown-menu-mobile-header d-flex d-lg-none">
                                        <label>Diện tích</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                            />
                                        </svg>
                                    </div>
                                    <div class="output-value">
                                        <p class="item">Từ <span class="from-value">0 m²</span></p>
                                        <p class="item">Đến <span class="to-value">500 m²</span></p>
                                    </div>
                                    <div class="range-slider range-slider-home-price" data-ticks-position="top" style="--min: 0; --max: 500; --value-a: 0; --value-b: 500; --suffix: '%'; --text-value-a: '0 Triệu'; --text-value-b: '60 Tỷ';">
                                        <input class="input-min" type="range" name="areaMin" min="0" max="500" value="0" />
                                        <input type="range" class="input-max" min="0" max="500" value="500" name="areaMax" />

                                        <div class="range-slider__progress"></div>
                                    </div>
                                    <ul class="list-value">
                                        <div style="max-height: 250px; overflow: auto; width: 100%;">
                                            <li class="value-item active form-submit">
                                                Tất cả
                                            </li>
                                            <li class="value-item form-submit"><span style="color: inherit;">&#8804;</span> 30</li>
                                            <li class="form-submit value-item">
                                                30 - 50 m²
                                            </li>
                                            <li class="form-submit value-item">
                                                50 - 80 m²
                                            </li>
                                            <li class="form-submit value-item">
                                                80 - 100 m²
                                            </li>
                                            <li class="form-submit value-item">
                                                100 - 150 m²
                                            </li>
                                            <li class="form-submit value-item">
                                                150 - 200 m²
                                            </li>
                                            <li class="form-submit value-item">
                                                200 - 250 m²
                                            </li>
                                            <li class="form-submit value-item">
                                                250 - 300 m²
                                            </li>
                                            <li class="form-submit value-item">
                                                300 - 500 m²
                                            </li>
                                            <li class="form-submit value-item">
                                                Trên 500 m²
                                            </li>
                                        </div>
                                        <li class="form-footer">
                                            <p class="form-checkbox-resetall">
                                                <img src="/assets/img/refresh-2.svg" alt="" />
                                                Đặt lại
                                            </p>
                                            <span class="form-close">
                                                <button type="submit" class="text-white" style="background: none; border: none;">
                                                    Tìm kiếm
                                                </button>
                                            </span>
                                        </li>
                                    </ul>
                                </ul>
                                <div class="overlay" onclick="this.previousElementSibling.querySelector('.form-close').click()"></div>
                            </div>
                        </div>
                    </div>
                    <div class="fl d-flex d-lg-none col form-inline my-2 my-lg-0 ml-auto right-controls">
                        <div class="price-filter filter-dropdown addition-filter">
                            <input class="switch" type="checkbox" />
                            <div class="dropdown-btn">
                                <div>
                                    <div class="btn-filter">
                                        <span class="addition-count d-none">0</span>
                                        <img src="/assets/img/setting-5.svg" />Lọc thêm
                                    </div>
                                </div>
                                <ul class="dropdown-location-menu form-checkbox-container">
                                    <div class="dropdown-menu-mobile-header d-flex d-lg-none">
                                        <label>Lọc thêm</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                            />
                                        </svg>
                                    </div>
                                    <li>
                                        <span class="title">Số phòng ngủ</span>
                                        <div class="checkbox-container">
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" />
                                                <label for="">1</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" />
                                                <label for="">2</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" />
                                                <label for="">3</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" />
                                                <label for="">4</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" />
                                                <label for="">5+</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="title">Hướng nhà</span>
                                        <div class="checkbox-container">
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" value="dong" name="DirectionsAsString[]" />
                                                <label for="">Đông</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" value="tay" name="DirectionsAsString[]" />
                                                <label for="">Tây</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" value="nam" name="DirectionsAsString[]" />
                                                <label for="">Nam</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" value="bac" name="DirectionsAsString[]" />
                                                <label for="">Bắc</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" value="dong-bac" name="DirectionsAsString[]" />
                                                <label for="">Đông - Bắc</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" value="tay-bac" name="DirectionsAsString[]" />
                                                <label for="">Tây - Bắc</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" value="tay-nam" name="DirectionsAsString[]" />
                                                <label for="">Tây - Nam</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" value="dong-nam" name="DirectionsAsString[]" />
                                                <label for="">Đông - Nam</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="title">Nội dung tin có</span>
                                        <div class="checkbox-container">
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" />
                                                <label for="">Hình ảnh</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" />
                                                <label for="">Video</label>
                                            </div>
                                            <div class="form-custom-checkbox">
                                                <input type="checkbox" />
                                                <label for="">3D & 360o</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="form-footer">
                                        <p class="form-checkbox-resetall">
                                            <img src="/assets/img/refresh-2.svg" alt="" />
                                            Đặt lại
                                        </p>
                                        <span class="form-close">
                                            <button class="text-white" type="submit" style="background: none; border: none;">
                                                Tìm kiếm
                                            </button>
                                        </span>
                                    </li>
                                </ul>
                                <div class="overlay" onclick="this.previousElementSibling.querySelector('.form-close').click()"></div>
                            </div>
                        </div>
                        <div class="btn-filter filter-reset-btn d-none d-lg-flex"><img src="/assets/img/refresh-2.png" />Đặt lại</div>
                    </div>
                </div>
                <div class="fl d-none d-lg-flex form-inline my-2 my-lg-0 ml-auto right-controls">
                    <div class="price-filter filter-dropdown addition-filter">
                        <input class="switch" type="checkbox" />
                        <div class="dropdown-btn">
                            <div>
                                <div class="btn-filter">
                                    <span class="addition-count d-none"> </span>
                                    <img src="/assets/img/setting-5.svg" />Lọc thêm
                                </div>
                            </div>
                            <ul class="dropdown-location-menu form-checkbox-container">
                                <li>
                                    <span class="title">Số phòng ngủ</span>
                                    <div class="checkbox-container">
                                        <div class="form-custom-checkbox">
                                            <input value="1" type="checkbox" name="RoomNumersAsString[]" />
                                            <label for="">1</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input value="2" type="checkbox" name="RoomNumersAsString[]" />
                                            <label for="">2</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="3" name="RoomNumersAsString[]" />
                                            <label for="">3</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="4" name="RoomNumersAsString[]" />
                                            <label for="">4</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="5" name="RoomNumersAsString[]" />
                                            <label for="">5+</label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="title">Hướng nhà</span>
                                    <div class="checkbox-container">
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="dong" name="DirectionsAsString[]" />
                                            <label for="">Đông</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="tay" name="DirectionsAsString[]" />
                                            <label for="">Tây</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="nam" name="DirectionsAsString[]" />
                                            <label for="">Nam</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="bac" name="DirectionsAsString[]" />
                                            <label for="">Bắc</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="dong-bac" name="DirectionsAsString[]" />
                                            <label for="">Đông - Bắc</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="tay-bac" name="DirectionsAsString[]" />
                                            <label for="">Tây - Bắc</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="tay-nam" name="DirectionsAsString[]" />
                                            <label for="">Tây - Nam</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" value="dong-nam" name="DirectionsAsString[]" />
                                            <label for="">Đông - Nam</label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="title">Nội dung tin có</span>
                                    <div class="checkbox-container">
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" />
                                            <label for="">Hình ảnh</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" />
                                            <label for="">Video</label>
                                        </div>
                                        <div class="form-custom-checkbox">
                                            <input type="checkbox" />
                                            <label for="">3D & 360o</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="form-footer">
                                    <p class="form-checkbox-resetall">
                                        <img src="/assets/img/refresh-2.svg" alt="" />
                                        Đặt lại
                                    </p>
                                    <span class="form-close">
                                        <button class="text-white" style="background: none; border: none;" type="submit">
                                            Tìm kiếm
                                        </button>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-filter filter-reset-btn"><img src="/assets/img/refresh-2.png" />Đặt lại</div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- end filter -->
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
                        <div class="swiper-slide">
                            <img
                                alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh  giá chỉ 30,5 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/posts/117359_66c9f32bc3f48.jpg"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh  giá chỉ 30,5 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/posts/117359_66c9f32bc7113.jpg"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh  giá chỉ 30,5 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/posts/117359_66c9f32bc77de.jpg"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh  giá chỉ 30,5 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/posts/117359_66c9f32bc7c35.jpg"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh  giá chỉ 30,5 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/posts/117359_66c9f32bc8149.jpg"
                            />
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img
                                alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh  giá chỉ 30,5 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/posts/117359_66c9f32bc3f48.jpg"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh  giá chỉ 30,5 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/posts/117359_66c9f32bc7113.jpg"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh  giá chỉ 30,5 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/posts/117359_66c9f32bc77de.jpg"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh  giá chỉ 30,5 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/posts/117359_66c9f32bc7c35.jpg"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh  giá chỉ 30,5 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/posts/117359_66c9f32bc8149.jpg"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="slide-description col-md-12">
                    <div class="title mb-3 re__breadcrumb">
                        <a style="color: #999;" class="re__link-se" href="/">Trang chủ</a> /

                        <a style="color: #999;" class="re__link-se" href="/ban-biet-thu">Bán Biệt thự</a> /

                        <a style="color: #999;" class="re__link-se" href="/ban-biet-thu-ho-chi-minh">Hồ Chí Minh</a> /

                        <a style="color: #999;" class="re__link-se" href="/ban-biet-thu-binh-chanh-ho-chi-minh">Bình Chánh</a> / Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh giá chỉ 30,5 tỷ
                    </div>
                    <div class="content">
                        <h1 style="font-size: 24px; line-height: 34px; font-weight: 600;">Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh giá chỉ 30,5 tỷ</h1>
                    </div>

                    <div class="footer">
                        Đường Trịnh Quang Nghị, Phong Phú

                        <div class="box mt-3 pta">
                            <div class="box-text">
                                <div>
                                    <div class="label">Mức giá</div>
                                    <div class="value">
                                        30 tỷ
                                    </div>
                                </div>
                                <div>
                                    <div class="label">Diện tích</div>
                                    <div class="value">267 m²</div>
                                </div>
                                <div>
                                    <div class="label">Phòng ngủ</div>
                                    <div class="value">8 Phòng ngủ</div>
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
                    <div id="more">
                        Bán biệt thự 17x20 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh giá chỉ 30,5 tỷ <br />
                        - Biệt thự nằm trong khu vip ở Lovera Park Khang Điền đang mở tuyết đường song hành với Quốc Lộ 50 nên giao thông tương lai vô cùng duy chuyển...
                        <span id="dots">...</span>
                    </div>
                    <div id="more1" style="display: none;">
                        Bán biệt thự 17x20 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh giá chỉ 30,5 tỷ <br />
                        - Biệt thự nằm trong khu vip ở Lovera Park Khang Điền đang mở tuyết đường song hành với Quốc Lộ 50 nên giao thông tương lai vô cùng duy chuyển tiện ích vô cùng.<br />
                        - Khu đáng sống cực kỳ an ninh, Biệt thự mặt tiền nhựa lớn tiện kết hợp đầu tư kinh doanh đâ ngành nghề tương lai không giá khu này tăng cao mua 1 lời 100 nhé.<br />
                        - KC Biệt thự trệt 3 lầu, phòng khách , 1pn Master 2 pn thường, khu vực tiệc họp mặt cuối tuần. cực sang trọng.<br />
                        - SHR, pháp lý cực chuẩn, hoàn công , sổ hồng sang tay cho khách ngay luôn.<br />
                        LH EM CHÍ NHÀ PHỐ CHUYÊN KHU VỰC PHONG PHÚ&lt;BÌNH HƯNG. BÌNH CHÁNH
                    </div>
                </div>
                <div class="btn-see-more col-md-12">
                    <p id="myBtn" onclick="myFunction()">Xem Thêm</p>
                </div>
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
                                    <div class="line-text">267 m²</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="line">
                                    <div class="line-label"><img src="/assets/icon/tabler_sofa.svg" />Số phòng ngủ</div>
                                    <div class="line-text">8 phòng</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="line">
                                    <div class="line-label"><img src="/assets/icon/document-text.svg" /> Pháp lý</div>
                                    <div class="line-text">Sổ đỏ/ Sổ hồng</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="line">
                                    <div class="line-label"><img src="/assets/icon/moneys.svg" />Mức giá</div>
                                    <div class="line-text">
                                        30 tỷ
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="line">
                                    <div class="line-label"><img src="/assets/icon/uil_bath.svg" />Số toilet</div>
                                    <div class="line-text">8 phòng</div>
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
                            <div class="value">24/08/2024</div>
                        </div>
                        <div class="col"></div>
                        <div class="col">
                            <div class="label">Loại tin</div>

                            <div class="value">Tin Thường</div>
                        </div>
                        <div class="col">
                            <div class="label">Mã tin</div>
                            <div class="value">117359</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
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
            </div>
            <div class="row text footer-text mb-4">
                <p>
                    Quý vị đang xem nội dung tin rao "<strong style="font-weight: bold !important;">Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh giá chỉ 30,5 tỷ</strong>" -
                    <strong style="font-weight: bold !important;">Mã tin 117359</strong>. Mọi thông tin, nội dung liên quan tới tin rao này là do người đăng tin đăng tải và chịu trách nhiệm. Batdongsan.vn luôn cố gắng để các thông tin được
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
                    <span class="name">PHẠM VĂN CHÍ</span>
                </div>
                <div class="detail-container">
                    <div
                        class="btn"
                        data-show="0706306647 - Ẩn số"
                        data-hide="0706306*** - Hiện số"
                        data-isShow="true"
                        style="background: #c8f1df; border-radius: 8px; font-weight: 600; font-size: 14px; line-height: 22px;"
                        onclick="showHide.call(this)"
                    >
                        0706306***- Hiện số
                    </div>
                    <a class="btn" href="/cdn-cgi/l/email-protection#35515a5b5244404c030502755258545c591b565a58">
                        Gửi email
                    </a>
                    <button class="btn" data-toggle="modal" data-target="#contactModal">Yêu cầu liên hệ lại</button>
                </div>

                <!-- Modal -->
            </div>

            <div class="list-bds">
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
            </div>
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
