@extends('scms::site.layouts.full_width')



@section('content')
    <div class="case-cream-content">
        <div class="general-case">
            <div class="title">{{{$model->title}}}</div>
            <div class="prof">Сфера - <a href="#">Программное обеспечение</a></div>
        </div>
    </div>
    <div class="case-white-content">
        <div class="general-case">
            <div class="case-info">
                <div class="logo-company"><img src="{{{$model->image->thumbnail('original')}}}"></div>
                <div class="description">
                    <div class="title">{{{$model->second_title}}}</div>
                    {!! $model->content !!}
                </div>
                <div class="clear"></div>
            </div>
            {!! $model->additional->content !!}
        </div>
    </div>

@endsection