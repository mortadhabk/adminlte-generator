<div class="section section-padding" id="section1">
    <div class="container">
        <div class="section-heading heading-left">
            <span class="subtitle">My</span>
            <h2 class="title">Competances</h2>
        </div>
        <div class="row">
            @foreach ($aboutmepage->competances as $item)
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">

                    <div class="services-grid service-style-2">
                        <div class="thumbnail">
                            <img src="{{ $item->image_url }}" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title"> <a href="service-design.html">{!! $item->name !!}</a></h5>
                            <p>{!! $item->description !!}</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {!! $item->rating * 10 !!}%"
                                    aria-valuenow="{!! $item->rating * 10 !!}" aria-valuemin="{!! $item->rating * 10 !!}"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
