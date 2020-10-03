@extends('layouts.spacedime')
@section('title','Project')
@section('content')
<section class="container project">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
            <div class="row">
                @foreach(json_decode($project->path) as $photo=>$path)
                <div class="col-sm-12 col-md-12 col-lg-12 m-2 mx-auto">
                <img src="{{url('images/'.$path)}}" title="portfolio" alt="portfolio" class="img-fluid">
                </div>
                @endforeach



            </div>



        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mx-auto order-sm-last">
        <h2>{{$project->title}}</h2>
            <p> {!!$project->description!!}</p>
        </div>

    </div>
</section>

@include('includes.projects')
@endsection
