<div style="width: 100%;" class="ml-slider-3-7-2 metaslider metaslider-nivo metaslider-12 ml-slider">
    <?php
    $banners = \App\Model\Admin\Banner::query()->with('image')->latest()->get();
    ?>
    <div id="metaslider_container_12">
        <div class='slider-wrapper theme-default'>
            <div class='ribbon'></div>
            <div id='metaslider_12' class='nivoSlider'>
                @foreach($banners as $banner)
                    <img src="{{$banner->image->path ?? ''}}"
                         height="500" width="1600" title="" alt=""
                         class="slider-12 slide-4243"/>
                @endforeach

            </div>

        </div>

    </div>
</div>
