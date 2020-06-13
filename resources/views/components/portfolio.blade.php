<div id="portfolio" class="row bottom_45">
    <section class="col-md-12">
        <div class="col-md-12 content-header bottom_15">
            <div class="section-title top_30 bottom_30"><span></span><h2>Portafolio</h2></div>
            <div id="filters-container">
                <!-- '*' means shows all item elements -->
                <div data-filter="*" class="cbp-filter-item cbp-filter-item-active">Todos</div>
                <div data-filter=".web" class="cbp-filter-item">Web</div>
                <div data-filter=".desktop" class="cbp-filter-item">Escritorio</div>
            </div>
        </div>
        <div id="grid-container" class="top_60">
            <!-- a work -->
            <div class="cbp-item web">
                <a href="{{asset('portfolio-detail/greencenter.html')}}" class=" cbp-singlePage">
                    <figure>
                        <div class="icon">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                        </div>
                        <img src="{{asset('images/works/green.png')}}" alt="" >
                        <figcaption>
                            <span class="title">GreenCenter</span><br/>
                            <span class="info">CRM</span>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="cbp-item web">
                <a href="{{asset('portfolio-detail/socialdead.html')}}" class=" cbp-singlePage">
                    <figure>
                        <div class="icon">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                        </div>
                        <img src="{{asset('images/works/socialdead.png')}}" alt="" >
                        <figcaption>
                            <span class="title">SocialDead</span><br/>
                            <span class="info">RedSocial</span>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="cbp-item web">
                <a href="{{asset('portfolio-detail/cyberline.html')}}" class=" cbp-singlePage">
                    <figure>
                        <div class="icon">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                        </div>
                        <img src="{{asset('images/works/cyberline.png')}}" alt="" >
                        <figcaption>
                            <span class="title">Cyberline</span><br/>
                            <span class="info">CRM + SEO ADMIN</span>
                        </figcaption>
                    </figure>
                </a>
            </div>
        <!-- load more button -->
        <div id="js-loadMore-agency" class="cbp-l-loadMore-button top_30">
            <a href="load-more/portfolio.html" class="cbp-l-loadMore-link site-btn" rel="nofollow">
                <span class="cbp-l-loadMore-defaultText">Load More (<span class="cbp-l-loadMore-loadItems">3</span>)</span>
                <span class="cbp-l-loadMore-loadingText">Loading...</span>
                <span class="cbp-l-loadMore-noMoreLoading">No More Works</span>
            </a>
        </div>
    </section>
</div>
