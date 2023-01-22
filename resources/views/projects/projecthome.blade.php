@extends('layouts.master')
@section('content')
<section class="section section-padding-equal bg-color-light ">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-10" data-sal="slide-up" data-sal-duration="800">
                 <div class="about-us">
                     <div class="section-heading heading-left ">
                         <span class=" subtitle">{{$projects->created_at}}</span>
                         <h3 class="title mb--40 ">{!!$projects->name!!}</h3>
                     </div>
                 </div>
             </div>
          
         </div>
     </div>
     <ul class="shape-group-6 list-unstyled">
         <li class="shape shape-1"><img src="{!!asset('assets/media/others/bubble-7.png')!!}" alt="Bubble"></li>
         <li class="shape shape-2"><img src="{!!asset('assets/media/others/line-4.png')!!}" alt="line"></li>
         <li class="shape shape-3"><img src="{!!asset('assets/media/others/line-5.png')!!}" alt="line"></li>
     </ul>
 </section>
 <section class="section section-padding-equal">
                <div class="row justify-content-center">
                    <div class="col-lg-8" data-sal="slide-up" data-sal-duration="800">
                        <div class="my-blog-project p-5" >
                           
                                {!!$projects->description!!}
                            
                        
                        </div>
                    </div>
                 
                </div>
            {{-- <span class="subtitle">#laravel #vue #html</span>
            <h3 class="title">Latest stories</h3>
            <p>News From Abstrak And Around The World Of Web Design And Complete Solution of Online Digital Marketing </p> --}}

    <ul class="shape-group-1 list-unstyled">
        <li class="shape shape-1"><img src="{!!asset('assets/media/others/bubble-1.png')!!}" alt="bubble"></li>
        <li class="shape shape-2"><img src="{!!asset('assets/media/others/line-1.png')!!}" alt="bubble"></li>
    </ul>
</section>

@endsection