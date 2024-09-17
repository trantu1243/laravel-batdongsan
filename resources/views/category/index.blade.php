@extends('layouts.index')

@section('title', 'Batdongsan')

@section('content')

<form action="search-duan" id="submit-search" method="get">
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
                <img src="assets/img/search-normal.svg" alt="" />
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
                                                d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z" />
                                        </svg>
                                    </span>
                                    <span class="category-filter-value loai-nha-dat-value" data-default="Tất cả"> Bán Nhà </span>
                                </p>
                                <ul class="dropdown-container dropdown-location-menu form-checkbox-container">
                                    <div class="dropdown-menu-mobile-header d-flex d-lg-none">
                                        <label>Loại nhà đất</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>

                                    <li class="form-footer">
                                        <p class="form-checkbox-resetall">
                                            <img src="./assets/img/refresh-2.svg" alt="" />
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
                                                d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z" />
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
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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
                                            data-dependance-name="tinhthanh">
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
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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
                                            data-select-all-text="Áp dụng">
                                        </select>
                                        <div class="clear-select-bootstrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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
                                            data-select-all-text="Áp dụng">
                                        </select>

                                        <div class="clear-select-bootstrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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
                                            data-size="2000">
                                        </select>
                                        <div class="clear-select-bootstrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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
                                            data-max-options-text="Cho phép tối đa 3 lựa chọn">
                                        </select>
                                        <div class="clear-select-bootstrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="form-footer">
                                        <p class="form-checkbox-resetall">
                                            <img src="./assets/img/refresh-2.svg" alt="" />
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
                                                d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z" />
                                        </svg>
                                    </span>

                                    <span data-default="Tất cả" class="price-filter-value"> Tất cả </span>
                                </p>
                                <ul class="dropdown-location-menu">
                                    <div class="dropdown-menu-mobile-header d-flex d-lg-none">
                                        <label>Mức giá</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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
                                            oninput="this.parentNode.style.setProperty('--value-b',this.value); this.parentNode.style.setProperty('--text-value-b', JSON.stringify(this.value))" />
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
                                                <img src="./assets/img/refresh-2.svg" alt="" />
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
                                                d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z" />
                                        </svg>
                                    </span>

                                    <span data-default="Tất cả" class="price-filter-value"> Tất cả </span>
                                </p>
                                <ul class="dropdown-location-menu">
                                    <div class="dropdown-menu-mobile-header d-flex d-lg-none">
                                        <label>Diện tích</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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
                                                <img src="./assets/img/refresh-2.svg" alt="" />
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
                                        <img src="./assets/img/setting-5.svg" />Lọc thêm
                                    </div>
                                </div>
                                <ul class="dropdown-location-menu form-checkbox-container">
                                    <div class="dropdown-menu-mobile-header d-flex d-lg-none">
                                        <label>Lọc thêm</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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
                                            <img src="./assets/img/refresh-2.svg" alt="" />
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
                        <div class="btn-filter filter-reset-btn d-none d-lg-flex"><img src="./assets/img/refresh-2.png" />Đặt lại</div>
                    </div>
                </div>
                <div class="fl d-none d-lg-flex form-inline my-2 my-lg-0 ml-auto right-controls">
                    <div class="price-filter filter-dropdown addition-filter">
                        <input class="switch" type="checkbox" />
                        <div class="dropdown-btn">
                            <div>
                                <div class="btn-filter">
                                    <span class="addition-count d-none"> </span>
                                    <img src="./assets/img/setting-5.svg" />Lọc thêm
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
                                        <img src="./assets/img/refresh-2.svg" alt="" />
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
                    <div class="btn-filter filter-reset-btn"><img src="./assets/img/refresh-2.png" />Đặt lại</div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="chuyenmuc container mt-4" id="danhmuc">
    <div class="fl-column">
        <div class="title re__breadcrumb">
            <a style="color: #999;" class="re__link-se" title="Nhà đất bán tại Việt Nam" href="ban-nha-dat">Bán</a> /

            <a title="Bán Nhà tại Việt Nam" href="ban-nha">Bán Nhà</a>
        </div>

        <h1 class="mb-2 mb-sm-3" style="font-size: 24px; font-weight: 700; margin-top: 8px;">Bán Nhà</h1>

        <div class="title">Hiện có 17,580 bất động sản</div>
    </div>
    <div class="row mt-sm-4 mt-3">
        <div class="col-md-9 col-sm-12 left-element">
            <div class="sp-b d-flex">
                <div class="type-sort">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-light active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked />
                            <img src="./assets/img/row-vertical.svg" />
                        </label>
                        <label class="btn btn-light">
                            <input type="radio" name="options" id="option3" autocomplete="off" />
                            <img src="./assets/img/map.svg" />
                        </label>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <select class="selectpicker" title="Sắp xếp" onchange="javascript:handleSelect(this)">
                            <option value="ban-nha">
                                Thông thường
                            </option>
                            <option value=" ban-nha?sortValue=1 ">
                                Tin mới nhất
                            </option>
                            <option value=" ban-nha?sortValue=2 ">
                                Giá thấp đến cao
                            </option>
                            <option value=" ban-nha?sortValue=3 ">
                                Giá cao đến thấp
                            </option>
                            <option value=" ban-nha?sortValue=6 ">
                                Giá trên m² thấp đến cao
                            </option>
                            <option value=" ban-nha?sortValue=7 ">
                                Giá trên m² cao đến thấp
                            </option>
                            <option value=" ban-nha?sortValue=4 " class="">
                                Diện tích bé đến lớn
                            </option>
                            <option value=" ban-nha?sortValue=5 " class="">
                                Diện tích lớn đến bé
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="gap-24 d-flex flex-column card-container">
                <a href="ban-nha-mau-luong-o-to-qua-cua-kinh-doanh-dt-35m-x-5t-64-ty-r117358" class="card-cm" title="BÁN NHÀ MẬU LƯƠNG Ô TÔ QUA CỬA - KINH DOANH DT 35M x 5T 6.4 tỷ">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117358_66c9eb0d18a73.jpg"
                            alt="BÁN NHÀ MẬU LƯƠNG Ô TÔ QUA CỬA - KINH DOANH DT 35M x 5T 6.4 tỷ" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            BÁN NHÀ MẬU LƯƠNG Ô TÔ QUA CỬA - KINH DOANH DT 35M x 5T 6.4 tỷ
                        </h3>
                        <div>
                            <div class="description">Hà Đông , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">35 m2</div>
                                <div class="description-item">3 Phòng ngủ</div>
                                <div class="description-item">3 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    6 tỷ 400 triệu
                                </div>

                                <div class="time">
                                    2 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117358" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="ban-nha-nguyen-van-cu-long-bien-dt-45m2-6-tang-9-ty-5-thang-may-o-to-cafe-tang-thuong-r117357"
                    class="card-cm"
                    title="Bán nhà, Nguyễn Văn Cừ Long Biên DT 45m2 * 6 tầng 9 tỷ 5 thang máy ô tô cafe tầng thượng">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117357_66c9e8e4a8aa8.jpg"
                            alt="Bán nhà, Nguyễn Văn Cừ Long Biên DT 45m2 * 6 tầng 9 tỷ 5 thang máy ô tô cafe tầng thượng" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>2</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Bán nhà, Nguyễn Văn Cừ Long Biên DT 45m2 * 6 tầng 9 tỷ 5 thang máy ô tô cafe tầng thượng
                        </h3>
                        <div>
                            <div class="description">Long Biên , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">45 m2</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    9 tỷ 500 triệu
                                </div>

                                <div class="time">
                                    2 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117357" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="ban-nha-nguyen-van-cu-long-bien-dt-47m26-tang-gia-10-ty-o-to-thong-thang-may-vai-phut-sang-ho-guom-r117356"
                    class="card-cm"
                    title="Bán nhà Nguyễn Văn Cừ Long Biên DT 47m2*6 tầng giá 10 tỷ ô tô thông thang máy vài phút sang Hồ Gươm">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117356_66c9e8ca22ab3.jpg"
                            alt="Bán nhà Nguyễn Văn Cừ Long Biên DT 47m2*6 tầng giá 10 tỷ ô tô thông thang máy vài phút sang Hồ Gươm" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>1</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Bán nhà Nguyễn Văn Cừ Long Biên DT 47m2*6 tầng giá 10 tỷ ô tô thông thang máy vài phút sang Hồ Gươm
                        </h3>
                        <div>
                            <div class="description">Long Biên , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">47 m2</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    10 tỷ
                                </div>

                                <div class="time">
                                    2 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117356" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="nha-dep-thang-may-truong-chinh-414m2-6-tang-gia-768-ty-kinh-doanh-dinh-r117354" class="card-cm" title="Nhà Đẹp Thang Máy Trường Chinh, 41.4m², 6 Tầng, Giá 7.68 Tỷ, Kinh Doanh Đỉnh">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117354_66c9e6927213d.jpg"
                            alt="Nhà Đẹp Thang Máy Trường Chinh, 41.4m², 6 Tầng, Giá 7.68 Tỷ, Kinh Doanh Đỉnh" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>1</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Nhà Đẹp Thang Máy Trường Chinh, 41.4m², 6 Tầng, Giá 7.68 Tỷ, Kinh Doanh Đỉnh
                        </h3>
                        <div>
                            <div class="description">Đống Đa , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">42 m2</div>
                                <div class="description-item">5 Phòng ngủ</div>
                                <div class="description-item">5 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    7 tỷ 680 triệu
                                </div>

                                <div class="time">
                                    2 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117354" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="tap-the-bach-khoatang-1-100m2-66-ty-kinh-doanh-dinh-r117353" class="card-cm" title="Tập Thể Bách Khoa,Tầng 1, 100m² , 6.6 Tỷ, Kinh Doanh đỉnh">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117353_66c9e5f60e13a.jpg"
                            alt="Tập Thể Bách Khoa,Tầng 1, 100m² , 6.6 Tỷ, Kinh Doanh đỉnh" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>1</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Tập Thể Bách Khoa,Tầng 1, 100m² , 6.6 Tỷ, Kinh Doanh đỉnh
                        </h3>
                        <div>
                            <div class="description">Hai Bà Trưng , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">100 m2</div>
                                <div class="description-item">2 Phòng ngủ</div>
                                <div class="description-item">1 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    6 tỷ 600 triệu
                                </div>

                                <div class="time">
                                    2 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117353" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="nha-ban-hem-ba-huyen-thanh-quan-30-m2-3-tang-gia-5-ty-2-r117351" class="card-cm" title="Nhà Bán Hẻm Bà Huyện Thanh Quan  - 30 m2 - 3 Tầng - ) Giá 5 tỷ 2">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117351_66c9dfa4c3271.jpg"
                            alt="Nhà Bán Hẻm Bà Huyện Thanh Quan  - 30 m2 - 3 Tầng - ) Giá 5 tỷ 2" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Nhà Bán Hẻm Bà Huyện Thanh Quan - 30 m2 - 3 Tầng - ) Giá 5 tỷ 2
                        </h3>
                        <div>
                            <div class="description">Quận 3 , Hồ Chí Minh</div>
                            <div class="description-tag">
                                <div class="description-item">30 m2</div>
                                <div class="description-item">8 Phòng ngủ</div>
                                <div class="description-item">8 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    5 tỷ 200 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117351" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="ban-nha-65m-ng-v-cu-long-bien-mt-52m-85ty-oto-kd-r117349" class="card-cm" title="Bán nhà 65m NG V  Cừ, Long Biên, MT 5,2m , 8,5ty ,oto ,KD">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117349_66c9bce5470c8.jpg"
                            alt="Bán nhà 65m NG V  Cừ, Long Biên, MT 5,2m , 8,5ty ,oto ,KD" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>4</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Bán nhà 65m NG V Cừ, Long Biên, MT 5,2m , 8,5ty ,oto ,KD
                        </h3>
                        <div>
                            <div class="description">Long Biên , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">65 m2</div>
                                <div class="description-item">3 Phòng ngủ</div>
                                <div class="description-item">3 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    8 tỷ 500 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117349" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="mot-can-duy-nhat-nha-gan-su-pham-the-duc-the-thao-225-ty-34m-r117348" class="card-cm" title="MỘT CĂN DUY NHẤT - NHÀ GẦN SƯ PHẠM THỂ DỤC THỂ THAO - 2.25 TỶ - 34M">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117348_66c9b1a5ee6a4.jpg"
                            alt="MỘT CĂN DUY NHẤT - NHÀ GẦN SƯ PHẠM THỂ DỤC THỂ THAO - 2.25 TỶ - 34M" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            MỘT CĂN DUY NHẤT - NHÀ GẦN SƯ PHẠM THỂ DỤC THỂ THAO - 2.25 TỶ - 34M
                        </h3>
                        <div>
                            <div class="description">Chương Mỹ , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">34 m2</div>
                                <div class="description-item">3 Phòng ngủ</div>
                                <div class="description-item">3 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    2 tỷ 250 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117348" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="mat-ngo-pho-van-phuc-ban-dat-tang-nha-2-tang-ngo-rong-kinh-doanh-dinh-o-to-tranh-r117347"
                    class="card-cm"
                    title="MẶT NGÕ PHỐ VẠN PHÚC, BÁN ĐẤT TẶNG NHÀ 2 TẦNG. NGÕ RỘNG KINH DOANH ĐỈNH-Ô TÔ TRÁNH">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117347_66c9acafb5a95.jpg"
                            alt="MẶT NGÕ PHỐ VẠN PHÚC, BÁN ĐẤT TẶNG NHÀ 2 TẦNG. NGÕ RỘNG KINH DOANH ĐỈNH-Ô TÔ TRÁNH" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>2</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            MẶT NGÕ PHỐ VẠN PHÚC, BÁN ĐẤT TẶNG NHÀ 2 TẦNG. NGÕ RỘNG KINH DOANH ĐỈNH-Ô TÔ TRÁNH
                        </h3>
                        <div>
                            <div class="description">Hà Đông , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">41 m2</div>
                                <div class="description-item">3 Phòng ngủ</div>
                                <div class="description-item">1 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    6 tỷ 500 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117347" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="nha-dep-o-dinh-cong-thuong-lo-goc-tang-noi-that-dt-33m2-x-5t-x-639-ty-lh-082996828-r117346"
                    class="card-cm"
                    title="Nhà Đẹp Ở ĐỊNH CÔNG THƯỢNG, Lô Góc, TẶNG NỘI THẤT - DT 33m2 x 5T x 6,39 Tỷ LH 082.996.828">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117346_66c9aa98db3ca.jpg"
                            alt="Nhà Đẹp Ở ĐỊNH CÔNG THƯỢNG, Lô Góc, TẶNG NỘI THẤT - DT 33m2 x 5T x 6,39 Tỷ LH 082.996.828" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Nhà Đẹp Ở ĐỊNH CÔNG THƯỢNG, Lô Góc, TẶNG NỘI THẤT - DT 33m2 x 5T x 6,39 Tỷ LH 082.996.828
                        </h3>
                        <div>
                            <div class="description">Hoàng Mai , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">33 m2</div>
                                <div class="description-item">3 Phòng ngủ</div>
                                <div class="description-item">3 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    6 tỷ 390 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117346" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="ban-nha-khu-dan-cu-five-star-1-tret-1-lau-can-giuoc-long-an-r117345" class="card-cm" title="Bán nhà khu dân cư Five Star, 1 trệt 1 lầu, Cần Giuộc, Long An">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117345_66c9aa0b67ebe.jpg"
                            alt="Bán nhà khu dân cư Five Star, 1 trệt 1 lầu, Cần Giuộc, Long An" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>4</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Bán nhà khu dân cư Five Star, 1 trệt 1 lầu, Cần Giuộc, Long An
                        </h3>
                        <div>
                            <div class="description">Cần Giuộc , Long An</div>
                            <div class="description-tag">
                                <div class="description-item">100 m2</div>
                                <div class="description-item">3 Phòng ngủ</div>
                                <div class="description-item">2 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    1 tỷ 500 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117345" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="chu-gap-ban-giam-luon-2-ty-biet-thu-mini-khu-ten-lua-btan-96m2-4-tang-108-ty-r117342"
                    class="card-cm"
                    title="💥Chủ gấp bán giảm luôn 2 tỷ -
