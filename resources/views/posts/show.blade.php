@extends('layouts.layout')
@section('title',"Նյութ: " . $post->title)
@section('content')
    <div class="row tm-row tm-mb-45">
        <div class="col-12">
            <hr class="tm-hr-primary tm-mb-55">
            <img src="{{$post->getImage()}}" alt="Image" style="width:100%; border-radius: 8px">
        </div>
    </div>
    <div class="row tm-row">
        <div class="col-lg-12 tm-post-col">
            <div class="tm-post-full">
                <div class="mb-2">
                    <p class="tm-mb-10 text-right">Կատեգորիա: <a href="{{route('categories.single',$post->category->slug)}}"
                                           title="">{{$post->category->title}}</a></p>
                    <h2 class="pt-2 tm-color-primary tm-post-title">{{$post->title}}</h2>
                    <div style="overflow-wrap: break-word;">{!! $post->content !!}</div>
                    <hr>
                    @if ($post->tags->count())
                        <div class="tag-cloud-single text-right">
                            {{--<span class="tm-color-primary text-left">view: </span>--}}
                            <small>{{$post->getPostDate()}} |</small>
                            <small><i class="fa fa-eye"></i> {{$post->view}} |</small>
                            <small>Tag: </small>
                            @foreach ($post->tags as $tag)
                                <small><a href="{{route('tags.single',$tag->slug)}}"
                                          title="">{{$tag->title}}</a></small>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
