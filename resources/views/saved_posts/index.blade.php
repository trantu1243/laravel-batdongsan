@extends('layouts.index')

@section('title', 'Batdongsan')

@section('content')


<h1 style="text-align: center; margin-top: 20px; text-decoration: underline;">Danh sách tin lưu</h1>

<div class="chuyenmuc container mt-4" id="danhmuc">

    <div class="row mt-sm-4 mt-3">
        <div class="col-md-9 col-sm-12 left-element">

            <div class="gap-24 d-flex flex-column card-container">

                @foreach($savedPosts as $savedPost)

                <a href="/real-state/{{ $savedPost->post->id }}" class="card-cm" title="{{$savedPost->post->title}}">
                    <div class="card-image">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                            lazy-src="{{$savedPost->post->images[0]->image_url}}"
                            alt="{{$savedPost->post->title}}" />
                        <div class="see">
                            <div><img src="assets/img/camera.png" /></div>
                            <div>5</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="title">
                            {{$savedPost->post->title}}
                        </h3>
                        <div>
                            <div class="description">{{$savedPost->post->huyen->name}} , {{$savedPost->post->province->name}}</div>
                            <div class="description-tag">
                                <div class="description-item">{{$savedPost->post->area}} m2</div>
                                <div class="description-item">{{$savedPost->post->num_of_bedrooms}} Phòng ngủ</div>
                                <div class="description-item">{{$savedPost->post->num_of_bathrooms}} WC</div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <div>
                                <div class="price">
                                    @php
                                    $number = $savedPost->post->price; // Giá trị từ bài đăng
                                    $billion = floor($number / 1000000000); // Lấy phần tỷ
                                    $million = floor(($number % 1000000000) / 1000000); // Lấy phần triệu còn lại sau khi chia tỷ
                                    $thousands = floor(($number % 1000000) / 1000); // Lấy phần nghìn còn lại sau khi chia triệu
                                    $hundreds = $number % 1000; // Lấy phần trăm nghìn trở xuống
                                    @endphp

                                    @if ($billion > 0)
                                    {{ $billion }} tỷ
                                    @endif

                                    @if ($million > 0)
                                    {{ $million }} triệu
                                    @endif

                                    @if ($thousands > 0)
                                    {{ $thousands }} nghìn
                                    @endif

                                    @if ($hundreds > 0)
                                    {{ $hundreds }} đồng
                                    @endif

                                </div>

                                <div class="time">
                                    {{$savedPost->post->created_at}}
                                </div>
                            </div>
                            <form action="{{Route('delete.saved.post', ['id'=>$savedPost->post->id])}}" method="post" id="form-{{$savedPost->post->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="heart btn_parent_btn-save" style="display: inline-block; outline: none; border: none; background-color: #fff;">
                                    <!-- có class saved là đã lưu -->
                                    <span style="padding: 5px ; display: inline-block;" class="saved btn-save js-btn-save add-like" post_id="117358" title=" Lưu tin này " data-original-title="Tin đã lưu" onclick="document.getElementById('form-{{$item->id}}').submit();"><i class="icon heart margin-right-0"></i></span>
                                </button>

                            </form>

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



@endsection

<script>
    // let btnTim = document.querySelector(".btn-save.js-btn-save.add-like");
    let buttonParentBtnTim = document.querySelectorAll(".btn_parent_btn-save");
    buttonParentBtnTim.forEach((item) => {
        item.onclick(() => {
            console.log("hello");

        });
    });
</script>
