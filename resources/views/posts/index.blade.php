@extends('layouts.layout')
@section('title','Գլխավոր')
@section('header')
    <section id="cta" class="section">
        <div class="container">
            <div class="row">
                <img src="{{asset("assets/admin/img/photo1.png")}}" alt="" style="width:100%; border-radius: 8px">
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="row tm-row">
        @if($posts->count())
        @foreach ($posts as $post)
            <article class="col-12 col-md-6 tm-post">
                <hr class="tm-hr-primary">
                <a href="{{route('post.single',$post->slug)}}" class="effect-lily tm-post-link tm-pt-10">
                    <div class="tm-post-link-inner">
                        <img src="{{$post->getImage()}}" alt="Image" class="img-fluid">
                    </div>
                    <!-- <span class="position-absolute tm-new-badge">New</span> -->
                    <h2 class="tm-pt-10 tm-color-primary tm-post-title">
                        <a href="{{route('post.single',$post->slug)}}" title="">{{$post->title}}</a>
                    </h2>
                </a>
                <p class="tm-pt-10">{{$post->description}}</p>
                <div class="d-flex justify-content-between tm-pt-10">
                    <span class="tm-color-primary"><i class="fa fa-eye"></i> {{$post->view}}</span>
                    <span><a href="{{route('categories.single',$post->category->slug)}}"
                             title="">{{$post->category->title}}</a></span>
                    <span class="tm-color-primary">{{$post->getPostDate()}}</span>
                </div>
                <hr>
            </article>
        @endforeach
        @else
            <p>Նյութ չկա</p>
        @endif
    </div>
    <div class="row tm-row tm-mt-100 tm-mb-75">
        <div class="tm-paging-wrapper">
            <nav class="tm-paging-nav d-inline-block">
                {{$posts->links()}}
            </nav>
        </div>
    </div>
@endsection
