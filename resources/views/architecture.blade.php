@extends('layouts.spacedime')\
@section('title','Architectural Designs')
@section('content')

<section class="container architecture">
    <h1 class="text-center">Architectural Designs</h1>
    <p class="text-center">Architectural Design is an important part of the home building process in Kenya. Finding a professional and experienced firm is the first step towards creating a beautiful and elegant design for your future home. If you have no idea whatsoever about the type of house plan to consider then we recommend you start your search by looking for Spacedime Designs we deliver services from architectural designs to council permit
        drawing from design to approvals in every county in Kenya. We also provide Online pdfs worldwide.</p>

        <div class="row mt-5 mb-5">
            <div class="col-sm-12 col-md-4 col-lg-4 mx-auto">
                <ul>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Custom Home Plans and Designs</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Commercial Design</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Multi-Family Designs</li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 mx-auto">
                <ul>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Urban Design</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Remodels/Additions and Renovations</li>
                    <li class="list-unstyled"><i class="fa fa-caret-right mr-2 car" aria-hidden="true"></i>Project Models</li>
                </ul>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto m-2">
            <img src="{{asset('images/arch_1.jpg')}}" class="img-fluid" alt="Architectural Designs">

            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto m-2">
                <img src="{{asset('images/arch_2.jpg')}}" class="img-fluid" alt="Architectural Designs">

            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 mx-auto m-2">
                <img src="{{asset('images/arch_3.jpg')}}" class="img-fluid" alt="Architectural Designs">

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
