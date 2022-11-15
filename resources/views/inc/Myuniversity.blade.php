<section class="section section-padding bg-color-light pb--70">
    <div class="container">
        <div class="section-heading mb--90">
            <span class="subtitle">Parcours</span>
            <h2 class="title">Our logo design process</h2>
            <p>Our comprehensive logo design strategy ensures a perfectly crafted logo for your business.</p>
        </div>
        @php
        $i = 0
        @endphp

        @foreach ($universityitem as $item)
        @php
        $i = $i + 1
        @endphp
        

      
       
         @if ($i % 2 != 0)
         <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
            <div class="thumbnail paralax-image">
                <img src="{{asset('assets/media/icon/icon10.png')}}" width="200px" alt="Thumbnail">
            </div>
            <div class="content">
                <span class="subtitle">{{$item->name}}</span>
                <h3 class="title">Discover</h3>
                <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
            </div>
        </div>
         @else
         <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
            <div class="thumbnail paralax-image">
                <img src="{{asset('assets/media/icon/icon10.png')}}" width="150px" alt="Thumbnail">
            </div>
            <div class="content">
                <span class="subtitle">{{$item->name}}</span>
                <h3 class="title">Discover</h3>
                <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
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