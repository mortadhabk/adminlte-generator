

    <section class="section section-padding-equal project-column-4 pt--150 pt_md--80 pt_sm--60">
        <div class="container-fluid plr--30">
            <div class="section-heading heading-left">
                <span class="subtitle">Our Project</span>
                <h3 >Some of our finest work.</h3>
            </div>
         
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 row-cols-xl-4 mx-5" >
                @foreach ($ProjectItems as $item)
                <div class="col">
                    <div class="project-grid" >
                        <div class="thumbnail" >
                            <a  href="/project/{{$item->name}}">
                                <img src="{{$item->image_url}}" alt="project">
                            </a>
                        </div>
                        <div class="content" style="   
                        white-space: nowrap;
                        text-overflow: clip; 
                        width: auto;
                        display: block;
                        overflow: hidden
                        ">
                            <h6 class="title"><a  href="/project/{{$item->name}}">{{$item->name}}</a></h6>
                            <span class="subtitle">{{$item->category->name}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach ($ProjectItems as $item)
                <div class="col">
                    <div class="project-grid" >
                        <div class="thumbnail" >
                            <a  href="/project/{{$item->name}}">
                                <img src="{{$item->image_url}}" alt="project">
                            </a>
                        </div>
                        <div class="content" style="   
                        white-space: nowrap;
                        text-overflow: clip; 
                        width: auto;
                        display: block;
                        overflow: hidden
                        ">
                            <h6 class="title"><a  href="/project/{{$item->name}}">{{$item->name}}</a></h6>
                            <span class="subtitle">{{$item->category->name}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach ($ProjectItems as $item)
                <div class="col">
                    <div class="project-grid" >
                        <div class="thumbnail" >
                            <a  href="/project/{{$item->name}}">
                                <img src="{{$item->image_url}}" alt="project">
                            </a>
                        </div>
                        <div class="content" style="   
                        white-space: nowrap;
                        text-overflow: clip; 
                        width: auto;
                        display: block;
                        overflow: hidden
                        ">
                            <h6 class="title"><a  href="/project/{{$item->name}}">{{$item->name}}</a></h6>
                            <span class="subtitle">{{$item->category->name}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach ($ProjectItems as $item)
                <div class="col">
                    <div class="project-grid" >
                        <div class="thumbnail" >
                            <a  href="/project/{{$item->name}}">
                                <img src="{{$item->image_url}}" alt="project">
                            </a>
                        </div>
                        <div class="content" style="   
                        white-space: nowrap;
                        text-overflow: clip; 
                        width: auto;
                        display: block;
                        overflow: hidden
                        ">
                            <h6 class="title"><a  href="/project/{{$item->name}}">{{$item->name}}</a></h6>
                            <span class="subtitle">{{$item->category->name}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="more-project-btn">
                <a href="/dev" class="axil-btn btn-fill-primary">Discover More Projects</a>
            </div>
        </div>
    </section>