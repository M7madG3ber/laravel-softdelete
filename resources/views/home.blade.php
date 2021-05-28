@extends('layouts.master')

@section('title')
@parent | {{ trans('words.home') }}
@stop

@section('content')

<!-- Page header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ trans('words.title') }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('homepage') }}">{{ trans('words.home') }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ trans('words.title') }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$categories}}</h3>
                        <p>{{ trans('words.categories') }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$categoriesTrashed}}</h3>
                        <p>{{ trans('words.trashed_categories') }}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Main content -->

@endsection