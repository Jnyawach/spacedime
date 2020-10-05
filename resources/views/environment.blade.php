@extends('layouts.spacedime')\
@section('title','Environmental Management')
@section('content')

<section class="container architecture">
    <h1 class="text-center">Environmental Management</h1>
    <p class="text-center">Using our qualified experts we have rich knowledge and experience in environmental issues.
   Spacedime Designs provide the following environmental services to our client.</p>
   <p>Environmental Impact Assessment (EIA) -
       This  is a critical examination of the effects of a project on the environment.<br>
       Strategic Environmental Assessment (SEA) - Refers to a systematic decision support process aiming to ensure that environmental and possibly other sustainability
       aspects are   considered effectively in policy and program making.<br>
       Environmental Audit (EA)  - This involves an assessment of the extent to which an organization is observing practices which
       minimize  harm to environment.<br>
       Environmental and Social Impact Assessment (ESIA) - It's a process for predicting and
       assessing the potential environmental and social impacts of a proposed project,evaluating alternatives and
       designing appropriate mitigation, management and  monitoring measures.<br>
       Waste Management - These are activities and actions required to manage waste from its final disposal.
       Natural Resource Conservation - This include protecting species.</p>


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
