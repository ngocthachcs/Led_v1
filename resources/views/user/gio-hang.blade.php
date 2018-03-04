@extends('master-user')
@section('content')
<?php
    $giohang = Cookie::get('giohang');
?>
   <div id="breadcrumbs">
      <span >
         <span typeof="v:Breadcrumb">
            <a href="">Home</a> » <span class="breadcrumb_last">Giỏ hàng</span></span>
       </span>
   </div>
   <article id="post-6" class="post-6 page type-page status-publish hentry">
       <header class="entry-header">
           <h1 class="entry-title">Giỏ hàng</h1>
       </header>
       <!-- .entry-header -->
       <div class="entry-content">
           <div class="woocommerce">
               <form class="woocommerce-cart-form" action="{{URL('/')}}/gio-hang/cap-nhat" method="post">  <button type="submit">Cập nhật</button>
                   <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table-bordered" cellspacing="0">
                       <thead>
                           <tr>
                               <th class="product-remove">#</th>
                               <th class="product-thumbnail">#</th>
                               <th class="product-name">Sản phẩm</th>
                               <th class="product-price">Giá</th>
                               <th class="product-quantity">Số lượng</th>
                               <th class="product-subtotal">Tổng cộng</th>
                           </tr>
                       </thead>
                       <tbody>
                            <?php $total = 0;?>
                            @forelse($giohang as $sp)
                            <?php $total += $sp->price * $sp->quality;?>
                            <tr class="woocommerce-cart-form__cart-item cart_item">
                               <td class="product-remove">
                                   <a href="{{URL('/')}}/gio-hang/xoa-san-pham/{{$sp->id}}" class="remove" aria-label="Xóa sản phẩm này" data-product_id="5071" data-product_sku="ATSM6W-1">&times;</a>
                               </td>
                               <td class="product-thumbnail">
                                   <a href=""><img width="140" height="115" src="{{URL('/')}}/{{$sp->img}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"/></a>
                               </td>
                               <td class="product-name" data-title="Sản phẩm">
                                   <a href="">{{$sp->title}}</a>
                               </td>
                               <td class="product-price" data-title="Giá">
                                   <span class="woocommerce-Price-amount amount">{{$sp->price}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                               </td>
                               <td class="product-quantity" data-title="Số lượng">
                                   <div class="quantity">
                                       <input type="number" class="input-text qty text" name="sl[]" step="1" min="0" max="" name="sl[]" value="{{$sp->quality}}" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" />
                                   </div>
                               </td>
                               <td class="product-subtotal" data-title="Tổng cộng">
                                   <span class="woocommerce-Price-amount amount">{{ $sp->price * $sp->quality}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                               </td>
                            </tr>
                            @empty
                            <tr>
                              <td colspan="6"> Chưa có sản phẩm nào</td>
                            </tr>
                            @endforelse
                       </tbody>
                   </table>
               </form>
               <div class="cart-collaterals">
                   <div class="cart_totals ">
                       <h2>Cart totals</h2>
                       <table cellspacing="0" class="shop_table shop_table_responsive">
                           <tr class="cart-subtotal">
                               <th>Tổng phụ</th>
                               <td data-title="Tổng phụ"><span class="woocommerce-Price-amount amount">{{ $total}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                               </td>
                           </tr>
                           <tr class="shipping">
                               <th>Shipping</th>
                               <td data-title="Shipping">
                                   Ship tính theo đơn hàng
                                   <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="legacy_free_shipping" class="shipping_method" />
                               </td>
                           </tr>
                           <tr class="order-total">
                               <th>Tổng cộng</th>
                               <td data-title="Tổng cộng"><strong><span class="woocommerce-Price-amount amount">{{ $total}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong> </td>
                           </tr>
                       </table>
                       <div class="wc-proceed-to-checkout">
                            
                            <a @if(count($giohang) > 0) href="{{URL('/')}}/thanh-toan" @endif class="checkout-button button alt wc-forward">THANH TOÁN</a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </article>
@endsection