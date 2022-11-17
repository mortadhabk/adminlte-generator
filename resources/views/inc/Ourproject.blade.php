            <!--=====================================-->
            <!--=        Project Area Start         =-->
            <!--=====================================-->
            <section class="section section-padding-2">
                <div class="container">
                    <div class="section-heading heading-left mb--40">
                        <span class="subtitle">Our Project</span>
                        <h2 class="title">Some of our <br> finest work.</h2>
                    </div>
                    <div class="axil-isotope-wrapper">
                        <div class="isotope-button isotope-project-btn">
                            <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                            <button data-filter=".branding"><span class="filter-text">Branding</span></button>
                            <button data-filter=".mobile"><span class="filter-text">Mobile</span></button>
                        </div>
                        <div class="row row-35 isotope-list">
                            @foreach ($ProjectItems as $item)
                            <div class="col-md-6 project branding">
                                <div class="project-grid">
                                    <div class="thumbnail">
                                        <a >
                                            <img src="{{$item->image_url}}" alt="project">
                                        </a>
                                    </div>
                                    {!! Form::open(['route' => ['projectpage', $item->name], 'method' => 'get']) !!}
                                    <div class="content">
                                        <h4 class="title"><a >{{$item->name}}</a></h4>
                                        <span class="subtitle">{{$item->category->name}}</span>

                                        <hr>
                                        <span class="subtitle">{{$item->profile->name}}</span>
                                        {!! Form::button('<i class="fad fa-external-link"></i>', ['type' => 'submit', 'class' => 'btn btn-secondary btn-xs']) !!}

                                    </div>
                         
                                    {!! Form::close() !!}
                                 
                                </div>
                            </div>
                         
                            @endforeach
                         
                        </div>
                    </div>
                </div>
                <ul class="shape-group-7 list-unstyled">
                    <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
                    <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
                    <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
                </ul>
            </section>