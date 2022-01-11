@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.video_meta_title')</title>
    <meta name="description"
          content="@lang('client.video_meta_description')">
@endsection

@section('wrapper')


    <section class="every_showcase catalog">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.videos')</div>
                <div class="title">@lang('client.videos')</div>
            </div>
        </div>
    </section>

    <section class="video_section wrapper">
        <div class="flex">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/aPAzIpAiftw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="text">@lang('client.video_1') </div>
        </div>
        <div class="flex">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qwoyhKCQvw0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="text">@lang('client.video_2') </div>
        </div>
        <div class="flex">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/B7ar-Nqh0mA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="text">@lang('client.video_3') </div>
        </div>
        <div class="flex">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5s6g_qUttnI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="text">@lang('client.video_4') </div>
        </div>
    </section>
@endsection
