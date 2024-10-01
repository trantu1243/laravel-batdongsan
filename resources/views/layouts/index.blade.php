<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <meta name="description" content="Batdongsan.vn là nền tảng công nghệ bất động sản (Proptech) thuộc hệ sinh thái bất động sản số 1 Việt Nam. Batdongsan.vn cung cấp hàng ngàn tin đăng mua bán nhà đất mỗi tháng." />
    <meta name="keywords" content="" />
    <meta name="author" content="batdongsan.vn" />
    <meta name="copyright" content="Copyright © 2021 Batdongsan" />
    <meta name="abstract" content="" />

    <meta name="robots" content="index, follow" />

    <!-- Open Graph data -->
    <meta property="og:site_name" content="batdongsan.vn" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Batdongsan.vn - Nền tảng Proptech số 1 Việt Nam" />
    <meta property="og:url" content="https://batdongsan.vn" />
    <meta property="og:image" content="/images/logo_default.png" />
    <meta property="og:description" content="Batdongsan.vn là nền tảng công nghệ bất động sản (Proptech) thuộc hệ sinh thái bất động sản số 1 Việt Nam. Batdongsan.vn cung cấp hàng ngàn tin đăng mua bán nhà đất mỗi tháng." />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@batdongsan.vn" />
    <meta name="twitter:title" content="Batdongsan.vn - Nền tảng Proptech số 1 Việt Nam" />
    <meta name="twitter:description" content="Batdongsan.vn là nền tảng công nghệ bất động sản (Proptech) thuộc hệ sinh thái bất động sản số 1 Việt Nam. Batdongsan.vn cung cấp hàng ngàn tin đăng mua bán nhà đất mỗi tháng." />
    <meta name="twitter:image" content="/images/logo_default.png" />

    <meta property="og:locale" content="vi_VN" />
    <meta property="article:published_time" content="" />
    <meta property="fb:app_id" content="478840744097490" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="requiresActiveX=true" />
    <link rel="canonical" href="https://batdongsan.vn" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png" />
    <link rel="manifest" href="/images/site.webmanifest" />

    <link rel="stylesheet preload" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet preload" href="/css/swiper-bundle.min.css" />
    <link rel="stylesheet preload" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" />
    <link rel="stylesheet preload" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <!-- icon -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet preload" href="/css/index.css" />
    <link rel="stylesheet preload" href="/css/custom.css" />
    <link rel="stylesheet preload" href="/css/style.css" />
    <link rel="stylesheet" href="/css/variable.css">
    <link rel="stylesheet" href="/css/tan.css">
    <base href="{{ url('/') }}" />
    <link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googletagmanager.com" />

    <meta name="csrf-token" content="0mTnDMqOd3qiYpZnVndGJ01fPgjgapaJAEwN7ATF" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XDYRDK6TGD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "G-XDYRDK6TGD");
    </script>
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script rel="preload" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script>
        var width = screen.width;
        // is mobile
        if (width < 576) {
            document.querySelectorAll(".price-filter.filter-dropdown .price-filter-value").forEach((item) => {
                item.innerText = "Tất cả";
                item.dataset.default = "Tất cả";
            });
        }
    </script>

    <script rel="preload" src="/js/swiper-bundle.min.js"></script>
    <script rel="preload" src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script rel="preload" src="/js/index.js"></script>

    <script rel="preload" src="/js/chuyenmuc.js"></script>

    <script rel="preload" src="/js/script.js"></script>

    <script rel="preload" src="/js/filter.js"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            // click luu tin
            $(".js-btn-save").click(function() {
                event.preventDefault();
                $(this).toggleClass("saved");
                // alert("dwdw");
            });

            $(".add-like").click(function(event) {
                event.preventDefault();
                var id = $(this).attr("post_id");

                var url = "/add-cart";
                var qty = 1;
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        // var qty = $(".number-count").text();
                        // $(".number-count").text(parseInt(qty)+1);
                        var url = window.location.href;
                        // window.location.href = url;
                        window.location.reload();
                        $(this).removeClass("add-like");
                    },
                    error: function(data) {
                        console.log("Error:", data);
                    },
                });
            });
            $(".remove-like").click(function(event) {
                event.preventDefault();
                var id = $(this).attr("post_id");

                var url = "/cart-remove";
                var qty = 1;
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        // var qty = $(".number-count").text();
                        // $(".number-count").text(parseInt(qty)- 2);
                        window.location.reload();
                    },
                    error: function(data) {
                        console.log("Error:", data);
                    },
                });
            });

            $(".btn_df").on("click", function() {
                var id = $(this).attr("id_pro");
                var url = "/cart-remove";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        window.location.reload();
                        $(".danh-sach-tin-luu").css("display", "block");
                    },
                    error: function(data) {
                        window.location.reload();
                        $(".danh-sach-tin-luu").css("display", "block");
                        console.log("Error:", data);
                    },
                });
            });
            //
            // $("#divSortProduct").click(function () {
            //     $("#divSortProductOptions").toggleClass('show');
            // });

            $("#divSortProduct").click(function(e) {
                e.stopPropagation();
                $("#divSortProductOptions").slideToggle("show");
            });

            $(".advance-options a").click(function() {
                $(".select-text-content").text($(this).text());
            });
        });

        $(document).on("click", function(e) {
            if ($(e.target).closest("#divSortProductOptions").length === 0) {
                $("#divSortProductOptions").css("display", "none");
            }
        });
        $(".icon-close re__icon-close-no-circle").css("display", "none");
    </script>
</body>

</html>