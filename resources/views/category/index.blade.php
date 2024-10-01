@extends('layouts.index')

@section('title', 'Batdongsan')

@section('content')

<form id="main" class="mt-4 container" method="get" action="{{Route('show-category')}}">
    <h2 class="mb-3 d-none d-sm-block">Chào mừng bạn đến với Website Batdongsan!</h2>
    <div class="desc d-none d-sm-flex" style="gap: 16px;">
        <span>Tìm nhà phố, dự án, cho thuê và nhiều hơn nữa</span>
        <a href="ban-nha-ha-noi" title="Nhà riêng Hà Nội">Nhà riêng Hà Nội</a>
        <a href="ban-nha-cau-giay-ha-noi">Nhà riêng Cầu Giấy</a>
        <a href="cho-thue-nha-quan-2-ho-chi-minh">Căn hộ Quận 2</a>
    </div>
    <div class="main-radio d-none d-sm-flex gap-24 align-items-center mt-4">
        <div class="form-radio d-flex align-items-center gap-8">
            <input type="radio" id="home-radio1" name="property_type" class="custom-radio" value="sale" checked />
            <label for="home-radio1" class="mb-0">Nhà đất bán</label>
        </div>
        <div class="form-radio d-flex align-items-center gap-8">
            <input type="radio" id="home-radio2" name="property_type" class="custom-radio" value="rent" />
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
                            <label for="main-checkbox-sub-1">Tất cả nhà đất</label>
                            <input id="main-checkbox-sub-1" name="tat_ca_nha_dat_ban" value="tat-ca-nha-dat-ban" type="checkbox" />
                        </li>
                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-2">Nhà</label>
                            <input name="CategoryIdsAsString[]" value="house" id="main-checkbox-sub-12" type="checkbox" />
                        </li>
                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-3">Đất</label>
                            <input name="CategoryIdsAsString[]" value="land" id="main-checkbox-sub-13" type="checkbox" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-4">Biệt thự</label>
                            <input name="CategoryIdsAsString[]" value="apartment" id="main-checkbox-sub-14" type="checkbox" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-5">BĐS thương mại</label>
                            <input name="CategoryIdsAsString[]" value="office" id="main-checkbox-sub-15" type="checkbox" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-6">Căn hộ chung cư</label>
                            <input name="CategoryIdsAsString[]" value="villa" id="main-checkbox-sub-16" type="checkbox" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-7">Văn phòng</label>
                            <input name="CategoryIdsAsString[]" value="commercial" id="main-checkbox-sub-17" type="checkbox" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-8">BĐS công nghiệp</label>
                            <input name="CategoryIdsAsString[]" value="industrial" id="main-checkbox-sub-18" type="checkbox" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-9">BĐS nông nghiệp</label>
                            <input name="CategoryIdsAsString[]" value="agricultural" id="main-checkbox-sub-19" type="checkbox" />
                        </li>
                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-10">BĐS tâm linh</label>
                            <input name="CategoryIdsAsString[]" value="spiritual" id="main-checkbox-sub-20" type="checkbox" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-11">BĐS dịch vụ</label>
                            <input name="CategoryIdsAsString[]" value="service" id="main-checkbox-sub-21" type="checkbox" />
                        </li>

                        <li class="form-checkbox">
                            <label for="main-checkbox-sub-12">BĐS khác</label>
                            <input name="CategoryIdsAsString[]" value="orther" id="main-checkbox-sub-22" type="checkbox" />
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
            <input type="text" name="title" id="KeywordOrigin" placeholder="Tìm kiếm địa chỉ, dự án..." />
            <button type="submit" style="width: 159px; background: #41aed5; border-radius: 0px 28px 28px 0px; color: #ffffff;">
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
                                    <label for="main-checkbox-sub-2">Nhà</label>
                                    <input name="CategoryIdsAsString[]" value="house" id="main-checkbox-sub-2" type="checkbox" />
                                </li>
                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-3">Đất</label>
                                    <input name="CategoryIdsAsString[]" value="land" id="main-checkbox-sub-3" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-4">Biệt thự</label>
                                    <input name="CategoryIdsAsString[]" value="apartment" id="main-checkbox-sub-4" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-5">BĐS thương mại</label>
                                    <input name="CategoryIdsAsString[]" value="office" id="main-checkbox-sub-5" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-6">Căn hộ chung cư</label>
                                    <input name="CategoryIdsAsString[]" value="villa" id="main-checkbox-sub-6" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-7">Văn phòng</label>
                                    <input name="CategoryIdsAsString[]" value="commercial" id="main-checkbox-sub-7" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-8">BĐS công nghiệp</label>
                                    <input name="CategoryIdsAsString[]" value="industrial" id="main-checkbox-sub-8" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-9">BĐS nông nghiệp</label>
                                    <input name="CategoryIdsAsString[]" value="agricultural" id="main-checkbox-sub-9" type="checkbox" />
                                </li>
                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-10">BĐS tâm linh</label>
                                    <input name="CategoryIdsAsString[]" value="spiritual" id="main-checkbox-sub-10" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-11">BĐS dịch vụ</label>
                                    <input name="CategoryIdsAsString[]" value="service" id="main-checkbox-sub-11" type="checkbox" />
                                </li>

                                <li class="form-checkbox">
                                    <label for="main-checkbox-sub-12">BĐS khác</label>
                                    <input name="CategoryIdsAsString[]" value="orther" id="main-checkbox-sub-12" type="checkbox" />
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
                                    <option value="89">Tỉnh An Giang</option>
                                    <option value="77">Tỉnh Bà Rịa - Vũng Tàu</option>
                                    <option value="24">Tỉnh Bắc Giang</option>
                                    <option value="06">Tỉnh Bắc Kạn</option>
                                    <option value="95">Tỉnh Bạc Liêu</option>
                                    <option value="27">Tỉnh Bắc Ninh</option>
                                    <option value="83">Tỉnh Bến Tre</option>
                                    <option value="74">Tỉnh Bình Dương</option>
                                    <option value="70">Tỉnh Bình Phước</option>
                                    <option value="60">Tỉnh Bình Thuận</option>
                                    <option value="52">Tỉnh Bình Định</option>
                                    <option value="96">Tỉnh Cà Mau</option>
                                    <option value="92">Thành phố Cần Thơ</option>
                                    <option value="04">Tỉnh Cao Bằng</option>
                                    <option value="64">Tỉnh Gia Lai</option>
                                    <option value="02">Tỉnh Hà Giang</option>
                                    <option value="35">Tỉnh Hà Nam</option>
                                    <option value="01">Thành phố Hà Nội</option>
                                    <option value="42">Tỉnh Hà Tĩnh</option>
                                    <option value="30">Tỉnh Hải Dương</option>
                                    <option value="31">Thành phố Hải Phòng</option>
                                    <option value="93">Tỉnh Hậu Giang</option>
                                    <option value="79">Thành phố Hồ Chí Minh</option>
                                    <option value="17">Tỉnh Hoà Bình</option>
                                    <option value="33">Tỉnh Hưng Yên</option>
                                    <option value="56">Tỉnh Khánh Hòa</option>
                                    <option value="91">Tỉnh Kiên Giang</option>
                                    <option value="62">Tỉnh Kon Tum</option>
                                    <option value="12">Tỉnh Lai Châu</option>
                                    <option value="68">Tỉnh Lâm Đồng</option>
                                    <option value="20">Tỉnh Lạng Sơn</option>
                                    <option value="10">Tỉnh Lào Cai</option>
                                    <option value="80">Tỉnh Long An</option>
                                    <option value="36">Tỉnh Nam Định</option>
                                    <option value="40">Tỉnh Nghệ An</option>
                                    <option value="37">Tỉnh Ninh Bình</option>
                                    <option value="58">Tỉnh Ninh Thuận</option>
                                    <option value="25">Tỉnh Phú Thọ</option>
                                    <option value="54">Tỉnh Phú Yên</option>
                                    <option value="44">Tỉnh Quảng Bình</option>
                                    <option value="49">Tỉnh Quảng Nam</option>
                                    <option value="51">Tỉnh Quảng Ngãi</option>
                                    <option value="22">Tỉnh Quảng Ninh</option>
                                    <option value="45">Tỉnh Quảng Trị</option>
                                    <option value="94">Tỉnh Sóc Trăng</option>
                                    <option value="14">Tỉnh Sơn La</option>
                                    <option value="72">Tỉnh Tây Ninh</option>
                                    <option value="34">Tỉnh Thái Bình</option>
                                    <option value="19">Tỉnh Thái Nguyên</option>
                                    <option value="38">Tỉnh Thanh Hóa</option>
                                    <option value="46">Tỉnh Thừa Thiên Huế</option>
                                    <option value="82">Tỉnh Tiền Giang</option>
                                    <option value="84">Tỉnh Trà Vinh</option>
                                    <option value="08">Tỉnh Tuyên Quang</option>
                                    <option value="86">Tỉnh Vĩnh Long</option>
                                    <option value="26">Tỉnh Vĩnh Phúc</option>
                                    <option value="15">Tỉnh Yên Bái</option>
                                    <option value="48">Thành phố Đà Nẵng</option>
                                    <option value="66">Tỉnh Đắk Lắk</option>
                                    <option value="67">Tỉnh Đắk Nông</option>
                                    <option value="11">Tỉnh Điện Biên</option>
                                    <option value="75">Tỉnh Đồng Nai</option>
                                    <option value="87">Tỉnh Đồng Tháp</option>
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
                                    name="DistrictIdsAsString"
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
                                    name="WardIdsAsString"
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
                            {{-- <li>
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
                            </li> --}}
                            {{-- <li>
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
                            </li> --}}
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
                                        <input type="checkbox" value="east" name="DirectionsAsString[]" />
                                        <label for="">Đông</label>
                                    </div>
                                    <div class="form-custom-checkbox">
                                        <input type="checkbox" value="west" name="DirectionsAsString[]" />
                                        <label for="">Tây</label>
                                    </div>
                                    <div class="form-custom-checkbox">
                                        <input type="checkbox" value="south" name="DirectionsAsString[]" />
                                        <label for="">Nam</label>
                                    </div>
                                    <div class="form-custom-checkbox">
                                        <input type="checkbox" value="north" name="DirectionsAsString[]" />
                                        <label for="">Bắc</label>
                                    </div>
                                    <div class="form-custom-checkbox">
                                        <input type="checkbox" value="northeast" name="DirectionsAsString[]" />
                                        <label for="">Đông - Bắc</label>
                                    </div>
                                    <div class="form-custom-checkbox">
                                        <input type="checkbox" value="northwest" name="DirectionsAsString[]" />
                                        <label for="">Tây - Bắc</label>
                                    </div>
                                    <div class="form-custom-checkbox">
                                        <input type="checkbox" value="southeast" name="DirectionsAsString[]" />
                                        <label for="">Tây - Nam</label>
                                    </div>
                                    <div class="form-custom-checkbox">
                                        <input type="checkbox" value="southwest" name="DirectionsAsString[]" />
                                        <label for="">Đông - Nam</label>
                                    </div>
                                </div>
                            </li>
                            {{-- <li>
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
                            </li> --}}
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

