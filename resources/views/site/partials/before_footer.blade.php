<div class="before-footer clear">
    <div class="container">
        <div class="row">
            <div id="before-footer-1" class="rt-before-footer before-footer-1 widget_wrap">
                <div id="imgpartner-2" class="widget img-partner"><h3 class="widget-title">
                        <span>Đối tác liên kết</span></h3>

                    <div class="image-partner customer-logos slider">
                        @foreach($partners as $partner)
                        <div class="slide">
                            <div class="image-item">
                                <a href="{{$partner->link}}" target="_blank" title="{{$partner->name}}">
                                    <img src="{{$partner->image->path ?? ''}}" alt="{{$partner->name}}"/>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .bottom-footer -->
