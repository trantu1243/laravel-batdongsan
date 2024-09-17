@extends('layouts.index')

@section('title', 'Batdongsan')

@section('content')


<h1 style="display: none;"> Nền tảng Quản Lí Bất Động Sản Việt Nam</h1>

<form id="main" class="mt-4 container" method="get" action="search-duan">
    <h2 class="mb-3 d-none d-sm-block">Chào mừng bạn đến với Website Batdongsan!</h2>
    <div class="desc d-none d-sm-flex" style="gap: 16px;">
        <span>Tìm nhà phố, dự án, cho thuê và nhiều hơn nữa</span>
        <a href="ban-nha-ha-noi" title="Nhà riêng Hà Nội">Nhà riêng Hà Nội</a>
        <a href="ban-nha-cau-giay-ha-noi">Nhà riêng Cầu Giấy</a>
        <a href="cho-thue-nha-quan-2-ho-chi-minh">Căn hộ Quận 2</a>
    </div>
    <div class="main-radio d-none d-sm-flex gap-24 align-items-center mt-4">
        <div class="form-radio d-flex align-items-center gap-8">
            <input type="radio" id="home-radio1" name="the_loai" class="custom-radio" value="1" checked />
            <label for="home-radio1" class="mb-0">Nhà đất bán</label>
        </div>
        <div class="form-radio d-flex align-items-center gap-8">
            <input type="radio" id="home-radio2" name="the_loai" class="custom-radio" value="2" />
            <label for="home-radio2" class="mb-0">Cho thuê</label>
        </div>
    </div>
    <div class="main-search-container d-none d-sm-flex">
        <div class="dropdown-main filter-dropdown">
            <input type="checkbox" />
            <div class="fix">
                <div>
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 22.75H2C1.59 22.75 1.25 22.41 1.25 22C1.25 21.59 1.59 21.25 2 21.25H22C22.41 21.25 22.75 21.59 22.75 22C22.75 22.41 22.41 22.75 22 22.75Z" />
                        <path
                            d="M3.7002 22H2.2002L2.25019 9.96996C2.25019 9.11996 2.6402 8.32998 3.3102 7.80998L10.3102 2.35997C11.3002 1.58997 12.6902 1.58997 13.6902 2.35997L20.6902 7.79997C21.3502 8.31997 21.7502 9.12996 21.7502 9.96996V22H20.2502V9.97997C20.2502 9.59997 20.0702 9.22998 19.7702 8.98998L12.7702 3.54997C12.3202 3.19997 11.6902 3.19997 11.2302 3.54997L4.23019 8.99999C3.93019 9.22999 3.75019 9.59997 3.75019 9.97997L3.7002 22Z" />
                        <path
                            d="M14.5 22.75H9.5C9.09 22.75 8.75 22.41 8.75 22V18.5C8.75 17.26 9.76 16.25 11 16.25H13C14.24 16.25 15.25 17.26 15.25 18.5V22C15.25 22.41 14.91 22.75 14.5 22.75ZM10.25 21.25H13.75V18.5C13.75 18.09 13.41 17.75 13 17.75H11C10.59 17.75 10.25 18.09 10.25 18.5V21.25Z" />
                        <path
                            d="M9.5 14.5H7.5C6.54 14.5 5.75 13.71 5.75 12.75V11.25C5.75 10.29 6.54 9.5 7.5 9.5H9.5C10.46 9.5 11.25 10.29 11.25 11.25V12.75C11.25 13.71 10.46 14.5 9.5 14.5ZM7.5 11C7.36 11 7.25 11.11 7.25 11.25V12.75C7.25 12.89 7.36 13 7.5 13H9.5C9.64 13 9.75 12.89 9.75 12.75V11.25C9.75 11.11 9.64 11 9.5 11H7.5Z" />
                        <path
                            d="M16.5 14.5H14.5C13.54 14.5 12.75 13.71 12.75 12.75V11.25C12.75 10.29 13.54 9.5 14.5 9.5H16.5C17.46 9.5 18.25 10.29 18.25 11.25V12.75C18.25 13.71 17.46 14.5 16.5 14.5ZM14.5 11C14.36 11 14.25 11.11 14.25 11.25V12.75C14.25 12.89 14.36 13 14.5 13H16.5C16.64 13 16.75 12.89 16.75 12.75V11.25C16.75 11.11 16.64 11 16.5 11H14.5Z" />
                        <path
                            d="M19.0001 7.75C18.5901 7.75 18.2501 7.42001 18.2501 7.01001L18.2301 4.75H14.5801C14.1701 4.75 13.8301 4.41 13.8301 4C13.8301 3.59 14.1701 3.25 14.5801 3.25H18.9801C19.3901 3.25 19.7301 3.57999 19.7301 3.98999L19.7601 6.98999C19.7501 7.40999 19.4201 7.75 19.0001 7.75C19.0101 7.75 19.0001 7.75 19.0001 7.75Z" />
                    </svg>
                    <span class="loai-nha-dat-value" data-default="Loại nhà đất">Loại nhà đất</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-auto">
                        <path
                            d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z" />
                    </svg>
                </div>
                <ul class="dropdown-container form-checkbox-container category-filter">
                    <div class="p-0 d-flex flex-grow-1 flex-column render-html" style="flex: 1; overflow-y: scroll; background-color: #fff;">
                        <li class="form-checkbox" data-count="0">
                            <label for="main-checkbox-sub-m-1">Tất cả nhà đất</label>
                            <input id="main-checkbox-sub-m-1" type="checkbox" value="tat-ca-nha-dat-ban" name="tat_ca_nha_dat_ban" />
                        </li>
                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-2">Bán Nhà</label>
                            <input id="main-checkbox-sub-m-2" type="checkbox" value="11" name="CategoryIdsAsString[]" />
                        </li>
                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-3">Bán Đất</label>
                            <input id="main-checkbox-sub-m-3" type="checkbox" value="12" name="CategoryIdsAsString[]" />
                        </li>
                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-4">Bán Biệt thự</label>
                            <input id="main-checkbox-sub-m-4" type="checkbox" value="13" name="CategoryIdsAsString[]" />
                        </li>
                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-5">Bán BĐS thương mại</label>
                            <input id="main-checkbox-sub-m-5" type="checkbox" value="14" name="CategoryIdsAsString[]" />
                        </li>
                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-6">Bán Căn hộ chung cư</label>
                            <input id="main-checkbox-sub-m-6" type="checkbox" value="15" name="CategoryIdsAsString[]" />
                        </li>
                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-7">Bán Văn phòng</label>
                            <input id="main-checkbox-sub-m-7" type="checkbox" value="16" name="CategoryIdsAsString[]" />
                        </li>
                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-8">Bán BĐS công nghiệp</label>
                            <input id="main-checkbox-sub-m-8" type="checkbox" value="17" name="CategoryIdsAsString[]" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-9">Bán BĐS nông nghiệp</label>
                            <input id="main-checkbox-sub-m-9" type="checkbox" value="18" name="CategoryIdsAsString[]" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-10">Bán BĐS tâm linh</label>
                            <input id="main-checkbox-sub-m-10" type="checkbox" value="19" name="CategoryIdsAsString[]" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-11">Bán BĐS khác</label>
                            <input id="main-checkbox-sub-m-11" type="checkbox" value="20" name="CategoryIdsAsString[]" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-m-12">Bán BĐS dịch vụ</label>
                            <input id="main-checkbox-sub-m-12" type="checkbox" value="62" name="CategoryIdsAsString[]" />
                        </li>
                    </div>

                    <li class="form-footer">
                        <p class="form-checkbox-resetall">
                            <img src="./assets/img/refresh-2.svg" alt="" />
                            Đặt lại
                        </p>
                        <span class="form-close">Áp dụng</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="search-main">
            <input type="text" name="KeywordOrigin" id="KeywordOrigin" placeholder="Tìm kiếm địa chỉ, dự án..." />
            <button type="submit" style="width: 159px; background: rgb(224, 60, 49); border-radius: 0px 28px 28px 0px; color: #ffffff;">
                <i class="fa fa-search" aria-hidden="true" style="color: #ffffff;"></i>
                Tìm kiếm
            </button>
        </div>
    </div>
    <div class="search-mobile-main d-flex d-sm-none" onclick="this.nextElementSibling .classList.add('show')">
        <input type="text" placeholder="Tìm kiếm địa chỉ, dự án.." />
        <button>
            <img src="./assets/img/search-normal.svg" alt="" />
        </button>
    </div>
    <div class="filter-container filter-dropdown d-flex gap-24">
        <div class="mobile-header d-flex d-sm-none">
            <h4>Tìm kiếm bất động sản</h4>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.closest('.filter-container.show').classList.remove('show')">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>
        <ul class="nav nav-tabs mobile-nav d-flex d-sm-none" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#profile" role="tab" data-value="1" data-toggle="tab">Nhà đất bán</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-value="2" href="#buzz" role="tab" data-toggle="tab">Cho thuê</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-value="3" href="#references" role="tab" data-toggle="tab">Sang nhượng</a>
            </li>
        </ul>
        <div class="search-mobile-main d-flex d-sm-none">
            <input type="text" name="" placeholder="Tìm kiếm địa chỉ, dự án.." />
            <button type="submit">
                <img src="assets/img/search-normal.svg" alt="" />
            </button>
        </div>
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1" style="flex: 1;">
            <div class="col d-block d-sm-none">
                <label class="mobile-filter-label d-flex d-sm-none">Loại nhà đất</label>
                <div class="location-filter category-filter">
                    <input class="switch" type="checkbox" />
                    <div class="dropdown-btn">
                        <p>
                            <span data-default="Tất cả" class="location-filter-value price-filter-value loai-nha-dat-value">Tất cả</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-auto">
                                <path
                                    d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z" />
                            </svg>
                        </p>
                        <ul class="dropdown-container dropdown-location-menu form-checkbox-container dropdown-menu-mobile">
                            <div class="dropdown-menu-mobile-header d-flex d-sm-none">
                                <label>Loại nhà đất bán</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </div>
                            <div class="render-html">
                                <li class="form-checkbox" data-count="0">
                                    <label for="main-checkbox-sub-1">Tất cả nhà đất</label>
                                    <input id="main-checkbox-sub-1" name="tat_ca_nha_dat_ban" value="tat-ca-nha-dat-ban" type="checkbox" />
                                </li>
                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-2">Căn hộ chung cư</label>
                                    <input name="CategoryIdsAsString[]" value="1" id="main-checkbox-sub-2" type="checkbox" />
                                </li>
                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-3">Bán nhà riêng</label>
                                    <input name="CategoryIdsAsString[]" value="2" id="main-checkbox-sub-3" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-4">Bán nhà biệt thự, liền kề</label>
                                    <input name="CategoryIdsAsString[]" value="3" id="main-checkbox-sub-4" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-5">Bán nhà mặt phố</label>
                                    <input name="CategoryIdsAsString[]" value="4" id="main-checkbox-sub-5" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-6">Shophouse, nhà phố</label>
                                    <input name="CategoryIdsAsString[]" value="5" id="main-checkbox-sub-6" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-7">Bán đất nền dự án</label>
                                    <input name="CategoryIdsAsString[]" value="6" id="main-checkbox-sub-7" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-8">Bán đất</label>
                                    <input name="CategoryIdsAsString[]" value="7" id="main-checkbox-sub-8" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-9">Trang trại, khu nghỉ dưỡng</label>
                                    <input name="CategoryIdsAsString[]" value="8" id="main-checkbox-sub-9" type="checkbox" />
                                </li>
                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-10">Bán condotel</label>
                                    <input name="CategoryIdsAsString[]" value="9" id="main-checkbox-sub-10" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-11">Bán kho, nhà xưởng</label>
                                    <input name="CategoryIdsAsString[]" value="10" id="main-checkbox-sub-11" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-12">Bán loại bất động sản khác</label>
                                    <input name="CategoryIdsAsString[]" value="11" id="main-checkbox-sub-12" type="checkbox" />
                                </li>
                            </div>

                            <li class="form-footer">
                                <p class="form-checkbox-resetall">
                                    <img src="./assets/img/refresh-2.svg" alt="" />
                                    Đặt lại
                                </p>
                                <span class="form-close">Áp dụng</span>
                            </li>
                        </ul>
                        <div class="overlay" onclick="this.previousElementSibling.querySelector('.form-close').click()"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <label class="mobile-filter-label d-flex d-sm-none">Khu vực & Dự án</label>
                <div class="location-filter filter-dropdown">
                    <input class="switch" type="checkbox" />
                    <div class="dropdown-btn">
                        <p>
                            <span id="location-filter-value" data-default="Toàn quốc" class="location-filter-value">Toàn quốc</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-auto">
                                <path
                                    d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z" />
                            </svg>
                        </p>
                        <ul class="dropdown-location-menu dropdown-menu-mobile">
                            <div class="dropdown-menu-mobile-header d-flex d-sm-none">
                                <label>Khu vực & Dự án</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </div>
                            <span class="d-none d-sm-block">Khu vực & Dự án</span>
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
                                <span class="form-close">Áp dụng</span>
                            </li>
                        </ul>
                        <div class="overlay" onclick="this.previousElementSibling.querySelector('.form-close').click()"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <label class="mobile-filter-label d-flex d-sm-none">Mức giá</label>

                <div class="price-filter filter-dropdown">
                    <input class="switch" type="checkbox" />
                    <div class="dropdown-btn">
                        <p>
                            <span class="price-filter-value">Mức giá</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-auto">
                                <path
                                    d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z" />
                            </svg>
                        </p>
                        <ul class="dropdown-location-menu dropdown-menu-mobile">
                            <div class="dropdown-menu-mobile-header d-flex d-sm-none">
                                <label>Mức giá</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </div>
                            <div class="output-value">
                                <p class="item">Từ <span class="from-value">0 Triệu</span></p>
                                <p class="item">Đến <span class="to-value">60 Tỷ</span></p>
                            </div>
                            <div class="range-slider range-slider-home-price" data-ticks-position="top" style="--min: 0; --max: 600; --value-a: 0; --value-b: 400; --suffix: '%'; --text-value-a: '0 Triệu'; --text-value-b: '60 Tỷ';">
                                <input class="input-min" type="range" min="0" max="600" value="0" name="priceMin" />
                                <input
                                    type="range"
                                    class="input-max"
                                    min="0"
                                    max="600"
                                    value="400"
                                    name="priceMax"
                                    oninput="this.parentNode.style.setProperty('--value-b',this.value); this.parentNode.style.setProperty('--text-value-b', JSON.stringify(this.value))" />
                                <div class="range-slider__progress"></div>
                            </div>
                            <ul class="list-value">
                                <div style="max-height: 250px; overflow: auto; width: 100%;">
                                    <li class="value-item">Tất cả mức giá</li>
                                    <li class="value-item">
                                        < 500 triệu</li>
                                    <li class="value-item">500 - 800 triệu</li>
                                    <li class="value-item">800 triệu - 1 tỷ</li>
                                    <li class="value-item">1 - 2 tỷ</li>
                                    <li class="value-item">2 - 3 tỷ</li>
                                    <li class="value-item">3 - 5 tỷ</li>
                                    <li class="value-item">5 - 7 tỷ</li>
                                    <li class="value-item">7 - 10 tỷ</li>
                                    <li class="value-item">10 - 20 tỷ</li>
                                    <li class="value-item">20 - 30 tỷ</li>
                                    <li class="value-item">30 - 40 tỷ</li>
                                    <li class="value-item">40 - 60 tỷ</li>
                                    <li class="value-item">Trên 60 tỷ</li>
                                    <li class="value-item">Thỏa thuận</li>
                                </div>

                                <li class="form-footer">
                                    <p class="form-checkbox-resetall">
                                        <img src="./assets/img/refresh-2.svg" alt="" />
                                        Đặt lại
                                    </p>
                                    <span class="form-close">Áp dụng</span>
                                </li>
                            </ul>
                        </ul>
                        <div class="overlay" onclick="this.previousElementSibling.querySelector('.form-close').click()"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <label class="mobile-filter-label d-flex d-sm-none">Diện tích</label>

                <div class="price-filter filter-dropdown area-filter">
                    <input class="switch" type="checkbox" />
                    <div class="dropdown-btn">
                        <p>
                            <span class="price-filter-value">Diện tích</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-auto">
                                <path
                                    d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z" />
                            </svg>
                        </p>
                        <ul class="dropdown-location-menu dropdown-menu-mobile">
                            <div class="dropdown-menu-mobile-header d-flex d-sm-none">
                                <label>Diện tích</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="this.parentNode.parentNode.querySelector('.form-close').click()">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </div>
                            <div class="output-value">
                                <p class="item">Từ <span class="from-value">0 m²</span></p>
                                <p class="item">Đến <span class="to-value">500 m²</span></p>
                            </div>
                            <div class="range-slider range-slider-home-price" data-ticks-position="top" style="--min: 0; --max: 500; --value-a: 0; --value-b: 500; --suffix: '%'; --text-value-a: '0 Triệu'; --text-value-b: '60 Tỷ';">
                                <input class="input-min" type="range" name="areaMin" min="0" max="500" value="0" />
                                <input type="range" name="areaMax" class="input-max" min="0" max="500" value="500" />
                                <div class="range-slider__progress"></div>
                            </div>
                            <ul class="list-value">
                                <div style="max-height: 250px; overflow: auto; width: 100%;">
                                    <li class="value-item">Tất cả diện tích</li>
                                    <li class="value-item active"><span style="color: inherit;">&#8804;</span> 30 m²</li>
                                    <li class="value-item">30 - 50 m²</li>
                                    <li class="value-item">50 - 80 m²</li>
                                    <li class="value-item">80 - 100 m²</li>
                                    <li class="value-item">100 - 150 m²</li>
                                    <li class="value-item">150 - 200 m²</li>
                                    <li class="value-item">200 - 250 m²</li>
                                    <li class="value-item">250 - 300 m²</li>
                                    <li class="value-item">300 - 500 m²</li>
                                    <li class="value-item">Trên 500 m²</li>
                                </div>

                                <li class="form-footer">
                                    <p class="form-checkbox-resetall">
                                        <img src="./assets/img/refresh-2.svg" alt="" />
                                        Đặt lại
                                    </p>
                                    <span class="form-close">Áp dụng</span>
                                </li>
                            </ul>
                        </ul>
                        <div class="overlay" onclick="this.previousElementSibling.querySelector('.form-close').click()"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="price-filter filter-dropdown addition-filter">
                    <input class="switch" type="checkbox" />
                    <div class="dropdown-btn">
                        <p>
                            <span class="price-filter-value">Xem Thêm</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="ml-auto">
                                <path
                                    d="M12 16.7999C11.3 16.7999 10.6 16.5299 10.07 15.9999L3.55002 9.47989C3.26002 9.18989 3.26002 8.70989 3.55002 8.41989C3.84002 8.12989 4.32002 8.12989 4.61002 8.41989L11.13 14.9399C11.61 15.4199 12.39 15.4199 12.87 14.9399L19.39 8.41989C19.68 8.12989 20.16 8.12989 20.45 8.41989C20.74 8.70989 20.74 9.18989 20.45 9.47989L13.93 15.9999C13.4 16.5299 12.7 16.7999 12 16.7999Z" />
                            </svg>
                        </p>
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
                                        <input value="3" type="checkbox" name="RoomNumersAsString[]" />
                                        <label for="">3</label>
                                    </div>
                                    <div class="form-custom-checkbox">
                                        <input value="4" type="checkbox" name="RoomNumersAsString[]" />
                                        <label for="">4</label>
                                    </div>
                                    <div class="form-custom-checkbox">
                                        <input value="5" type="checkbox" name="RoomNumersAsString[]" />
                                        <label for="">5</label>
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
                                <span class="form-close">Áp dụng</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-mobile-footer d-flex d-sm-none">
            <div class="filter-reset-btn">
                <img src="./assets/img/refresh-2.svg" alt="" />
                <span>Đặt lại</span>
            </div>
            <button type="submit" class="apply-all-btn">
                Áp dụng
            </button>
        </div>
        <div class="filter-reset-btn d-none d-sm-flex">
            <img src="./assets/img/refresh-2.svg" alt="" />
        </div>
    </div>
