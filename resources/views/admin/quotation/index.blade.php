@extends('layouts.spacedime_admin')
@section('title','Admin Quotation')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        <h1 class="mt-4">Quotation</h1>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Request for Quotation</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">

                    @if(Session::has('quote_message'))
                    <p class="text-success">{{session('quote_message')}}</p>

                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>status</th>
                                    <th>Edit</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>status</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if($quotes->count()>0)
                                @foreach($quotes as $quote)
                                <tr>
                                <td>{{$quote->first_name}} {{$quote->last_name}}</td>
                                    <td>{{$quote->phone}}</td>
                                    <td>{!! Illuminate\Support\Str::limit($quote->message, 30)!!}</td>
                                    <td>
                                        @if($quote->is_active==1)
                                        <p class="text-danger">Unread</p>
                                        @else
                                        <p class="text-success">read</p>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                           <a class="dropdown-item" href="{{route('quotation.show', $quote->id)}}">View <i class="fa fa-bookmark ml-2" aria-hidden="true"></i></a>

                                                {!!Form::open(['method'=>'DELETE','class'=>'dropdown-item', 'action'=>['AdminQuoteController@destroy', $quote->id]])!!}
                                                <button type="submit" class="btn btn-block">Delete <i class="fa fa-trash-o ml-2" aria-hidden="true"></i> </button>

                                                {!!Form::close()!!}
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                                @endif
                               </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
