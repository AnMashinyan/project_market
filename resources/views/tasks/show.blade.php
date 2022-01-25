@extends('layouts.layout')
@section('title','tasks')

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
    <div class="row tm-row tm-mb-40">
        <div class="col-12">
            <hr class="tm-hr-primary tm-mb-55">
            <img src="{{asset("assets/admin/img/tasks.jpg")}}" alt="" style="width:100%; border-radius: 8px">
        </div>
    </div>
    {{--    <div class="row tm-row tm-mb-40">
            <div class="col-12">
                <div class="mb-4">
                    <h2 class="pt-2 tm-mb-10 tm-color-primary tm-post-title">Task</h2>
                </div>
            </div>
        </div>--}}
    @if($tasks->count())
        @foreach ($tasks as $task)
            <div class="tasks" id="accordion_{{$loop->index}}">
                <div class="card">
                    <div class="card-header" id="headingOne_{{$loop->index}}">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse"
                                    data-target="#collapseOne_{{$loop->index}}"
                                    aria-expanded="true"
                                    aria-controls="collapseOne_{{$loop->index}}">
                                {{$task->title}}
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne_{{$loop->index}}" class="collapse"
                         aria-labelledby="headingOne_{{$loop->index}}"
                         data-parent="#accordion_{{$loop->index}}">
                        <div class="card-body">
                            {{$task->content}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>Առաջադրանք չկա</p>
    @endif
@endsection