</form>

<div id="danhmuc-container " class="container mt-4 mb-5 pb-3">
    <h3 class="title">Tìm trong danh mục</h3>
    <div class="row row-cols-2 row-cols-md-4 d-flex d-lg-none">
        <div class="col mb-2">
            <a href="ban-nha" title="Bán nhà">
                <div class="danhmuc-item">
                    <div>
                        <img src="images/nha-rieng.svg" alt="" />
                    </div>
                    <div>
                        <h5>Bán nhà</h5>
                        <span>18,042</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col mb-2">
            <a title="Biệt thự" href="ban-biet-thu">
                <div class="danhmuc-item">
                    <div>
                        <img src="images/biet-thu.svg" alt="" />
                    </div>
                    <div>
                        <h5>Biệt thự</h5>
                        <span>421</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col mb-2">
            <a href="ban-shophouse">
                <div title="Shop house" class="danhmuc-item">
                    <div>
                        <img src="images/shop-house.svg" alt="" />
                    </div>

                    <div>
                        <h5>Shop house</h5>
                        <span>194</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col mb-2">
            <a title="Cho thuê nhà riêng" href="cho-thue-nha">
                <div class="danhmuc-item">
                    <div>
                        <img src="images/cho-thue.svg" alt="" />
                    </div>

                    <div>
                        <h5>Cho thuê nhà</h5>
                        <span>1,010</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col mb-2">
            <a title="Cho thuê Văn phòng" href="/cho-thue-van-phong">
                <div class="danhmuc-item">
                    <div>
                        <img src="images/van-phong.svg" alt="" />
                    </div>
                    <div>
                        <h5>Văn phòng</h5>
                        <span>462</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col mb-2">
            <a href="ban-dat-nen-du-an" title="Bán đất nền">
                <div class="danhmuc-item">
                    <div>
                        <img src="images/dat-nen.svg" alt="" />
                    </div>

                    <div>
                        <h5>Bán đất nền</h5>
                        <span>1,150</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="swiper danhmuc-swiper d-none d-lg-flex">
        <div class="swiper-wrapper">
            <a title="Bán nhà" href="ban-nha" class="swiper-slide">
                <div class="danhmuc-item">
                    <div>
                        <img src="images/nha-rieng.svg" alt="" />
                    </div>
                    <div>
                        <h5>Bán nhà</h5>
                        <span>18,042 </span>
                    </div>
                </div>
            </a>
            <a title="Biệt thự, liền kề" href="ban-biet-thu" class="swiper-slide">
                <div class="danhmuc-item">
                    <div>
                        <img src="images/biet-thu.svg" alt="" />
                    </div>
                    <div>
                        <h5>Biệt thự</h5>
                        <span>421</span>
                    </div>
                </div>
            </a>
            <a href="ban-shophouse" class="swiper-slide">
                <div title="Shop house" class="danhmuc-item">
                    <div>
                        <img src="images/shop-house.svg" alt="" />
                    </div>

                    <div>
                        <h5>Shop house</h5>
                        <span>194</span>
                    </div>
                </div>
            </a>
            <a title="Cho thuê nhà riêng" href="cho-thue-nha" class="swiper-slide">
                <div class="danhmuc-item">
                    <div>
                        <img src="images/cho-thue.svg" alt="" />
                    </div>

                    <div>
                        <h5>Cho thuê nhà</h5>
                        <span> 1,010</span>
                    </div>
                </div>
            </a>
            <a title="Cho thuê Văn phòng" href="/cho-thue-van-phong" class="swiper-slide">
                <div class="danhmuc-item">
                    <div>
                        <img src="images/van-phong.svg" alt="" />
                    </div>
                    <div>
                        <h5>Văn phòng</h5>
                        <span>462</span>
                    </div>
                </div>
            </a>
            <a href="ban-dat-nen-du-an" class="swiper-slide" title="Bán đất nền">
                <div class="danhmuc-item">
                    <div>
                        <img src="images/dat-nen.svg" alt="" />
                    </div>

                    <div>
                        <h5>Bán đất nền</h5>
                        <span>1,150</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div id="tinhthanh-container" class="container">
    <h3 class="title">Bất động sản theo địa điểm</h3>
    <div class="swiper danhmuc-swiper d-flex d-lg-none">
        <div class="swiper-wrapper">
            <a href="/ban-nha-ha-noi" class="tinhthanh-item h-152 swiper-slide">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-ha-noi.jpeg" alt="Bất động sản Hà Nội" class="img-thumbnail-home" />
                <h5>Hà Nội</h5>
            </a>
            <a href="ban-nha-hai-phong" class="tinhthanh-item h-152 swiper-slide">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-hai-phong.jpg" alt="Bất động sản Hải Phòng" class="img-thumbnail-home" />
                <h5>Hải Phòng</h5>
            </a>

            <a href="/ban-nha-da-nang" class="tinhthanh-item h-152 swiper-slide">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-da-nang.jpeg" alt="Bất động sản Đà Nẵng" class="img-thumbnail-home" />
                <h5>Đà Nẵng</h5>
            </a>
            <a href="/ban-nha-binh-duong" class="tinhthanh-item h-152 swiper-slide">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-binh-duong.png" alt="Bất động sản Bình Dương" class="img-thumbnail-home" />
                <h5>Bình Dương</h5>
            </a>
            <a href="/ban-nha-dong-nai" class="tinhthanh-item h-152 swiper-slide">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-dong-nai.png" alt="Bất động sản Đồng Nai" class="img-thumbnail-home" />

                <h5>Đồng Nai</h5>
            </a>
            <a href="/ban-nha-ho-chi-minh" class="tinhthanh-item h-152 swiper-slide">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-hcm.jpeg" alt="Bất động sản TP. Hồ Chí Minh" class="img-thumbnail-home" />
                <h5>TP. Hồ Chí Minh</h5>
            </a>

            <a href="/ban-dat-ba-ria-vung-tau" class="tinhthanh-item h-152 swiper-slide">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-ba-ria-vung-tau.jpg" alt="Bất động sản Bà Rịa Vũng Tàu" class="img-thumbnail-home" />
                <h5>Bà Rịa Vũng Tàu</h5>
            </a>

            <a href="/ban-nha-can-tho" class="tinhthanh-item h-152 swiper-slide">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-can-tho.jpg" alt="Bất động sản Cần Thơ" class="img-thumbnail-home" />

                <h5>Cần Thơ</h5>
            </a>
        </div>
    </div>

    <div class="row row-cols-2 row-cols-md-4 d-none d-lg-flex">
        <div class="col">
            <a href="/ban-nha-ha-noi" class="tinhthanh-item h-152">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-ha-noi.jpeg" alt="Bất động sản Hà Nội" class="img-thumbnail-home" />
                <h5>Hà Nội</h5>
            </a>
        </div>
        <div class="col">
            <a href="ban-nha-hai-phong" class="tinhthanh-item h-152">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-hai-phong.jpg" alt="Bất động sản Hải Phòng" class="img-thumbnail-home" />
                <h5>Hải Phòng</h5>
            </a>
        </div>
        <div class="col">
            <a href="/ban-nha-da-nang" class="tinhthanh-item h-152">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-da-nang.jpeg" alt="Bất động sản Đà Nẵng" class="img-thumbnail-home" />
                <h5>Đà Nẵng</h5>
            </a>
        </div>
        <div class="col">
            <a href="/ban-nha-binh-duong" class="tinhthanh-item h-152">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-binh-duong.png" alt="Bất động sản Bình Dương" class="img-thumbnail-home" />
                <h5>Bình Dương</h5>
            </a>
        </div>
        <div class="col">
            <a href="/ban-nha-dong-nai" class="tinhthanh-item h-152">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-dong-nai.png" alt="Bất động sản Đồng Nai" class="img-thumbnail-home" />

                <h5>Đồng Nai</h5>
            </a>
        </div>
        <div class="col">
            <a href="/ban-nha-ho-chi-minh" class="tinhthanh-item h-152">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-hcm.jpeg" alt="Bất động sản TP. Hồ Chí Minh" class="img-thumbnail-home" />
                <h5>TP. Hồ Chí Minh</h5>
            </a>
        </div>
        <div class="col">
            <a href="/ban-nha-ba-ria-vung-tau" class="tinhthanh-item h-152">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-ba-ria-vung-tau.jpg" alt="Bất động sản Bà Rịa Vũng Tàu" class="img-thumbnail-home" />
                <h5>Bà Rịa Vũng Tàu</h5>
            </a>
        </div>
        <div class="col">
            <a href="/ban-nha-can-tho" class="tinhthanh-item h-152">
                <img src="https://media.batdongsan.vn/crop/333x250/provinces/bat-dong-san-can-tho.jpg" alt="Bất động sản Cần Thơ" class="img-thumbnail-home" />

                <h5>Cần Thơ</h5>
            </a>
        </div>
    </div>
