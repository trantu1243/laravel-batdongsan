@extends('layouts.index')

@section('title', 'Edit')

@section('content')

<style>

    a{color: inherit}
    .dkEGFR {
        display: flex;
    }

    .cvhYUN {
        margin-left: 0px;
        width: 20%;
        max-width: 120px;
    }

    .cdBuCE {
        display: flex;
        flex-direction: column;
    }

    .kzuyPj {
        font-family: Roboto;
        font-size: 12px;
        line-height: 16px;
        font-weight: 400;
        color: rgb(153, 153, 153);
    }

    .fGIfUh {
        margin-top: 4px;
    }

    .fTqJhL {
        font-family: Roboto;
        font-size: 14px;
        line-height: 20px;
        font-weight: 400;
        color: rgb(80, 80, 80);
    }

    .shBlC {
        margin-left: 16px;
        width: 20%;
        max-width: 120px;
    }

    .jnxXQS {
        font-family: Nunito;
        font-size: 14px;
        line-height: 20px;
        font-weight: 700;
        color: rgb(44, 44, 44);
    }

    .eeaWWy {
        font-family: Roboto;
        font-size: 12px;
        line-height: 16px;
        font-weight: 400;
        color: rgb(80, 80, 80);
    }

    .iRpKby {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        word-break: break-word;
    }

    .hByohu {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }

    .gwrfxZ {
        cursor: pointer;
        color: rgb(204, 204, 204);
        display: flex;
        flex-direction: row;
        -webkit-box-align: center;
        align-items: center;
        width: fit-content;
    }

    .liwa-d {
        -webkit-box-pack: justify;
        justify-content: space-between;
    }

    .ezLBWn {
        margin-left: 8px;
    }

    .bwpqkK {
        position: relative;
        height: 32px;
        display: inline-block;
        border-radius: 4px;
        cursor: pointer;
        white-space: nowrap;
        width: fit-content;
        background-color: rgb(255, 255, 255);
        padding: 6px 12px;
        color: rgb(44, 44, 44);
        opacity: 1;
        border: 1px solid rgb(204, 204, 204);
    }

    .gaGeRK {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        height: 100%;
        width: 100%;
        -webkit-box-pack: center;
        justify-content: center;
    }

    .bwpqkK.bwpqkK span {
        color: rgb(44, 44, 44);
    }

    .dnonxM {
        font-size: 16px;
        height: 16px;
        width: 16px;
        display: inline-block;
        margin-right: 8px;
        line-height: 1;
    }

    .gBmyGv {
        font-family: Nunito;
        font-size: 14px;
        line-height: 20px;
        font-weight: 700;
        color: rgb(44, 44, 44);
        display: inline-block;
    }

    .dVXYxd {
        grid-column: span 3 / span 3;
    }

    .ggBtnL {
        padding: 12px;
        height: 100%;
    }

    .gAiQsG {
        display: flex;
        flex-direction: column;
        -webkit-box-pack: justify;
        justify-content: space-between;
        height: 100%;
    }

    .bZQHcU {
        border-radius: 4px;
        background-color: rgb(242, 242, 242);
        overflow: hidden;
    }

    .dAEkuI {
        display: flex;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
        padding: 19px 16px;
    }

    .kzuyPj {
        font-family: Roboto;
        font-size: 12px;
        line-height: 16px;
        font-weight: 400;
        color: rgb(153, 153, 153);
    }

    .bzUnoI {
        width: 100%;
        padding: 0px;
        margin: 0px;
        background-color: rgb(255, 255, 255);
        border-radius: 4px;
        border: 1px solid rgb(204, 204, 204);
        cursor: not-allowed;
    }

    .cwHqGL {
        height: 32px;
        padding: 6px 12px;
        color: rgb(153, 153, 153);
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
    }

    .dpUesK {
        font-size: 16px;
        height: 16px;
        width: 16px;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        margin-right: 8px;
    }

    .iZXYbW {
        font-family: Nunito;
        font-size: 14px;
        line-height: 20px;
        font-weight: 700;
        color: rgb(153, 153, 153);
        display: inline-block;
    }

    .bDsSzR {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        word-break: break-word;
        color: rgb(0, 78, 127);
    }

    .llQhLd {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: justify;
        justify-content: space-between;
        margin-bottom: 16px;
        -webkit-box-align: center;
        align-items: center;
    }

    .eNhUsM {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }

    .ezXtMD {
        margin-right: 8px;
    }

    .fTLLNh {
        position: relative;
        cursor: pointer;
        display: inline-block;
        white-space: nowrap;
        width: fit-content;
    }

    .kIbihR {
        width: 240px;
    }

    .endHJt {
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .fSjCQg {
        position: relative;
        display: flex;
    }

    .iwgmgA.iwgmgA.iwgmgA {
        appearance: none;
        flex: 1 1 0%;
        width: 100%;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(204, 204, 204);
        border-radius: 4px;
        padding: 5px 35px 5px 11px;
        caret-color: rgb(0, 0, 0);
        color: rgb(44, 44, 44);
        outline: none;
        opacity: 1;
        font-size: 14px;
        font-family: Roboto;
        line-height: 20px;
    }

    .gbVhdv {
        position: absolute;
        right: 12px;
        top: 8px;
        font-size: 16px;
    }

    .hheUsd {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        cursor: pointer;
    }

    .JaFNz {
        min-width: 160px;
    }

    .conNwD {
        display: flex;
        flex-direction: column;
    }

    .jmonRw {
        position: relative;
    }

    .fBTJqv {
        margin-right: 8px;
        padding-right: 0px;
    }

    .fBTJqv {
        margin: 0px;
        position: relative;
        display: block;
        width: fit-content;
        cursor: pointer;
    }

    .deTdEL {
        margin-right: 8px;
    }

    .oLMna {
        font-family: Roboto;
        font-size: 14px;
        line-height: 20px;
        font-weight: 400;
        color: rgb(153, 153, 153);
    }

    .kGuuCb.kGuuCb button {
        padding: 7px;
    }

    .ijdeWz {
        height: 32px;
        display: inline-block;
        border-radius: 4px 0px 0px 4px;
        cursor: pointer;
        white-space: nowrap;
        width: fit-content;
        background-color: rgb(242, 242, 242);
        padding: 6px 12px 6px 11px;
        color: rgb(44, 44, 44);
        opacity: 1;
        border-top: 1px solid rgb(204, 204, 204);
        border-bottom: 1px solid rgb(204, 204, 204);
        border-left: 1px solid rgb(204, 204, 204);
        border-image: initial;
        border-right: none;
    }

    .hFAhkg {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        height: 100%;
        width: 100%;
        -webkit-box-pack: center;
        justify-content: center;
    }

    .kGuuCb.kGuuCb span {
        height: 16px;
    }

    .iiaWOZ {
        font-family: Roboto;
        font-size: 14px;
        line-height: 20px;
        font-weight: 500;
        color: rgb(44, 44, 44);
    }

    .kGuuCb.kGuuCb button {
        padding: 7px;
    }

    .gzlqsL {
        height: 32px;
        display: inline-block;
        border-radius: 0px;
        cursor: pointer;
        white-space: nowrap;
        width: fit-content;
        background-color: rgb(255, 255, 255);
        padding: 6px 12px 6px 11px;
        color: rgb(153, 153, 153);
        opacity: 1;
        border-top: 1px solid rgb(204, 204, 204);
        border-bottom: 1px solid rgb(204, 204, 204);
        border-left: 1px solid rgb(204, 204, 204);
        border-image: initial;
        border-right: none;
    }

    .hFAhkg {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        height: 100%;
        width: 100%;
        -webkit-box-pack: center;
        justify-content: center;
    }

    .kGuuCb.kGuuCb button {
        padding: 7px;
    }

    .gLuXof {
        height: 32px;
        display: inline-block;
        border-radius: 0px 4px 4px 0px;
        cursor: pointer;
        white-space: nowrap;
        width: fit-content;
        background-color: rgb(255, 255, 255);
        padding: 6px 11px;
        color: rgb(153, 153, 153);
        opacity: 1;
        border: 1px solid rgb(204, 204, 204);
    }

    .eTBBht {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        position: relative;
    }

    .bwpqkK {
        position: relative;
        height: 32px;
        display: inline-block;
        border-radius: 4px;
        cursor: pointer;
        white-space: nowrap;
        width: fit-content;
        background-color: rgb(255, 255, 255);
        padding: 6px 12px;
        color: rgb(44, 44, 44);
        opacity: 1;
        border: 1px solid rgb(204, 204, 204);
    }

    .fBTJqv {
        margin-right: 8px;
        padding-right: 0px;
    }
    .search-form {
        display: flex;
        align-items: center;
    }

    .search-input {
        margin-right: 10px;
    }
</style>
<!-- Font Awesome -->

<!-- DataTables -->
<link rel="stylesheet" href="https://batdongsan.vn/sellernet/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="https://batdongsan.vn/sellernet/plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
<link rel="stylesheet" href="https://batdongsan.vn/sellernet/plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
<!-- Theme style -->
<link rel="stylesheet" href="https://batdongsan.vn/sellernet/dist/css/adminlte.min.css" />
<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/skins/_all-skins.min.css" />

<div class="wrapper">
    <!-- Main Sidebar Container -->
    @include('manage.layouts.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="dangtintuc container mat-42">
                    <div class="d-flex fl-column">
                        <div class="title">Sửa tin</div>
                    </div>
                    <form action="{{Route('create-real-state')}}" method="post" enctype="multipart/form-data" id="frm">
                        @csrf
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

                                                                    <div class="tabs tab-list">
                                                                        <ul class="nav nav-tabs mobile-nav row rows-col-3 d-flex" role="tablist">
                                                                            <li class="nav-item col">
                                                                                <a class="nav-link {{ $realState->property_type == 'sale' ? 'active' : ''}}" href="#profile" role="tab" data-toggle="tab" data-value="1">Bán</a>
                                                                            </li>
                                                                            <li class="nav-item col">
                                                                                <a class="nav-link {{ $realState->property_type == 'rent' ? 'active' : ''}}" href="#buzz" role="tab" data-toggle="tab" data-value="2">Cho thuê</a>
                                                                            </li>
                                                                            <input type="hidden" value="{{ $realState->property_type }}" id="property_type" name="property_type">
                                                                            <script>
                                                                                document.querySelectorAll('.nav-link').forEach(item => {
                                                                                    item.addEventListener('click', function() {
                                                                                        let propertyType = (this.getAttribute('data-value') == "1") ? "sale" : "rent";
                                                                                        document.getElementById('property_type').value = propertyType;
                                                                                    });
                                                                                });
                                                                            </script>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="row row-element">
                                                                        <div class="col-md-12 col-sm-12">
                                                                            <label for="validationCustom04" class="form-label"> Loại bất động sản <span class="batbuoc">*</span> </label>
                                                                            <select name="property_category" class="selectpicker ptanh-custom-select form-control skip" id="render-html" title="VD: Nhà riêng" data-live-search="true">
                                                                                <option value="house" {{ $realState->property_category == 'house' ? 'selected' : ''}}>Nhà</option>

                                                                                <option value="land" {{ $realState->property_category == 'land' ? 'selected' : ''}}>Đất</option>

                                                                                <option value="apartment" {{ $realState->property_category == 'apartment' ? 'selected' : ''}}>Biệt thự</option>

                                                                                <option value="office" {{ $realState->property_category == 'office' ? 'selected' : ''}}>BĐS thương mại</option>

                                                                                <option value="villa" {{ $realState->property_category == 'villa' ? 'selected' : ''}}>Căn hộ chung cư</option>

                                                                                <option value="commercial" {{ $realState->property_category == 'commercial' ? 'selected' : ''}}>Văn phòng</option>

                                                                                <option value="industrial" {{ $realState->property_category == 'industrial' ? 'selected' : ''}}>BĐS công nghiệp</option>

                                                                                <option value="agricultural" {{ $realState->property_category == 'agricultural' ? 'selected' : ''}}>BĐS nông nghiệp</option>

                                                                                <option value="spiritual" {{ $realState->property_category == 'spiritual' ? 'selected' : ''}}>BĐS tâm linh</option>

                                                                                <option value="service" {{ $realState->property_category == 'service' ? 'selected' : ''}}>BĐS dịch vụ</option>

                                                                                <option value="orther" {{ $realState->property_category == 'orther' ? 'selected' : ''}}>BĐS khác</option>
                                                                            </select>

                                                                            <div class="clear-select-bootstrap">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="cate_id_error text-danger">
                                                                                @error('property_category')
                                                                                    <div class="text-danger">Loại bất động sản là bắt buộc.</div>
                                                                                @enderror
                                                                            </div>
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
                                                                            <select class="selectpicker ptanh-custom-select form-control" title="Chọn" data-live-search="true" id="tbProvince" name="city" data-dependance-name="tinhthanh">
                                                                                @foreach ($provinces as $item)
                                                                                    <option value="{{ $item->_id }}" {{ $realState->city == $item->_id ? "selected" : ''}}>{{ $item->name }}</option>
                                                                                @endforeach

                                                                                <option data-tokens="frosting">Tinh</option>
                                                                            </select>

                                                                            <div class="clear-select-bootstrap">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                                </svg>
                                                                            </div>

                                                                            <div class="province_id_error text-danger">
                                                                                @error('city')
                                                                                    <div class="text-danger">Tỉnh, thành phố là bắt buộc.</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <label for="validationCustom04" class="form-label"> Quận, huyện <span class="batbuoc">*</span> </label>
                                                                            <select
                                                                                class="selectpicker ptanh-custom-select form-control"
                                                                                title="Chọn"
                                                                                id="tbDistricts"
                                                                                name="district"
                                                                                data-live-search="true"
                                                                                data-dependance-name="quanhuyen"
                                                                                data-dependance="tinhthanh">
                                                                                @foreach ($districts as $item)
                                                                                    <option value="{{ $item->_id }}" {{ $realState->district == $item->_id ? "selected" : ''}}>{{ $item->name }}</option>
                                                                                @endforeach
                                                                            </select>

                                                                            <div class="clear-select-bootstrap">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                                </svg>
                                                                            </div>
                                                                            <div class="district_id_error text-danger">
                                                                                @error('district')
                                                                                <div class="text-danger">Quận, huyện là bắt buộc.</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row row-element">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <label for="validationCustom04" class="form-label"> Phường, xã <span class="batbuoc">*</span> </label>
                                                                            <select class="selectpicker ptanh-custom-select form-control" title="Chọn" data-live-search="true" id="ward_project" name="commune" data-dependance="quanhuyen">
                                                                                @foreach ($wards as $item)
                                                                                    <option value="{{ $item->_id }}" {{ $realState->commune == $item->_id ? "selected" : ''}}>{{ $item->name }}</option>
                                                                                @endforeach
                                                                            </select>

                                                                            <div class="clear-select-bootstrap">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                                    <path
                                                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                                </svg>
                                                                            </div>
                                                                            <div class="ward_id_error text-danger">
                                                                                @error('commune')
                                                                                <div class="text-danger">Phường, xã là bắt buộc.</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        {{-- <div class="col-md-6 col-sm-12" style="width: 100%;">
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
                                                                        </div> --}}
                                                                    </div>
                                                                    <div class="row">
                                                                        {{-- <div class="col-md-12 col-sm-12 mb-4">
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
                                                                        </div> --}}
                                                                        <div class="col-md-12 col-sm-12">
                                                                            <label for="validationCustom04" class="form-label"> Địa chỉ hiển thị trên tin đăng <span class="batbuoc">*</span> </label>
                                                                            <input type="text" name="detailAddress" class="ptanh-custom-input form-control" placeholder="Bạn có thể bổ sung hẻm, ngách, ngõ..." value="{{ $realState->detailAddress }}" />
                                                                            <div class="address_error text-danger"></div>
                                                                        </div>
                                                                        <div class="address_error text-danger">
                                                                            @error('detailAddress')
                                                                            <div class="text-danger">Địa chỉ hiển thị trên tin đăng là bắt buộc.</div>
                                                                            @enderror
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
                                                                        <textarea name="title" rows="3" id="validationTextarea" class="ptanh-text-area-custom form-control" placeholder="VD: Bán nhà riêng 50m2 chính chủ tại Cầu Giấy">{{ $realState->title }}</textarea>
                                                                        <div class="title_error text-danger"></div>
                                                                        <p class="desc- mt-2 mb-4">
                                                                            Tối thiểu 30 ký tự, tối đa 99 ký tự
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                @error('title')
                                                                <div class="title_error text-danger"><div class="text-danger">Tiêu đề là bắt buộc.</div></div>
                                                                @enderror
                                                                <div class="was-validated">
                                                                    <div class="mb-3">
                                                                        <label for="validationTextarea2" class="form-label">Mô tả <span class="batbuoc">*</span></label>
                                                                        <textarea
                                                                            rows="5"
                                                                            name="description"
                                                                            id="validationTextarea2"
                                                                            class="ptanh-text-area-custom form-control"
                                                                            placeholder="Nhập mô tả chung về bất động sản của bạn. Ví dụ: Khu nhà có vị trí thuận lợi, gần công viên, gần trường học ... ">{{ $realState->description }}</textarea>
                                                                        <div class="description_error text-danger"></div>
                                                                        <p class="desc- mt-2">
                                                                            Tối thiểu 30 ký tự, tối đa 3.000 ký tự
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                @error('description')
                                                                <div class="description_error text-danger"><div class="text-danger">Mô tả là bắt buộc.</div></div>
                                                                @enderror
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
                                                                                <input name="area" style="border-right: none !important;" type="number" class="ptanh-custom-input form-control has-icon-after" placeholder="Nhập diện tích" value={{ $realState->area }} />
                                                                            </div>

                                                                            <div class="col-md-1" style="padding: 0; display: flex;">
                                                                                <img src="./assets/img/m2.svg" alt="" style="width: 19px; height: 20px; margin: auto;" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="area_error text-danger">
                                                                            @error('area')
                                                                            <div class="text-danger">Diện tích là bắt buộc.</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-bds">
                                                                    <div class="col-md-9" style="display: flex; flex-direction: column;">
                                                                        <label class="form-label" style="padding-top: 3px;"> Mức giá <span class="batbuoc">*</span> </label>
                                                                        <input name="price" id="price" type="text" class="ptanh-custom-input form-control" placeholder="Nhập giá" value={{ $realState->price }} />
                                                                        <div class="price_error text-danger">
                                                                            @error('price')
                                                                            <div class="text-danger">Mức giá là bắt buộc.</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label class="form-label"> Đơn vị </label>
                                                                        <select id="don_vi_gia" class="selectpicker ptanh-custom-select form-control" title="Chọn đơn vị" name="price_unit">
                                                                            <option value="vnd" {{ $realState->price_unit == "vnd" ?"selected":""}}>VNĐ</option>
                                                                            <option value="price_per_m2" {{ $realState->price_unit == "price_per_m2" ?"selected":""}}>Giá / m2</option>
                                                                            <option value="negotiable" {{ $realState->price_unit == "negotiable" ?"selected":""}}>Thỏa thuận </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-bds">
                                                                    <div class="col-md-12">
                                                                        <label class="form-label">
                                                                            Giấy tờ pháp lý
                                                                        </label>
                                                                        <select name="legal_documents" class="selectpicker ptanh-custom-select form-control">
                                                                            <option value="none"  {{ $realState->legal_documents == "none" ?"selected":""}}>Không</option>
                                                                            <option value="red_book" {{ $realState->legal_documents == "red_book" ?"selected":""}}>Sổ đỏ/ Sổ hồng</option>
                                                                            <option value="sale_contract" {{ $realState->legal_documents == "sale_contract" ?"selected":""}}>Hợp đồng mua bán</option>
                                                                            <option value="pending" {{ $realState->legal_documents == "pending" ?"selected":""}}>Đang chờ sổ</option>
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
                                                                            <input type="number" name="num_of_bedrooms" min="0" style="margin: auto; width: 70px; text-align: center;" id="count-bedroom" value="{{ $realState->num_of_bedrooms }}" />
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

                                                                            <input type="number" name="num_of_bathrooms" style="margin: auto; width: 70px; text-align: center;" id="count-bathroom" value="{{ $realState->num_of_bathrooms }}" min="0" />
                                                                            <div class="btn-plus active" onclick="bathroom.plus('count-bathroom')"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-bds">
                                                                    <div class="col-md-9 title-count">Số tầng</div>
                                                                    <div class="col-md-3">
                                                                        <div class="count-container" style="background: #ecedf1; display: flex; padding: 3px 3px; border: 1px solid #ecedf1; border-radius: 8px;">
                                                                            <div class="btn-minus" onclick="flat.minus('count-flat')"></div>

                                                                            <input type="number" name="num_of_floors" style="margin: auto; width: 70px; text-align: center;" id="count-flat" value="{{ $realState->num_of_floors }}" min="0" />

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
                                                                            <option value="east" {{ $realState->house_direction == "east" ?"selected":""}}>Đông</option>
                                                                            <option value="west" {{ $realState->house_direction == "west" ?"selected":""}}>Tây</option>
                                                                            <option value="south" {{ $realState->house_direction == "south" ?"selected":""}}>Nam</option>
                                                                            <option value="north" {{ $realState->house_direction == "north" ?"selected":""}}>Bắc</option>
                                                                            <option value="northeast" {{ $realState->house_direction == "northeast" ?"selected":""}}>Đông Bắc</option>
                                                                            <option value="northwest" {{ $realState->house_direction == "northwest" ?"selected":""}}>Tây Bắc</option>
                                                                            <option value="southeast" {{ $realState->house_direction == "southeast" ?"selected":""}}>Tây Nam</option>
                                                                            <option value="southwest" {{ $realState->house_direction == "southwest" ?"selected":""}}>Đông Nam</option>
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
                                                                            <option value="east" {{ $realState->balcony_direction == "east" ?"selected":""}}>Đông</option>
                                                                            <option value="west" {{ $realState->balcony_direction == "west" ?"selected":""}}>Tây</option>
                                                                            <option value="south" {{ $realState->balcony_direction == "south" ?"selected":""}}>Nam</option>
                                                                            <option value="north" {{ $realState->balcony_direction == "north" ?"selected":""}}>Bắc</option>
                                                                            <option value="northeast" {{ $realState->balcony_direction == "northeast" ?"selected":""}}>Đông Bắc</option>
                                                                            <option value="northwest" {{ $realState->balcony_direction == "northwest" ?"selected":""}}>Tây Bắc</option>
                                                                            <option value="southeast" {{ $realState->balcony_direction == "southeast" ?"selected":""}}>Tây Nam</option>
                                                                            <option value="southwest" {{ $realState->balcony_direction == "southwest" ?"selected":""}}>Đông Nam</option>
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
                                                                        <input name="furniture" type="text" value={{ $realState->furniture }} class="ptanh-custom-input form-control" placeholder="VD: Nội thất đầy đủ" />
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
                                                                                <img src="./assets/img/gallery-add.png" alt="" class="mr-2" />
                                                                                Bấm để chọn ảnh tải lên hoặc kéo thả ảnh vào
                                                                            </span>
                                                                            <span class="on-drop">Drop images here</span>
                                                                            <input id="file" name="file[]" type="file" class="file" multiple accept="image/*" />
                                                                        </div>
                                                                        <div class="file_error text-danger">
                                                                            @error('file')
                                                                            <div class="text-danger">Ảnh là bắt buộc.</div>
                                                                            @enderror
                                                                        </div>

                                                                        <!-- IMAGE PREVIEW CONTAINER -->
                                                                        <div class="img-container pb-3"></div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <label class="form-label" style="padding-top: 3px;">
                                                                        Thêm video từ Youtube
                                                                    </label>
                                                                    <input type="text" name="video_link" value={{ $realState->video_link }} class="ptanh-custom-input form-control" placeholder="VD: https://www.youtube.com/watch?v=Y-Dw0NpfRug" />
                                                                    <div class="text-danger">
                                                                        @error('link_video')
                                                                        <div class="text-danger">Link video là bắt buộc.</div>
                                                                        @enderror
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
                                                                            <input name="name" type="text" value="{{ $realState->name }}" class="ptanh-custom-input form-control" placeholder="Nhập tên" />
                                                                            <div class="author_name_error text-danger">
                                                                                @error('name')
                                                                                <div class="text-danger">Tên là bắt buộc.</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <label for="validationCustom04" class="form-label"> Số điện thoại <span class="batbuoc">*</span> </label>
                                                                            <input type="text" name="phone" class="ptanh-custom-input form-control" placeholder="Nhập số điện thoại" value="{{$realState->phone}}" />
                                                                            <div class="author_phone_error text-danger">
                                                                                @error('phone')
                                                                                <div class="text-danger">SĐT là bắt buộc.</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row row-element">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <label for="validationCustom04" class="form-label"> Email <span class="batbuoc">*</span> </label>
                                                                            <input name="email" type="text" class="ptanh-custom-input form-control" placeholder="Nhập email" value="{{ $realState->email }}" />
                                                                            <div class="author_email_error text-danger">
                                                                                @error('email')
                                                                                <div class="text-danger">Email là bắt buộc.</div>
                                                                                @enderror
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
                                                        {{-- <div class="row pta-row" style="margin-bottom: 24px;">
                                                            <div class="col-md-3">
                                                                <label class="dangtintuc-image active">
                                                                    <input type="radio" name="type" value="4" class="d-none" />
                                                                    <span class="title-imgage">Tin thường</span>
                                                                    <img src="./assets/img/chuyenmuc-house.svg" alt="" style="width: 90px; height: 80px;" />
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label class="dangtintuc-image">
                                                                    <input type="radio" name="type" value="1" class="d-none" />
                                                                    <span class="title-imgage">Tin VIP 1</span>
                                                                    <img src="./assets/img/Frame.png" alt="" style="width: 90px; height: 80px;" />
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label class="dangtintuc-image">
                                                                    <input type="radio" name="type" value="2" class="d-none" />
                                                                    <span class="title-imgage">Tin VIP 2</span>
                                                                    <img src="./assets/img/Frame-1.png" alt="" style="width: 90px; height: 80px;" />
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label class="dangtintuc-image">
                                                                    <input type="radio" name="type" value="3" class="d-none" />
                                                                    <span class="title-imgage mb-3">Tin VIP 3</span>
                                                                    <img class="pt-3" src="./assets/img/Group 103.png" alt="" style="width: 130px;" />
                                                                </label>
                                                            </div>
                                                        </div> --}}
                                                        <input type="hidden" name="selected_ad_type" id="selected_ad_type" />

                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <label for="validationCustom04" class="form-label">
                                                                    Số ngày đăng
                                                                </label>
                                                                <select id="so_ngay_dang" name="post_days" class="selectpicker ptanh-custom-select form-control" data-live-search="true">
                                                                    <option value="7" {{ $realState->post_days == "7" ?"selected":""}}>7 ngày </option>
                                                                    <option value="8" {{ $realState->post_days == "8" ?"selected":""}}>8 ngày </option>
                                                                    <option value="9" {{ $realState->post_days == "9" ?"selected":""}}>9 ngày </option>
                                                                    <option value="10"  {{ $realState->post_days == "10" ?"selected":""}}>10 ngày </option>
                                                                    <option value="11" {{ $realState->post_days == "11" ?"selected":""}}>11 ngày </option>
                                                                    <option value="12" {{ $realState->post_days == "12" ?"selected":""}}>12 ngày </option>
                                                                    <option value="13" {{ $realState->post_days == "13" ?"selected":""}}>13 ngày </option>
                                                                    <option value="14" {{ $realState->post_days == "14" ?"selected":""}}>14 ngày </option>
                                                                    <option value="15" {{ $realState->post_days == "15" ?"selected":""}}>15 ngày </option>
                                                                    <option value="16" {{ $realState->post_days == "16" ?"selected":""}}>16 ngày </option>
                                                                    <option value="17" {{ $realState->post_days == "17" ?"selected":""}}>17 ngày </option>
                                                                    <option value="18" {{ $realState->post_days == "18" ?"selected":""}}>18 ngày </option>
                                                                    <option value="19" {{ $realState->post_days == "19" ?"selected":""}}>19 ngày </option>
                                                                    <option value="20" {{ $realState->post_days == "20" ?"selected":""}}>20 ngày </option>
                                                                    <option value="21" {{ $realState->post_days == "21" ?"selected":""}}>21 ngày </option>
                                                                    <option value="22" {{ $realState->post_days == "22" ?"selected":""}}>22 ngày </option>
                                                                    <option value="23" {{ $realState->post_days == "23" ?"selected":""}}>23 ngày </option>
                                                                    <option value="24" {{ $realState->post_days == "24" ?"selected":""}}>24 ngày </option>
                                                                    <option value="25" {{ $realState->post_days == "25" ?"selected":""}}>25 ngày </option>
                                                                    <option value="26" {{ $realState->post_days == "26" ?"selected":""}}>26 ngày </option>
                                                                    <option value="27" {{ $realState->post_days == "27" ?"selected":""}}>27 ngày </option>
                                                                    <option value="28" {{ $realState->post_days == "28" ?"selected":""}}>28 ngày </option>
                                                                    <option value="29" {{ $realState->post_days == "29" ?"selected":""}}>29 ngày </option>
                                                                    <option value="30" {{ $realState->post_days == "30" ?"selected":""}}>30 ngày </option>
                                                                    <option value="31" {{ $realState->post_days == "31" ?"selected":""}}>31 ngày </option>
                                                                    <option value="90" {{ $realState->post_days == "90" ?"selected":""}}>90 ngày</option>
                                                                    <option value="180" {{ $realState->post_days == "100" ?"selected":""}}>180 ngày</option>
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
                                                                        name="start_date"
                                                                        class="ptanh-custom-input form-control"
                                                                        height="42"
                                                                        style="height: 42px;"
                                                                        placeholder="02/08/2022"
                                                                        value="{{ $realState->start_date }}"
                                                                        min="1997-01-01"
                                                                        max="2030-12-31" />
                                                                </div>

                                                                <div class="start_date_error text-danger">
                                                                    @error('start_date')
                                                                    <div class="text-danger">Ngày bắt đầu là bắt buộc.</div>
                                                                    @enderror
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

                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {

        $('#tbProvince').on('change', function () {

            var city_id = $(this).val();
            fetch(`https://esgoo.net/api-tinhthanh/2/${city_id}.htm`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    $('#tbDistricts').empty();
                    data.data.forEach(value => {
                        const option = document.createElement("option");
                        option.innerText = value.name;
                        option.value = value.id;
                        document.getElementById("tbDistricts").appendChild(option);
                    });
                    $("#tbDistricts").selectpicker('refresh');
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                });

            // lay du an cua tinh do
            // $.ajax({
            //     url: "/getDuanTheoTinh",
            //     type: "POST",
            //     data: {'id': city_id},
            //     dataType: "json",
            //     cache: false,
            //     success: function (data) {
            //         $('#list_project').empty();
            //         $.each(data.data, function (key, value) {
            //             const option = document.createElement("option");
            //             option.innerText = value.name;
            //             option.value = value.id;


            //             document.getElementById("list_project").append(option);


            //         });
            //         $("#list_project").selectpicker('refresh');

            //     }
            // });

            // lay duong theo tinh
            // $.ajax({
            //     url: "/getDuongTheoTinh",
            //     type: "POST",
            //     data: {id: city_id},
            //     dataType: "json",
            //     cache: false,
            //     success: function (data) {
            //         $('#street_project').empty();
            //         $.each(data.data, function (key, value) {
            //             const option = document.createElement("option");
            //             option.innerText = value._prefix + " " + value._name;
            //             option.value = value.id;


            //             document.getElementById("street_project").append(option);
            //         });

            //         $("#street_project").selectpicker('refresh');

            //     }
            // });

        });

        $("#tbDistricts").on('change', function () {
            var id_quan = $(this).val();

            fetch(`https://esgoo.net/api-tinhthanh/3/${id_quan}.htm`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    $('#ward_project').empty();
                    data.data.forEach(value => {
                        const option = document.createElement("option");
                        option.innerText = value.name;
                        option.value = value.id;
                        document.getElementById("ward_project").appendChild(option);
                    });
                    $("#ward_project").selectpicker('refresh');
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                });


            // lay duong theo huyen
            // $.ajax({
            //     url: "/getDuongTheoHuyen",
            //     type: "POST",
            //     data: {id_quan: id_quan},
            //     dataType: "json",
            //     cache: false,
            //     success: function (data) {
            //         $('#street_project').empty();
            //         $.each(data.data, function (key, value) {
            //             const option = document.createElement("option");
            //             option.innerText = value._prefix + " " + value._name;
            //             option.value = value.id;

            //             document.getElementById("street_project").append(option);
            //         });

            //         $("#street_project").selectpicker('refresh');

            //     }
            // });
        });


        $('#price').on('keyup', function (e) {

            if (e.keyCode != 37 && e.keyCode != 38 && e.keyCode != 39 && e.keyCode != 40) { //Prevent if push prev or next keys

                var _this = this,
                    num = _this.value.replace(/\./g, '');

                if (!isNaN(num)) {
                    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
                    num = num.split('').reverse().join('').replace(/^[\.]/, '');
                    _this.value = num;

                    // store current positions in variables
                    var start = _this.selectionStart,
                        end = _this.selectionEnd;

                    // restore from variables...
                    _this.setSelectionRange(start, end);
                } else {
                    alert('Vui lòng nhập số!');
                    _this.value = _this.value.replace(/[^\d\.]*/g, '');
                }
            }

        });

        $("#don_vi_gia").on('change', function () {
            if ($(this).val() == 'Thỏa thuận') {
                $("#price").attr('disabled', 'disabled');
                $("#price").val('Thỏa thuận');
            } else {
                $("#price").removeAttr('disabled');
            }

            if ($(this).val() != 'Thỏa thuận' && $("#price").val() == 'Thỏa thuận') {
                $("#price").val('');
            }
        });
    });

    $('input, select, textarea').on('input change', function() {
        let name = $(this).attr('name');
        if (name.includes('[')) {
            name = name.replace(/\[\]/g, '_'); // Thay thế [] bằng _
        }
        let errorDiv = $('.' + name + '_error');
        errorDiv.empty();

    });

    $('input[type="file"]').on('change', function() {
        let name = $(this).attr('name');
        if (name.includes('[')) {
            name = name.replace(/\[\]/g, '_'); // Thay thế [] bằng _
        }
        let errorDiv = $('.' + name + '_error');
        errorDiv.empty();
    });

    // $('#frm').on('submit', function (e) {

    //     e.preventDefault();

    //     let formData = new FormData(this);

    //     $.ajax({
    //         url: $(this).attr('action'),
    //         type: $(this).attr('method'),
    //         data: formData,
    //         processData: false,
    //         contentType: false,
    //         success: function (response) {
    //             window.location.href = response.redirect_url;
    //         },
    //         error: function (response) {
    //             // Xử lý khi có lỗi
    //             if (response.status === 422) {
    //                 let firstErrorElement = null;
    //                 let errors = response.responseJSON.errors;
    //                 // Xóa các lỗi cũ (không cần thiết nếu chúng ta đã xóa khi người dùng chỉnh sửa)

    //                 $.each(errors, function(key, value) {
    //                     let inputName = key;
    //                     if (key.includes('.')) {
    //                         inputName = key.split('.')[0]; // Lấy tên gốc nếu có dấu chấm
    //                     }
    //                     if (inputName.includes('[')) {
    //                         inputName = inputName.replace(/\[\]/g, '_'); // Thay thế [] bằng _
    //                     }
    //                     let errorDiv = $('.' + inputName + '_error');
    //                     errorDiv.empty(); // Xóa lỗi cũ

    //                     // Lặp qua tất cả các lỗi và thêm chúng vào errorDiv
    //                     $.each(value, function(index, error) {
    //                         errorDiv.append('<div class="text-danger">' + error + '</div>');
    //                     });

    //                     // Lưu input đầu tiên có lỗi
    //                     if (!firstErrorElement) {
    //                         firstErrorElement = $('[name="' + key + '"]');
    //                     }
    //                 });
    //                 // Cuộn đến input đầu tiên có lỗi
    //                 if (firstErrorElement) {
    //                     $('html, body').animate({
    //                         scrollTop: firstErrorElement.offset().top
    //                     }, 500);
    //                     firstErrorElement.focus();
    //                 }


    //             }
    //         }
    //     });
    // });
