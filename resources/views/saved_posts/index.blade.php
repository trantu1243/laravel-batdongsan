<!-- resources/views/home.blade.php -->

@extends('layouts.index') <!-- Kế thừa từ layout 'app' -->
@section('content')
<div class="saved-posts">
    <h1>Các Bài Viết Đã Lưu</h1>

    @if($savedPosts->isEmpty())
    <p>Không có bài viết nào được lưu.</p>
    @else
    <table>
        <thead>
            <tr>
                <th>Tên Bài Viết</th>
                <th>Ngày Lưu</th>
                <th>Chức Năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($savedPosts as $savedPost)
            <a href="ban-nha-mau-luong-o-to-qua-cua-kinh-doanh-dt-35m-x-5t-64-ty-r117358" class="card-cm" title="BÁN NHÀ MẬU LƯƠNG Ô TÔ QUA CỬA - KINH DOANH DT 35M x 5T 6.4 tỷ">
                <div class="card-image">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                        lazy-src="https://media.batdongsan.vn/crop/240x206/posts/117358_66c9eb0d18a73.jpg"
                        alt="BÁN NHÀ MẬU LƯƠNG Ô TÔ QUA CỬA - KINH DOANH DT 35M x 5T 6.4 tỷ" />
                    <div class="see">
                        <div><img src="assets/img/camera.png" /></div>
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

            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection