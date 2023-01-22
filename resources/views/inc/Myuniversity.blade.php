<section class="section section-padding bg-color-light pb--70">
    <div class="container">
        <div class="section-heading mb--90">
            <h2 class="title">My Academic Background</h2>
        </div>
        @php
        $i = 0;
        @endphp
        
        @foreach ($aboutmepage->universityitem as $item)
        @php
        $i = $i + 1
        @endphp
        

      
       
         @if ($i % 2 != 0)
         <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
            <div class="thumbnail paralax-image">
                <img src="{{$item->image_url}}" width="200px" alt="Thumbnail">
            </div>
            <div class="content">
                <span class="subtitle">{{$item->name}}</span>
                <h3 class="title">{!!$item->place!!}</h3>
                <p>{!!$item->description!!}</p>
            </div>
        </div>
         @else
         <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
            <div class="thumbnail paralax-image">
                <img src="{{$item->image_url}}"  width="150px" alt="Thumbnail">
            </div>
            <div class="content">
                <span class="subtitle">{{$item->name}}</span>
                <h3 class="title">{!!$item->place!!}</h3>
                <p>{!!$item->description!!}</p>
            </div>
        </div>
         @endif
        @endforeach
     
       
    </div>
    <ul class="shape-group-17 list-unstyled">
        <li class="shape shape-1"><img src="assets/media/others/bubble-24.png" alt="Bubble"></li>
        <li class="shape shape-2"><img src="assets/media/others/bubble-23.png" alt="Bubble"></li>
        <li class="shape shape-3"><img src="assets/media/others/line-4.png" alt="Line"></li>
        <li class="shape shape-4"><img src="assets/media/others/line-5.png" alt="Line"></li>
        <li class="shape shape-5"><img src="assets/media/others/line-4.png" alt="Line"></li>
        <li class="shape shape-6"><img src="assets/media/others/line-5.png" alt="Line"></li>
    </ul>
</section>