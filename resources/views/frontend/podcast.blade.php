@extends('layout.frontend')
@section('content')
    <section class="bg-banner">
        <img src="{{ asset('storage/banner/' . 'hill1.jpg') }}" alt="" height="250px" width="100%">
    </section>
    <section>
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: #f2f7f8;">
                        <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Podcast</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row"
                    style="margin-bottom: 20px; background-color: #f2fdff; padding: 5px; border-radius: 10px;">
                        <iframe
                            src="https://anchor.fm/youthfederal-discourse/embed/episodes/Citizenship-in-Nepal-eft8hf/a-a2i5nam"
                            height="auto" width="100%" frameborder="" scrolling="no">
                        </iframe>
                </div>

                <div class="row"
                    style="margin-bottom: 20px; background-color: #f2fdff; padding: 5px; border-radius: 10px;">

                        <iframe src="https://anchor.fm/youthfederal-discourse/embed/episodes/--ej3ujs/a-a34c5io" height="auto"
                            width="100%" frameborder="" scrolling="no">
                        </iframe>

                </div>

                <div class="row"
                    style="margin-bottom: 20px; background-color: #f2fdff; padding: 5px; border-radius: 10px;">

                        <iframe src="https://anchor.fm/youthfederal-discourse/embed/episodes/ep-ei4he1/a-a2umo9k" height="auto"
                            width="100%" frameborder="" scrolling="no">
                        </iframe>

                </div>
            </div>
        </section>
    @endsection
