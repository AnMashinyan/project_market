@extends('admin.layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Փոփոխել։ {{$category->title}}</h1>
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
            <form action="{{route('categories.update',$category->id)}}" method="post" role="form">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Անուն</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                               id="title"
                               value="{{$category->title}}">
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
