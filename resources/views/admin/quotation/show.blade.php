@extends('layouts.spacedime_admin')
@section('title',$quote->first_name)
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>{{$quote->first_name}} {{$quote->last_name}}</h4>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">

                    {!!Form::open(['method'=>'PATCH', 'action'=>['AdminQuoteController@update', $quote->id]])!!}

                   <input type="hidden" value="0" name="is_active">
                   <button type="submit" class="btn btn-primary">Mark as read</button>
                   {!!Form::close()!!}
                </div>
            </div>
            <p>{{$quote->created_at->isoFormat('Y-m-d')}}</p>
            <p>{!!$quote->message!!}</p>

        </div>
    </main>

@endsection
