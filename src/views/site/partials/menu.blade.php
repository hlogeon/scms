<?php
    $pages = \Hlogeon\Scms\Models\Page::where('in_menu', true)->where('published', true)->get();
    $types = \Hlogeon\Scms\Models\Type::where('type_in_menu', true)->has('\Hlogeon\Scms\Models\Page')->get();
    $routePrefix = config('scms.route_prefix') !== '' ? config('scms.route_prefix').'.' : '';
    $pageRoute = $routePrefix . config('scms.read.alias');
    $typeRoute = $routePrefix . config('scms.list.alias');
?>
<div class="adm-path">
    <ul class="path-list">
        @foreach($pages as $page)
            <li><a href="{{route($pageRoute, ['id' => $page->id, 'model' => $page->type_id])}}">{{{$page->title}}}</a></li>
        @endforeach
        @foreach($types as $type)
            <li><a href="{{route($typeRoute, ['model' => $type->id])}}">{{{$type->name}}}</a></li>
        @endforeach
        <li><a href="#">Продукт</a></li>
        <li><a href="#">Клиенты</a></li>
        <li><a href="#">Компания</a></li>
        {{--<li><a href="{{route('blog.home')}}">Блог</a></li>--}}
{{--        <li><a href="{{route('case.list')}}">Кейсы</a></li>--}}
{{--        <li><a href="{{route('content.list')}}">Контент</a></li>--}}
{{--        <li><a href="{{route('area.list')}}">Сферы бизнеса</a></li>--}}
    </ul>
    <div class="add-btns">
        <a href="#" class="help">Помощь</a>
        <a href="#" class="btn green invite">Бесплатный анализ</a>
    </div>
    <div class="clear"></div>
</div>