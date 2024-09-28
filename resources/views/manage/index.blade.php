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
    @include('manage.layouts.sidebar')
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
                                                            href="{{ Route('show-edit-manage', ['id' => $item->id ]) }}"
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
