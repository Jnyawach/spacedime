@extends('layouts.spacedime')\
@section('title','Physical Planning')
@section('content')

<section class="container architecture">
    <h1 class="text-center">Physical Planning</h1>
    <p class="text-center">Kenya future is urban .Properly planned and managed urban
        areas offer enhanced opportunities for people to live,meet,work ,access public services
        and fulfill their life dreams. To create the towns we want our children to grow up in we
        need to plan for and with people and we need to collaborate in turning planning into action.
        In Spacedime Designs we offer the following Planning services:</p>

        <div class="row mt-5 mb-5">
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                <ul>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Preparation of Local Physical Development Plans</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Land Management plans & Land Information Systems</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Land Subdivisions, Amalgamation, Consolidation</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i> Preparation of Zoning/ Advisory Plans</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Action Plans</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Sectoral Plans</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Feasibility studies</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Spatial Plans</li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                <ul>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Preparation of Regional physical development plans</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Preparation of Master plans</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Change & Extension of user, Extension/ Renewal of Leases</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Preparation of Subject and Special Area Plans</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Integrated Development Plans</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Cities and Urban Areas Plans</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i> Projects evaluation and monitoring</li>
                </ul>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto m-2">
            <img src="{{asset('images/urban_1.jpg')}}" class="img-fluid" alt="Architectural Designs">

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto m-2">
                <img src="{{asset('images/urban_2.jpg')}}" class="img-fluid" alt="Architectural Designs">

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
