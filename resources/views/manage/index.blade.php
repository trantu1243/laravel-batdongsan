@extends('layouts.index')

@section('title', 'Manage')

@section('content')

<style>
    a {
        color: inherit;
    }
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
    <aside class="main-sidebar sidebar-mini skin-blue-light" style="box-shadow: none !important;">
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://batdongsan.vn/sellernet/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
                </div>
                <div class="info">
                    <a href="https://batdongsan.vn/sellernet/thong-tin-ca-nhan" class="d-block" style="font-size: 14px;">
                        Tu Tran <br />
                    </a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                    <li class="nav-item menu-is-opening menu-open" style="padding: 12px 6px;">
                        <a href="javascript:void(0)" class="nav-link">
                            <span class="sc-fXoxut bWOcTw">
                                <svg font-size="24px" width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.5 6C5.32843 6 6 5.32843 6 4.5C6 3.67157 5.32843 3 4.5 3C3.67157 3 3 3.67157 3 4.5C3 5.32843 3.67157 6 4.5 6Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path
                                        d="M4.5 13C5.32843 13 6 12.3284 6 11.5C6 10.6716 5.32843 10 4.5 10C3.67157 10 3 10.6716 3 11.5C3 12.3284 3.67157 13 4.5 13Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path
                                        d="M4.5 20C5.32843 20 6 19.3284 6 18.5C6 17.6716 5.32843 17 4.5 17C3.67157 17 3 17.6716 3 18.5C3 19.3284 3.67157 20 4.5 20Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path d="M8.5 4.5H20.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M8.5 11.5H20.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M8.5 18.5H20.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>

                            <p class="text-danger font-weight-bold">
                                Quản lý tin đăng
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="margin-left: 20px;">
                            <li class="nav-item">
                                <a href="/post" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>Đăng mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/manage" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>

                                    <p>Tất cả tin (1)</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/manage/status/2" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>

                                    <p>Tin đang đăng (0)</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/manage/status/1" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>

                                    <p>Tin chờ duyệt (1)</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/manage/status/3" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>Tin không duyệt (0)</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item" style="padding: 12px 6px;">
                        <a href="javascript:void(0)" class="nav-link">
                            <span class="sc-fXoxut bWOcTw">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M20.4578 3.17765L15.8979 2.85194C15.5385 2.82512 15.2251 3.09467 15.1981 3.45403C15.1711 3.81354 15.4407 4.12683 15.8002 4.1538L15.8013 4.15388L18.6396 4.34662L13.1043 8.67684L8.65977 5.18998C8.40806 4.99084 8.04884 5.00474 7.81325 5.2227L3.14905 9.68627C2.89331 9.92917 2.87763 10.3312 3.1126 10.5933C3.23148 10.7443 3.41547 10.8294 3.60771 10.8222C3.77796 10.8192 3.94029 10.7497 4.0599 10.6285L8.3009 6.55911L12.685 10.0125C12.9227 10.2024 13.2594 10.2031 13.4971 10.0134L13.405 9.89505L13.4987 10.0121L19.6455 5.22898L19.4217 8.00298L19.4216 8.01437C19.42 8.36421 19.6854 8.65749 20.0336 8.69078L20.0408 8.69146H20.0726C20.4082 8.69293 20.69 8.43917 20.7236 8.10526L21.0494 3.86963C21.0721 3.69705 21.0119 3.52404 20.8874 3.40287C20.7845 3.26841 20.6274 3.18587 20.4578 3.17765ZM19.6619 5.02604L19.6455 5.22898L19.806 5.10414L19.8223 4.90127L19.8222 4.90126L19.6619 5.02604ZM8.29121 6.36053L8.39506 6.46876L8.3009 6.55911L8.19839 6.47836L8.29121 6.36053ZM3.22751 10.4968L3.11679 10.5979L3.1126 10.5933L3.10871 10.5883L3.22751 10.4968ZM13.1041 8.86729L13.0117 8.74925L13.1043 8.67684L13.1967 8.74938L13.1045 8.86698L13.1041 8.86729ZM18.8634 4.36182L18.6396 4.34662L18.8165 4.20822L19.0403 4.22341L18.8634 4.36182ZM4.0599 10.6285L4.05834 10.63L3.95449 10.5218L4.06164 10.6268L4.0599 10.6285ZM3.60771 10.8222L3.60568 10.8222L3.60355 10.6722L3.60974 10.8221L3.60771 10.8222ZM9.69531 14.0061C9.69531 13.6463 9.98693 13.3547 10.3467 13.3547H13.6556C14.0153 13.3547 14.3069 13.6463 14.3069 14.0061V20.4986C14.3069 20.8583 14.0153 21.1499 13.6556 21.1499H10.3467C9.98693 21.1499 9.69531 20.8583 9.69531 20.4986V14.0061ZM10.998 14.6574V19.8472H13.0042V14.6574H10.998ZM16.5781 10.8501C16.3888 10.8501 16.2117 10.9081 16.0787 11.009C15.9456 11.11 15.8501 11.2605 15.8501 11.4387V20.5615C15.8501 20.7397 15.9456 20.8901 16.0787 20.9911C16.2117 21.092 16.3888 21.1501 16.5781 21.1501H20.4221C20.6114 21.1501 20.7885 21.092 20.9215 20.9911C21.0546 20.8901 21.1501 20.7397 21.1501 20.5615V11.4387C21.1501 11.2605 21.0546 11.1101 20.9215 11.0091C20.7885 10.9082 20.6114 10.8501 20.4221 10.8501H16.5781ZM17.3062 19.9729V12.0273H19.694V19.9729H17.3062ZM3.12744 16.4377C3.12744 16.078 3.41905 15.7864 3.7788 15.7864H7.11281C7.47256 15.7864 7.76416 16.078 7.76416 16.4377V20.4987C7.76416 20.8584 7.47255 21.15 7.11281 21.15H3.7788C3.41905 21.15 3.12744 20.8584 3.12744 20.4987V16.4377ZM4.43015 17.0891V19.8473H6.46145V17.0891H4.43015Z"
                                    ></path>
                                </svg>
                            </span>
                            <p>
                                Quản lý tài chính

                                <span class="badge badge-danger">Sắp ra mắt</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách tin chờ duyệt của bạn</h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="content">
                    <div class="" style="background: #fff;">
                        <div class="card-header">
                            <div class="sc-kVmgbL llQhLd" style="margin-bottom: 10px;">
                                <div class="sc-jIeqeR eNhUsM">
                                    <div class="sc-ecTpdM ezXtMD">
                                        <form method="GET" action="" class="search-form">
                                            <input required type="text" name="search" placeholder="Tìm kiếm tiêu đề tin" class="form-control search-input" value="" />
                                            <button type="submit" class="btn btn-info search-button">Tìm</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10px;">STT</th>

                                        <th>Tin đăng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($realStates as $index => $item)
                                    <tr>
                                        <td>{{ $index+1 }}</td>

                                        <td style="border-right: 1px solid #dee2e6;">
                                            <div class="sc-cQEFXY wYwaw">
                                                <h6 class="sc-jSgupP jnxXQS sc-fKuJET bDsSzR" type="primary">
                                                    {{ $item->title }}
                                                </h6>
                                            </div>

                                            <div style="margin-top: 20px;" class="sc-iYXQVV dkEGFR">
                                                <div class="sc-hHdvca cvhYUN">
                                                    <div class="sc-bMYSqt cdBuCE">
                                                        <div type="tertiary" class="sc-fubCfw kzuyPj">Trạng thái</div>
                                                        <div class="sc-fubCfw eeaWWy sc-ieGSVO fGIfUh" type="secondary">
                                                            <div color="gray" class="sc-ebkicu gpcSQh">
                                                                <div color="gray" class="sc-fodVxV sUpQc sc-jtazYL eTTgQK" type="primary">
                                                                    @php
                                                                        $status = $item->post_status;
                                                                        $badge = 'primary';
                                                                        if ($item->post_status == "pending_approval") {
                                                                            $status = "Chờ duyệt";
                                                                            $badge = 'warning';
                                                                        } else if ($item->post_status == "pending_revision") {
                                                                            $status = "Sửa chờ duyệt";
                                                                            $badge = 'warning';
                                                                        } else if ($item->post_status == "rejected") {
                                                                            $status = "Không duyệt";
                                                                            $badge = 'danger';
                                                                        } else if ($item->post_status == "active") {
                                                                            $status = "Tin đang đăng";
                                                                            $badge = 'success';
                                                                        }
                                                                    @endphp
                                                                    <span class="badge badge-{{ $badge }}">{{ $status }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sc-hHdvca shBlC">
                                                    <div class="sc-bMYSqt cdBuCE">
                                                        <div type="tertiary" class="sc-fubCfw kzuyPj">Ngày đăng</div>
                                                        <div class="sc-iBPRYJ fTqJhL sc-ieGSVO fGIfUh" type="secondary">
                                                            {{ $item->start_date }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sc-hHdvca shBlC">
                                                    <div class="sc-bMYSqt cdBuCE">
                                                        <div type="tertiary" class="sc-fubCfw kzuyPj">Số ngày đăng</div>
                                                        <div class="sc-iBPRYJ fTqJhL sc-ieGSVO fGIfUh" type="secondary">
                                                            {{ $item->post_days }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="sc-hHdvca shBlC">
                                                    <div class="sc-bMYSqt cdBuCE">
                                                        <div type="tertiary" class="sc-fubCfw kzuyPj">Lượt xem</div>
                                                        <div class="sc-iBPRYJ fTqJhL sc-ieGSVO fGIfUh" type="secondary">{{ $item->view }}</div>
                                                    </div>
                                                </div>

                                                <div class="sc-hHdvca shBlC">
                                                    <div style="width: 25%;"></div>
                                                </div>
                                            </div>
                                            <div style="margin-top: 12px;">
                                                <div class="sc-ekkLtS sc-hIPjBT hByohu liwa-d">
                                                    <div color="#CCCCCC" class="sc-jGVbCA gwrfxZ"></div>
                                                    <div class="sc-ekkLtS hByohu">
                                                        <a
                                                            href="https://batdongsan.vn/sellernet/sua-tin/117366"
                                                            data-tracking-id="edit-listing-lmp"
                                                            data-tracking-label="prid=34443037,pos=lmp"
                                                            class="sc-kLgntA bwpqkK sc-fUiUso ezLBWn"
                                                            type="border"
                                                            color="secondary"
                                                        >
                                                            <div class="sc-iktFzd gaGeRK">
                                                                <span class="sc-jJEJSO dnonxM">
                                                                    <div class="sc-gWHgXt ikxKmn">
                                                                        <svg font-size="16px" width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path id="butt color" d="M17.5 9.5L14 6" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                            <path id="Vector" d="M8 20H4V16L17 3L21 7L8 20Z" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </div>
                                                                </span>
                                                                <span type="primary" class="sc-iwyYcG gBmyGv">Sửa tin</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>

@endsection
