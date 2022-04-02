<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Reinvoice Dashboard</title>
    <!-- StyleSheets  -->
    @stack('page-css')
    <link rel="stylesheet" href="{{asset('css/dashlite.css?ver=2.4.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('css/theme.css?ver=2.4.0')}}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

            <!-- <sidebar> -->
            @include('layouts.partials.sidebar')
            <!-- </sidebar> -->

            <!-- wrap @s -->
            <div class="nk-wrap ">

                <!-- <header> -->
                @include('layouts.partials.header')
                <!-- </header> -->

                <!-- <content> -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="nk-block nk-block-lg">
                                            @yield('content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </content> -->

                <!-- <footer> --> 
                @include('layouts.partials.footer')
                <!-- </footer> -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('js/bundle.js?ver=2.4.0')}}"></script>
    <script src="{{asset('js/scripts.js?ver=2.4.0')}}"></script>
    @stack('page-scripts')
    @stack('custom-js')
    <script>
        $('.ri-select').select2();
    </script>
</body>

</html>