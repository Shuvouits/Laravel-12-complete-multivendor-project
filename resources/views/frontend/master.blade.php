
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>ShopX - Multipurpose eCommerce HTML Template</title>
    @include('frontend.section.link')
</head>

<body>


    <!-- Quick view -->
    @include('frontend.section.quickview')


    @include('frontend.section.header')

    @yield('content')



   

    @include('frontend.section.footer')

    
    <!-- Preloader Start -->

    @include('frontend.section.preloader')

    @include('frontend.section.script')

    

    
</body>

</html>
