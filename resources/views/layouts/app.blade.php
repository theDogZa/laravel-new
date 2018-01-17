<!DOCTYPE html>
<html lang="en">
@include('partials._head')

<body class="nav-md" >
<div class="container body">

    <div class="main_container">

    {{--top nav--}}
    @include('partials._sidenav')
    {{--/topnav--}}

    <!-- top navigation -->
    @include('partials._topnav')
    <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" >
            <div class="page-title">
                <div class="title_left">
                    <h3>@yield('title')</h3>
                </div>

                <div class="title_right">
                    <!-- <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div> -->
                      @yield('title-right')
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="data-pjax">
                @yield('content')
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    @include('partials._footer')
    <!-- /footer content -->
    </div>
</div>



@include('partials._notification')
@stack('scripts')


    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    {{--Scripts--}}
    @yield('scripts')
    <!-- app Theme Scripts -->
    <script src="{{asset('js/app.js')}}"></script>


</body>
</html>
