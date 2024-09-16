<!-- start header -->
<div class="container-fluid" style="border-top: 2px solid #d1193f;"></div>
<header class="top-header" id="header">
    <nav class="navbar navbar-expand-lg menu navbar-light bg-light justify-content-lg-start justify-content-center" style="background: #ffffff !important; padding: 10px;">
        <!-- Links -->
        <!-- Brand/logo -->
        <a style="margin-right: 42px;" class="navbar-brand ml-lg-0 ml-auto" href=""><img class="img-logo" src="{{ asset('images/batdongsan.png') }}" alt="Batdongsan.vn" width="180" /></a>

        <a href="/" class="d-lg-none d-block ml-lg-4 ml-auto"> </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="nav-mobile-header d-flex d-lg-none">
                @auth
                    <div>
                        <img class="avatar" src="https://batdongsan.vn/images/default-user.svg" style="width: 50px; height: 50px; border-radius: 50%;" />
                        <aside style="flex: 1; margin-left: 15px; text-align: left; padding-top: 10px;">
                            <p style="margin: 0;">{{ Auth::user()->name }}</p>
                        </aside>
                    </div>
                @else
                    <div>
                        <a href="/login" class="btn btn-primary">Đăng nhập</a>
                        <a href="/register" class="btn btn-outline-secondary">Đăng kí</a>
                    </div>
                @endauth

                <a href="/post" class="btn btn-primary">Đăng tin mới<img style="width: 20px;" src="{{ asset('assets/img/edit-header.svg') }}" alt="Đăng tin" /></a>
            </div>

            <ul class="navbar-nav mr-auto d-lg-flex">
                <li class="item-menu d-flex d-lg-none">
                    <a class="item-nav-link" href="sellernet/manage-posts"> Danh sách tin </a>
                </li>
                <li class="item-menu dropdown">
                    <a href="/ban-nha-dat">Nhà đất bán</a>
                    <a class="nav-link dropdown-toggle item-nav-link ml-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                    <!-- Sub-Menu -->
                    <ul class="sub-menu dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="dropdown-item">
                            <a href="ban-nha" title="Bán Nhà">Bán Nhà</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="ban-dat" title="Bán Đất">Bán Đất</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="ban-biet-thu" title="Bán Biệt thự">Bán Biệt thự</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="ban-bds-thuong-mai" title="Bán BĐS thương mại">Bán BĐS thương mại</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="ban-can-ho-chung-cu" title="Bán Căn hộ chung cư">Bán Căn hộ chung cư</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="ban-van-phong" title="Bán Văn phòng">Bán Văn phòng</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="ban-bds-cong-nghiep" title="Bán BĐS công nghiệp">Bán BĐS công nghiệp</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="ban-bds-nong-nghiep" title="Bán BĐS nông nghiệp">Bán BĐS nông nghiệp</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="ban-bds-tam-linh" title="Bán BĐS tâm linh">Bán BĐS tâm linh</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="ban-bds-khac" title="Bán BĐS khác">Bán BĐS khác</a>
                        </li>

                        <li class="dropdown-item">
                            <a href="ban-bds-dich-vu" title="Bán BĐS dịch vụ">Bán BĐS dịch vụ</a>
                        </li>
                    </ul>
                </li>

                <li class="item-menu dropdown">
                    <a href="/cho-thue-nha-dat">Nhà đất cho thuê</a>
                    <a class="nav-link dropdown-toggle item-nav-link ml-auto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

                    <ul class="sub-menu dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li class="dropdown-item">
                            <a href="cho-thue-nha" title="Cho thuê Nhà">Cho thuê Nhà</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="cho-thue-dat" title="Cho thuê Đất">Cho thuê Đất</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="cho-thue-can-ho-chung-cu" title="Cho thuê Căn hộ chung cư">Cho thuê Căn hộ chung cư</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="cho-thue-van-phong" title="Cho thuê Văn phòng">Cho thuê Văn phòng</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="cho-thue-biet-thu" title="Cho thuê Biệt thự">Cho thuê Biệt thự</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="cho-thue-bds-thuong-mai" title="Cho thuê BĐS thương mại">Cho thuê BĐS thương mại</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="cho-thue-bds-cong-nghiep" title="Cho thuê BĐS công nghiệp">Cho thuê BĐS công nghiệp</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="cho-thue-bds-nong-nghiep" title="Cho thuê BĐS nông nghiệp">Cho thuê BĐS nông nghiệp</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="cho-thue-bds-tam-linh" title="Cho thuê BĐS tâm linh">Cho thuê BĐS tâm linh</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="cho-thue-bds-khac" title="Cho thuê BĐS khác">Cho thuê BĐS khác</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="cho-thue-bds-dich-vu" title="Cho thuê BĐS dịch vụ">Cho thuê BĐS dịch vụ</a>
                        </li>
                    </ul>
                </li>

                <li class="item-menu">
                    <a class="item-nav-link" href="du-an">Dự án</a>
                </li>
                <li class="item-menu">
                    <a class="item-nav-link" href="tin-tuc">Tin tức</a>
                </li>
                <li class="item-menu">
                    <a class="item-nav-link" href="/su-kien">Sự kiện</a>
                </li>

                <li class="item-menu">
                    <a class="item-nav-link" href="/chuyen-de">Chuyên đề</a>
                </li>

                <li class="item-menu">
                    <a class="item-nav-link" href="/thu-vien">Thư viện</a>
                </li>

                <li class="item-menu d-flex d-lg-none">
                    <a class="item-nav-link" href="tin-da-luu"> Danh sách tin lưu </a>
                </li>
                @auth
                <li class="item-menu d-flex d-lg-none">
                    <a class="item-nav-link" href="https://batdongsan.vn/tin-da-luu"> Danh sách tin lưu </a>
                </li>
                <li class="item-menu d-flex d-lg-none">
                    <a class="item-nav-link" href="https://batdongsan.vn/sellernet/thong-tin-ca-nhan"> Cài đặt tài khoản </a>
                </li>

                <li class="item-menu d-flex d-lg-none">
                    <a class="item-nav-link" href="https://batdongsan.vn/logout"> Đăng xuất </a>
                </li>
                @endauth
            </ul>
        </div>
        <div class="nav-overlay" onclick="this.previousElementSibling.previousElementSibling.click()"></div>
        <ul class="navbar-nav d-none d-lg-flex" style="display: none;">

            @auth

            <li class="item-menu" onclick="clickShowSubmenu()" style="padding: 8px 12px; cursor: pointer; border-radius: 24px; border: 1px solid #ecedf1; box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.1);">
                <div>
                    <img style="width: 24px; cursor: pointer;" src="https://batdongsan.vn/assets/img/profile-circle.svg" alt="" />
                </div>
                {{ Auth::user()->name }}

                <ul class="sub-menu" id="profile-submenu" style="display: none;">
                    <li>
                        <a href="/manage-posts" style="background: #ffffff;">Quản lý tin đăng</a>
                    </li>
                    <li>
                        <a href="/thong-tin-ca-nhan" style="background: #ffffff;">Cài đặt tài khoản</a>
                    </li>
                    <li style="border-top: 1px solid #ecedf1;">
                        <a href="/logout" style="background: #ffffff;">Đăng xuất</a>
                    </li>
                </ul>
            </li>

            @else

            <li class="item-menu" onclick="clickShowSubmenu()" style="padding: 8px 12px; cursor: pointer; border-radius: 24px; border: 1px solid #ecedf1; box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.1);">
                <div>
                    <img style="width: 24px; cursor: pointer;" src="{{ asset('assets/img/menu.svg') }}" alt="" />
                    <img style="width: 24px; cursor: pointer;" src="{{ asset('assets/img/profile-circle.svg') }}" alt="" />
                </div>
                <ul class="sub-menu" id="profile-submenu" style="display: none;">
                    <li>
                        <a href="/login" style="background: #ffffff;">Đăng nhập</a>
                    </li>
                    <li style="border-top: 1px solid #ecedf1;">
                        <a href="/register" style="background: #ffffff;">Tạo tài khoản mới</a>
                    </li>
                </ul>
            </li>

            @endauth

            <li class="item-menu" style="padding: 8px 12px; background: rgb(224, 60, 49); border-radius: 24px;">
                <a title="Đăng Tin" href="/post">
                    <span style="color: #ffffff; font-weight: 600; font-size: 14px; line-height: 22px;">Đăng Tin</span>
                    <img style="width: 20px;" src="{{ asset('assets/img/edit-header.svg') }}" alt="Đăng tin" />
                </a>
            </li>
        </ul>
    </nav>
</header>

<!-- end header -->
