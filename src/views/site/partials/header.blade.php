<?php
    if(isset($model)){
        $title = $model->title;
        $seoTitle = $model->seo_titile ? $model->seo_titile : $model->title;
        $description = $model->seo_description ? $model->seo_description : '';
        $keywords = $model->seo_keywords ? $model->seo_keywords : '';
    } else{
        $title = $type->name;
        $seoTitle = $type->name;
        $description = '';
        $keywords = '';
    }

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="{{{$description}}}">
    <meta name="Keywords" content="{{{$keywords}}}">
    <meta name="Title" content="{{{$seoTitle}}}">
    <title>{{{$title}}}</title>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>