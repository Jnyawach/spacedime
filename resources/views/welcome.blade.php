@extends('layouts.spacedime')
@section('title','Spacedime')
@section('content')

 <section class="hero-wrap" style="background-image: url('images/bg_1.jpg');">

      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-10 col-lg-7  d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">Passionate<span>About</span>  Built Environment</h1>
	            <p style="font-size: 18px;">Our Main vision is to help be the change you want to see</p>
	            <div class="d-flex meta">
                <div class=""><p class="mb-0"><a href="{{route('portfolio')}}" class="btn btn-primary py-3 px-2 px-md-4" title="Portfolio">Explore Projects</a></p></div>

		          </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=" bg-primary">
      <div class="container">
        <div class="row d-flex no-gutters">
          <div class="col-md-3 d-flex align-items-stretch ">
            <div class="media block-6 services services-bg d-block text-center px-4 py-5">
            <img src="{{asset('images/icons-01.png')}}" alt="Architectural designs" class="img-fluid" style="height:50px">
              <div class="media-body py-md-4">
                <h3>Architectural Designs</h3>
                <p>Commercial Buildings,Residential buildings</p>
                <a href="{{route('architecture')}}" title="Architecural designs" class="btn btn-outline-light mb-5 p-2 mt-3" style="border-radius:0px; margin: 0px;">See More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-stretch ">
            <div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
            <img src="{{asset('images/icons-02.png')}}" alt="Physical Planning" class="img-fluid" style="height:50px">
              <div class="media-body py-md-4">
                <h3>Physical Planning</h3>
                <p>Land use master plans, Action area plans,Change of Use</p>
                <a href="{{route('planning')}}" title="Physical Planning" class="btn btn-outline-light mb-5 p-2 mt-3" style="border-radius:0px; margin: 0px;">See More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-stretch ">
            <div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5">
            <img src="{{asset('images/icons-03.png')}}" alt="Environmental planning" class="img-fluid" style="height:50px">
              <div class="media-body py-md-4">
                <h3>Environmental Management</h3>
                <p>Environmental impact asssessment(EIA), Environmental Audit</p>
                <a href="{{route('environment')}}" title="Environment Management" class="btn btn-outline-light mb-5 p-2 mt-3" style="border-radius:0px; margin: 0px;">See More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-items-stretch ">
            <div class="media block-6 services services-bg d-block text-center px-4 py-5">
            <img src="{{asset('images/icons-04.png')}}" alt="GIS & Remote Sensing" class="img-fluid" style="height:50px">
              <div class="media-body py-md-4">
                <h3>Survey, GIS & Remote Sensing</h3>
                <p>Digital Topographical Mapping & Cartography,Topo Surveys</p>
                <a href="{{route('survey')}}" title="Survey,GIS and Remote Sensing" class="btn btn-outline-light mb-5 p-2 mt-3" style="border-radius:0px; margin: 0px;">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section >
			<div class="container">
				<div class="row">
					<div class="col-lg-7 order-md-last d-md-flex align-items-stretch">
						<div class="img w-100 img-2 mr-md-2" style="background-image: url(images/about.png);"></div>
						<div class="img w-100 img-2 img-overlay ml-md-2 p-4" style="background-image: url(images/about-2.jpg);">
							<div class="request-quote py-5">
	    					<div class="py-2">
	    						<span class="subheading">Be Part of our Business</span>
	    						<h3>Request A Quote</h3>
	    					</div>
                        <form action="{{action('RequestQuoteController@store')}}" class="request-form " method="POST">
                                @csrf
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="First Name" name="first_name" required>
			    				</div>
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
			    				</div>
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
              </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Phone" name="phone" required>
			    				</div>
		    					<div class="form-group">
			              <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message" required></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
			            </div>
			    			</form>
	    				</div>
						</div>
					</div>
					<div class="col-lg-5 wrap-about py-md-5 ">
	          <div class="heading-section pr-md-5">
	            <h2 class="mb-4">Spacedime</h2>

	            <p> Spacedime Designs is a profession architectural design, physical and l
                    and use planning, Environmental Management and Survey,G.I.S & Remote Sensing firm
                    based in Meru County ,Kenya. We deliver services from Designs to council permit drawings,
                    but also computer generated 3D images. As well as servicing our local market with custom design
                    services. we also offer a searchable
                    online database of designs available to anyone worldwide.</p>

	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row pt-md-5">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="5">0</strong>
                <span>Years of <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="10">0</strong>
                <span>Project <br>Done</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="2">0</strong>
                <span>Licensed <br>Architect</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="35">0</strong>
                <span>Happy <br>Customers</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    @include('includes.projects')
<section class="get-in">
    <div class="row p-5">
        <div class="col-12 mx-auto text-center">
            <hr >
            <h6 class="mt-5">Let's Work Together</h6>
        <a href="{{route('contact')}}" title="Contact Us" class="btn btn-outline-light mb-5 p-2 mt-3" style="border-radius:0px; margin: 0px;">GET IN TOUCH</a>

            <hr>

        </div>
    </div>


</section>





<!-- loader -->

@endsection
