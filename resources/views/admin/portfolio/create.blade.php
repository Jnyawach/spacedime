@extends('layouts.spacedime_admin')
@section('title','Add Project')
@section('content')

<div id="layoutSidenav_content">
    <main>

        <div class="container-fluid">
        <h1 class="mt-4">Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Projects Undertaken (50)</li>

            </ol>
        </div>
        <section class="container">
            @include('includes.editor')
            <h3>App Project to Portfolio</h3>
            {!!Form::open(['method'=>'POST', 'action'=>'AdminPortfolioController@store','files'=>true,])!!}
            <div class="form-group">
                {!!Form::label('title', 'TITLE:')!!}
                {!!Form::text('title', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group row">

                <div class="col-sm-12 col-md-6 col-lg-6">
                    {!!Form::label('is_active', 'Status:')!!}
                    {!!Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0, ['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="form-group">
                    {!!Form::label('description', 'DESCRIPTION:')!!}
                    {!!Form::textarea('description', null, ['class'=>'form-control','id'=>'description-editor'])!!}

            </div>
            <div class="form-group row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    {!!Form::label('path', 'PORTFOLIO IMAGE:')!!}
                    {!!Form::file('path[]',  ['class'=>'form-control-file', 'multiple'=>'multiple'])!!}
                </div>

            </div>
            <div class="form-group">
                {!!Form::submit('Create Portfolio', ['class'=>'btn btn-primary'])!!}
            </div>



            {!!Form::close()!!}

            <div class="row">
                @include('includes.form_error')
            </div>
        </section>

    </main>
@endsection

@section('scripts')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description-editor', );
</script>
@endsection
