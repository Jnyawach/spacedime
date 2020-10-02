@extends('layouts.spacedime_admin')
@section('title','Admin Portfolio')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
        <h1 class="mt-4">Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Projects Undertaken (50)</li>

            </ol>

            <div class="card mb-4">
                <div class="card-header">

                    <h6>Request For Quotation <a href="{{route('portfolio.create')}}" class="float-right"><i class="fa fa-pencil-square mr-3" aria-hidden="true"></i>Add Project</a></h6>
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
                                <tr>
                                    <td>Landscape Design</td>
                                    <td>#</td>
                                    <td>This project is about...</td>
                                    <td class="text-info">visible</td>

                                </tr>
                               </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
