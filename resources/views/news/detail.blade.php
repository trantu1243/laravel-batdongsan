@extends('layouts.index')

@section('title', $news->title)

@section('content')

<link rel="stylesheet" href="/css/news/app.css">
<link rel="stylesheet" href="/css/news/style.css">
<main role="main">
    <section class="container">
        <div class="row">


            <div id="fb-root" class="fb_reset">
                <div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div>
            </div>
            <script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v13.0&amp;appId=938560633237538&amp;autoLogAppEvents=1" nonce="GOcnrskI"></script>
            <div class="col-md-7 main-content-news" style="flex: 1; padding-bottom: 20px; margin-bottom: 50px;">
                <div class="content-news" style="background: #ffff; padding: 10px;">
                    <div class="row">

                        <h1>{{ $news->title }}</h1>

                        <div class="author-wrap">
                            <div class="author-news_image">
                                <span> <i class="news_image-default"> </i> </span>
                            </div>
                            <div class="author-name"><a href="https://batdongsan.vn/tin-tuc/mung-va-lo-nhin-tu-du-an-khung-cua-flc-dang-nam-tren-giay-a2245" style="font-weight: bold;"> </a></div>
                            <time class="author-time" style="margin-left: 15px;"><i class="far fa-clock" style="margin-right: 3px;"></i> {{ $news->created_at }} </time>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div id="post_content" class="content-detail" style="width: 100%;">
                       {!! $news->content !!}
                    </div>
                    <hr />

                    <div class="row content-footer">
                        <div
                            style="margin-left: 10px;"
                            class="fb-like fb_iframe_widget"
                            data-href="/news/{{$news->id}}"
                            data-width=""
                            data-layout="button_count"
                            data-action="like"
                            data-size="small"
                            data-share="true"
                            fb-xfbml-state="rendered"
                            fb-iframe-plugin-query="action=like&amp;app_id=938560633237538&amp;container_width=0&amp;href=https%3A%2F%2Fbatdongsan.vn%2Ftin-tuc%2Fmung-va-lo-nhin-tu-du-an-khung-cua-flc-dang-nam-tren-giay-a2245&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;size=small&amp;width="
                        >
                            <span style="vertical-align: bottom; width: 150px; height: 28px;">
                                <iframe
                                    name="f991e12c819fd132f"
                                    width="1000px"
                                    height="1000px"
                                    data-testid="fb:like Facebook Social Plugin"
                                    title="fb:like Facebook Social Plugin"
                                    frameborder="0"
                                    allowtransparency="true"
                                    allowfullscreen="true"
                                    scrolling="no"
                                    allow="encrypted-media"
                                    src="https://www.facebook.com/v13.0/plugins/like.php?action=like&amp;app_id=938560633237538&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df6422e4670527b8a7%26domain%3D%26is_canvas%3Dfalse%26origin%3Dfile%253A%252F%252F%252Ff9b195d55c2f0e38b%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fbatdongsan.vn%2Ftin-tuc%2Fmung-va-lo-nhin-tu-du-an-khung-cua-flc-dang-nam-tren-giay-a2245&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;size=small&amp;width="
                                    style="border: none; visibility: visible; width: 150px; height: 28px;"
                                    class=""
                                ></iframe>
                            </span>
                        </div>
                    </div>
                </div>


            </div>

            <div class="d-none d-lg-block sidebar-right">
                <div id="trendingRHSFeed" class="rightBlock rhsWidgetNotAdFree story4 rhsPos_1 lmWidgetTracking" data-vars-widget-type="RHS Widget" data-vars-widget-name="Trending Widget">
                    <div class="rightHead clearfix">
                        <div class="rightTitle text-primary">Tin mới</div>
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
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
</main>

@endsection

