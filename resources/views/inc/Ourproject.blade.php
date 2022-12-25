

    <section class="section section-padding-equal project-column-4 pt--150 pt_md--80 pt_sm--60">
        <div class="container-fluid plr--30">
            <div class="section-heading heading-left">
                <span class="subtitle">Our Project</span>
                <h2 class="title">Some of our finest <br> work.</h2>
            </div>
         
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                @foreach ($ProjectItems as $item)
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a  href="/project/{{$item->name}}">
                                <img src="{{$item->image_url}}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="title"><a  href="/project/{{$item->name}}">{{$item->name}}</a></h5>
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