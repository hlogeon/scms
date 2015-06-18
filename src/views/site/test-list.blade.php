@extends('site.layouts.blog')


@section('content')
    @foreach($models as $post)
        <article>
            <div class="title"><a href="#">{{{$post->title}}}</a></div>
            {!! $post->short_content !!}
            <div class="article-info">
                <div class="person">
                    <img src="../img/post-profile.png" height="40" width="40">
                    {{--<span><a href="#">{{{$post->user->first_name . $post->user->last_name}}}</a>, {{{$post->created_at->format('d.m.Y H:i')}}}</span>--}}
                </div>
                <span class="long-read">Время чтения: {{{$post->reading_time}}}</span>
                <a href="#">Поделится</a>
            </div>
        </article>
    @endforeach
@endsection

@section('sidebar')
    <div class="col-md-4 side-bar-r">
        <div class="title">Заголовок Супер-блока</div>
        <ul>
            <li><a href="" class="active">Элемент меню1</a></li>
            <li><a href="">Элемент меню 2</a></li>
            <li><a href="">Элемент меню 3</a></li>
        </ul>
    </div>
@endsection