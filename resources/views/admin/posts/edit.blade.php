@extends('admin.layouts.layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Փոփոխել։ {{$post->title}}</h1>
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
            <form action="{{route('posts.update',$post->id)}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Անուն</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                               id="title"
                               value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Նկարագրություն</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                  name="description" rows="3">{{$post->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="contentApi">Բովանդակություն</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="contentApi"
                                  name="content" rows="4">{{$post->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Ընտրեք կատեգորիա</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                                name="category_id">
                            @foreach ($categories as $k => $v)
                                <option value="{{$k}}" @if($k == $post->category_id) selected @endif>{{$v}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tag</label>
                        <select class="select2" id="tags" name="tags[]" multiple="multiple"
                                data-placeholder="Select a State" style="width: 100%;">
                            @foreach ($tags as $k => $v)
                                <option value="{{$k}}"
                                        @if(in_array($k, $post->tags->pluck('id')->all())) selected @endif>{{$v}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Ընտրել նկար</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Ընտրել</label>
                            </div>
                        </div>
                        <div>
                            <img src="{{$post->getImage()}}" alt="" width="200" class="img-thumbnail mt-2">
                        </div>
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
