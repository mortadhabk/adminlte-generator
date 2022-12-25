


            <section class="section section-padding-equal project-column-4 pt--100 pt_md--80 pt_sm--60">
                <div class="container plr--30">
                    <div class="section-heading heading-center">
                        <span class="subtitle">Recent Project</span>
                        <h2 class="title">Some of our finest <br> work.</h2>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                   

                        @foreach ($ProjectItems as $item)

                       
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="/project/{{$item->name}}">
                                        <img src={{$item->image_url}} alt="project">
                                    </a>
                                </div>
                                <div class="content" >
                           
                                    <h4 class="title"><a >{{$item->name}}</a></h4>
                                    <span class="subtitle">{{$item->category->name}}</span>

                                    <hr>
                                    <a href="/project/{{$item->name}}" class="axil-btn btn-fill-primary btn-fluid btn-sm " style="align-items : flex-end; !important">Show</a>
                           

                                </div>
                            </div>
                     
                        @endforeach

                    </div>
               
                </div>
            </section>