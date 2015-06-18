@extends('scms::site.layouts.blog')


@section('content')
    @foreach($models as $post)
        <article>
            <div class="title"><a href="#">{{{$post->title}}}</a></div>
            {!! $post->short_content !!}
            <div class="article-info">
                @if($post->user)
                    <div class="person">
                        @if($post->user->profile_image)
                        <img src="{{$post->user->profile_image->thumbnail('small')}}" height="40" width="40">
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
