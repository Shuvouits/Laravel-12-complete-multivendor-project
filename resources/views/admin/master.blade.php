<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin Dashboard</title>

    @include('admin.section.link')


</head>

<body>
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="./dist/js/tabler-theme.min.js?1750026893"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">



        <!--  BEGIN SIDEBAR  -->
        @include('admin.section.sidebar')
        <!--  END SIDEBAR  -->
        <!-- BEGIN NAVBAR  -->
        @include('admin.section.header')
        <!-- END NAVBAR  -->

        <div class="page-wrapper">

            @yield('content')

           


            <!--  BEGIN FOOTER  -->
            @include('admin.section.footer')
            <!--  END FOOTER  -->
        </div>
    </div>

    <!-- BEGIN PAGE MODALS -->
    @include('admin.section.modal')
    <!-- END PAGE MODALS -->
    @include('admin.section.setting')


    @include('admin.section.script')
    <!-- END PAGE SCRIPTS -->
</body>

</html>
