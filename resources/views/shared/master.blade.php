@include('vendors.shared.header')


<body>

@include('vendors.shared.side_bar')

@yield('content')

<!-- jQuery -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/jquery/dist/jquery.min.js') !!}"></script>
<!-- Bootstrap -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/fastclick/lib/fastclick.js') !!}"></script>
<!-- NProgress -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/nprogress/nprogress.js') !!}"></script>
<!-- Chart.js -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/Chart.js/dist/Chart.min.js') !!}"></script>
<!-- gauge.js -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/gauge.js/dist/gauge.min.js') !!}"></script>
<!-- bootstrap-progressbar -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}"></script>
<!-- iCheck -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/iCheck/icheck.min.js') !!}"></script>
<!-- Skycons -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/skycons/skycons.js') !!}"></script>
<!-- Flot -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/Flot/jquery.flot.js') !!}"></script>
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/Flot/jquery.flot.pie.js') !!}"></script>
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/Flot/jquery.flot.time.js') !!}"></script>
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/Flot/jquery.flot.stack.js') !!}"></script>
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/Flot/jquery.flot.resize.js') !!}"></script>
<!-- Flot plugins -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') !!}"></script>
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js') !!}"></script>
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/flot.curvedlines/curvedLines.js') !!}"></script>
<!-- DateJS -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/DateJS/build/date.js') !!}"></script>
<!-- JQVMap -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/jqvmap/dist/jquery.vmap.js') !!}"></script>
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js') !!}"></script>
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') !!}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/moment/min/moment.min.js') !!}"></script>
<script src="{!! asset('bower_components/template_admin_gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') !!}"></script>

<!-- Custom Theme Scripts -->
<script src="{!! asset('bower_components/template_admin_gentelella/build/js/custom.min.js') !!}"></script>
</body>
</html>