@extends('layouts.spacedime')
@section('title', 'About Us')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="row">
        <div class="col-12 mx-auto text-center my-auto cont">
            <h1 class="mt-5">About Us</h1>
            <hr>
        </div>
    </div>
  </section>

<section>
    <div class="row m-5">
        <div class="col-12 mx-auto">
            <p>
               Spacedime designs is a professional built environment consultancy based in kenya.
               We deliver services from designs to council permit drawings, computer generated 3D images as well
               as service our local market with custom design services.
               We also offer searchable online database of designs availabe to anyone world wide.
            </p>
        </div>
    </div>
</section>
<section>
<h1 class="text-center">Our Expertise</h1>
<div class="row m-5">
    <div class="col-sm-12 col-md-3 col-lg-3 mx-auto text-center">
        <img src="{{asset('images/icons-01-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
    <h5 class="text-uppercase mt-3">Architectural Designs</h5>
    <p class="text-left"> Custom Home Plans and Designs, Commercial Design, Multi-Family Designs,
        Urban Design, Remodels/Additions and Renovations,Project Models
</p>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 mx-auto text-center">
        <img src="{{asset('images/icons-02-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
    <h5 class="text-uppercase mt-3">Physical Planning</h5>
    <p class="text-left">Preparation of Local Physical Development Plans,
        Land Management plans & Land Information Systems,
        Land Subdivisions, Amalgamation, Consolidation,
         Preparation of Zoning/ Advisory Plans,
        Action Plans,
        Sectoral Plans,
        Feasibility studies,
        Spatial Plans,</p>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 mx-auto text-center">
        <img src="{{asset('images/icons-03-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
    <h5 class="text-uppercase mt-3">Environmental Management</h5>
    <p class="text-left">Environmental Impact Assessment (EIA),Strategic Environmental Assessment (SEA),
        Environmental Audit (EA),Environmental and Social Impact Assessment (ESIA)
    </p>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 mx-auto text-center">
        <img src="{{asset('images/icons-04-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:80px">
    <h5 class="text-uppercase mt-3">Survey, GIS & Remote Sensing</h5>
    <p class="text-left"> Digital Topographical Mapping & Cartography,
        Topo Surveys,
        Open Source Web GIS & Development,
        GIS Analysis and Spatial Statistics,
        CAD Data Processing,
        Image Processing and Analysis,</p>
    </div>

</div>
</section>



<section class="get-in">
    <div class="row p-5">
        <div class="col-12 mx-auto text-center">
            <hr >
            <h6 class="mt-5">Let's Work Together</h6>
            <a href="#" title="Portfolio" class="btn btn-outline-light mb-5 p-2 mt-3" style="border-radius:0px; margin: 0px;">GET IN TOUCH</a>

            <hr>

        </div>
    </div>

</section>

@endsection
