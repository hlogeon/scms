@extends('scms::site.layouts.full_width')



@section('content')
    <div class="case-cream-content">
        <div class="general-case">
            <div class="title">{{{$model->title}}}</div>
            @if($model->business_area_id)
                <?php $businessArea = \App\BusinessArea::find($model->business_area_id) ?>
                <div class="prof">Сфера - <a href="{{{route('area.view', ['id' => $model->business_area_id])}}}">{{{$businessArea->title}}}</a></div>
            @endif
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
            {!! $model->additional_content !!}
        </div>
    </div>

@endsection