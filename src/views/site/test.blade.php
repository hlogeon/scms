@extends('scms::site.layouts.blog')

@section('content')
    <article class="post">
        <div class="title">{{$model->title}}</div>
        @if($model->second_title)
        <p>{{{$model->second_title}}}</p>
        @endif
        <div class="article-info">
            <div class="person">
                @if(!$model->user->profile_image->thumbnail('small'))
                    <img src="{{asset('/img/post-profile.png')}}" height="40" width="40">
                @else
                    <img src="{{{$model->user->profile_image->thumbnail('small')}}}" height="40" width="40">
                @endif
                <span><a href="#">{{{$model->user->name}}}</a>, {{{$model->created_at->format('d.m.Y')}}}</span>
            </div>
            @if($model->reading_time)
                <span class="long-read">Время чтения: {{{$model->reading_time}}}</span>
            @endif
            <a href="#">Поделится</a>
        </div>
        {!! $model->content !!}
    </article>
    <div class="about-person">
        @if(!$model->user->profile_image->thumbnail('medium'))
            <img src="{{asset('/img/post-profile.png')}}" class="about-profile">
        @else
            <img src="{{{$model->user->profile_image->thumbnail('medium')}}}" height="150" width="150" class="about-profile">
        @endif
        <div class="description">
            <div class="title">{{{$model->user->name}}}, {{{$model->user->company_info}}}</div>
            {!! $model->user->info !!}
            {{--<div class="socials">--}}
                {{--<span>Социальные сети:</span>--}}
                {{--<ul>--}}
                    {{--<li><a href="#"></a></li>--}}
                    {{--<li><a href="#"></a></li>--}}
                    {{--<li><a href="#"></a></li>--}}
                    {{--<li><a href="#"></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
        <div class="clear"></div>
    </div>
@endsection