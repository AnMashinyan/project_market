@if($popular_posts->count())
    <div class="container mt-3">
        <div class="d-flex justify-content-center row">
            <div class="col-md-14" style="width: 100%;">
                <div class="p-3 bg-white text-center rounded">
                    <p>Շատ դիտված</p>
                    @foreach ($popular_posts as $post)
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <img src="{{$post->getImage()}}" width="55">
                                <div class="d-flex flex-column align-items-start ml-2">
                                    <a href="{{route('post.single',$post->slug)}}" class="font-weight-bold"
                                       style="white-space: nowrap;font-size: 17px; overflow: hidden;text-overflow: ellipsis;width: 94%;">{{$post->title}}</a>
                                    <span class="postTime">{{$post->getPostDate()}}</span>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center mt-2">
                                <p><i class="fa fa-eye"></i> {{$post->view}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif

@if($cats->count())
    <div class="container mt-3">
        <div class="d-flex justify-content-center row">
            <div class="col-md-14" style="width: 100%;">
                <div class="p-3 bg-white text-center rounded">
                    <p>Կատեգորիա</p>
                    @foreach ($cats as $cat)
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <div class="d-flex flex-row align-items-center">
                                <div class="d-flex flex-column align-items-start ml-2">
                                    <a href="{{route('categories.single',$cat->slug)}}" class="font-weight-bold"
                                       style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;width: 100%;"> {{$cat->title}}</a>
                                </div>
                            </div>
                            <div class="d-flex flex-row align-items-center mt-2">
                                <p>({{$cat->posts_count}})</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
