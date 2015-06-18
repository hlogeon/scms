<?php
$routePrefix = config('scms.route_prefix') !== '' ? config('scms.route_prefix').'.' : '';
$pageRoute = $routePrefix . config('scms.read.alias');
?>
@extends('scms::site.layouts.blog')


@section('content')
    @foreach($models as $post)
        <article>
            <div class="title"><a href="{{route($pageRoute, ['id' => $post->id, 'model' => $post->type->id])}}">{{{$post->title}}}</a></div>
            @if($post->short_content)
            {!! $post->short_content !!}
            @else
                {{{str_limit(strip_tags($post->content), 250)}}}
            @endif
            <a href="{{route($pageRoute, ['id' => $post->id, 'model' => $post->type->id])}}">Читать далее</a>
            <div class="article-info">
                @if($post->user)
                    <div class="person">
                        @if($post->user->profile_image->thumbnail('small'))
                        <img src="{!! $post->user->profile_image->thumbnail('small') !!}" height="40" width="40">
                        @else
                            <img src="{{asset('/img/photo.png')}}" height="40" width="40">
                        @endif
                        <span><a href="#">{{{$post->user->name}}}</a>, {{{$post->created_at->format('d.m.Y H:i')}}}</span>
                    </div>
                @endif
                <span class="long-read">Время чтения: {{{$post->reading_time}}}</span>
                <a href="#">Поделится</a>
            </div>
        </article>
    @endforeach
@endsection
