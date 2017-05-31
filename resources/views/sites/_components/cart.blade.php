<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
    @if (isset($products))
        <div class="col-xs-12 col-md-9 items-holder no-margin">
        @foreach ($products as $product)
            <div class="row no-margin cart-item">
            
                <div class="col-xs-12 col-sm-2 no-margin">
                @foreach ($product->productImages as $image)
                    @if ($image['is_main'] == 1)
                        <a href="" class="lazy"><img src="{{ asset(config('setup.product_image_path') . '/' . $image['path_origin']) }}" alt=""></a> 
                        @break;
                    @endif
                @endforeach        
                </div>

                <div class="col-xs-12 col-sm-5 ">
                    <div class="title">
                        <a href="#">{{ $product['name'] }}</a>
                    </div>
                    <div class="brand">sony</div>
                </div> 
                <div class="col-xs-12 col-sm-3 no-margin">
                    <div class="quantity">
                        <div class="le-quantity">
                            <form>
                                <a class="minus" href="#reduce"></a>
                                <input name="quantity" readonly="readonly" product="{{ $product['id']}}" type="number" value="{{ session()->get('cart')[$product['id']] }}"/>
                                <a class="plus" href="#add"></a>
                            </form>
                        </div>
                    </div>
                </div> 
                <div class="col-xs-12 col-sm-2 no-margin">
                    <div class="price">
                    @if ($cart['sale_percent'])
                        {{ number_format($cart['sale_percent']*$cart['price']/100) . 'đ' }}
                    @else
                        {{ number_format($cart['price']) . 'đ' }}
                    @endif
                    </div>
                    <a class="close-btn" product="{{ $product['id'] }}" mainCart="1" href="javascript:void(0)"></a>
                </div>
            </div><!-- /.cart-item -->
            @endforeach
        </div>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div class="widget cart-summary">
                <h1 class="border">shopping cart</h1>
                <div class="body">
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>cart subtotal</label>
                            <div class="value pull-right">{{ $total . 'd' }}</div>
                        </li>
                        <li>
                            <label>shipping</label>
                            <div class="value pull-right">free shipping</div>
                        </li>
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label>order total</label>
                            <div class="value pull-right">{{ $total . 'd' }}</div>
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <a class="le-button big" href="{{ asset('checkout') }}" >checkout</a>
                        <a class="simple-link block" href="http://localhost/~ibrahim/themeforest/HTML/mediacenter/upload/PHP/home" >continue shopping</a>
                    </div>
                </div>
            </div><!-- /.widget -->

            <div id="cupon-widget" class="widget">
                <h1 class="border">use coupon</h1>
                <div class="body">
                    <form>
                        <div class="inline-input">
                            <input data-placeholder="enter coupon code" type="text" />
                            <button class="le-button" type="submit">Apply</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.widget -->
        </div><!-- /.sidebar -->

        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
    @else
        <h1>{{ trans('sites.cart_empty') }}</h1>
    @endif
</section>  