@extends('layout.main')

@section('container')
<div class="container-3-film">
    <div class="section-left-film"></div>

    <div class="section-center-film">
        <h2 class="section-title">Film</h2>

        <!-- Konten scroll -->
        <div class="scroll-content-film">

            <!-- Video 1 -->
            <div class="video-wrapper">
                <div class="video-embed">
                    <iframe src="https://www.youtube.com/embed/NFhJRTdmviA?si=loMAzQ_5LNfzMovw"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <div class="video-left">
                        <p class="title">Peggy Gou — I Go</p>
                    </div>
                    <div class="video-right">
                        <span class="year">2021</span>
                    </div>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-wrapper">
                <div class="video-embed">
                    <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <div class="video-left">
                        <p class="title">Another Music Video</p>
                    </div>
                    <div class="video-right">
                        <span class="year">2022</span>
                    </div>
                </div>
            </div>

            <!-- Tambahkan video lain tinggal copy video-wrapper -->

        </div>
    </div>

    <div class="section-right-film"></div>
</div>
@endsection