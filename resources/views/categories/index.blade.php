@extends('layouts.master')

@section('title')
@parent | {{ trans('words.categories') }}
@stop

@section('style')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('script')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "searching": false,
      "lengthChange": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
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

            <div class="col-12">

                <div class="card">
                    <div class="card-header card-header-grid">

                        <h3 class="card-title">{{ trans('words.categories') }}</h3>

                        <a href="{{ route('category.create') }}">
                            <button class="btn btn-success">{{ trans('words.create') }}</button>
                        </a>

                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>{{ trans('words.name') }}</th>
                                    <th>{{ trans('words.status') }}</th>
                                    <th>#</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->active == 1 ? trans('words.active') : trans('words.disactive') }}
                                    </td>
                                    <td>

                                        <a href="{{ route('category.edit',$category->id) }}">
                                            <button class="btn btn-primary">{{ trans('words.update') }}</button>
                                        </a>

                                        <form class="form-delete" role="form" method="POST"
                                            action="{{ route('category.destroy',$category->id) }}">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                            <button type="submit"
                                                class="btn btn-danger">{{ trans('words.delete') }}</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>{{ trans('words.name') }}</th>
                                    <th>{{ trans('words.status') }}</th>
                                    <th>#</th>
                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-12">

                <div class="card">
                    <div class="card-header card-header-grid">

                        <h3 class="card-title">{{ trans('words.trashed_categories') }}</h3>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>{{ trans('words.name') }}</th>
                                    <th>{{ trans('words.status') }}</th>
                                    <th>#</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($categoriesTrashed as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->active == 1 ? trans('words.active') : trans('words.disactive') }}
                                    </td>
                                    <td>

                                        <a href="{{ route('category.restore',$category->id) }}">
                                            <button class="btn btn-primary">{{ trans('words.restore') }}</button>
                                        </a>

                                        <a href="{{ route('category.force',$category->id) }}">
                                            <button class="btn btn-danger">{{ trans('words.force') }}</button>
                                        </a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>{{ trans('words.name') }}</th>
                                    <th>{{ trans('words.status') }}</th>
                                    <th>#</th>
                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- Main content -->

@endsection