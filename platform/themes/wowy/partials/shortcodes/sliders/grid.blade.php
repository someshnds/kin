<div class="hero-slider-1 dot-style-1 dot-style-1-position-1 {{ $class ?? ''}}">
    @foreach($sliders as $slider)
        <div class="single-hero-slider single-animation-wrap">
            <div class="container1">
                <div class="row align-items-center slider-animated-1">
                    <!--<div class="col-lg-5 col-md-6">
                        {!! Theme::partial('shortcodes.sliders.content', compact('slider')) !!}
                    </div>-->
                    <div class="col-lg-12 col-md-12">
                        <div class="single-slider-img single-slider-img-1">
                            <img class="animated sl-bg" src="{{ RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage()) }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="slider-arrow hero-slider-1-arrow"></div>