BIỆT THỰ MINI KHU TÊN LỬA - B.TÂN - 96M2 - 4 TẦNG - 10,8 TỶ">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117342_66c9a3282af0b.jpg"
                            alt="💥Chủ gấp bán giảm luôn 2 tỷ -
BIỆT THỰ MINI KHU TÊN LỬA - B.TÂN - 96M2 - 4 TẦNG - 10,8 TỶ" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            💥Chủ gấp bán giảm luôn 2 tỷ - BIỆT THỰ MINI KHU TÊN LỬA - B.TÂN - 96M2 - 4 TẦNG - 10,8 TỶ
                        </h3>
                        <div>
                            <div class="description">Bình Tân , Hồ Chí Minh</div>
                            <div class="description-tag">
                                <div class="description-item">96 m2</div>
                                <div class="description-item">4 Phòng ngủ</div>
                                <div class="description-item">4 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    10 tỷ 800 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117342" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="ban-nha-nguyen-thai-binh-tien-ich-xung-quanh-thiet-ke-hien-dai-gai-chi-113-toi-r117341" class="card-cm" title="BÁN NHÀ NGUYỄN THÁI BÌNH-TIỆN ÍCH XUNG QUANH-THIẾT KẾ HIỆN ĐẠI-GÁI CHỈ-11.3  tỏi">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117341_66c9a2844f175.jpg"
                            alt="BÁN NHÀ NGUYỄN THÁI BÌNH-TIỆN ÍCH XUNG QUANH-THIẾT KẾ HIỆN ĐẠI-GÁI CHỈ-11.3  tỏi" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            BÁN NHÀ NGUYỄN THÁI BÌNH-TIỆN ÍCH XUNG QUANH-THIẾT KẾ HIỆN ĐẠI-GÁI CHỈ-11.3 tỏi
                        </h3>
                        <div>
                            <div class="description">Tân Bình , Hồ Chí Minh</div>
                            <div class="description-tag">
                                <div class="description-item">51 m2</div>
                                <div class="description-item">4 Phòng ngủ</div>
                                <div class="description-item">4 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    11 tỷ 300 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117341" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="building-co-nho-nguyen-luong-bang-573m2-8-tang-8m-mat-tien-dong-tien-105-tynam-r117340"
                    class="card-cm"
                    title="Building cỡ nhỏ – Nguyễn Lương Bằng – 573m2 – 8 tầng – 8m mặt tiền – Dòng tiền 10.5 tỷ/năm.">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117340_66c99f4d0519a.jpg"
                            alt="Building cỡ nhỏ – Nguyễn Lương Bằng – 573m2 – 8 tầng – 8m mặt tiền – Dòng tiền 10.5 tỷ/năm." />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>3</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Building cỡ nhỏ – Nguyễn Lương Bằng – 573m2 – 8 tầng – 8m mặt tiền – Dòng tiền 10.5 tỷ/năm.
                        </h3>
                        <div>
                            <div class="description">Đống Đa , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">573 m2</div>
                                <div class="description-item">10 Phòng ngủ</div>
                                <div class="description-item">10 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    310 tỷ
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117340" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="ban-dat-mat-tien-kinh-doanh-quan-2-100m2-dong-duc-r117339" class="card-cm" title="Bán đất mặt tiền kinh doanh quận 2, 100m2 đông đúc">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117339_66c99ddda6fea.jpg"
                            alt="Bán đất mặt tiền kinh doanh quận 2, 100m2 đông đúc" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>3</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Bán đất mặt tiền kinh doanh quận 2, 100m2 đông đúc
                        </h3>
                        <div>
                            <div class="description">Quận 2 , Hồ Chí Minh</div>
                            <div class="description-tag">
                                <div class="description-item">1000 m2</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    10 tỷ 500 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117339" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="building-co-nho-trung-phung-248m2-9-tang-10m-mat-tien-dong-tien-48-tynam-r117338" class="card-cm" title="Building cỡ nhỏ– Trung Phụng – 248m2 – 9 tầng – 10m mặt tiền – Dòng tiền 4.8 tỷ/năm.">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117338_66c99cf1dadb9.jpg"
                            alt="Building cỡ nhỏ– Trung Phụng – 248m2 – 9 tầng – 10m mặt tiền – Dòng tiền 4.8 tỷ/năm." />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>3</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Building cỡ nhỏ– Trung Phụng – 248m2 – 9 tầng – 10m mặt tiền – Dòng tiền 4.8 tỷ/năm.
                        </h3>
                        <div>
                            <div class="description">Đống Đa , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">248 m2</div>
                                <div class="description-item">2 Phòng ngủ</div>
                                <div class="description-item">10 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    177 tỷ
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117338" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="ngo-gia-tu-phuong-9-quan-10-gia-52-ty-tl-r117337"
                    class="card-cm"
                    title="Ngô Gia Tự Phường 9 Quận 10


