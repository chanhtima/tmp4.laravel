<!DOCTYPE html>
<html lang="en">
    <head>
        @include('frontend::layouts.global.head')
        @include('frontend::layouts.global.style')
    </head>
    <body>
        @include('frontend::layouts.assets.header')
        
        @yield('content')
        
        @include('frontend::layouts.assets.footer')
        @include('frontend::layouts.global.script')
        @if(config('app.env') == 'local')
            <script src="http://localhost:35729/livereload.js"></script>
        @endif
    </body>
</html>
