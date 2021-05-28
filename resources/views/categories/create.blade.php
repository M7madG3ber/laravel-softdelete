@extends('layouts.master')

@section('title')
@parent | {{ trans('words.create_category') }}
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
                        <a href="{{ route('category.index') }}">{{ trans('words.categories') }}</a>
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

            <div class="col-md-12">
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">{{ trans('words.create_category') }}</h3>
                    </div>

                    <form role="form" method="POST" action="{{ route('category.store') }}">

                        {{ csrf_field() }}

                        <div class="card-body">

                            <div class="form-group">
                                <label>{{ trans('words.name') }}</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="{{ trans('words.name_help') }}" value="{{ old('name') }}" required>
                                {!! $errors->first('name', '<span class="alert  alert-danger ">:message</span>' ) !!}
                            </div>

                            <div class="form-group">
                                <label>{{ trans('words.status') }}</label>

                                <select class="form-control" name="active" required>
                                    <option value="">{{ trans('words.status_help') }}</option>

                                    <option value="1" {{ old('active') == 1 ? ' selected ' : '' }}>
                                        {{ trans('words.active') }}</option>

                                    <option value="0" {{ old('active') === 0 ? ' selected ' : '' }}>
                                        {{ trans('words.disactive') }}</option>
                                </select>

                                {!! $errors->first('active', '<span class="alert  alert-danger ">:message</span>' ) !!}


                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ trans('words.create') }}</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- Main content -->

@endsection