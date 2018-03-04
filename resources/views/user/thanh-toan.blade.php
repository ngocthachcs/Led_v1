@extends('master-user')
@section('content')
<?php
    $giohang = Cookie::get('giohang');
    // echo "<pre>";
    // print_r($giohang);
    // echo "</pre>";
?>
    <div id="breadcrumbs">
      <span xmlns:v="http://rdf.data-vocabulary.org/#">
        <span typeof="v:Breadcrumb">
          <a href="">Home</a> » <span class="breadcrumb_last">Thanh toán</span>
        </span>
      </span>
    </div>
    <article id="post-7" class="post-7 page type-page status-publish hentry">
        <header class="entry-header">
            <h1 class="entry-title">Thông tin thanh toán</h1>
        </header>
        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="{{URL('/')}}/thanh-toan" enctype="multipart/form-data">
            <div class="col2-set" id="customer_details">
                <div class="col-1">
                    <div class="woocommerce-billing-fields">
                        <h3>Chi tiết đơn hàng</h3>
                        <div class="woocommerce-billing-fields__field-wrapper">
                            <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10">
                                <label for="billing_first_name" class="">Họ
                                    <abbr class="required" title="bắt buộc">*</abbr>
                                </label>
                                <input type="text" class="input-text form-control" name="user[ho]" id="billing_first_name" placeholder="" value="" autocomplete="given-name" autofocus="autofocus" />
                            </p>
                            <p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                <label for="billing_last_name" class="">Tên
                                    <abbr class="required" title="bắt buộc">*</abbr>
                                </label>
                                <input type="text" class="input-text form-control" name="user[ten]" id="billing_last_name" placeholder="" value="" autocomplete="family-name" />
                            </p>
                            <p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
                                <label for="billing_company" class="">Tên công ty</label>
                                <input type="text" class="input-text form-control" name="user[company]" id="billing_company" placeholder="" value="" autocomplete="organization" />
                            </p>
                            <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                <label for="billing_address_1" class="">Địa chỉ cụ thể
                                    <abbr class="required" title="bắt buộc">*</abbr>
                                </label>
                                <input type="text" class="input-text form-control" name="user[address]" id="billing_address_1" placeholder="Số nhà, Phường/Xã, Quận/Huyện, Tỉnh/Thành phố" value="" autocomplete="address-line1" />
                            </p>
                            <p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                <label for="billing_phone" class="">Số điện thoại
                                    <abbr class="required" title="bắt buộc">*</abbr>
                                </label>
                                <input type="tel" class="input-text form-control" name="user[phone]" id="billing_phone" placeholder="" value="" autocomplete="tel" />
                            </p>
                            <p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-priority="110">
                                <label for="billing_email" class="">Địa chỉ email
                                    <abbr class="required" title="bắt buộc">*</abbr>
                                </label>
                                <input type="email" class="input-text form-control" name="user[email]" id="billing_email" placeholder="" value="" autocomplete="email username" />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <h3 id="order_review_heading">Đơn hàng của bạn</h3>
            <div id="order_review" class="woocommerce-checkout-review-order">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="product-name">Sản phẩm</th>
                            <th class="product-total">Tổng cộng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0;?>
                        @forelse($giohang as $sp)
                        <?php $total += $sp->price * $sp->quality;?>
                        <tr class="cart_item">
                            <td class="product-name">
                               {{$sp->title}} &nbsp; <strong class="product-quantity">&times; {{$sp->quality}}</strong>
                            </td>
                            <td class="product-total">
                                <span class="woocommerce-Price-amount amount">{{$sp->price * $sp->quality}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="cart-subtotal">
                            <th>Tổng phụ</th>
                            <td><span class="woocommerce-Price-amount amount">{{$total}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span>
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
                            <td><strong><span class="woocommerce-Price-amount amount">{{$total}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></strong> </td>
                        </tr>
                    </tfoot>
                </table>
                <div id="payment" class="woocommerce-checkout-payment">
                    <ul class="wc_payment_methods payment_methods methods">
                        <li class="wc_payment_method payment_method_cod">
                            <div class="payment_box payment_method_cod">
                                <p>Trả tiền mặt khi giao hàng</p>
                            </div>
                        </li>
                    </ul>
                    <div class="form-row place-order">
                        <button type="submit" class="btn btn-primary">Đặt hàng</button>
                   </div>
                </div>
             </div>
          </form>
    </article>
@endsection