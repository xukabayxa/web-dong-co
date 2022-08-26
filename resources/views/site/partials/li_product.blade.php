<li class="post-425 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-thiet-bi-bang-tai product_cat-bang-tai-cao-su product_tag-bang-tai-bo-vai-ep instock featured shipping-taxable product-type-simple">
    <div class="product_item">
        <div class='rt-thumb'>
            <a class='rt-tooltip'
               data-tooltip=''
               href=''>
                <img width="300" height="225" src="{{$product->image->path ?? '/asset_front/img/shop/img4.jpg'}}"
                     class="attachment-shop_catalog size-shop_catalog wp-post-image">

            </a>
        </div>
        <div class="content-products">
            <h2 class="rt_woocommerce-loop-product__title"><a
                    href="{{route('front.product-detail', $product->slug)}}">{{$product->name}}</a></h2>
        </div>
    </div>
</li>
