<!-- lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{(App::isLocale('ar-SA') ? 'rtl' : 'ltr')}}" -->
<!-- class="{{(App::isLocale('ar-SA') ? 'text-left' : 'text-right')}}" dir="{{(App::isLocale('ar-SA') ? 'rtl' : 'ltr')}}" -->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{(App::isLocale('ar-SA') ? 'rtl' : 'ltr')}}" >

    @include('partials.admin.head')

    @mobile
        <body id="leftMenu" class="g-sidenav-hidden">	
    @elsemobile
        <body id="leftMenu" class="g-sidenav-show">	
    @endmobile

        @stack('body_start')

        @include('partials.admin.menu')

        <div class="main-content" id="panel" class="{{(App::isLocale('ar-SA') ? 'rtl text-left' : 'text-right')}}" dir="{{(App::isLocale('ar-SA') ? 'rtl' : 'ltr')}}">

            @include('partials.admin.navbar')

            <div id="main-body">

                @include('partials.admin.header')

                <div class="container-fluid content-layout mt--6">

                    @include('partials.admin.content')

                    @include('partials.admin.footer')

                </div>

            </div>

        </div>

        @stack('body_end')

        @include('partials.admin.scripts')
    </body>

</html>
