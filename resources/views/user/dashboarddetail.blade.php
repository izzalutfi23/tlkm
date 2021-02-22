@extends('user/layout/main')
@section('title', 'Dashboard')
@section('container')
<div class="contain">
    <div class="row mt-5 mb-5">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="position-relative overflow-hidden pb-0 text-center bg-beige">
                <h1 class="font-weight-bold">DASHBOARD</h1>
                <a href="#"><button class="btn btn-default my-3"
                        style="border-color: red; padding: 5px 15px 5px 15px; background-color: beige;">BACK</button></a>
            </div>
            <div class="custom-scrollbar-css p-2">
                <p class="font-weight-bold">{{strtoupper($konten->name)}}</p>
                <p>{!!$konten->text!!}</p>
                <p>{{date('d M Y', strtotime($konten->created_at))}}</p>
                <div class="position-relative overflow-hidden pb-0 text-center bg-beige">
                    <p>{{date('d M Y H:i:s', strtotime($konten->created_at))}}</p>
                </div>
                <img src="{{Storage::url('public/news/'.$konten->file)}}" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-2">

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
