@extends('layouts.spacedime')\
@section('title','Survey, GIS & Remote Sensing')
@section('content')

<section class="container architecture">
    <h1 class="text-center">Survey, GIS & Remote Sensing</h1>
    <p class="text-center">This in general is concerned with mapping & collection of data for
        the purposes of design and to ascertain
        exactly where the features are on the maps in relation to ground.
        In spacedime designs we have qualified professionals who pertains
            land matters and offers timely services at an affordable rates.Services includes</p>

        <div class="row mt-5 mb-5">
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                <ul>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Digital Topographical Mapping & Cartography</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Topo Surveys</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Open Source Web GIS & Development</li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                <ul>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>GIS Analysis and Spatial Statistics</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>CAD Data Processing</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Image Processing and Analysis</li>
                </ul>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto m-2">
            <img src="{{asset('images/gis.jpg')}}" class="img-fluid" alt="GIS Mapping">

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto m-2">
                <img src="{{asset('images/gis_2.png')}}" class="img-fluid" alt="Mapping">

            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 mx-auto m-2">
                <img src="{{asset('images/gis_3.jpg')}}" class="img-fluid" alt="Architectural Designs">

                </div>
        </div>
</section>
<section class="get-in">
    <div class="row p-5">
        <div class="col-12 mx-auto text-center">
            <hr >
            <h6 class="mt-5">Let's Work Together</h6>
        <a href="{{route('contact')}}" title="Portfolio" class="btn btn-outline-light mb-5 p-2 mt-3" style="border-radius:0px; margin: 0px;">GET IN TOUCH</a>

            <hr>

        </div>
    </div>

</section>
@endsection
