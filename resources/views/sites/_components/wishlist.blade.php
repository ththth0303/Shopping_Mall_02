<div class="col-lg-10 center-block page-wishlist style-cart-page inner-bottom-xs" id="page-wishlist">

    <div class="inner-xs">
        <div class="page-header">
            <h2 class="page-title">{{ trans('sites.my_wishlist') }}</h2>
        </div>
    </div><!-- /.section-page-title -->
    @if (count($wishlist))
    <div class="items-holder">
        <div class="container-fluid wishlist_table">
        @foreach ($wishlist as $wish)
            <div class="row cart-item cart_item" id="yith-wcwl-row-1">

                <div class="col-xs-12 col-sm-1 no-margin">
                    <a title="{{ trans('sites.remove_product') }}" product="{{ $wish->products['id'] }}" class="remove_from_wishlist remove-item" href="javascript:void(0)">×</a>
                </div>

                <div class="col-xs-12 col-sm-1 no-margin">
                    <a href="{{ asset('show/product') . '/' . $wish->products['id'] }}">
                    @if (isset($wish->products->productImages[0]))
                        <img alt="" class="attachment-shop_thumbnail wp-post-image" src="{{ asset(config('setup.product_image_path') . '/' . $wish->products->productImages[0]['path_origin']) }}" height="73" width="73">
                    @endif
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 no-margin">
                    <div class="title">
                        <a href="{{ asset('show/product') . '/' . $wish->products['id'] }}">{{ $wish->products['name'] }}</a>
                    </div><!-- /.title -->
                    @if ($wish->products['status'] != 0)
                        <div>
                            <span class="label label-success wishlist-in-stock">{{ trans('sites.in_stock') }}</span>
                        </div>
                    @endif
                </div>
                <div class="col-xs-12 col-sm-3 no-margin">
                    <div class="price">
                    @if ($wish->products['sale_precent'] != 0)
                        <span class="">{{ number_format($wish->products['price']*$wish->products['sale_precent']/100) . 'đ' }}</span>
                    @else
                        <span class="">{{ number_format($wish->products['price']) . 'đ' }}</span>
                    @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3 no-margin">
                    <div class="text-right">
                        @if (session()->has('cart'))
                            @if (in_array($wish->products['id'], array_keys(session()->get('cart'))))
                                <div class="" product="{{ $wish->products['id'] }}">
                                    <a class="btn btn-warning" href="javascript:void(0)">{{ trans('sites.in_your_cart') }}</a>
                                </div>
                            @else
                                <div class="add-cart-button" product="{{ $wish->products['id'] }}">
                                    <a class="le-button add_to_cart_button product_type_simple" href="javascript:void(0)">{{ trans('sites.add_cart') }}</a>
                                </div>
                            @endif
                        @else
                            <div class="add-cart-button" product="{{ $wish->products['id'] }}">
                                <a class="le-button add_to_cart_button product_type_simple" href="javascript:void(0)">{{ trans('sites.add_cart') }}</a>
                            </div>
                        @endif
                        
                    </div>
                </div>

            </div><!-- /.cart-item -->
        @endforeach
        </div><!-- /.wishlist-table -->
    </div><!-- /.items-holder -->
    @else
        <h1>{{ trans('sites.wishlist_is_empty') }}</h1>
    @endif
</div>
