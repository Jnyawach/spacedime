@extends('layouts.spacedime')
@section('title', 'Services')
@section('content')
<section >
    <div class="row service mb-5">

  <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11 mx-auto my-auto">
                <div class="section-tittle  text-center mb-90">
                <span>OUR SERVICES</span>
                <h1 class="text-uppercase mt-4">We provide the best solution for your next project</h1>
                </div>
        </div>


    </div>
</section>
<section class="container serve">
    <div class="row m-5">
        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto text-center m-3">
            <img src="{{asset('images/icons-01-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
        <h5 class="text-uppercase mt-3">Architectural Designs</h5>
        <p> This is a dummy placeholder text. Spacedime Designs is a profession architectural design, physical and land use planning,
            Environmental Management.</p>
        <a href="{{route('architecture')}}" title="learn more" class="btn btn-primary">Learn More <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto text-center m-3">
            <img src="{{asset('images/icons-02-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
        <h5 class="text-uppercase mt-3">Physical Planning</h5>
        <p> This is a dummy placeholder text. Spacedime Designs is a profession architectural design, physical and land use planning,
            Environmental Management.</p>
        <a href="{{route('planning')}}" title="learn more" class="btn btn-primary">Learn More <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto text-center m-3">
            <img src="{{asset('images/icons-03-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
        <h5 class="text-uppercase mt-3">Environmental Planning</h5>
        <p> This is a dummy placeholder text. Spacedime Designs is a profession architectural design, physical and land use planning,
            Environmental Management.</p>
        <a href="{{route('environment')}}" title="learn more" class="btn btn-primary">Learn More <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto text-center m-3">
            <img src="{{asset('images/icons-04-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
        <h5 class="text-uppercase mt-3">Survey, GIS & Remote Sensing</h5>
        <p> This is a dummy placeholder text. Spacedime Designs is a profession architectural design, physical and land use planning,
            Environmental Management.</p>
        <a href="{{route('survey')}}" title="learn more" class="btn btn-primary">Learn More <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
        </div>

    </div>
</section>
@endsection