- Giá 5.2 tỷ TL">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117337_66c996f9371ab.jpg"
                            alt="Ngô Gia Tự Phường 9 Quận 10


- Giá 5.2 tỷ TL" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Ngô Gia Tự Phường 9 Quận 10 - Giá 5.2 tỷ TL
                        </h3>
                        <div>
                            <div class="description">Quận 10 , Hồ Chí Minh</div>
                            <div class="description-tag">
                                <div class="description-item">38 m2</div>
                                <div class="description-item">3 Phòng ngủ</div>
                                <div class="description-item">2 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    5 tỷ 200 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117337" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="ban-nha-truong-chinh-khuong-thuong-50m-5-tang-72-ti-phu-hop-de-o-hoac-lam-ccmn-r117335"
                    class="card-cm"
                    title="BÁN NHÀ TRƯỜNG CHINH - KHƯƠNG THƯỢNG 50M 5 TẦNG 7.2 TỈ PHÙ HỢP ĐỂ Ở HOẶC LÀM CCMN">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117335_66c991c8e0abf.jpg"
                            alt="BÁN NHÀ TRƯỜNG CHINH - KHƯƠNG THƯỢNG 50M 5 TẦNG 7.2 TỈ PHÙ HỢP ĐỂ Ở HOẶC LÀM CCMN" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>3</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            BÁN NHÀ TRƯỜNG CHINH - KHƯƠNG THƯỢNG 50M 5 TẦNG 7.2 TỈ PHÙ HỢP ĐỂ Ở HOẶC LÀM CCMN
                        </h3>
                        <div>
                            <div class="description">Đống Đa , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">50 m2</div>
                                <div class="description-item">6 Phòng ngủ</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    7 tỷ 200 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117335" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="pho-phu-thuong-phu-xa-ngop-bank-ban-gap-r117334" class="card-cm" title="PHỐ PHÚ THƯỢNG - PHÚ XÁ - NGỘP BANK - BÁN GẤP">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117334_66c98f25b78ce.jpg"
                            alt="PHỐ PHÚ THƯỢNG - PHÚ XÁ - NGỘP BANK - BÁN GẤP" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>1</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            PHỐ PHÚ THƯỢNG - PHÚ XÁ - NGỘP BANK - BÁN GẤP
                        </h3>
                        <div>
                            <div class="description">Tây Hồ , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">160 m2</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    24 tỷ
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117334" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="nha-1do-nhuan-ngay-son-ky-sat-mat-tien-3-tang-3pn-27m2-gia-35-ty-r117332" class="card-cm" title="NHÀ 1/ĐỖ NHUẬN - NGAY SƠN KỲ - SÁT MẶT TIỀN - 3 TẦNG 3PN - 27M2 - GIÁ 3.5 TỶ">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117332_66c98a94a7607.jpg"
                            alt="NHÀ 1/ĐỖ NHUẬN - NGAY SƠN KỲ - SÁT MẶT TIỀN - 3 TẦNG 3PN - 27M2 - GIÁ 3.5 TỶ" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>4</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            NHÀ 1/ĐỖ NHUẬN - NGAY SƠN KỲ - SÁT MẶT TIỀN - 3 TẦNG 3PN - 27M2 - GIÁ 3.5 TỶ
                        </h3>
                        <div>
                            <div class="description">Tân Phú , Hồ Chí Minh</div>
                            <div class="description-tag">
                                <div class="description-item">27 m2</div>
                                <div class="description-item">3 Phòng ngủ</div>
                                <div class="description-item">3 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    3 tỷ 500 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117332" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="ban-nha-ngoc-khanhba-dinh-nha-dep-o-ngayvi-tri-depngay-gan-mat-phongo-thong-r117330" class="card-cm" title="BÁN NHÀ NGỌC KHÁNH/BA ĐÌNH - NHÀ ĐẸP Ở NGAY/VỊ TRÍ ĐẸP/NGAY GẦN MẶT PHỐ/NGÕ THÔNG">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117330_66c987f61a4da.jpg"
                            alt="BÁN NHÀ NGỌC KHÁNH/BA ĐÌNH - NHÀ ĐẸP Ở NGAY/VỊ TRÍ ĐẸP/NGAY GẦN MẶT PHỐ/NGÕ THÔNG" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            BÁN NHÀ NGỌC KHÁNH/BA ĐÌNH - NHÀ ĐẸP Ở NGAY/VỊ TRÍ ĐẸP/NGAY GẦN MẶT PHỐ/NGÕ THÔNG
                        </h3>
                        <div>
                            <div class="description">Ba Đình , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">40 m2</div>
                                <div class="description-item">3 Phòng ngủ</div>
                                <div class="description-item">4 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    9 tỷ 100 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117330" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="ban-nha-ngay-cong-lang-van-phu-ngo-o-to-nha-xay-moi-dang-hoan-thien-r117329" class="card-cm" title="BÁN NHÀ NGAY CỔNG LÀNG VĂN PHÚ – NGÕ Ô TÔ – NHÀ XÂY MỚI ĐANG HOÀN THIỆN">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117329_66c9857247888.jpg"
                            alt="BÁN NHÀ NGAY CỔNG LÀNG VĂN PHÚ – NGÕ Ô TÔ – NHÀ XÂY MỚI ĐANG HOÀN THIỆN" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>2</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            BÁN NHÀ NGAY CỔNG LÀNG VĂN PHÚ – NGÕ Ô TÔ – NHÀ XÂY MỚI ĐANG HOÀN THIỆN
                        </h3>
                        <div>
                            <div class="description">Hà Đông , Hà Nội</div>
                            <div class="description-tag">
                                <div class="description-item">34 m2</div>
                                <div class="description-item">3 Phòng ngủ</div>
                                <div class="description-item">4 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    8 tỷ 200 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117329" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="tan-binh-nha-dep-23m2-2-tang-hem-bagac-cach-1-can-ra-hxt-nhinh-3ty-r117327" class="card-cm" title="TÂN BINH - NHÀ ĐẸP - 23M2 - 2 TẦNG - HẺM BAGAC - CÁCH 1 CĂN RA HXT - NHỈNH 3TY">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117327_66c983f2696e7.jpg"
                            alt="TÂN BINH - NHÀ ĐẸP - 23M2 - 2 TẦNG - HẺM BAGAC - CÁCH 1 CĂN RA HXT - NHỈNH 3TY" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            TÂN BINH - NHÀ ĐẸP - 23M2 - 2 TẦNG - HẺM BAGAC - CÁCH 1 CĂN RA HXT - NHỈNH 3TY
                        </h3>
                        <div>
                            <div class="description">Tân Bình , Hồ Chí Minh</div>
                            <div class="description-tag">
                                <div class="description-item">23 m2</div>
                                <div class="description-item">1 Phòng ngủ</div>
                                <div class="description-item">2 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    3 tỷ 400 triệu
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117327" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>

                <a
                    href="khach-san-trung-tam-da-lat-vi-tri-dac-dia-tien-nghi-day-du-gia-dau-tu-chi-30-ty-r117326"
                    class="card-cm"
                    title="Khách sạn trung tâm Đà Lạt - Vị trí đắc địa, tiện nghi đầy đủ - giá đầu tư chỉ 30 tỷ!!!">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117326_66c983c8a8955.jpg"
                            alt="Khách sạn trung tâm Đà Lạt - Vị trí đắc địa, tiện nghi đầy đủ - giá đầu tư chỉ 30 tỷ!!!" />
                        <div class="see">
                            <div><img src="assets/img/camera.svg" /></div>
                            <div>6</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            Khách sạn trung tâm Đà Lạt - Vị trí đắc địa, tiện nghi đầy đủ - giá đầu tư chỉ 30 tỷ!!!
                        </h3>
                        <div>
                            <div class="description">Đà Lạt , Lâm Đồng</div>
                            <div class="description-tag">
                                <div class="description-item">72 m2</div>
                                <div class="description-item">17 Phòng ngủ</div>
                                <div class="description-item">18 WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    30 tỷ
                                </div>

                                <div class="time">
                                    5 giờ trước
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117326" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="paging">
                    <nav aria-label=" Page navigation example">
                        <ul class="pagination">
                            <div class="paging">
                                <ul class="pagination">
                                    <li class="disabled"><span>&laquo;</span></li>

                                    <li class="active"><span>1</span></li>
                                    <li><a href="ban-nha/p2">2</a></li>
                                    <li><a href="ban-nha/p3">3</a></li>
                                    <li><a href="ban-nha/p4">4</a></li>
                                    <li><a href="ban-nha/p5">5</a></li>
                                    <li><a href="ban-nha/p6">6</a></li>
                                    <li><a href="ban-nha/p7">7</a></li>
                                    <li><a href="ban-nha/p8">8</a></li>
                                    <li><a href="ban-nha/p9">9</a></li>
                                    <li><a href="ban-nha/p10">10</a></li>

                                    <li class="disabled"><span>...</span></li>

                                    <li><a href="ban-nha/p732">732</a></li>
                                    <li><a href="ban-nha/p733">733</a></li>

                                    <li><a href="ban-nha/p2" rel="next">&raquo;</a></li>
                                </ul>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="description-text mt-4 pb-4">
                <p class="mb-3">
                    Kênh thông tin <strong>Batdongsan.vn</strong> là kênh giao dịch <strong>Bán Nhà</strong> trực tuyến giá rẻ, uy tín và chất lượng hàng đầu Việt Nam. Tại đây, khách hàng có thể nắm bắt được thông tin về giá bán, tiến độ
                    thi công công trình, thủ tục thanh toán sản phẩm, pháp lý và các chính sách ưu đãi vay vốn một các dễ dàng và thuận tiện. Ngoài ra, website còn giúp người mua và người bán dễ dàng chọn lựa cũng như so sánh để tìm ra cho
                    mình một sản phẩm bất động sản nói chung và Bán Nhà nói riêng, phù hợp với tài chính và nhu cầu cá nhân.
                </p>
            </div>
        </div>

        <div class="col-md-3 d-none d-lg-block col-sm-12 right-element">
            <div class="form-contrainer">
                <div class="filter-container">
                    <div class="intro-filter">Lọc theo khoảng giá</div>
                </div>
                <div>
                    <div id="listResults">
                        <div class="col-xs-12">
                            <div class="col-xs-2">
                                <ul class="re__sidebar-box re__price-box">
                                    <li>
                                        <a href="ban-nha?priceMin=0&amp;priceMax=12" class="">Thỏa thuận</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=0&amp;priceMax=500000000">
                                            < 500 triệu</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=500000000&amp;priceMax=800000000">500 - 800 triệu</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=800000000&amp;priceMax=1000000000">800 triệu - 1 tỷ</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=1000000000&amp;priceMax=2000000000">1 - 2 tỷ</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=2000000000&amp;priceMax=3000000000">2 - 3 tỷ</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=3000000000&amp;priceMax=5000000000">3 - 5 tỷ</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=5000000000&amp;priceMax=7000000000">5 - 7 tỷ</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=7000000000&amp;priceMax=10000000000">7 - 10 tỷ</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=10000000000&amp;priceMax=20000000000">10 - 20 tỷ</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=20000000000&amp;priceMax=30000000000">20 - 30 tỷ</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=30000000000&amp;priceMax=40000000000">30 - 40 tỷ</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=40000000000&amp;priceMax=60000000000">40 - 60 tỷ</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?priceMin=60000000000">Trên 60 tỷ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-contrainer">
                <div class="filter-container">
                    <div class="intro-filter">Lọc theo diện tích</div>
                </div>
                <div>
                    <div id="listResults">
                        <div class="col-xs-12">
                            <div class="col-xs-2 text-center">
                                <ul class="re__sidebar-box re__price-box">
                                    <li>
                                        <a href="ban-nha?areaMin=0&amp;areaMax=30">≤ 30 m²</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?areaMin=30&amp;areaMax=50">30 - 50 m²</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?areaMin=50&amp;areaMax=80">50 - 80 m²</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?areaMin=80&amp;areaMax=100">80 - 100 m²</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?areaMin=100&amp;areaMax=150">100 - 150 m²</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?areaMin=150&amp;areaMax=200">150 - 200 m²</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?areaMin=200&amp;areaMax=250">200 - 250 m²</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?areaMin=250&amp;areaMax=300">250 - 300 m²</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?areaMin=300&amp;areaMax=500">300 - 500 m²</a>
                                    </li>
                                    <li>
                                        <a href="ban-nha?areaMin=500">> 500 m²</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-contrainer">
                <div class="filter-container">
                    <h2 class="intro-filter">Dự án nổi bật</h2>
                </div>
                <div>
                    <div id="listResults">
                        <div class="col-xs-12">
                            <div class="col-xs-2 text-left">
                                <ul class="re__sidebar-box re__price-box">
                                    <li class="re__sidebar-box-item">
                                        <a href="du-an-khu-dan-cu-hong-long" title="Khu dân cư Hồng Long">Khu dân cư Hồng Long </a>
                                    </li>
                                    <li class="re__sidebar-box-item">
                                        <a href="du-an-khu-dan-cu-an-dien-phat" title="Khu dân cư An Điền Phát">Khu dân cư An Điền Phát </a>
                                    </li>
                                    <li class="re__sidebar-box-item">
                                        <a href="du-an-best-western-premier-sapphire-ha-long" title="Best Western Premier Sapphire Hạ Long">Best Western Premier Sapphire Hạ Long </a>
                                    </li>
                                    <li class="re__sidebar-box-item">
                                        <a href="du-an-khu-dan-cu-duc-linh-11" title="Khu dân cư Đức Linh 11">Khu dân cư Đức Linh 11 </a>
                                    </li>
                                    <li class="re__sidebar-box-item">
                                        <a href="du-an-khang-an-residence" title="Khang An Residence">Khang An Residence </a>
                                    </li>
                                    <li class="re__sidebar-box-item">
                                        <a href="du-an-nha-pho-one-palace-2" title="Nhà phố One Palace 2">Nhà phố One Palace 2 </a>
                                    </li>
                                    <li class="re__sidebar-box-item">
                                        <a href="du-an-marina-diamond-town" title="Marina Diamond Town">Marina Diamond Town </a>
                                    </li>
                                    <li class="re__sidebar-box-item">
                                        <a href="du-an-epic-town-dien-thang" title="Epic Town Điện Thắng">Epic Town Điện Thắng </a>
                                    </li>
                                    <li class="re__sidebar-box-item">
                                        <a href="du-an-sunshine-crystal-river" title="Sunshine Crystal River">Sunshine Crystal River </a>
                                    </li>
                                    <li class="re__sidebar-box-item">
                                        <a href="du-an-duc-linh-center" title="Đức Linh Center">Đức Linh Center </a>
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

