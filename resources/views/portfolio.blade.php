@extends('layouts.spacedime')
@section('title','Portfolio')
@section('content')
<section class="port container">
    <div class=row class="m-5 position-relative">
        @if($projects->count()>0)
        @foreach($projects as $project)
        <div class="col-sm-12 col-md-4 col-lg-4 mx-auto m-2">
        <a href="{{route('project',$project->slug)}}" title="Portfolio title">
            <img src="{{url('images/'. json_decode($project->path)[0] )}}" class="img-fluid" title="{{$project->title}}" >
            </a>
            <div class="portfolio-caption">
            <h6 class="text-uppercase">{{$project->title}}</h6>
            <p><i class="fa fa-clock-o mr-2" aria-hidden="true"></i>{{$project->created_at->isoFormat('Y-m-d')}}</p>
            </div>
        </div>
            @endforeach

    @endif

</div>
</section>
@endsection
