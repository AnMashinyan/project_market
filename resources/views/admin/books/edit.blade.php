@extends('admin.layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Փոփոխել: {{$book->title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Գլխավոր</a></li>
                        <li class="breadcrumb-item active">Փոփոխել</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <form action="{{route('books.update',$book->id)}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Անուն</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                               id="title"
                               value="{{$book->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Բովանդակություն</label>
                        <input type="text" name="content" class="form-control @error('content') is-invalid @enderror"
                               id="content"
                               value="{{$book->content}}">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Ընտրեք նկար</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Ընտրել</label>
                            </div>
                        </div>
                        <div>
                            <img src="{{$book->getImage()}}" alt="" width="20%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="book">Ընտրեք գիրք</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="book" class="custom-file-input" id="book">
                                <label class="custom-file-label" for="book">Ընտրել</label>
                            </div>
                        </div>
                        <a href="{{$book->getBook()}}" style="font-size:100px">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Հաստատել</button>
                    <button type="reset" class="btn btn-primary">Չեղարկել</button>
                </div>
            </form>
        </div>
    </section>
@endsection
