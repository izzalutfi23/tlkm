@extends('user/layout/main')
@section('title', 'Search')
@section('container')
<div class="container">
    <div class="position-relative overflow-hidden pb-0 text-center bg-beige">
        @if($result)
        @foreach($result as $res)
        <div class="col-md-8 col-sm-4" style="margin: auto;">
            <div class="wrimagecard wrimagecard-topimage" style="box-shadow: 5px 5px 5px 0px rgba(46,61,73,0.15);">

                <div style="background-color: #efefc8; padding: 10px 15px;">
                    <div class="row">
                        <div class="col-lg-11">
                            <p style="color: #000; font-weight: bold;">#{{$res['keterangan']}}</p>
                            <a href="{{url('/'.strtolower($res['keterangan']).'/'.$res['id'])}}">
                                <p style="color: #999; font-weight: bold;">{{$res['judul']}}</p>
                                <p>{{substr($res['text'], 0, 100)}}...</p>
                            </a>
                        </div>
                        <div class="col-lg-1">
                            @if($res['url'])
                            <a href="{{$res['url']}}" target="_blank">
                                <i class="fa fa-file-text" style="color: #FFF; font-size: 33px;"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
        @else
        <div class="position-relative overflow-hidden pt-5 pb-0 text-center bg-beige">
            <h1 class="font-weight-bold" style="color: red;">Data tidak ditemukan!</h1>
        </div>
        @endif
    </div>
</div>
@endsection
