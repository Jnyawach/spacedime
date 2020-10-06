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
        <p> Custom Home Plans and Designs, Commercial Design, Multi-Family Designs,
            Urban Design, Remodels/Additions and Renovations,Project Models
    </p>
        <a href="{{route('architecture')}}" title="learn more" class="btn btn-primary">Learn More <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto text-center m-3">
            <img src="{{asset('images/icons-02-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
        <h5 class="text-uppercase mt-3">Physical Planning</h5>
        <p>Preparation of Local Physical Development Plans,
            Land Management plans & Land Information Systems,
            Land Subdivisions, Amalgamation, Consolidation,
             Preparation of Zoning/ Advisory Plans,
            Action Plans,
            Sectoral Plans,
            Feasibility studies,
            Spatial Plans,</p>
        <a href="{{route('planning')}}" title="learn more" class="btn btn-primary">Learn More <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto text-center m-3">
            <img src="{{asset('images/icons-03-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
        <h5 class="text-uppercase mt-3">Environmental Planning</h5>
        <p>Environmental Impact Assessment (EIA),Strategic Environmental Assessment (SEA),
            Environmental Audit (EA),Environmental and Social Impact Assessment (ESIA)
        </p>
        <a href="{{route('environment')}}" title="learn more" class="btn btn-primary">Learn More <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto text-center m-3">
            <img src="{{asset('images/icons-04-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
        <h5 class="text-uppercase mt-3">Survey, GIS & Remote Sensing</h5>
        <p> Digital Topographical Mapping & Cartography,
            Topo Surveys,
            Open Source Web GIS & Development,
            GIS Analysis and Spatial Statistics,
            CAD Data Processing,
            Image Processing and Analysis,</p>
        <a href="{{route('survey')}}" title="learn more" class="btn btn-primary">Learn More <i class="fa fa-arrow-right ml-2" aria-hidden="true"></i></a>
        </div>

    </div>
</section>

@endsection
