<!DOCTYPE html>
<html>
@section('header')
    @include('scms::site.partials.header')
@show

<body class="bg-w">
<div class="container-fluid adm">
    <div class="row">
        @section('content_header')
            <header class="wrapper">
                <div class="logo">
                    <a href="#" class="logotype"></a>
                    <span class="logo-title">Автоматизация маркетинга местного бизнеса</span>
                </div>
                <div class="contact">
                    <b>Вопросы? <span class="num">+7 (495) 105-93-75</span></b>
                    <span class="pull-search"></span>
                    <div class="wrapper-search-inter">
					<span class="search-inter">
						<button class="ico"></button>
						<input type="text" placeholder="Поиск">
					</span>
                    </div>
                    <a href="#" class="log-in btn">Войти</a>
                </div>
                <div class="clear"></div>
            </header>
        @show
        <div class="col-md-12 adm-content adm-cont-white advanced">
            <div class="wrapper">
                @section('content_menu')
                    @include('scms::site.partials.menu')
                @show
                <div class="white-content">
                    <div class="row wrapper-articles">
                        <div class="col-md-8 section-articles">
                            @yield('content')
                        </div>
                        <div class="col-md-4 side-bar-r">
                            @section('sidebar')
                                @if(isset($model))
                                    @if($model->getSidebar() !== false)
                                        {!! $model->getSidebar() !!}
                                    @else
                                        <div class="title">Заголовок блока</div>
                                        <ul>
                                            <li><a href="" class="active">Элемент меню</a></li>
                                            <li><a href="">Элемент меню</a></li>
                                            <li><a href="">Элемент меню</a></li>
                                        </ul>
                                    @endif
                                @else
                                    @if($type->sidebar)
                                        {!! \Hlogeon\Scms\Models\Sidebar::find($type->sidebar)->content !!}
                                    @else
                                        <div class="title">Заголовок блока</div>
                                        <ul>
                                            <li><a href="" class="active">Элемент меню</a></li>
                                            <li><a href="">Элемент меню</a></li>
                                            <li><a href="">Элемент меню</a></li>
                                        </ul>
                                    @endif
                                @endif
                            @show
                        </div>
                    </div>
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