@extends('layouts.master')
@section('content')
           
<div class="breadcrum-area">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-unstyled">
                <li><a href="index-1.html">Home</a></li>
                <li class="active">Blog</li>
            </ul>
            <h1 class="title h2">{!!$category[0]->name!!}</h1>
        </div>
    </div>

    <ul class="shape-group-8 list-unstyled">
        <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100"><img src="assets/media/others/bubble-9.png" alt="Bubble"></li>
        <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200"><img src="assets/media/others/bubble-10.png" alt="Bubble"></li>
        <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><img src="assets/media/others/line-4.png" alt="Line"></li>
    </ul>

    <section class="section-padding-equal">
        <div class="container">
            <div class="row row-40">
          
                <section class="section section-padding-equal project-column-4 pt--100 pt_md--80 pt_sm--60">
                    <div class="container plr--30">
                        <div class="section-heading heading-center">
                            <span class="subtitle">Recent Project</span>
                            <h2 class="title">Some of our finest <br> work.</h2>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                       
                            @foreach ($category as $items)
                            @foreach($items->projects as $item)
                           
                                <div class="project-grid">
                                    <div class="thumbnail">
                                        <a href="/project/{{$item->name}}">
                                            <img src={{$item->image_url}} alt="project">
                                        </a>
                                    </div>
                                    <div class="content" style="">
                                        <h4 class="title"><a >{{$item->name}}</a></h4>
                                        <span class="subtitle">{{$item->category->name}}</span>
                                        <hr>
                                        <a href="/project/{{$item->name}}" class="axil-btn btn-fill-primary btn-fluid btn-sm " >Show</a>
    
                                    </div>
                                </div>
                         
                                @endforeach
                                @endforeach
    
                        </div>
                   
                    </div>
                </section>
             
        
            </div>
        </div>
    </section>
</div>
    
@endsection