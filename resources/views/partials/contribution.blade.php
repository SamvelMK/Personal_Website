<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="colorlib-narrow-content">
        <div class="row"></div>
        <div class="row">
            
            @foreach ($data["stats"] as $stat)
                <div class="col-md-3 text-center animate-box">
                    <span
                        class="colorlib-counter js-counter"
                        data-from="0"
                        data-to="{{$stat->count}}"
                        data-speed="5000"
                        data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label"> {{$stat->label}}</span>
            </div>
            @endforeach
            
        </div>
    </div>
</div>