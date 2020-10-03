@if($projects->count()>0)
<section class="ftco-section ftco-portfolio container">
    <div class="row justify-content-center no-gutters">
    <div class="col-md-12 heading-section text-center  mb-5">
        <span class="subheading">Projects</span>
      <h2 class="mb-2">Our Latest Projects</h2>
    </div>
  </div>
    <div class="row portfolio">
        @foreach($projects as $project)

        <div class="col-sm-12 col-md-6 col-lg-4 mt-2 ">
            <a href="{{route('project',$project->slug)}}" title="Portfolio title">
            <img src="{{url('images/'. json_decode($project->path)[0] )}}" class="img-fluid" title="{{$project->title}}" >
            <p>{{$project->title}}</p>
            </a>
        </div>

        @endforeach



    </div>
    <div class="text-center">
    <a href="{{route('portfolio')}}" title="Portfolio" class="btn btn-primary m-4 p-3 " style="border-radius:0px; margin: 0px;">View Complete Portfolio<i class="fa fa-arrow-right ml-3" aria-hidden="true"></i></a>
    </div>
</section>
@endif
