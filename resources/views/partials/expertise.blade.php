<section class="colorlib-services" data-section="services">
    <div class="colorlib-narrow-content">
        <div class="row">
            <div
                class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box"
                data-animate-effect="fadeInLeft">
                <span class="heading-meta">What I do?</span>
                <h2 class="colorlib-heading">Here are some of my expertise</h2>
            </div>
        </div>

        <div class="row row-pt-md">

            @foreach ($data['expertise'] as $expertise)
                <div class="col-md-4 text-center animate-box">
                    <div class="services color-1">
                        <span class="icon ">
                            <i class="fas {{ $expertise->icon }}"></i>
                        </span>
                        <div class="desc">
                            <h3>{{ $expertise->title }}</h3>
                            <p>{{ $expertise->description }}</p>
                        </div>
                    </div>
                </div>  
            @endforeach
            
        </div>

    </div>
</section>
