@extends('layouts.spacedime_admin')
@section('title',$contact->name)
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>{{$contact->name}}</h4>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">

                    {!!Form::open(['method'=>'PATCH', 'action'=>['AdminContactController@update',$contact->id]])!!}

                   <input type="hidden" value="0" name="is_active">
                   <button type="submit" class="btn btn-primary">Mark as read</button>
                   {!!Form::close()!!}
                </div>
            </div>
            <p>{{$contact->created_at->isoFormat('Y-m-d')}}</p>
            <P>Email: {{$contact->email}}</P>
            <p>{!!$contact->message!!}</p>

        </div>
    </main>

@endsection