<div id="ft-t" class="container mt-3">
    <h4 class="title">NHÀ ĐẤT BÁN</h4>
    <div class="row row-cols-2 row-cols-md-4">
        <div class="col">
            <ul>
                Nhà đất Hà Nội
                <li>
                    <a href="/nha-dat-ban-ha-noi">Bán nhà Hà Nội</a>
                </li>
                <li>
                    <a href="/ban-can-ho-chung-cu-bac-tu-liem">Chung cư Bắc Từ Liêm</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-ha-dong">Nhà đất Hà Đông </a>
                </li>
                <li>
                    <a href="/nha-dat-ban-long-bien">Nhà đất Long Biên </a>
                </li>

                <li>
                    <a href="/nha-dat-ban-cau-giay">Nhà đất Cầu Giấy </a>
                </li>

                <li>
                    <a href="/nha-dat-ban-thanh-xuan">Nhà đất Thanh Xuân </a>
                </li>
                <li>
                    <a href="/ban-nha-rieng-bac-tu-liem">Bán nhà Bắc Từ Liêm</a>
                </li>
                <li>
                    <a href="/ban-can-ho-chung-cu-ha-dong">Chung cư Hà Đông</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-dong-anh">Nhà đất Đông Anh</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul>
                Nhà đất TP. Hồ Chí Minh
                <li>
                    <a href="/nha-dat-ban-tp-hcm">Nhà đất TP. Hồ Chí Minh</a>
                </li>

                <li>
                    <a href="/ban-nha-rieng-quan-1">Bán nhà Quận 1</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-quan-2">Bán nhà Quận 2</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-quan-3">Bán nhà Quận 3</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-quan-4">Bán nhà Quận 4</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-quan-6">Bán nhà Quận 6</a>
                </li>
                <li>
                    <a href="/ban-nha-rieng-quan-7">Bán nhà Quận 7</a>
                </li>
                <li>
                    <a href="/ban-nha-rieng-quan-8">Bán nhà Quận 8</a>
                </li>
                <li>
                    <a href="/ban-nha-rieng-quan-9">Bán nhà Quận 9</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul>
                Nhà đất Đà Nẵng
                <li>
                    <a href="/nha-dat-ban-da-nang">Nhà đất Đà Nẵng</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-cam-le-ddn">Nhà đất Cẩm Lệ</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-lien-chieu-ddn">Nhà đất Liên Chiểu</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-hoa-vang-ddn">Nhà đất Hòa Vang</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-ngu-hanh-son-ddn">Nhà đất Ngũ Hành Sơn</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-son-tra-ddn">Nhà đất Sơn Trà</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-thanh-khe-ddn">Nhà đất Thanh Khê</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul>
                Nhà đất Vũng Tàu
                <li>
                    <a href="/nha-dat-ban-ba-ria-vung-tau">Nhà đất Vũng Tàu</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-ba-ria-vt">Nhà đất Bà Rịa</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-chau-duc-vt">Nhà đất Châu Đức</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-con-dao-vt">Nhà đất Côn Đảo</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-long-dien-vt">Nhà đất Long Điền</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-phu-my-vt">Nhà đất Phú Mỹ</a>
                </li>
                <li>
                    <a href="/nha-dat-ban-vung-tau-vt">Nhà đất Thành phố Vũng Tàu </a>
                </li>
                <li>
                    <a href="/nha-dat-ban-xuyen-moc-vt">Nhà đất Xuyên Mộc </a>
                </li>
            </ul>
        </div>
    </div>

    <h4 class="title" style="margin-top: 24px;">CHO THUÊ NHÀ ĐẤT</h4>
    <div class="row row-cols-2 row-cols-md-4">
        <div class="col">
            <ul>
                Nhà đất Hà Nội
                <li>
                    <a href="/cho-thue-nha-rieng-ha-noi">Nhà đất Hà Nội</a>
                </li>
                <li>
                    <a href="/cho-thue-can-ho-chung-cu-ha-noi">Thuê chung cư Hà Nội</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-thanh-xuan">Thuê nhà Thanh Xuân</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-ba-dinh">Thuê nhà Ba Đình</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-bac-tu-liem">Thuê nhà Bắc Từ Liêm</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-cau-giay">Thuê nhà Cầu Giấy</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-chuong-my">Thuê nhà Chương Mỹ</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-ha-dong">Thuê nhà Hà Đông</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-hai-ba-trung">Thuê nhà Hai Bà Trưng</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul>
                Nhà đất TP. Hồ Chí Minh
                <li>
                    <a href="/cho-thue-nha-rieng-tp-hcm">Nhà đất TP. Hồ Chí Minh</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-quan-1">Cho thuê nhà Quận 1</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-quan-2">Cho thuê nhà Quận 2</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-quan-3">Cho thuê nhà Quận 3</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-quan-5">Cho thuê nhà Quận 4</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-quan-6">Cho thuê nhà Quận 6</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-go-vap">Cho thuê nhà Gò Vấp</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-tan-binh">Cho thuê nhà Tân Bình</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-quan-9">Cho thuê nhà Quận 9</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul>
                Nhà đất Đà Nẵng
                <li>
                    <a href="/cho-thue-nha-rieng-cam-le-ddn">Cho thuê nhà Cẩm Lệ</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-hai-chau-ddn">Cho thuê nhà Hải Châu</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-lien-chieu-ddn">Cho thuê nhà Liên Chiểu</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-ngu-hanh-son-ddn">Cho thuê nhà Ngũ Hành Sơn</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-son-tra-ddn">Cho thuê nhà Sơn Trà</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-rieng-thanh-khe-ddn">Cho thuê nhà Thanh Khê</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul>
                Nhà đất Vũng Tàu
                <li>
                    <a href="/nha-dat-cho-thue-chau-duc-vt">Nhà đất thuê Châu Đức</a>
                </li>
                <li>
                    <a href="/nha-dat-cho-thue-dat-do-vt">Nhà đất thuê Đất Đỏ</a>
                </li>
                <li>
                    <a href="/nha-dat-cho-thue-long-dien-vt">Nhà đất thuê Long Điền</a>
                </li>
                <li>
                    <a href="/ha-dat-cho-thue-phu-my-vt">Nhà đất thuê Phú Mỹ</a>
                </li>
                <li>
                    <a href="/nha-dat-cho-thue-vung-tau-vt">Nhà đất thuê Thành phố Vũng Tàu</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection