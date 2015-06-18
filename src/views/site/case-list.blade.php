<?php
$routePrefix = config('scms.route_prefix') !== '' ? config('scms.route_prefix').'.' : '';
$pageRoute = $routePrefix . config('scms.read.alias');
?>
@extends('scms::site.layouts.full_width')

@section('content')
    <div class="blocks">
        @foreach($models as $model)
            <div class="col-md-6 case f-l">
                <div class="case-head">
                    <span class="title">{{{$model->title}}}</span>
                </div>
                <div class="case-body">
                    <div class="date">Опубликованно {{{$model->created_at->format('d.m.Y H:i')}}}</div>
                    <div class="case-logo"><img src="{{{$model->image->thumbnail('medium')}}}"></div>
                    <p>{{{str_limit(strip_tags($model->content, 250))}}}</p>
                    <a href="{{{route($pageRoute, ['model' => $type->id, 'id' => $model->id])}}}" class="read-more">Читать далее</a>
                </div>
            </div>
        @endforeach
        <div class="clear"></div>
    </div>

@endsection