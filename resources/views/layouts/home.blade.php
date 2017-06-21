<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include ('layouts.partials._head')
    </head>
    <body>
        <div id="app">
            <section class="hero is-primary is-large">
                <div class="hero-head">
                    @include('layouts.partials._nav')
                </div>
                @yield('content')
            </section>
        </div>

        @include('layouts.partials._scripts')
    </body>
</html>
