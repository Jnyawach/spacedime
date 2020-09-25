@extends('layouts.spacedime')
@section('title','Project')
@section('content')
<section class="container project">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 m-2 mx-auto">
                <img src="{{asset('images/port_1.jpg')}}" title="portfolio" alt="portfolio" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 m-2  mx-auto">
                    <img src="{{asset('images/port_2.jpg')}}" title="portfolio" alt="portfolio" class="img-fluid">
                </div>
                    <div class="col-sm-12 col-md-12 col-lg-12  m-2 mx-auto">
                        <img src="{{asset('images/port_3.jpg')}}" title="portfolio" alt="portfolio" class="img-fluid">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 m-2 mx-auto">
                        <img src="{{asset('images/port_1.jpg')}}" title="portfolio" alt="portfolio" class="img-fluid">
                    </div>
            </div>



        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mx-auto order-sm-last">
            <h2>PROJECT TITLE</h2>
            <p> Spacedime designs is a professional built environment consultancy based in kenya.
                We deliver services from designs to council permit, drawings, computer egenrated 3D images as well
                as service our local market with cutom design services.
                We also offer searchable online database of designs availabe to anyone world wide.</p>
        </div>

    </div>
</section>

<section class="ftco-section ftco-portfolio">
    <h2 class="mb-2 text-center">Our Latest Projects</h2>
    <div class="row portfolio ">
        <div class="col-sm-12 col-md-6 col-lg-4 mt-2 mx-auto ">
            <img src="{{asset('images/invisible.jpg')}}" style="width:100%" class="img-fluid">
            <p>CAPTION TITLE OF THE PROJECT</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mt-2 mx-auto">
            <img src="{{asset('images/invisible.jpg')}}" style="width:100%" class="img-fluid">
            <p>CAPTION TITLE OF THE PROJECT</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mt-2  mx-auto">
            <img src="{{asset('images/invisible.jpg')}}" style="width:100%" class="img-fluid">
            <p>CAPTION TITLE OF THE PROJECT</p>
        </div>

    </div>
    <div class="text-center">
        <a href="#" title="Portfolio" class="btn btn-primary m-4 p-3 " style="border-radius:0px; margin: 0px;">View Complete Portfolio<i class="fa fa-arrow-right ml-3" aria-hidden="true"></i></a>
    </div>
</section>
@endsection
