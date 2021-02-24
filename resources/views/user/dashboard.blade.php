@extends('user/layout/main')
@section('title', 'Dashboard')
@section('container')
<div class="contain">
    <div class="row mt-5 mb-5">
        <div class="col-lg-3">
            <img src="{{asset('assets/img/brosur.png')}}" class="img-fluid">
        </div>
        <div class="col-lg-9">
            <div class="position-relative overflow-hidden pb-0 text-center bg-beige">
                <h1 class="font-weight-bold">DASHBOARD</h1>
            </div>
            <nav class="navbar" style="background-color: #efefc8; box-shadow: 3px 3px 3px 0px rgba(46,61,73,0.15);">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    @foreach($kategori as $kat)
                    <a class="nav-item nav-link {{($loop->iteration==1?'active':'')}}" id="nav-profile" data-toggle="tab" href="#tab{{$kat->category_id}}" role="tab"
                        aria-controls="nav-home" aria-selected="true">{{$kat->name}}</a>
                    @endforeach
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                @foreach($kategori as $kat1)
                <div class="tab-pane fade show {{($loop->iteration==1?'active':'')}}" id="tab{{$kat1->category_id}}" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        @foreach($konten as $data)
                        @if($data->category_id==$kat1->category_id)
                        <div class="col-md-4 col-sm-4">
                            <div class="wrimagecard wrimagecard-topimage">
                                <a href="{{url('dashboard/'.$data->contents_id)}}">
                                    <div class="wrimagecard-topimage_header"
                                        style="padding: 2%;">
                                        <i class="fa fa-file-text py-5" style="width: 100%; text-align: center;"></i>
                                    </div>
                                    <div class="wrimagecard-topimage_title">
                                        <p style="color: #000;">{{$data->name}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="px-2 bg-light font-weight-bold">
    <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
        Selamat datang di portal TDSCC
    </marquee>
</div>
@endsection
