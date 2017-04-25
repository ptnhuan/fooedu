<html>
    <head>
        <title>@yield('title')</title>
        @yield('head')
    </head>
    <body>
        @yield('2034-content')     
        @yield('2026-content')
        
        <div class="bg-color">
            <div class="container">
                <div class="row" style="margin: 30px -15px 0px -15px;">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        @yield('2031-content')
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        @yield('2032-content')
                    </div>
                </div>
            </div>
        </div>
       
        @yield('2006-content')
        @yield('2044-content')
    </body>
</html>
