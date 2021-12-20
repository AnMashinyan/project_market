{{--@extends('layouts.category_layout')--}}
@extends('layouts.layout')
@section('title','Գրքեր')

{{--@section('page-title')
    <div class="page-title db">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2>Tag {{$book->title}}</h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">{{$book->title}}</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->
@endsection--}}

@section('content')
    <div class="row tm-row">
        @if($books->count())
            @foreach ($books as $book)
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <div class="card text-center">
                        <img class="card-img-top" src="{{$book->getImage()}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->title}}</h5>
                            <p class="card-text">{{$book->content}}</p>
                            <a href="{{$book->getBook()}}" class="mb-2 tm-btn tm-btn-primary">Կարդալ</a>
                            <a href="{{$book->getBook()}}" class="mb-2 tm-btn tm-btn-primary" download>Ներբեռնել</a>
                        </div>
                    </div>
                </article>
            @endforeach
        @else
            <p>Գիրք չկա</p>
        @endif
    </div>
@endsection
