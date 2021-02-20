@extends('user/layout/main')
@section('title', 'Home')
@section('container')
<div class="contain">
    <div class="row mt-5 mb-5">
        <div class="col-lg-3">
            <img src="{{asset('assets/img/brosur.png')}}" class="img-fluid" alt="gedung">
        </div>
        <div class="col-lg-5">
            <img src="{{asset('assets/img/tdscc.png')}}" class="img-fluid tdscc" width="100%" alt="tdscc">
        </div>
        <div class="col-lg-4">
            <img src="{{asset('assets/img/gedung1.jpg')}}" class="img-fluid" alt="gedung">
            <img src="{{asset('assets/img/gedung2.jpg')}}" class="img-fluid mt-5" alt="gedung">
        </div>
    </div>
</div>

<div class="px-2 bg-light font-weight-bold">
    <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
        Selamat datang di portal TDSCC
    </marquee>
</div>
@endsection
