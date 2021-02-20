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
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">HOME</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">PROFILE</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                        aria-controls="nav-contact" aria-selected="false">CONTACT</a>
                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                        aria-controls="nav-about" aria-selected="false">ABOUT</a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="wrimagecard wrimagecard-topimage">
                                <a href="#">
                                    <div class="wrimagecard-topimage_header"
                                        style="background-color:rgba(187, 120, 36, 0.1) ">
                                        <center><i class="fa fa-area-chart" style="color:#BB7824"></i></center>
                                    </div>
                                    <div class="wrimagecard-topimage_title">
                                        <p style="color: #000;">Judul berita</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="wrimagecard wrimagecard-topimage">
                                <a href="#">
                                    <div class="wrimagecard-topimage_header"
                                        style="background-color:rgba(187, 120, 36, 0.1) ">
                                        <center><i class="fa fa-area-chart" style="color:#BB7824"></i></center>
                                    </div>
                                    <div class="wrimagecard-topimage_title">
                                        <p style="color: #000;">Judul berita</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="wrimagecard wrimagecard-topimage">
                                <a href="#">
                                    <div class="wrimagecard-topimage_header"
                                        style="background-color:rgba(187, 120, 36, 0.1) ">
                                        <center><i class="fa fa-area-chart" style="color:#BB7824"></i></center>
                                    </div>
                                    <div class="wrimagecard-topimage_title">
                                        <p style="color: #000;">Judul berita</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    Profile Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat
                    qui
                    minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est
                    aute
                    sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                    consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                    tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa
                    non
                    adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                    occaecat
                    ex.
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    Contact Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat
                    qui
                    minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est
                    aute
                    sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                    consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                    tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa
                    non
                    adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                    occaecat
                    ex.
                </div>
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    About Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui
                    minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est
                    aute
                    sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                    consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                    tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa
                    non
                    adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis
                    occaecat
                    ex.
                </div>
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