</div>

<div id="batdongsannoibat">
    <div class="container">
        <div class="swiper batdongsannoibat-swiper">
            <div class="swiper-controls">
                <h3 class="title mb-0 mr-auto align-self-end">
                    Bất động sản mới nhất
                </h3>
                <button class="batdongsannoibat-swiper-prev prev">
                    <img src="assets/icon/arrow-left.svg" alt="" />
                </button>
                <button class="batdongsannoibat-swiper-next next">
                    <img src="assets/icon/arrow-right.svg" alt="" />
                </button>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                        <a href="ban-biet-thu-2672m2-trinh-quang-nghi-4-tang-phong-phu-binh-chanh-gia-chi-305-ty-r117359" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117359_66c9f32bc3f48.jpg alt="Bán biệt thự 267.2m2 Trịnh Quang Nghị 4 tầng Phong Phú Bình Chánh giá chỉ 30,5
                                tỷ" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">5</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Bán biệt thự 267.2m2 Trịnh Quang Nghị 4...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 30 tỷ </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            267 m²
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
                        <a href="ban-nha-mau-luong-o-to-qua-cua-kinh-doanh-dt-35m-x-5t-64-ty-r117358" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117358_66c9eb0d18a73.jpg alt="BÁN NHÀ MẬU LƯƠNG Ô TÔ QUA CỬA - KINH DOANH DT 35M x 5T 6.4 tỷ"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">5</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    BÁN NHÀ MẬU LƯƠNG Ô TÔ QUA CỬA - KINH DO...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 6 tỷ 400 triệu </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            35 m²
                                        </span>
                                    </span>
                                </div>
                                <div class="address">
                                    Hà Đông, Hà Nội
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                        <a href="ban-nha-nguyen-van-cu-long-bien-dt-45m2-6-tang-9-ty-5-thang-may-o-to-cafe-tang-thuong-r117357" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117357_66c9e8e4a8aa8.jpg alt="Bán nhà, Nguyễn Văn Cừ Long Biên DT 45m2 * 6 tầng 9 tỷ 5 thang máy ô tô cafe
                                tầng thượng" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">2</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Bán nhà, Nguyễn Văn Cừ Long Biên DT 45m2...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 9 tỷ 500 triệu </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            45 m²
                                        </span>
                                    </span>
                                </div>
                                <div class="address">
                                    Long Biên, Hà Nội
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                        <a href="ban-nha-nguyen-van-cu-long-bien-dt-47m26-tang-gia-10-ty-o-to-thong-thang-may-vai-phut-sang-ho-guom-r117356" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117356_66c9e8ca22ab3.jpg alt="Bán nhà Nguyễn Văn Cừ Long Biên DT 47m2*6 tầng giá 10 tỷ ô tô thông thang máy
                                vài phút sang Hồ Gươm" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">1</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Bán nhà Nguyễn Văn Cừ Long Biên DT 47m2*...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 10 tỷ </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            47 m²
                                        </span>
                                    </span>
                                </div>
                                <div class="address">
                                    Long Biên, Hà Nội
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                        <a href="ban-dat-thuy-phuong-ngo-thong-o-to-do-cua-mat-tien-rong-56m2-3ty-r117355" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117355_66c9e6f6359c8.jpg alt="Bán đất Thụy Phương ngõ thông ô tô đỗ cửa , mặt tiền rộng 56m2 3tỷ"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">5</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Bán đất Thụy Phương ngõ thông ô tô đỗ cử...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 3 tỷ </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            56 m²
                                        </span>
                                    </span>
                                </div>
                                <div class="address">
                                    Bắc Từ Liêm, Hà Nội
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                        <a href="nha-dep-thang-may-truong-chinh-414m2-6-tang-gia-768-ty-kinh-doanh-dinh-r117354" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117354_66c9e6927213d.jpg alt="Nhà Đẹp Thang Máy Trường Chinh, 41.4m², 6 Tầng, Giá 7.68 Tỷ, Kinh Doanh Đỉnh"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">1</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Nhà Đẹp Thang Máy Trường Chinh, 41.4m²,...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 7 tỷ 680 triệu </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            42 m²
                                        </span>
                                    </span>
                                </div>
                                <div class="address">
                                    Đống Đa, Hà Nội
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                        <a href="tap-the-bach-khoatang-1-100m2-66-ty-kinh-doanh-dinh-r117353" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117353_66c9e5f60e13a.jpg alt="Tập Thể Bách Khoa,Tầng 1, 100m² , 6.6 Tỷ, Kinh Doanh đỉnh"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">1</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Tập Thể Bách Khoa,Tầng 1, 100m² , 6.6 Tỷ...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 6 tỷ 600 triệu </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            100 m²
                                        </span>
                                    </span>
                                </div>
                                <div class="address">
                                    Hai Bà Trưng, Hà Nội
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                        <a href="con-duy-nhat-1-lo-dat-dep-45x12-full-tho-tai-hxh-8m-nguyen-anh-thu-quan-12-r117352" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117352_66c9e4965d7dc.jpg alt="Còn duy nhất 1 lô đất đẹp (4.5x12), full thổ. tại HXH 8m Nguyễn Ảnh Thủ, Quận
                                12" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">3</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Còn duy nhất 1 lô đất đẹp (4.5x12), full...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 3 tỷ 490 triệu </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            54 m²
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
                        <a href="nen-xin-va-luu-tu-5-10-so-dien-thoai-cua-mot-vai-ban-be-dong-nghiep-hoac-anh-chi-lon-tuoi-de-ket-r117088" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117088_66c69ae6c9986.jpg alt="Nên xin và lưu từ 5 – 10 số điện thoại của một vài bạn bè đồng nghiệp hoặc anh
                                chị lớn tuổi để kết" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">5</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Nên xin và lưu từ 5 – 10 số điện thoại c...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 5 tỷ 290 triệu/tháng </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            65 m²
                                        </span>
                                    </span>
                                </div>
                                <div class="address">
                                    Quận 4, Hồ Chí Minh
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                        <a href="can-ban-dat-nha-pho-tho-cu-nguyen-mieng-1-ty-1-100m2-r117162" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117162_66c7c4f81a971.jpg alt="Cần bán đất nhà phố thổ cư nguyên miếng 1 tỷ 1, 100m2"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">1</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Cần bán đất nhà phố thổ cư nguyên miếng...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 1 tỷ 100 triệu </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            100 m²
                                        </span>
                                    </span>
                                </div>
                                <div class="address">
                                    Thủ Đức, Hồ Chí Minh
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                        <a href="can-ban-dat-ngop-tho-cu-nguyen-mieng-1-ty-1-100m2-r117163" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117163_66c7caa332ae3.jpg alt="Cần bán đất ngộp thổ cư nguyên miếng 1 tỷ 1, 100m2"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">1</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Cần bán đất ngộp thổ cư nguyên miếng 1 t...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 1 tỷ 100 triệu </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            100 m²
                                        </span>
                                    </span>
                                </div>
                                <div class="address">
                                    Thủ Đức, Hồ Chí Minh
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="d-flex flex-column gap-4" style="gap: 24px;">
                        <a href="can-ban-dat-chinh-chu-100-tho-cu-1-ty-1-100m2-r117165" class="main-item noi-bat">
                            <div class="image-item h-150">
                                <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/117165_66c7cd8cc4b7a.jpg alt="Cần bán đất chính chủ 100% thổ cư 1 tỷ 1, 100m2"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                                <div class="list-img">
                                    <img src="assets/img/camera.png" alt="" />
                                    <span class="qty">1</span>
                                </div>
                            </div>

                            <div class="info">
                                <h3 class="title">
                                    Cần bán đất chính chủ 100% thổ cư 1 tỷ 1...
                                </h3>
                                <div class="price-area">
                                    <span class="price">
                                        <img src="assets/img/price.png" alt="" />
                                        <span style="margin-left: 5px;"> 1 tỷ 100 triệu </span>
                                    </span>

                                    <span class="area">
                                        <img src="assets/img/area.png" alt="" />
                                        <span>
                                            100 m²
                                        </span>
                                    </span>
                                </div>
                                <div class="address">
                                    Thủ Đức, Hồ Chí Minh
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="two-img" class="container mt-5">
    <div class="row row-cols-md-2 row-cols-1">
        <div class="col">
            <img
                class="rounded"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                lazy-src="assets/img/Rectangle 7.png"
                alt="" />
        </div>
        <div class="col">
            <img
                class="rounded"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                lazy-src="assets/img/Rectangle 8.png"
                alt="" />
        </div>
    </div>
