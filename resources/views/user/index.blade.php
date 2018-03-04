@extends('master-user')
@section('content')
    <div id="metaslider_widget-5" class="widget-odd widget-first widget-1 section widget_metaslider_widget">
        <h3 class="section-title clearfix">CÔNG TY TNHH PT &#8211; TM &#8211; ATHACO Hottile: 0984 563 564 &#8211; 028 6278 4888</h3>
        <!-- meta slider -->
        <div style="width: 100%;" class="metaslider metaslider-responsive metaslider-881 ml-slider">
            <div id="metaslider_container_881">
                <ul id='metaslider_881' class='rslides'>
                    <li>
                        <a href="#" target="_blank">
                   <img src="http://ledgiatot.vn/wp-content/uploads/2018/02/atlight.png" height="286" width="900" class="slider-881 slide-5029" title="ẢNH SLIDER" />
                   <div class="caption-wrap">
                      <div class="caption">Tell: 0984 563 564 - 028 6278 4888</div>
                   </div>
                </a>
                    </li>
                    <li style='display: none;'><img src="http://ledgiatot.vn/wp-content/uploads/2018/02/atlight.png" height="286" width="900" alt="" class="slider-881 slide-5055" /></li>
                </ul>
            </div>
            <script type="text/javascript">
            var metaslider_881 = function($) {
                $('#metaslider_881').responsiveSlides({
                    timeout: 2500,
                    pager: false,
                    nav: true,
                    pause: true,
                    speed: 600,
                    prevText: "&lt;",
                    nextText: "&gt;",
                    auto: true
                });
            };
            var timer_metaslider_881 = function() {
                var slider = !window.jQuery ? window.setTimeout(timer_metaslider_881, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_881, 1) : metaslider_881(window.jQuery);
            };
            timer_metaslider_881();
            </script>
        </div>
        <!--// meta slider-->
    </div>
    <div id="ncn_product_by_category_widget-5" class="widget-even widget-2 section ncn_product_by_category_widget">
        <h3 class="section-title clearfix"><span class="pull-left">{{ $array_slug[0]['title']}}</span><span class="pull-right"><a href="{{URL('/')}}/danh-muc/{{ $array_slug[0]['slug']}}">Xem tất cả</a></span></h3>
        <div class="ncn_list_products woocommerce">
            <ul class="products">
                <?php $i= 0;?>
                @foreach($sp_1 as $sp)
                <?php $i++;?>
                <li class="post-5071 product type-product status-publish has-post-thumbnail instock sale shipping-taxable purchasable product-type-simple @if($i % 4 == 0) last @elseif ($i % 4 == 1) first @endif">
                    <div class="ncn_product_catalog">
                        <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                         <img width="202" height="166" src="{{URL('/')}}/{{$sp->img}}" class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                      </a>
                        <div class="ncn_cart_wrap clearfix">
                            <a class="button product_type_simple add_to_cart_button" onclick="MuaSanPham({{$sp->id}})">Mua ngay
                         </a>
                            <!-- <a href="#" class="button yith-wcqv-button" data-product_id="1977">Quick View</a> -->
                        </div>
                    </div>
                    <h3 class="ncn_products_title text-center">
                      <a href="">{{$sp->title}}</a>
                   </h3>
                    <span class="price text-center">
                      <span class="woocommerce-Price-amount amount">{{ number_format($sp->price, 0, ',', '.')}}&nbsp;
                         <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                    </span>
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="ncn_product_by_category_widget-5" class="widget-even widget-2 section ncn_product_by_category_widget">
        <h3 class="section-title clearfix"><span class="pull-left">{{ $array_slug[1]['title']}}</span><span class="pull-right"><a href="{{URL('/')}}/danh-muc/{{ $array_slug[1]['slug']}}">Xem tất cả</a></span></h3>
        <div class="ncn_list_products woocommerce">
            <ul class="products">
                <?php $i= 0;?>
                @foreach($sp_2 as $sp)
                <?php $i++;?>
                <li class="post-5071 product type-product status-publish has-post-thumbnail instock sale shipping-taxable purchasable product-type-simple @if($i % 4 == 0) last @elseif ($i % 4 == 1) first @endif">
                    <div class="ncn_product_catalog">
                        <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                         <img width="202" height="166" src="{{URL('/')}}/{{$sp->img}}" class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                      </a>
                        <div class="ncn_cart_wrap clearfix">
                            <a class="button product_type_simple add_to_cart_button" onclick="MuaSanPham({{$sp->id}})">Mua ngay
                         </a>
                            <!-- <a href="#" class="button yith-wcqv-button" data-product_id="1977">Quick View</a> -->
                        </div>
                    </div>
                    <h3 class="ncn_products_title text-center">
                      <a href="">{{$sp->title}}</a>
                   </h3>
                    <span class="price text-center">
                      <span class="woocommerce-Price-amount amount">{{ number_format($sp->price, 0, ',', '.')}}&nbsp;
                         <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                    </span>
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="ncn_product_by_category_widget-5" class="widget-even widget-2 section ncn_product_by_category_widget">
        <h3 class="section-title clearfix"><span class="pull-left">{{ $array_slug[2]['title']}}</span><span class="pull-right"><a href="{{URL('/')}}/danh-muc/{{ $array_slug[2]['slug']}}">Xem tất cả</a></span></h3>
        <div class="ncn_list_products woocommerce">
            <ul class="products">
                <?php $i= 0;?>
                @foreach($sp_3 as $sp)
                <?php $i++;?>
                <li class="post-5071 product type-product status-publish has-post-thumbnail instock sale shipping-taxable purchasable product-type-simple @if($i % 4 == 0) last @elseif ($i % 4 == 1) first @endif">
                    <div class="ncn_product_catalog">
                        <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                         <img width="202" height="166" src="{{URL('/')}}/{{$sp->img}}" class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                      </a>
                        <div class="ncn_cart_wrap clearfix">
                            <a class="button product_type_simple add_to_cart_button" onclick="MuaSanPham({{$sp->id}})">Mua ngay
                         </a>
                            <!-- <a href="#" class="button yith-wcqv-button" data-product_id="1977">Quick View</a> -->
                        </div>
                    </div>
                    <h3 class="ncn_products_title text-center">
                      <a href="">{{$sp->title}}</a>
                   </h3>
                    <span class="price text-center">
                      <span class="woocommerce-Price-amount amount">{{ number_format($sp->price, 0, ',', '.')}}&nbsp;
                         <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                    </span>
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div id="ncn_product_by_category_widget-5" class="widget-even widget-2 section ncn_product_by_category_widget">
        <h3 class="section-title clearfix"><span class="pull-left">{{ $array_slug[3]['title']}}</span><span class="pull-right"><a href="{{URL('/')}}/danh-muc/{{ $array_slug[3]['slug']}}">Xem tất cả</a></span></h3>
        <div class="ncn_list_products woocommerce">
            <ul class="products">
                <?php $i= 0;?>
                @foreach($sp_4 as $sp)
                <?php $i++;?>
                <li class="post-5071 product type-product status-publish has-post-thumbnail instock sale shipping-taxable purchasable product-type-simple @if($i % 4 == 0) last @elseif ($i % 4 == 1) first @endif">
                    <div class="ncn_product_catalog">
                        <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                         <img width="202" height="166" src="{{URL('/')}}/{{$sp->img}}" class="attachment-shop_catalog size-shop_catalog wp-post-image"/>
                      </a>
                        <div class="ncn_cart_wrap clearfix">
                            <a class="button product_type_simple add_to_cart_button" onclick="MuaSanPham({{$sp->id}})">Mua ngay
                         </a>
                            <!-- <a href="#" class="button yith-wcqv-button" data-product_id="1977">Quick View</a> -->
                        </div>
                    </div>
                    <h3 class="ncn_products_title text-center">
                      <a href="">{{$sp->title}}</a>
                   </h3>
                    <span class="price text-center">
                      <span class="woocommerce-Price-amount amount">{{ number_format($sp->price, 0, ',', '.')}}&nbsp;
                         <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                    </span>
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
@section('js')
<script type="text/javascript">
    var server = 'http://localhost/';
    function MuaSanPham(id){
        $.ajax({
            method: "post",
            url: server + 'gio-hang/them-moi',
            dataType: 'json',
            data: {id_sp: id},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function( response ) {
                console.log(response);
            }
        });
    }
</script>
@endsection