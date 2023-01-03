
            <div class="section section-padding" id="section1">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">My</span>
                        <h2 class="title">Competance</h2>
                    </div>
                    <div class="row">
                        @foreach ($competancesItem as $item)

                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
   
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{$item->image_url}}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-design.html">{!!$item->name!!}</a></h5>
                                    <p>{!!$item->description!!}</p>
                                    <a href="service-design.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>