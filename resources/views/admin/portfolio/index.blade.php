@extends('layouts.spacedime_admin')
@section('title','Admin Portfolio')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        <h1 class="mt-4">Portfolio</h1>
        @if(Session::has('portfolio_message'))
        <p class="text-success">{{session('portfolio_message')}}</p>
       @endif
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Projects Undertaken (50)</li>


            </ol>

            <div class="card mb-4">
                <div class="card-header">

                    <h6>Previous Projects <a href="{{route('portfolio.create')}}" class="float-right"><i class="fa fa-pencil-square mr-3" aria-hidden="true"></i>Add Project</a></h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if($portfolios->count()>0)
                                @foreach($portfolios as $portfolio)
                                <tr>
                                <td>{{$portfolio->title}}</td>
                                    <td> <img src="{{url('images/'. json_decode($portfolio->path)[0] )}}" class="img-fluid" title="{{$portfolio->title}}" style="width:80px"></td>
                                    <td>{!! Illuminate\Support\Str::limit($portfolio->description, 30)!!}</td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{route('portfolio.edit', $portfolio->id)}}">Edit<i class="fa fa-pencil-square-o ml-2" aria-hidden="true"></i></a>
                                                <a class="dropdown-item" href="{{route('project', $portfolio->slug)}}">View <i class="fa fa-bookmark ml-2" aria-hidden="true"></i></a>

                                                {!!Form::open(['method'=>'DELETE','class'=>'dropdown-item', 'action'=>['AdminPortfolioController@destroy', $portfolio->id]])!!}
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
