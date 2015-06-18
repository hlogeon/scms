@section('header')
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Full_width</title>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700'
              rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('/css/main.css')}}">
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
@show

<body>
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
        <div class="col-md-12 adm-content adm-cont-white">
        <div class="wrapper">
            @section('content_menu')
                @include('site.partials.menu')
            @show
            <div class="white-content">
                @yield('content')
            </div>
        </div>
        </div>
        @section('footer')
        <footer>
            <div class="row wrapper">
                <div class="col-md-12 off-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="title">Компания</span>
                                            <ul>
                                                <li><a href="#">Пункт</a></li>
                                                <li><a href="#">Пункт</a></li>
                                                <li><a href="#">Пункт</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="title">Обучение</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="title">Клиенты</span>
                                        </div>
                                        <div class="col-md-6">
                                            <span class="title">Поддержка</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="title">Офисные продажи</span>
                                    <ul>
                                        <li><a href="#">Пункт</a></li>
                                        <li><a href="#">Пункт</a></li>
                                        <li><a href="#">Пункт</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <span class="title">Контакты</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <span>Copyright © 2015 "Патронс".</span>
                <ul class="f-menu">
                    <li><a href="#">Правовая информация</a></li>
                    <li><a href="#">Политика конфиденциальности</a></li>
                    <li><a href="#">Карта сайта</a></li>
                </ul>
            </div>
        </footer>
        @show
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
@yield('scripts')
</body>
</html>