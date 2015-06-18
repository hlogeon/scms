<!DOCTYPE html>
<html>
@section('header')
    @include('scms::site.partials.header')
@show

<body>
<div class="container-fluid adm">
    <div class="row">
        @section('content_header')
            @include('scms::site.partials.content_header')
        @show
        <div class="col-md-12 adm-content adm-cont-white">
        <div class="wrapper">
            @section('content_menu')
                @include('scms::site.partials.menu')
            @show
            <div class="white-content">
                @yield('content')
            </div>
        </div>
        </div>
            @section('footer')
                @if($footer = \Hlogeon\Scms\Models\Footer::where('active', true)->first())
                    {!! $footer->content !!}
                @endif
            @show
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
@yield('scripts')
</body>
</html>