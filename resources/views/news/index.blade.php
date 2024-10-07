@extends('layouts.index')

@section('title', 'Tin tức')

@section('content')
<link rel="stylesheet" href="/css/news/app.css">
<link rel="stylesheet" href="/css/news/style.css">
<main role="main">
    <section class="container">
        <div class="row">

            <div class="col-md-7 main-view" style="width: 550px !important; margin-right: 10px;">

                <div class="noi-bat mt-3">
                    <h2 class="title-noi-bat text-primary m-0">Tin mới</h2>
                    <ul class="list-unstyled list-media">
                        @foreach ($newsList as $item)
                        <li class="mt-4 pb-4 border-bottom">
                            <article class="media-group">
                                <div class="media">
                                    <div class="embed-responsive embed-responsive-16by9 mr-3" style="width: 170px; height: 119px;">
                                        <a title=" {{ $item->title }}" href="/news/{{ $item->id }}">
                                            <img
                                                class="embed-responsive-item rounded"
                                                alt="{{ $item->title }}"
                                                title="{{ $item->title }}"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                lazy-src="{{ $item->image }}"
                                                style="object-fit: cover;"
                                            />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a title=" {{ $item->title }}" href="/news/{{ $item->id }}">
                                            <h3 class="media-title"> {{ $item->title }}</h3>
                                        </a>

                                        <div class="media-infor small">
                                            <span class="media-date text-secondary">
                                                {{ $item->created_at }}
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        @endforeach

                        @foreach ($newsList as $item)
                        <li class="mt-4 pb-4 border-bottom">
                            <article class="media-group">
                                <div class="media">
                                    <div class="embed-responsive embed-responsive-16by9 mr-3" style="width: 170px; height: 119px;">
                                        <a title=" {{ $item->title }}" href="/news/{{ $item->id }}">
                                            <img
                                                class="embed-responsive-item rounded"
                                                alt="{{ $item->title }}"
                                                title="{{ $item->title }}"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                lazy-src="{{ $item->image }}"
                                                style="object-fit: cover;"
                                            />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a title=" {{ $item->title }}" href="/news/{{ $item->id }}">
                                            <h3 class="media-title"> {{ $item->title }}</h3>
                                        </a>

                                        <div class="media-infor small">
                                            <span class="media-date text-secondary">
                                                {{ $item->created_at }}
                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="mb-3 border-top border-bottom box-video pt-3">
                    <!-- dưới tin mới -->

                    <div class="swiper-container box-video-swiper">
                        <div class="swiper-wrapper">
                            @foreach ($newsList as $item)
                            <div class="swiper-slide">
                                <a href="/news/{{ $item->id }}" title="{{ $item->title }}">
                                    <article class="card mb-3">
                                        <div class="post-gradient post-video rounded">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <img
                                                    class="card-img-top embed-responsive-item rounded"
                                                    alt="{{ $item->title }}"
                                                    title="{{ $item->title }}"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdjWLKu/z8ABrwC4TW+tGIAAAAASUVORK5CYII="
                                                    lazy-src="{{ $item->image }}"
                                                />
                                            </div>
                                        </div>
                                        <div class="card-body p-0 py-2">
                                            <h5 class="card-title text-dark" style="font-weight: unset;">{{ $item->title }}</h5>
                                        </div>
                                    </article>
                                </a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <div class="d-none d-lg-block sidebar-right">
                <div id="trendingRHSFeed" class="rightBlock rhsWidgetNotAdFree story4 rhsPos_1 lmWidgetTracking" data-vars-widget-type="RHS Widget" data-vars-widget-name="Trending Widget">
                    <div class="rightHead clearfix">
                        <div class="rightTitle text-primary">Đọc nhiều</div>
                        <a href="" class="rightLink"></a>
                    </div>
                    @foreach ($newsList as $item)
                    <div class="rightList clearfix impression-candidate eventFired">
                        <div class="headlineR">
                            <h2>
                                <a href="/news/{{ $item->id }}" title="{{ $item->title }}">
                                    {{ $item->title }}
                                </a>
                            </h2>
                            <div class="clearfix">
                                <span class="fl date">
                                    <em><span>{{$item->created_at}} </span>
                                </span>
                            </div>
                        </div>

                        <div class="imgR">
                            <a title="{{ $item->title }}" href='news/{{$item->id}}'>
                                <img width="70" height="70" src="{{$item->image}}" alt="{{ $item->title }}" />
                            </a>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>

        </div>
    </section>
</main>

@endsection
