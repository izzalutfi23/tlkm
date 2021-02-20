@extends('user/layout/main')
@section('title', 'News')
@section('container')
<div class="contain">
    <div class="row mt-5 mb-5">
        <div class="col-lg-3">
            <img src="{{asset('assets/img/brosur.png')}}" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <div class="position-relative overflow-hidden pb-0 text-center bg-beige">
                <h1 class="font-weight-bold">NEWS FEED</h1>
            </div>
            <div class="custom-scrollbar-css p-2">
                <p class="font-weight-bold">{{strtoupper($news->name)}}</p>
                <p>{!!$news->text!!}</p>
                <p>{{date('d M Y', strtotime($news->created_at))}}</p>
                <div class="position-relative overflow-hidden pb-0 text-center bg-beige">
                    <p>{{date('d M Y H:i:s', strtotime($news->created_at))}}</p>
                </div>
                <img src="{{Storage::url('public/news/'.$news->file)}}" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-3">
            @foreach($newsall as $data)
            <div class="wrimagecard wrimagecard-topimage">
                <a href="{{url('/news/'.$data->news_id)}}">
                    <div class="wrimagecard-topimage_title">
                        <p style="color: #000;">{{$data->name}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="px-2 bg-light font-weight-bold">
    <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
        Selamat datang di portal TDSCC
    </marquee>
</div>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });

    $(function () {
        /* Rounded Dots Dark */
        $("#content-1").mCustomScrollbar({
            theme: "rounded-dots-dark"
        });

        /* Rounded Dark */
        $("#content-2").mCustomScrollbar({
            theme: "rounded-dark"
        });

        /* Inset Dark */
        $("#content-3").mCustomScrollbar({
            theme: "inset-3-dark"
        });

        /* 3d Dark */
        $("#content-4").mCustomScrollbar({
            theme: "3d-dark"
        });

        /* Dark Thin */
        $("#content-5").mCustomScrollbar({
            theme: "dark-thin"
        });
    });

</script>
@endsection
