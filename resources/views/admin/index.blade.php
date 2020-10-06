@extends('layouts.spacedime_admin')
@section('title','Spacedime Admin Dashboard')


@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Portfolio</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{route('portfolio.index')}}">Edit Portfolio</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Reviews (94)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">see reviews</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Enquiries (2)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Quote Request (3)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">

                                <h6>Request For Quotation</h6>
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
                            <div class="card-footer">
                                {{$contacts->links()}}
                            </div>
                        </div>

                        <div class="card-body mb-4">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>status</th>
                                            <th>Edit</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>status</th>
                                            <th>Edit</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if($contacts->count()>0)
                                        @foreach($contacts as $contact)
                                        <tr>
                                        <td>{{$contact->name}} </td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{!! Illuminate\Support\Str::limit($contact->message, 30)!!}</td>
                                            <td>
                                                @if($contact->is_active==1)
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

                                                   <a class="dropdown-item" href="{{route('enquiry.show', $contact->id)}}">View <i class="fa fa-bookmark ml-2" aria-hidden="true"></i></a>

                                                        {!!Form::open(['method'=>'DELETE','class'=>'dropdown-item', 'action'=>['AdminContactController@destroy', $contact->id]])!!}
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
                        <div class="card-footer">
                            {{$contacts->links()}}
                        </div>
                    </div>
                </main>
@endsection
