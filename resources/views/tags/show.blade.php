@extends('layouts.category_layout')
@section('title','Tag։ ' . $tag->title)
@section('page-title')
    <div class="page-title db">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2>Tag: {{$tag->title}}</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Գլխավոր</a></li>
                        <li class="breadcrumb-item active">{{$tag->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row tm-row">
        @foreach ($posts as $post)
            <article class="col-12 col-md-6 tm-post">
                <hr class="tm-hr-primary">
                <a href="{{route('post.single',$post->slug)}}" class="effect-lily tm-post-link tm-pt-60">
                    <div class="tm-post-link-inner">
                        <img src="{{$post->getImage()}}" alt="Image" class="img-fluid">
                    </div>
                    <!-- <span class="position-absolute tm-new-badge">New</span> -->
                    <h2 class="tm-pt-30 tm-color-primary tm-post-title">
                        <a href="{{route('post.single',$post->slug)}}" title="">{{$post->title}}</a>
                    </h2>
                </a>
                <p class="tm-pt-30">{{$post->description}}</p>
                <div class="d-flex justify-content-between tm-pt-45">
                    <span class="tm-color-primary">{{$post->view}}</span>
                    <span><a href="{{route('categories.single',$post->category->slug)}}"
                             title="">{{$post->category->title}}</a></span>
                    <span class="tm-color-primary">{{$post->getPostDate()}}</span>
                </div>
                <hr>
            </article>
        @endforeach
    </div>
    <div class="row tm-row tm-mt-100 tm-mb-75">
        <div class="tm-paging-wrapper">
            <nav class="tm-paging-nav d-inline-block">
                {{$posts->links()}}
            </nav>
        </div>
    </div>
@endsection
