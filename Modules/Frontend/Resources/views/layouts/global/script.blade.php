<!-- JS Library-->
<script src="{{ Module::asset('frontend:js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ Module::asset('frontend:js/splide.min.js') }}"></script>
<script src="{{ Module::asset('frontend:js/splide-extension-video.min.js') }}"></script>
<script src="{{ mix('js/frontend.js') }}"></script>
<script src="{{ Module::asset('frontend:js/app.js') }}"></script>
<script src="{{ Module::asset('frontend:js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@yield('script')
