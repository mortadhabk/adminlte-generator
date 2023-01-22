@extends('layouts.master')
@section('content')



    <div class="breadcrum-area">
        <div class="container  mx-5 px-5">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class="active">{!!$categorypage->category[0]->name!!}</li>
                </ul>
             
            </div>
        </div>
        <hr class="mt-4">
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100"><img src="assets/media/others/bubble-9.png" alt="Bubble"></li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200"><img src="assets/media/others/bubble-10.png" alt="Bubble"></li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><img src="assets/media/others/line-4.png" alt="Line"></li>
        </ul>
    
    <div class="widget widget-recent-post  mx-5 px-5 mt-5 pt-5" >
   
        <div class="post-list-wrap section-padding-equal ">
          
    
            @foreach ($categorypage->category as $items)
            @foreach($items->projects as $item)
            <div class="single-post">
                <div class="post-thumbnail">
                    <a href="project/{{$item->name}}"><img src={{$item->image_url}} alt="Blog" style="width:100px; height 80px;"></a>
                </div>
                <div class="post-content">
                    <h6 class="title"><a href="project/{{$item->name}}">{{$item->name}}</a></h6>
                    <ul class="blog-meta list-unstyled">
                        <li>{{$item->created_at}}</li>
                        <li>{{$item->profile->name}}</li>
                    </ul>
                </div>
            </div>
            
            @endforeach
            @endforeach
           
        </div>
    </div>

</div>   


@endsection