</div>

<div id="duanmoi-container" class="container mt-5">
    <div class="swiper-controls">
        <h3 class="title mb-0 mr-auto align-self-end">Dự án mới</h3>
        <button class="duanmoi-swiper-prev prev">
            <img src="assets/icon/arrow-left.svg" alt="Dự án mới" />
        </button>
        <button class="duanmoi-swiper-next next">
            <img src="assets/icon/arrow-right.svg" alt="Dự án mới" />
        </button>
    </div>
    <div class="swiper duanmoi-swiper">
        <div class="swiper-wrapper">
            <a href="du-an-khu-dan-cu-hong-long" class="swiper-slide" title="">
                <div class="duanmoi-item">
                    <div class="h-150 p-0">
                        <img
                            class="img-thumbnail-home"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/300x200/projects/20161003150658-c2a0.jpg"
                            alt="" />
                    </div>

                    <div>
                        <h4></h4>
                        <p>Thủ Đức, TP Hồ Chí Minh</p>
                    </div>
                </div>
            </a>
            <a href="du-an-khu-dan-cu-an-dien-phat" class="swiper-slide" title="">
                <div class="duanmoi-item">
                    <div class="h-150 p-0">
                        <img
                            class="img-thumbnail-home"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/300x200/projects/20190812150524-3adc.jpg"
                            alt="" />
                    </div>

                    <div>
                        <h4></h4>
                        <p>Tư Nghĩa, Quảng Ngãi</p>
                    </div>
                </div>
            </a>
            <a href="du-an-best-western-premier-sapphire-ha-long" class="swiper-slide" title="">
                <div class="duanmoi-item">
                    <div class="h-150 p-0">
                        <img
                            class="img-thumbnail-home"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/300x200/projects/20181220133156-28e6.jpg"
                            alt="" />
                    </div>

                    <div>
                        <h4></h4>
                        <p>Hạ Long, Quảng Ninh</p>
                    </div>
                </div>
            </a>
            <a href="du-an-khu-dan-cu-duc-linh-11" class="swiper-slide" title="">
                <div class="duanmoi-item">
                    <div class="h-150 p-0">
                        <img
                            class="img-thumbnail-home"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/300x200/projects/20180719154500-7456.jpg"
                            alt="" />
                    </div>

                    <div>
                        <h4></h4>
                        <p>Thủ Đức, TP Hồ Chí Minh</p>
                    </div>
                </div>
            </a>
            <a href="du-an-khang-an-residence" class="swiper-slide" title="">
                <div class="duanmoi-item">
                    <div class="h-150 p-0">
                        <img
                            class="img-thumbnail-home"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/300x200/projects/20160718114100-ac6e.jpg"
                            alt="" />
                    </div>

                    <div>
                        <h4></h4>
                        <p>Bình Tân, TP Hồ Chí Minh</p>
                    </div>
                </div>
            </a>
            <a href="du-an-nha-pho-one-palace-2" class="swiper-slide" title="">
                <div class="duanmoi-item">
                    <div class="h-150 p-0">
                        <img
                            class="img-thumbnail-home"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/300x200/projects/20210407093239-d3e2.jpg"
                            alt="" />
                    </div>

                    <div>
                        <h4></h4>
                        <p>Quận 12, TP Hồ Chí Minh</p>
                    </div>
                </div>
            </a>
            <a href="du-an-marina-diamond-town" class="swiper-slide" title="">
                <div class="duanmoi-item">
                    <div class="h-150 p-0">
                        <img
                            class="img-thumbnail-home"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/300x200/projects/20190813093623-0079.jpg"
                            alt="" />
                    </div>

                    <div>
                        <h4></h4>
                        <p>Nha Trang, Khánh Hòa</p>
                    </div>
                </div>
            </a>
            <a href="du-an-epic-town-dien-thang" class="swiper-slide" title="">
                <div class="duanmoi-item">
                    <div class="h-150 p-0">
                        <img
                            class="img-thumbnail-home"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="https://media.batdongsan.vn/crop/300x200/projects/20200710090340-a0ab.jpg"
                            alt="" />
                    </div>

                    <div>
                        <h4></h4>
                        <p>Điện Bàn, Quảng Nam</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div id="danhgiatot" class="container mt-5">
    <div class="swiper danhgiatot-swiper">
        <div class="swiper-controls">
            <h3 class="title mb-0 mr-auto align-self-end">Đánh giá tốt</h3>
            <button class="danhgiatot-swiper-prev prev">
                <img src="assets/icon/arrow-left.svg" alt="" />
            </button>
            <button class="danhgiatot-swiper-next next">
                <img src="assets/icon/arrow-right.svg" alt="" />
            </button>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="nha-lo-goc-hem-dong-hung-thuan-6-quan-12-4x14m-cap-4-hem-xe-hoi-3-ty-7-r253341" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/171-244-188-193-e.jpg alt="NHÀ LÔ GÓC HẼM - ĐÔNG HƯNG THUẬN 6 - QUẬN 12 - 4X14M - CẤP 4 - HẼM XE HƠI - 3 TỶ 7 ."
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">1</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                NHÀ LÔ GÓC HẼM - ĐÔNG HƯNG THUẬN 6 - QUẬN 12...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        3 tỷ 700 triệu
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        56 m²
                                    </span>
                                </span>
                            </div>
                            Quận 12, Hồ Chí Minh
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="hang-hiem-quan-tan-phu-80m2-hxh-6-ty-thuong-luong-r257048" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/118-69-191-160-279377173-539254467874773-736657574002157430-n.jpg alt="HÀNG HIẾM QUẬN TÂN PHÚ, 80M2, HXH, 6 TỶ
                            THƯƠNG LƯỢNG" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">1</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                HÀNG HIẾM QUẬN TÂN PHÚ, 80M2, HXH, 6 TỶ THƯƠN...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        6 tỷ
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        80 m²
                                    </span>
                                </span>
                            </div>
                            Tân Phú, Hồ Chí Minh
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="deal-xin-ban-gap-trong-tuan-chung-cu-son-an-gan-dai-hoc-dong-nai-r282723" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/171-247-45-125-z4579509690445-fdc55823ce41f719001d250e62942ce1.jpg alt="Deal Xịn Bán Gấp Trong Tuần-chung cư Sơn
                            An gần đại học Đồng Nai" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">5</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                Deal Xịn Bán Gấp Trong Tuần-chung cư Sơn An g...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        1 tỷ 250 triệu
                                    </span>
                                </span>
                            </div>
                            Biên Hòa, Đồng Nai
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="ban-can-chung-cu-vinhome-smart-city-mk11-tang-trung-r115784" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/115784_1721356609.jpg alt="Bán căn chung cư Vinhome smart city- MK11-tầng trung"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">5</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                Bán căn chung cư Vinhome smart city- MK11-tần...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        5 tỷ 500 triệu
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        62 m²
                                    </span>
                                </span>
                            </div>
                            Nam Từ Liêm, Hà Nội
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="ban-dat-73m2-shr-tho-cu-duong-o-to-ptrang-dai-chi-1950-ti-r271835" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/180-93-199-63-z4504275449657-a3cbaa742c501f88ccafdbee90c350cd.jpg alt="Bán đất 73m2 SHR thổ cư đường ô tô
                            (P.Trảng Dài) chỉ 1,950 tỉ" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">4</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                Bán đất 73m2 SHR thổ cư đường ô tô (P.Trảng D...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        1 tỷ 950 triệu
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        73 m²
                                    </span>
                                </span>
                            </div>
                            Biên Hòa, Đồng Nai
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="ban-gap-can-ho-2-phong-ngu-vinhomes-metropolis-29-lieu-giai-r275594" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/171-241-41-7-1.jpg alt="BÁN GẤP CĂN HỘ 2 PHÒNG NGỦ VINHOMES METROPOLIS 29 LIỄU GIAI."
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">9</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                BÁN GẤP CĂN HỘ 2 PHÒNG NGỦ VINHOMES METROPOLI...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        7 tỷ
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        79 m²
                                    </span>
                                </span>
                            </div>
                            Ba Đình, Hà Nội
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="sieu-pham-mat-vinh-biet-thu-grand-bay-villas-ha-long-gia-chi-hon-30-ty-r283112" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/171-252-195-68-bt-don-lap.jpg alt="Siêu phẩm mặt Vịnh - Biệt thự Grand Bay Villas Hạ Long. - Giá chỉ hơn 30 tỷ"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">6</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                Siêu phẩm mặt Vịnh - Biệt thự Grand Bay Villa...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        36 tỷ
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        210 m²
                                    </span>
                                </span>
                            </div>
                            Hạ Long, Quảng Ninh
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="ngoc-ha-r283931" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/118-70-191-247-399022028-1502758290556643-8672408028690965-n.jpg alt="Ngọc Hà"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">9</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                Ngọc Hà
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        3 tỷ 630 triệu
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        66 m²
                                    </span>
                                </span>
                            </div>
                            Quy Nhơn, Bình Định
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="cho-thue-kho-xuong-5000m2-duong-phu-thuan-quan-7-r276171" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/14-186-83-82-z4583117965506-cee2a411ae682c9e9efd45bf0ef0a95b.jpg alt="cho thuê kho xưởng 5000m2 đường phú thuận
                            quận 7" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">4</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                cho thuê kho xưởng 5000m2 đường phú thuận quậ...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        400 triệu/tháng
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        5000 m²
                                    </span>
                                </span>
                            </div>
                            Quận 7, Hồ Chí Minh
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="ban-nhanh-139m2-tho-cu-trung-tam-phuong-hoa-vinh-phu-yen-gia-1ty-78-bao-thu-tuc-r279989" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/203-205-46-13-b11.jpg alt="Bán nhanh 139m2 thổ cư trung tâm Phường Hòa Vinh – Phú Yên giá 1tỷ 78 (bao thủ tục)"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">2</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                Bán nhanh 139m2 thổ cư trung tâm Phường Ho...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        1 tỷ 780 triệu
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        139 m²
                                    </span>
                                </span>
                            </div>
                            Đông Hòa, Phú Yên
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="cho-thue-nha-nguyen-can-trong-suot-4-lau-duong-nguyen-van-linh-quan-7-lh-m0944604465-r257258" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/14-186-81-246-314496936-3360869124241218-915828019660833885-n.jpg alt="CHO THUÊ NHÀ NGUYÊN CĂN TRỐNG SUỐT 4 LẦU
                            ĐƯỜNG NGUYỄN VĂN LINH QUẬN 7 LH: m09.4460.4465" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">1</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                CHO THUÊ NHÀ NGUYÊN CĂN TRỐNG SUỐT 4 LẦU ĐƯỜN...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        200/tháng
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        1500 m²
                                    </span>
                                </span>
                            </div>
                            Quận 7, Hồ Chí Minh
                        </div>
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column gap-4" style="gap: 24px;">
                    <a href="nha-moi-full-noi-that-240m2-oto-ngu-trong-nha-chi-hon-7-ty-khu-nha-hiem-ban-r116822" class="main-item noi-bat">
                        <div class="image-item h-150">
                            <img class="news_image img-thumbnail-home" lazy-src=https://media.batdongsan.vn/crop/266x150/posts/116822_66c2bcde4b184.jpg alt="NHÀ MỚI FULL NỘI THẤT, 240M2, OTO NGỦ TRONG NHÀ CHỈ HƠN 7 TỶ, KHU NHÀ HIẾM BÁN"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" />
                            <div class="list-img">
                                <img src="assets/img/camera.png" alt="" />
                                <span class="qty">1</span>
                            </div>
                        </div>

                        <div class="info">
                            <h3 class="title">
                                NHÀ MỚI FULL NỘI THẤT, 240M2, OTO NGỦ TRONG N...
                            </h3>
                            <div class="price-area">
                                <span class="price">
                                    <img src="assets/img/price.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        7 tỷ 500 triệu
                                    </span>
                                </span>

                                <span class="area">
                                    <img src="assets/img/area.png" alt="" />
                                    <span style="margin-left: 5px;">
                                        240 m²
                                    </span>
                                </span>
                            </div>
                            Gò Vấp, Hồ Chí Minh
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="home-pta1-container" class="container">
    <div class="swiper home-pta1-swiper">
        <div class="home-pta1-pagination mb-4"></div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="home-pta1-item">
                    <h3 style="font-size: 19px;" class="d-none d-lg-block">Nhìn ra thế giới</h3>
                    <a title="" href="tin-tuc/xot-xa-hang-loat-khu-chung-cu-cao-tang-o-ha-noi-bi-bo-hoang-nhieu-nam-a150" class="main">
                        <div class="h-150 avata-news-big">
                            <img
                                class="img-thumbnail-home"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/crop/360x250/news/ngo-13-linh-nam-2-crop-crop-1624595778296.jpeg"
                                alt="Xót xa hàng loạt khu chung cư cao tầng ở Hà Nội bị bỏ hoang nhiều năm" />
                        </div>
                        <p>Xót xa hàng loạt khu chung cư cao tầng ở Hà Nội bị bỏ hoang nhiều năm</p>
                    </a>
                    <div class="sub-container">
                        <a href="tin-tuc/nguoi-my-tu-bo-y-dinh-mua-nha-a69" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/10_1722485600.jpg"
                                    alt="Người Mỹ từ bỏ ý định mua nhà" />
                            </div>
                            <p>Người Mỹ từ bỏ ý định mua nhà</p>
                        </a>
                    </div>
                    <div class="sub-container">
                        <a href="tin-tuc/gia-nha-o-trung-quoc-tang-dot-bien-trong-thang-2-nam-2021-a6" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/20_1722230460.jpg"
                                    alt="Giá nhà ở Trung Quốc tăng đột biến trong tháng 2 năm 2021" />
                            </div>
                            <p>Giá nhà ở Trung Quốc tăng đột biến trong tháng 2 năm 2021</p>
                        </a>
                    </div>
                    <div class="sub-container">
                        <a href="tin-tuc/vi-sao-nha-tai-nhat-ban-sau-22-nam-duoc-coi-la-dong-phe-lieu-a212" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/794868043446dd188457.jpg"
                                    alt="Vì sao nhà tại Nhật Bản sau 22 năm được coi là đống phế liệu?" />
                            </div>
                            <p>Vì sao nhà tại Nhật Bản sau 22 năm được coi là đống phế liệu?</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="home-pta1-item">
                    <h3 style="font-size: 19px;" class="d-none d-lg-block">Chuyển động thị trường</h3>
                    <a title="" href="tin-tuc/wyndham-phu-quoc-khong-gian-nghi-duong-ly-tuong-danh-cho-gioi-thuong-luu-a16" class="main">
                        <div class="h-150 avata-news-big">
                            <img
                                class="img-thumbnail-home"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/crop/360x250/news/23_1722231261.jpg"
                                alt="Wyndham Phú Quốc - không gian nghỉ dưỡng lý tưởng dành cho giới thượng lưu" />
                        </div>
                        <p>Wyndham Phú Quốc - không gian nghỉ dưỡng lý tưởng dành cho giới thượng lưu</p>
                    </a>
                    <div class="sub-container">
                        <a href="tin-tuc/bat-dong-san-da-co-dau-hieu-chuyen-dich-trong-mua-dich-a15" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/24_1722231277.jpg"
                                    alt="Bất động sản đã có dấu hiệu chuyển dịch trong mùa dịch?" />
                            </div>
                            <p>Bất động sản đã có dấu hiệu chuyển dịch trong mùa dịch?</p>
                        </a>
                    </div>
                    <div class="sub-container">
                        <a href="tin-tuc/dat-nen-gia-re-van-thu-hut-khach-dau-tu-du-dich-benh-a7" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/19_1722230449.jpg"
                                    alt="Đất nền giá rẻ vẫn thu hút khách đầu tư dù dịch bệnh" />
                            </div>
                            <p>Đất nền giá rẻ vẫn thu hút khách đầu tư dù dịch bệnh</p>
                        </a>
                    </div>
                    <div class="sub-container">
                        <a href="tin-tuc/nha-pho-hon-130-trieu-dong-tren-mot-m2-dat-a30" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/24_1722232955.jpg"
                                    alt="Nhà phố hơn 130 triệu đồng trên một m2 đất" />
                            </div>
                            <p>Nhà phố hơn 130 triệu đồng trên một m2 đất</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="home-pta1-item">
                    <h3 style="font-size: 19px;" class="d-none d-lg-block">Chính sách quản lý</h3>
                    <a title="" href="tin-tuc/da-nang-cong-bo-ket-qua-dieu-chinh-gia-dat-thuong-mai-a140" class="main">
                        <div class="h-150 avata-news-big">
                            <img
                                class="img-thumbnail-home"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/crop/360x250/news/3_1722669959.jpg"
                                alt="Đà Nẵng công bố kết quả điều chỉnh giá đất thương mại" />
                        </div>
                        <p>Đà Nẵng công bố kết quả điều chỉnh giá đất thương mại</p>
                    </a>
                    <div class="sub-container">
                        <a href="tin-tuc/cac-chinh-sach-moi-ve-bat-dong-san-sap-duoc-trien-khai-a139" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/7_1722671259.jpg"
                                    alt="Các chính sách mới về bất động sản sắp được triển khai" />
                            </div>
                            <p>Các chính sách mới về bất động sản sắp được triển khai</p>
                        </a>
                    </div>
                    <div class="sub-container">
                        <a href="tin-tuc/loat-dai-gia-chay-y-no-thue-ha-noi-tinh-xu-ly-thu-hoi-dat-a158" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/bds-crop-1630728332393.jpeg"
                                    alt='Loạt "đại gia" chây ỳ nợ thuế, Hà Nội tính xử lý thu hồi đất' />
                            </div>
                            <p>Loạt &quot;đại gia&quot; chây ỳ nợ thuế, Hà Nội tính xử lý thu hồi đất</p>
                        </a>
                    </div>
                    <div class="sub-container">
                        <a href="tin-tuc/can-tho-cap-nhat-cac-du-an-quan-trong-can-som-trien-khai-thuc-hien-a154" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/5b798693dbd1328f6bc0.jpg"
                                    alt="Cần Thơ cập nhật các dự án quan trọng cần sớm triển khai thực hiện" />
                            </div>
                            <p>Cần Thơ cập nhật các dự án quan trọng cần sớm triển khai thực hiện</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="home-pta1-item">
                    <h3 style="font-size: 19px;" class="d-none d-lg-block">Thông tin quy hoạch</h3>
                    <a title="" href="tin-tuc/thong-tin-quy-hoach-phuong-an-phu-dong-quan-12-tp-ho-chi-minh-a5" class="main">
                        <div class="h-150 avata-news-big">
                            <img
                                class="img-thumbnail-home"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                lazy-src="https://media.batdongsan.vn/crop/360x250/news/21_1722230474.jpg"
                                alt="Thông tin quy hoạch phường An Phú Đông quận 12 TP Hồ Chí Minh" />
                        </div>
                        <p>Thông tin quy hoạch phường An Phú Đông quận 12 TP Hồ Chí Minh</p>
                    </a>
                    <div class="sub-container">
                        <a href="tin-tuc/hai-duong-quy-hoach-cum-cong-nghiep-an-phu-rong-47ha-a102" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/7_1722650800.jpg"
                                    alt="Hải Dương: quy hoạch cụm công nghiệp An Phụ rộng 47ha" />
                            </div>
                            <p>Hải Dương: quy hoạch cụm công nghiệp An Phụ rộng 47ha</p>
                        </a>
                    </div>
                    <div class="sub-container">
                        <a href="tin-tuc/bac-giang-moi-goi-dau-tu-du-an-khu-nha-o-xa-hoi-voi-tong-von-hon-1500-ti-dong-a93" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/6_1722649882.jpg"
                                    alt="Bắc Giang mời gọi đầu tư dự án khu nhà ở xã hội với tổng vốn hơn 1500 tỉ đồng" />
                            </div>
                            <p>Bắc Giang mời gọi đầu tư dự án khu nhà ở xã hội với tổng vốn hơn 1500 tỉ đồng</p>
                        </a>
                    </div>
                    <div class="sub-container">
                        <a href="tin-tuc/du-an-gan-490ha-tai-hau-giang-duoc-tap-doan-flc-nghien-cuu-quy-hoach-a88" class="sub" title="">
                            <div style="height: 60px !important; width: 80px !important;">
                                <img
                                    class="img-80x60"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                    lazy-src="https://media.batdongsan.vn/crop/80x60/news/5_1722650156.png"
                                    alt="Dự án gần 490ha tại Hậu Giang được tập đoàn FLC nghiên cứu quy hoạch" />
                            </div>
                            <p>Dự án gần 490ha tại Hậu Giang được tập đoàn FLC nghiên cứu quy hoạch</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tien-ich-container" class="container mt-5">
    <h3 class="title">Hỗ trợ tiện ích</h3>
    <div class="row row-cols-2 row-cols-md-4">
        <div class="col">
            <a href="#" class="tien-ich-item">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" lazy-src="images/xem-tuoi-xay-nha.svg" alt="" />
                <span>Xem tuổi xây nhà</span>
            </a>
        </div>
        <div class="col">
            <a href="#" class="tien-ich-item">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" lazy-src="images/chi-phi-lam-nha.svg" alt="" />
                <span>Chi phí làm nhà</span>
            </a>
        </div>
        <div class="col">
            <a href="#" class="tien-ich-item">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" lazy-src="images/tinh-lai-suat.svg" alt="" />
                <span>Tính lãi suất</span>
            </a>
        </div>
        <div class="col">
            <a href="#" class="tien-ich-item">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII=" lazy-src="images/tu-van-phong-thuy.svg" alt="" />
                <span>Tư vấn phong thuỷ</span>
            </a>
        </div>
    </div>
</div>

<div id="ft-t" class="container" style="margin-top: 50px;">
    <h4 class="title">NHÀ ĐẤT BÁN</h4>
    <div class="row row-cols-2 row-cols-md-4">
        <div class="col">
            <ul>
                Nhà đất Hà Nội
                <li>
                    <a href="/ban-nha-ha-noi">Bán nhà Hà Nội</a>
                </li>
                <li>
                    <a href="/ban-can-ho-chung-cu-bac-tu-liem-ha-noi">Chung cư Bắc Từ Liêm</a>
                </li>
                <li>
                    <a href="/ban-nha-ha-dong-ha-noi">Nhà đất Hà Đông </a>
                </li>
                <li>
                    <a href="/ban-dat-long-bien-ha-noi">Nhà đất Long Biên </a>
                </li>

                <li>
                    <a href="/ban-nha-cau-giay-ha-noi">Nhà đất Cầu Giấy </a>
                </li>

                <li>
                    <a href="/ban-dat-thanh-xuan-ha-noi">Nhà đất Thanh Xuân </a>
                </li>
                <li>
                    <a href="/ban-nha-bac-tu-liem-ha-noi">Bán nhà Bắc Từ Liêm</a>
                </li>
                <li>
                    <a href="/ban-can-ho-chung-cu-ha-dong-ha-noi">Chung cư Hà Đông</a>
                </li>
                <li>
                    <a href="/ban-dat-dong-anh-ha-noi">Nhà đất Đông Anh</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul>
                Nhà đất TP. Hồ Chí Minh
                <li>
                    <a href="/ban-dat-ho-chi-minh">Nhà đất TP. Hồ Chí Minh</a>
                </li>

                <li>
                    <a href="/ban-nha-quan-1-ho-chi-minh">Bán nhà Quận 1</a>
                </li>
                <li>
                    <a href="/ban-nha-quan-2-ho-chi-minh">Bán nhà Quận 2</a>
                </li>
                <li>
                    <a href="/ban-nha-quan-3-ho-chi-minh">Bán nhà Quận 3</a>
                </li>
                <li>
                    <a href="/ban-nha-quan-4-ho-chi-minh">Bán nhà Quận 4</a>
                </li>
                <li>
                    <a href="/ban-nha-quan-6-ho-chi-minh">Bán nhà Quận 6</a>
                </li>
                <li>
                    <a href="/ban-nha-quan-7-ho-chi-minh">Bán nhà Quận 7</a>
                </li>
                <li>
                    <a href="/ban-nha-quan-8-ho-chi-minh">Bán nhà Quận 8</a>
                </li>
                <li>
                    <a href="/ban-nha-quan-9-ho-chi-minh">Bán nhà Quận 9</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul>
                Nhà đất Đà Nẵng
                <li>
                    <a href="/ban-dat-da-nang">Nhà đất Đà Nẵng</a>
                </li>
                <li>
                    <a href="/ban-nha-cam-le-da-nang">Nhà đất Cẩm Lệ</a>
                </li>
                <li>
                    <a href="/ban-nha-lien-chieu-da-nang">Nhà đất Liên Chiểu</a>
                </li>
                <li>
                    <a href="/ban-nha-hoa-vang-da-nang">Nhà đất Hòa Vang</a>
                </li>
                <li>
                    <a href="/ban-nha-ngu-hanh-son-da-nang">Nhà đất Ngũ Hành Sơn</a>
                </li>
                <li>
                    <a href="/ban-nha-son-tra-da-nang">Nhà đất Sơn Trà</a>
                </li>
                <li>
                    <a href="/ban-nha-thanh-khe-da-nang">Nhà đất Thanh Khê</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <ul>
                Nhà đất Vũng Tàu
                <li>
                    <a href="/ban-nha-ba-ria-vung-tau">Nhà đất Vũng Tàu</a>
                </li>
                <li>
                    <a href="/ban-nha-dat-do-ba-ria-vung-tau">Nhà đất Đất Đỏ</a>
                </li>
                <li>
                    <a href="/ban-nha-chau-duc-ba-ria-vung-tau">Nhà đất Châu Đức</a>
                </li>
                <li>
                    <a href="/ban-nha-con-dao-ba-ria-vung-tau">Nhà đất Côn Đảo</a>
                </li>
                <li>
                    <a href="/ban-nha-long-dien-ba-ria-vung-tau">Nhà đất Long Điền</a>
                </li>
                <li>
                    <a href="/ban-nha-phu-my-ba-ria-vung-tau">Nhà đất Phú Mỹ</a>
                </li>

                <li>
                    <a href="/ban-nha-xuyen-moc-ba-ria-vung-tau">Nhà đất Xuyên Mộc </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="ft-t-2" class="container">
    <h4 class="title">CHO THUÊ NHÀ ĐẤT</h4>
    <div class="row row-cols-2 row-cols-md-4">
        <div class="col useful-link">
            <ul>
                Nhà đất Hà Nội
                <li>
                    <a href="/cho-thue-nha-ha-noi">Nhà đất Hà Nội</a>
                </li>
                <li>
                    <a href="/cho-thue-can-ho-chung-cu-ha-noi">Thuê chung cư Hà Nội</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-thanh-xuan-ha-noi">Thuê nhà Thanh Xuân</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-ba-dinh-ha-noi">Thuê nhà Ba Đình</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-bac-tu-liem-ha-noi">Thuê nhà Bắc Từ Liêm</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-cau-giay-ha-noi">Thuê nhà Cầu Giấy</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-chuong-my-ha-noi">Thuê nhà Chương Mỹ</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-ha-dong-ha-noi">Thuê nhà Hà Đông</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-hai-ba-trung-ha-noi">Thuê nhà Hai Bà Trưng</a>
                </li>
            </ul>
        </div>
        <div class="col useful-link">
            <ul>
                Nhà đất TP. Hồ Chí Minh
                <li>
                    <a href="/cho-thue-nha-ho-chi-minh">Nhà đất TP. Hồ Chí Minh</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-quan-1-ho-chi-minh">Cho thuê nhà Quận 1</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-quan-2-ho-chi-minh">Cho thuê nhà Quận 2</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-quan-3-ho-chi-minh">Cho thuê nhà Quận 3</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-quan-5-ho-chi-minh">Cho thuê nhà Quận 4</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-quan-6-ho-chi-minh">Cho thuê nhà Quận 6</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-go-vap-ho-chi-minh">Cho thuê nhà Gò Vấp</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-tan-binh-ho-chi-minh">Cho thuê nhà Tân Bình</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-quan-9-ho-chi-minh">Cho thuê nhà Quận 9</a>
                </li>
            </ul>
        </div>
        <div class="col useful-link">
            <ul>
                Nhà đất Đà Nẵng
                <li>
                    <a href="/cho-thue-nha-cam-le-da-nang">Cho thuê nhà Cẩm Lệ</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-hai-chau-da-nang">Cho thuê nhà Hải Châu</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-lien-chieu-da-nang">Cho thuê nhà Liên Chiểu</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-ngu-hanh-son-da-nang">Cho thuê nhà Ngũ Hành Sơn</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-son-tra-da-nang">Cho thuê nhà Sơn Trà</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-thanh-khe-da-nang">Cho thuê nhà Thanh Khê</a>
                </li>
            </ul>
        </div>
        <div class="col useful-link">
            <ul>
                Nhà đất Vũng Tàu
                <li>
                    <a href="/cho-thue-nha-ba-ria-vung-tau">Cho thuê nhà Vũng Tàu</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-do-ba-ria-vung-tau">Cho thuê nhà Đất Đỏ</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-duc-ba-ria-vung-tau">Cho thuê nhà Châu Đức</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-con-dao-ba-ria-vung-tau">Cho thuê nhà Côn Đảo</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-long-dien-ba-ria-vung-tau">Cho thuê nhà Long Điền</a>
                </li>
                <li>
                    <a href="/cho-thue-nha-phu-my-ba-ria-vung-tau">Cho thuê nhà Phú Mỹ</a>
                </li>

                <li>
                    <a href="/cho-thue-nha-xuyen-moc-ba-ria-vung-tau">Cho thuê nhà Xuyên Mộc </a>
                </li>
            </ul>
        </div>

        <div class="col useful-link">
            <ul id="useful-link">
                Liên kết hữu ích
            </ul>
        </div>
    </div>
</div>


@endsection