<div class="chuyenmuc container mt-4" id="danhmuc">

    <div class="row mt-sm-4 mt-3">
        <div class="col-md-9 col-sm-12 left-element">
            <div class="sp-b d-flex">
                <div class="type-sort">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-light active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked />
                            <img style="width:15px;height: 15px; rotate: 90deg;" src="./assets/img/row-vertical.svg" />
                        </label>
                        <label class="btn btn-light">
                            <input type="radio" name="options" id="option3" autocomplete="off" />
                            <img style="width:15px;height: 15px;" src="./assets/img/map.svg" />
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

            @foreach ($properties as $item)
            <div class="gap-24 d-flex flex-column card-container">
                <a href="/real-state/{{ $item->id }}" class="card-cm" title="{{$item->title}}">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="{{$item->images[0]->image_url}}"
                            alt="{{$item->title}}" />
                        <div class="see">
                            <div><img src="assets/img/camera.png" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            {{$item->title}}
                        </h3>
                        <div>
                            <div class="description">{{$item->huyen->name}} , {{$item->province->name}}</div>
                            <div class="description-tag">
                                <div class="description-item">{{$item->area}} m2</div>
                                <div class="description-item">{{$item->num_of_bedrooms}} Phòng ngủ</div>
                                <div class="description-item">{{$item->num_of_bathrooms}} WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    {{$item->price}}
                                </div>

                                <div class="time">
                                    {{$item->created_at}}
                                </div>
                            </div>
                            <div class="heart">
                                <span class="btn-save js-btn-save add-like" post_id="117358" title=" Lưu tin này " data-original-title="Tin đã lưu"><i class="icon heart margin-right-0"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach




                {{-- <div class="paging">
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
                </div> --}}
            </div>

            <div class="description-text mt-4 pb-4">
                <p class="mb-3">

                </p>
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