</script>

<script>
    let files = [],
  dragArea = document.querySelector('#upload-img .drag-area'),
  input = document.querySelector('#upload-img .drag-area input'),
  button = document.querySelector('#upload-img .card button'),
  select = document.querySelector('#upload-img .drag-area.select'),
  container = document.querySelector('#upload-img .img-container');

/** CLICK LISTENER */
select.addEventListener('click', () => input.click());

/* INPUT CHANGE EVENT */
input.addEventListener('change', () => {
  let file = input.files;

  // if user select no image
  if (file.length == 0) return;

  for (let i = 0; i < file.length; i++) {
    if (file[i].type.split('/')[0] != 'image') continue;
    if (!files.some((e) => e.name == file[i].name)) files.push(file[i]);
  }

  showImages();
});

/** SHOW IMAGES */
function showImages() {
  container.innerHTML = files.reduce((prev, curr, index) => {
    return `${prev}
		    <div class="image">
			    <span onclick="delImage(${index})"></span>
			    <img src="${URL.createObjectURL(curr)}" />
			</div>`;
  }, '');
    function FileListItems(files) {
        var b = new ClipboardEvent('').clipboardData || new DataTransfer();
        for (var i = 0, len = files.length; i < len; i++) b.items.add(files[i]);
        return b.files;
    }
    input.files = new FileListItems(files);
}

/* DELETE IMAGE */
function delImage(index) {
  files.splice(index, 1);
  showImages();
}

/* DRAG & DROP */
dragArea.addEventListener('dragover', (e) => {
  e.preventDefault();
  dragArea.classList.add('dragover');
});

/* DRAG LEAVE */
dragArea.addEventListener('dragleave', (e) => {
  e.preventDefault();
  dragArea.classList.remove('dragover');
});

/* DROP EVENT */
dragArea.addEventListener('drop', (e) => {
  e.preventDefault();
  dragArea.classList.remove('dragover');

  let file = e.dataTransfer.files;
  for (let i = 0; i < file.length; i++) {
    /** Check selected file is image */
    if (file[i].type.split('/')[0] != 'image') continue;

    if (!files.some((e) => e.name == file[i].name)) files.push(file[i]);
  }
  showImages();
});

</script>
<script src="/js/dangtintuc.js"></script>
@endsection
