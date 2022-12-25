            <!--=====================================-->
            <!--=        Service Area Start         =-->
            <!--=====================================-->
            <section class="section section-padding-2 bg-color-dark">
                <div class="container">
                    <div class="section-heading heading-light-left">
                        <span class="subtitle">What We Can Do For You</span>
                        <h2 class="title">Services we can help you with</h2>
                        <p class="opacity-50">Nulla facilisi. Nullam in magna id dolor
                            blandit rutrum eget vulputate augue sed eu imperdiet.</p>
                    </div>
                    <div class="row">
                        @foreach ($competancesItem as $item)
                        <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid active">
                                <div class="thumbnail">
                                    <img src="{{$item->image_url}}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-design.html">{{$item->name}}</a></h5>
                                    <p>{{$item->rating}}</p>
                                    <a href="service-design.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
               
                 
                    </div>
                </div>
                <ul class="list-unstyled shape-group-10">
                    <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li>
                    <li class="shape shape-2"><img src="assets/media/others/bubble-42.png" alt="Circle"></li>
                    <li class="shape shape-3"><img src="assets/media/others/bubble-43.png" alt="Circle"></li>
                </ul>
            </section>