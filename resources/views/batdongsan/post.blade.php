@extends('layouts.index')

@section('title', 'Batdongsan')

@section('content')

<style>
    .ptanh-custom-select .dropdown-menu {
        max-width: 100% !important;
        max-height: 300px !important;
        overflow: auto !important;
    }

    #cke_notifications_area_validationTextarea2 {
        display: none !important;
    }
</style>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

<body id="dangtintuc">
    <!-- start dang tin tuc -->
    <div class="dangtintuc container mat-42">
        <div class="d-flex fl-column">
            <div class="title">Đăng tin</div>
        </div>
        <form action="dang-tin" method="post" enctype="multipart/form-data" id="frm">
            <input type="hidden" name="_token" value="0mTnDMqOd3qiYpZnVndGJ01fPgjgapaJAEwN7ATF" />
            <div id="dangtin-main" class="mt-3">
                <div class="row">
                    <div class="col-12 col-lg-9 left-element">
                        <div class="row row-container-element">
                            <div class="card-body">
                                <div class="collapse-box">
                                    <div class="form-container">
                                        <div class="form-item-intro">
                                            <div class="title-collapse">
                                                <div class="introduce">Thông tin cơ bản</div>
                                                <p class="thugon">
                                                    <a class="text-collapse thugon" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        Thu gọn
                                                    </a>
                                                </p>
                                            </div>

                                            <div class="collapse show" id="collapseExample">
                                                <div class="card card-body" style="box-shadow: none !important; border: none; padding: 0;">
                                                    <div class="detail">
                                                        <div class="thongtin">Thông tin có dấu (<span class="batbuoc">*</span>) là bắt buộc, không đăng lại tin đã đăng trên Batdongsan.vn</div>
                                                        <div class="tabs tab-list">
                                                            <ul class="nav nav-tabs mobile-nav row rows-col-3 d-flex" role="tablist">
                                                                <li class="nav-item col">
                                                                    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab" data-value="1">Bán</a>
                                                                </li>
                                                                <li class="nav-item col">
                                                                    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab" data-value="2">Cho thuê</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="row row-element">
                                                            <div class="col-md-12 col-sm-12">
                                                                <label for="validationCustom04" class="form-label"> Loại bất động sản <span class="batbuoc">*</span> </label>
                                                                <select name="cate_id" class="selectpicker ptanh-custom-select form-control skip" id="render-html" title="VD: Nhà riêng" data-live-search="true">
                                                                    <option value="11">Bán Nhà</option>

                                                                    <option value="12">Bán Đất</option>

                                                                    <option value="13">Bán Biệt thự</option>

                                                                    <option value="14">Bán BĐS thương mại</option>

                                                                    <option value="15">Bán Căn hộ chung cư</option>

                                                                    <option value="16">Bán Văn phòng</option>

                                                                    <option value="17">Bán BĐS công nghiệp</option>

                                                                    <option value="18">Bán BĐS nông nghiệp</option>

                                                                    <option value="19">Bán BĐS tâm linh</option>

                                                                    <option value="20">Bán BĐS khác</option>

                                                                    <option value="62">Bán BĐS dịch vụ</option>
                                                                </select>

                                                                <div class="clear-select-bootstrap">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="cate_id_error text-danger"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row row-element">
                                                            <div class="col" style="font-weight: 500; font-size: 12px; line-height: 18px; text-transform: uppercase;">
                                                                Địa chỉ
                                                            </div>
                                                        </div>

                                                        <div class="row row-element">
                                                            <div class="col-md-6 col-sm-12">
                                                                <label for="validationCustom04" class="form-label"> Tinh, thành phố <span class="batbuoc">*</span> </label>
                                                                <select class="selectpicker ptanh-custom-select form-control" title="Chọn" data-live-search="true" id="tbProvince" name="province_id" data-dependance-name="tinhthanh">
                                                                    <option value="1">Hồ Chí Minh</option>

                                                                    <option value="2">Hà Nội</option>

                                                                    <option value="3">Đà Nẵng</option>

                                                                    <option value="4">Bình Dương</option>

                                                                    <option value="5">Đồng Nai</option>

                                                                    <option value="6">Khánh Hòa</option>

                                                                    <option value="7">Hải Phòng</option>

                                                                    <option value="8">Long An</option>

                                                                    <option value="9">Quảng Nam</option>

                                                                    <option value="10">Bà Rịa Vũng Tàu</option>

                                                                    <option value="11">Đắk Lắk</option>

                                                                    <option value="12">Cần Thơ</option>

                                                                    <option value="13">Bình Thuận </option>

                                                                    <option value="14">Lâm Đồng</option>

                                                                    <option value="15">Thừa Thiên Huế</option>

                                                                    <option value="16">Kiên Giang</option>

                                                                    <option value="17">Bắc Ninh</option>

                                                                    <option value="18">Quảng Ninh</option>

                                                                    <option value="19">Thanh Hóa</option>

                                                                    <option value="20">Nghệ An</option>

                                                                    <option value="21">Hải Dương</option>

                                                                    <option value="22">Gia Lai</option>

                                                                    <option value="23">Bình Phước</option>

                                                                    <option value="24">Hưng Yên</option>

                                                                    <option value="25">Bình Định</option>

                                                                    <option value="26">Tiền Giang</option>

                                                                    <option value="27">Thái Bình</option>

                                                                    <option value="28">Bắc Giang</option>

                                                                    <option value="29">Hòa Bình</option>

                                                                    <option value="30">An Giang</option>

                                                                    <option value="31">Vĩnh Phúc</option>

                                                                    <option value="32">Tây Ninh</option>

                                                                    <option value="33">Thái Nguyên</option>

                                                                    <option value="34">Lào Cai</option>

                                                                    <option value="35">Nam Định</option>

                                                                    <option value="36">Quảng Ngãi</option>

                                                                    <option value="37">Bến Tre</option>

                                                                    <option value="38">Đắk Nông</option>

                                                                    <option value="39">Cà Mau</option>

                                                                    <option value="40">Vĩnh Long</option>

                                                                    <option value="41">Ninh Bình</option>

                                                                    <option value="42">Phú Thọ</option>

                                                                    <option value="43">Ninh Thuận</option>

                                                                    <option value="44">Phú Yên</option>

                                                                    <option value="45">Hà Nam</option>

                                                                    <option value="46">Hà Tĩnh</option>

                                                                    <option value="47">Đồng Tháp</option>

                                                                    <option value="48">Sóc Trăng</option>

                                                                    <option value="49">Kon Tum</option>

                                                                    <option value="50">Quảng Bình</option>

                                                                    <option value="51">Quảng Trị</option>

                                                                    <option value="52">Trà Vinh</option>

                                                                    <option value="53">Hậu Giang</option>

                                                                    <option value="54">Sơn La</option>

                                                                    <option value="55">Bạc Liêu</option>

                                                                    <option value="56">Yên Bái</option>

                                                                    <option value="57">Tuyên Quang</option>

                                                                    <option value="58">Điện Biên</option>

                                                                    <option value="59">Lai Châu</option>

                                                                    <option value="60">Lạng Sơn</option>

                                                                    <option value="61">Hà Giang</option>

                                                                    <option value="62">Bắc Kạn</option>

                                                                    <option value="63">Cao Bằng</option>

                                                                    <option data-tokens="frosting">Tinh</option>
                                                                </select>

                                                                <div class="clear-select-bootstrap">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>

                                                                <div class="province_id_error text-danger"></div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <label for="validationCustom04" class="form-label"> Quận, huyện <span class="batbuoc">*</span> </label>
                                                                <select
                                                                    class="selectpicker ptanh-custom-select form-control"
                                                                    title="Chọn"
                                                                    id="tbDistricts"
                                                                    name="district_id"
                                                                    data-live-search="true"
                                                                    data-dependance-name="quanhuyen"
                                                                    data-dependance="tinhthanh">
                                                                </select>

                                                                <div class="clear-select-bootstrap">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="district_id_error text-danger"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row row-element">
                                                            <div class="col-md-6 col-sm-12">
                                                                <label for="validationCustom04" class="form-label"> Phường, xã <span class="batbuoc">*</span> </label>
                                                                <select class="selectpicker ptanh-custom-select form-control" title="Chọn" data-live-search="true" id="ward_project" name="ward_id" data-dependance="quanhuyen"> </select>

                                                                <div class="clear-select-bootstrap">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="ward_id_error text-danger"></div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12" style="width: 100%;">
                                                                <label for="validationCustom04" class="form-label">
                                                                    Đường, phố
                                                                </label>
                                                                <select class="selectpicker ptanh-custom-select form-control" title="Chọn" data-live-search="true" name="street_id" id="street_project" data-dependance="quanhuyen"> </select>
                                                                <div class="clear-select-bootstrap">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                    Please select a valid state.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 mb-4">
                                                                <label for="validationCustom04" class="form-label">
                                                                    Dự án
                                                                </label>
                                                                <select
                                                                    class="selectpicker ptanh-custom-select form-control"
                                                                    title="Chọn"
                                                                    id="list_project"
                                                                    data-live-search="true"
                                                                    name="project_id"
                                                                    data-size="1500"
                                                                    aria-multiselectable="true"
                                                                    data-dependance="tinhthanh">
                                                                </select>
                                                                <div class="clear-select-bootstrap">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                    Please select a valid state.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12">
                                                                <label for="validationCustom04" class="form-label"> Địa chỉ hiển thị trên tin đăng <span class="batbuoc">*</span> </label>
                                                                <input type="text" name="address" class="ptanh-custom-input form-control" placeholder="Bạn có thể bổ sung hẻm, ngách, ngõ..." />
                                                                <div class="address_error text-danger"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-container-element">
                            <div class="card-body">
                                <div class="">
                                    <div class="form-container">
                                        <div class="form-item-intro">
                                            <div class="title-collapse">
                                                <div class="introduce">Thông tin bài viết</div>
                                                <p class="thugon">
                                                    <a class="thugon" data-toggle="collapse" href="#thongtinbaiviet" role="button" aria-expanded="false" aria-controls="thongtinbaiviet">
                                                        Thu gọn
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="collapse show" id="thongtinbaiviet">
                                                <div class="card card-body" style="box-shadow: none; border: none; padding: 0;">
                                                    <div class="detail">
                                                        <div class="thongtin">
                                                            Không gộp nhiều bất động sản trong một tin rao, để quá trình đăng tin và duyệt nhanh hơn, xin lưu ý: gõ tiếng Việt có dấu và không viết tắt...
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-divider"></div>
                                                    <div class="was-validated">
                                                        <div class="mb-3 mt-4">
                                                            <label for="validationTextarea" class="form-label">Tiêu đề <span class="batbuoc">*</span></label>
                                                            <textarea name="title" rows="3" id="validationTextarea" class="ptanh-text-area-custom form-control" placeholder="VD: Bán nhà riêng 50m2 chính chủ tại Cầu Giấy"></textarea>
                                                            <div class="title_error text-danger"></div>
                                                            <p class="desc- mt-2 mb-4">
                                                                Tối thiểu 30 ký tự, tối đa 99 ký tự
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="was-validated">
                                                        <div class="mb-3">
                                                            <label for="validationTextarea2" class="form-label">Mô tả <span class="batbuoc">*</span></label>
                                                            <textarea
                                                                rows="5"
                                                                name="description"
                                                                id="validationTextarea2"
                                                                class="ptanh-text-area-custom form-control"
                                                                placeholder="Nhập mô tả chung về bất động sản của bạn. Ví dụ: Khu nhà có vị trí thuận lợi, gần công viên, gần trường học ... "></textarea>
                                                            <div class="description_error text-danger"></div>
                                                            <p class="desc- mt-2">
                                                                Tối thiểu 30 ký tự, tối đa 3.000 ký tự
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-container-element">
                            <div class="card-body">
                                <div class="">
                                    <div class="form-container">
                                        <div class="form-item-intro">
                                            <div class="title-collapse">
                                                <div class="introduce">Thông tin bất động sản</div>
                                                <p class="thugon">
                                                    <a class="thugon" data-toggle="collapse" href="#thongtinbatdongsan" role="button" aria-expanded="false" aria-controls="thongtinbatdongsan">
                                                        Thu gọn
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="collapse show" id="thongtinbatdongsan">
                                                <div class="card card-body" style="box-shadow: none; border: none; padding: 0;">
                                                    <div class="dropdown-divider mt-4"></div>
                                                    <div class="row row-bds mt-4">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Diện tích <span class="batbuoc">*</span> </label>
                                                            <div style="display: flex; background: #f9fafc; border: 1px solid #ecedf1; border-radius: 8px;">
                                                                <div class="col-md-11" style="padding: 0;">
                                                                    <input name="area" style="border-right: none !important;" type="number" class="ptanh-custom-input form-control has-icon-after" placeholder="Nhập diện tích" />
                                                                </div>

                                                                <div class="col-md-1" style="padding: 0; display: flex;">
                                                                    <img src="/assets/img/m2.svg" alt="" style="width: 19px; height: 20px; margin: auto;" />
                                                                </div>
                                                            </div>
                                                            <div class="area_error text-danger"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row row-bds">
                                                        <div class="col-md-9" style="display: flex; flex-direction: column;">
                                                            <label class="form-label" style="padding-top: 3px;"> Mức giá <span class="batbuoc">*</span> </label>
                                                            <input name="price" id="price" type="text" class="ptanh-custom-input form-control" placeholder="Nhập giá" />
                                                            <div class="price_error text-danger"></div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-label"> Đơn vị </label>
                                                            <select id="don_vi_gia" class="selectpicker ptanh-custom-select form-control" title="Chọn đơn vị" name="price_unit">
                                                                <option value="VNĐ" selected>VNĐ</option>
                                                                <option value="gia-m2">Giá / m2</option>
                                                                <option value="Thỏa thuận">Thỏa thuận </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row row-bds">
                                                        <div class="col-md-12">
                                                            <label class="form-label">
                                                                Giấy tờ pháp lý
                                                            </label>
                                                            <select name="legal" class="selectpicker ptanh-custom-select form-control">
                                                                <option value="0">Không</option>
                                                                <option value="1">Sổ đỏ/ Sổ hồng</option>
                                                                <option value="2">Hợp đồng mua bán</option>
                                                                <option value="3">Đang chờ sổ</option>
                                                            </select>
                                                            <div class="clear-select-bootstrap">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-divider" style="margin: 0 0 24px 0;"></div>
                                                    <div class="row row-bds">
                                                        <div class="col-md-9 title-count">Số phòng ngủ</div>
                                                        <div class="col-md-3">
                                                            <div class="count-container" style="background: #ecedf1; display: flex; padding: 3px 3px; border: 1px solid #ecedf1; border-radius: 8px;">
                                                                <div class="btn-minus" onclick="bedroom.minus('count-bedroom')"></div>
                                                                <input type="number" name="bedrooms" min="0" style="margin: auto; width: 70px; text-align: center;" id="count-bedroom" value="0" />
                                                                <div class="btn-plus active" onclick="bedroom.plus('count-bedroom')"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row row-bds">
                                                        <div class="col-md-9 title-count">
                                                            Số phòng tắm, vệ sinh
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="count-container" style="background: #ecedf1; display: flex; padding: 3px 3px; border: 1px solid #ecedf1; border-radius: 8px;">
                                                                <div class="btn-minus" onclick="bathroom.minus('count-bathroom')"></div>

                                                                <input type="number" name="bathrooms" style="margin: auto; width: 70px; text-align: center;" id="count-bathroom" value="0" min="0" />
                                                                <div class="btn-plus active" onclick="bathroom.plus('count-bathroom')"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row row-bds">
                                                        <div class="col-md-9 title-count">Số tầng</div>
                                                        <div class="col-md-3">
                                                            <div class="count-container" style="background: #ecedf1; display: flex; padding: 3px 3px; border: 1px solid #ecedf1; border-radius: 8px;">
                                                                <div class="btn-minus" onclick="flat.minus('count-flat')"></div>

                                                                <input type="number" name="floors" style="margin: auto; width: 70px; text-align: center;" id="count-flat" value="0" min="0" />

                                                                <div class="btn-plus active" onclick="flat.plus('count-flat')"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row row-bds">
                                                        <div class="col-md-12" style="font-weight: 500; font-size: 12px; line-height: 18px; color: #646d84; text-transform: uppercase;">
                                                            Mô tả bổ sung
                                                        </div>
                                                    </div>
                                                    <div class="row row-bds">
                                                        <div class="col-md-6">
                                                            <label class="form-label">Hướng nhà</label>
                                                            <select name="house_direction" class="selectpicker ptanh-custom-select form-control" title="Chọn hướng">
                                                                <option value="Đông">Đông</option>
                                                                <option value="Tây">Tây</option>
                                                                <option value="Nam">Nam</option>
                                                                <option value="Bắc">Bắc</option>
                                                                <option value="Đông Bắc">Đông Bắc</option>
                                                                <option value="Tây Bắc">Tây Bắc</option>
                                                                <option value="Tây Nam">Tây Nam</option>
                                                                <option value="Đông Nam">Đông Nam</option>
                                                            </select>
                                                            <div class="clear-select-bootstrap">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label">Hướng ban công</label>
                                                            <select name="balcony_direction" class="selectpicker ptanh-custom-select form-control" title="Chọn hướng">
                                                                <option value="Đông">Đông</option>
                                                                <option value="Tây">Tây</option>
                                                                <option value="Nam">Nam</option>
                                                                <option value="Bắc">Bắc</option>
                                                                <option value="Đông Bắc">Đông Bắc</option>
                                                                <option value="Tây Bắc">Tây Bắc</option>
                                                                <option value="Tây Nam">Tây Nam</option>
                                                                <option value="Đông Nam">Đông Nam</option>
                                                            </select>
                                                            <div class="clear-select-bootstrap">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row row-bds">
                                                        <div class="col-md-12" style="display: flex; flex-direction: column;">
                                                            <label class="form-label" style="padding-top: 3px;">
                                                                Nội thất
                                                            </label>
                                                            <input name="furniture" type="text" class="ptanh-custom-input form-control" placeholder="VD: Nội thất đầy đủ" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-container-element">
                            <div class="card-body">
                                <div class="">
                                    <div class="form-container">
                                        <div class="form-item-intro">
                                            <div class="title-collapse">
                                                <div class="introduce">Hình ảnh & Video</div>
                                                <p class="thugon">
                                                    <a class="thugon" data-toggle="collapse" href="#hinhanh" role="button" aria-expanded="false" aria-controls="hinhanh">
                                                        Thu gọn
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="collapse show" id="hinhanh">
                                                <div class="card card-body" style="box-shadow: none; border: none; padding: 0;">
                                                    <div class="detail">
                                                        <div class="thongtin" style="margin: 0;">
                                                            Tin rao có ảnh sẽ được xem nhiều hơn gấp 10 lần và được nhiều người gọi gấp 5 lần so với tin rao không có ảnh. Hãy đăng ảnh để được giao dịch nhanh chóng!
                                                        </div>
                                                        <span style="margin-bottom: 23px; color: #646d84; font-weight: 400; font-size: 12px;">
                                                            Xem thêm
                                                            <a href="#" style="color: #d1193f; text-decoration: none; font-weight: 400; font-size: 12px;">Quy định đăng tin</a>
                                                            Quy định đăng tin để biết thêm chi tiết.
                                                        </span>
                                                    </div>
                                                    <div class="dropdown-divider my-4"></div>
                                                    <div id="upload-img">
                                                        <div class="card">
                                                            <div class="drag-area select" role="button">
                                                                <span class="visible">
                                                                    <img src="/assets/img/gallery-add.png" alt="" class="mr-2" />
                                                                    Bấm để chọn ảnh tải lên hoặc kéo thả ảnh vào
                                                                </span>
                                                                <span class="on-drop">Drop images here</span>
                                                                <input id="file" name="file[]" type="file" class="file" multiple accept="image/*" />
                                                            </div>
                                                            <div class="file_error text-danger"></div>

                                                            <!-- IMAGE PREVIEW CONTAINER -->
                                                            <div class="img-container pb-3"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="form-label" style="padding-top: 3px;">
                                                            Thêm video từ Youtube
                                                        </label>
                                                        <input type="text" name="linkYoutube" class="ptanh-custom-input form-control" placeholder="VD: https://www.youtube.com/watch?v=Y-Dw0NpfRug" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-container-element">
                            <div class="card-body">
                                <div class="">
                                    <div class="form-container">
                                        <div class="form-item-intro">
                                            <div class="title-collapse">
                                                <div class="introduce">Thông tin liên hệ</div>
                                                <p class="thugon">
                                                    <a class="thugon" data-toggle="collapse" href="#thongtinlienhe" role="button" aria-expanded="false" aria-controls="thongtinlienhe">
                                                        Thu gọn
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="collapse show" id="thongtinlienhe">
                                                <div class="card card-body" style="box-shadow: none; border: none; padding: 0;">
                                                    <div class="dropdown-divider"></div>
                                                    <div class="col-md-12" style="padding: 0;">
                                                        <div class="row row-element">
                                                            <div class="col-md-6 col-sm-12">
                                                                <label for="validationCustom04" class="form-label"> Tên liên hệ <span class="batbuoc">*</span> </label>
                                                                <input name="author_name" type="text" value="Tu Tran" class="ptanh-custom-input form-control" placeholder="Nhập tên" />
                                                                <div class="author_name_error text-danger"></div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <label for="validationCustom04" class="form-label"> Số điện thoại <span class="batbuoc">*</span> </label>
                                                                <input type="text" name="author_phone" class="ptanh-custom-input form-control" placeholder="Nhập số điện thoại" value="0333627251" />
                                                                <div class="author_phone_error text-danger"></div>
                                                            </div>
                                                        </div>
                                                        <div class="row row-element">
                                                            <div class="col-md-6 col-sm-12">
                                                                <label for="validationCustom04" class="form-label"> Email <span class="batbuoc">*</span> </label>
                                                                <input name="author_email" type="text" class="ptanh-custom-input form-control" placeholder="Nhập email" value="trantu1242003@gmail.com" />
                                                                <div class="author_email_error text-danger"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-container-element">
                            <div class="card-body">
                                <div class="">
                                    <div class="form-container">
                                        <div class="form-item-intro">
                                            <div class="title-collapse">
                                                <span class="introduce">Chọn gói tin đăng</span>
                                            </div>
                                            <div class="dropdown-divider mt-4 mb-3" style="margin-bottom: 16px;"></div>
                                            <div class="row pta-row" style="margin-bottom: 24px;">
                                                <div class="col-md-3">
                                                    <label class="dangtintuc-image active">
                                                        <input type="radio" name="type" value="4" class="d-none" />
                                                        <span class="title-imgage">Tin thường</span>
                                                        <img src="/assets/img/chuyenmuc-house.svg" alt="" style="width: 90px; height: 80px;" />
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="dangtintuc-image">
                                                        <input type="radio" name="type" value="1" class="d-none" />
                                                        <span class="title-imgage">Tin VIP 1</span>
                                                        <img src="/assets/img/Frame.png" alt="" style="width: 90px; height: 80px;" />
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="dangtintuc-image">
                                                        <input type="radio" name="type" value="2" class="d-none" />
                                                        <span class="title-imgage">Tin VIP 2</span>
                                                        <img src="/assets/img/Frame-1.png" alt="" style="width: 90px; height: 80px;" />
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="dangtintuc-image">
                                                        <input type="radio" name="type" value="3" class="d-none" />
                                                        <span class="title-imgage mb-3">Tin VIP 3</span>
                                                        <img class="pt-3" src="/assets/img/Group 103.png" alt="" style="width: 130px;" />
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="hidden" name="selected_ad_type" id="selected_ad_type" />

                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <label for="validationCustom04" class="form-label">
                                                        Số ngày đăng
                                                    </label>
                                                    <select id="so_ngay_dang" name="number_day" class="selectpicker ptanh-custom-select form-control" data-live-search="true">
                                                        <option value="7">7 ngày </option>
                                                        <option value="8">8 ngày </option>
                                                        <option value="9">9 ngày </option>
                                                        <option value="10" selected>10 ngày </option>
                                                        <option value="11">11 ngày </option>
                                                        <option value="12">12 ngày </option>
                                                        <option value="13">13 ngày </option>
                                                        <option value="14">14 ngày </option>
                                                        <option value="15">15 ngày </option>
                                                        <option value="16">16 ngày </option>
                                                        <option value="17">17 ngày </option>
                                                        <option value="18">18 ngày </option>
                                                        <option value="19">19 ngày </option>
                                                        <option value="20">20 ngày </option>
                                                        <option value="21">21 ngày </option>
                                                        <option value="22">22 ngày </option>
                                                        <option value="23">23 ngày </option>
                                                        <option value="24">24 ngày </option>
                                                        <option value="25">25 ngày </option>
                                                        <option value="26">26 ngày </option>
                                                        <option value="27">27 ngày </option>
                                                        <option value="28">28 ngày </option>
                                                        <option value="29">29 ngày </option>
                                                        <option value="30">30 ngày </option>
                                                        <option value="31">31 ngày </option>
                                                        <option value="90">90 ngày</option>
                                                        <option value="180">180 ngày</option>
                                                    </select>

                                                    <div class="clear-select-bootstrap">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                            <path
                                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="validationCustom04" class="form-label">
                                                        Ngày bắt đầu
                                                    </label>
                                                    <div class="md-form md-outline input-with-post-icon datepicker" id="accLabels">
                                                        <input
                                                            id="ngay_bat_dau"
                                                            type="date"
                                                            name="start_day"
                                                            class="ptanh-custom-input form-control"
                                                            height="42"
                                                            style="height: 42px;"
                                                            placeholder="02/08/2022"
                                                            value="25-08-2024"
                                                            min="1997-01-01"
                                                            max="2030-12-31" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-container-element">
                            <div class="btn-footer-watching">
                                <div style="display: flex; align-items: center;" class="btn-container">
                                    <button style="color: #f0f0f0;" type="submit" class="btn-next btn btn-container-footer">
                                        Tiếp tục
                                        <img src="/assets/img/btn-vector-footer.svg" alt="" style="width: 8px; height: 15px;" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 right-element d-none d-lg-block">
                        <div class="container-left-side">
                            <div class="chart-container">
                                <div class="title" style="margin-top: 24px; margin-bottom: 24px;">
                                    Điểm uy tín
                                </div>
                                <div class="circular-progress">
                                    <div class="value-container">0%</div>
                                </div>
                            </div>
                            <div class="content-container" style="padding: 0 24px 24px 24px;">
                                <div class="description" style="text-align: center; margin-bottom: 15px;">
                                    Chưa đủ thông tin để người xem ra quyết định
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="card card-element">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0" style="display: flex;">
                                                <button class="btn btn-link btn-block text-left btn-title" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Thông tin cơ bản
                                                </button>
                                                <span class="title-desc">20%</span>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card card-body" style="box-shadow: none;">
                                                <div class="element-collapse" style="margin-top: 24px;">
                                                    <p class="element-collapse-title">Nhu cầu</p>
                                                    <span class="element-collapse-value">+1</span>
                                                </div>
                                                <div class="element-collapse">
                                                    <p class="element-collapse-title">
                                                        Loại bất động sản
                                                    </p>
                                                    <span class="element-collapse-value">+1</span>
                                                </div>
                                                <div class="element-collapse">
                                                    <p class="element-collapse-title">Tỉnh/thành phố</p>
                                                    <span class="element-collapse-value">+1</span>
                                                </div>
                                                <div class="element-collapse">
                                                    <p class="element-collapse-title">Quận/huyện</p>
                                                    <span class="element-collapse-value">+1</span>
                                                </div>
                                                <div class="element-collapse">
                                                    <p class="element-collapse-title">Phường/xã</p>
                                                    <span class="element-collapse-value">+1</span>
                                                </div>
                                                <div class="element-collapse">
                                                    <p class="element-collapse-title">Đường, phố</p>
                                                    <span class="element-collapse-value">+1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-element">
                                        <div class="card-header" id="headingOne2">
                                            <h2 class="mb-0" style="display: flex;">
                                                <button class="btn btn-link btn-block text-left btn-title" type="button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                                    Thông tin mô tả
                                                </button>
                                                <span class="title-desc">20%</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider" style="margin: 0;"></div>
                                    <div class="card card-element">
                                        <div class="card-header" id="headingOne3">
                                            <h2 class="mb-0" style="display: flex;">
                                                <button class="btn btn-link btn-block text-left btn-title" type="button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                                    Thông tin khác
                                                </button>
                                                <span class="title-desc">20%</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider" style="margin: 0;"></div>

                                    <div class="card card-element">
                                        <div class="card-header" id="headingOne4">
                                            <h2 class="mb-0" style="display: flex;">
                                                <button class="btn btn-link btn-block text-left btn-title" type="button" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                                    Thông tin liên hệ
                                                </button>
                                                <span class="title-desc">20%</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="description">
                                    Để tăng lượt xem tin và nâng cao tỷ lệ tiếp cận đến nhiều khách hàng, sử dụng ngay các gói TIN ĐĂNG VIP và UPTIN lên top đầu tìm kiếm
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

@endsection
