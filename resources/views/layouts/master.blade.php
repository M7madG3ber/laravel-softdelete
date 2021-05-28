<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@section('title'){{ trans('words.title') }}@show</title>

        @include('partials.styles')
        <style>
            .card-header-grid {
                display: flex;
                align-items: center;
            }

            .card-header-grid h3 {
                margin-right: 10px;
            }

            .form-delete {
                display: inline;
            }
        </style>
        @yield('style')
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            @include('partials.navbar')

            @include('partials.aside')

            <div class="content-wrapper">
                @yield('content')
            </div>

            @include('partials.footer')

        </div>

        @include('partials.scripts')
        @yield('script')
    </body>

</html>