 <section id="gaming">
        <div class="grid-list-products">
            <h2 class="section-title">{{ count($category) ? $category[0]['name'] : trans('sites.not_found') }}</h2>
            
            <div class="tab-content">
                <div id="grid-view" class="products-grid fade tab-pane in active">
                    
                    <div class="product-grid-holder">
                        <div class="row no-margin">
                    @foreach ($category as $cate)
                    @if (count($cate->products))
                        @foreach ($cate->products as $product)
                            @include('sites._components.product_item')
                        @endforeach
                    @endif
                        @endforeach
                        </div><!-- /.row -->
                    </div><!-- /.product-grid-holder -->
                    
                    <div class="pagination-holder">
                        <div class="row">
                            
                            <div class="col-xs-12 col-sm-6 text-left">
                                <ul class="pagination ">
                                    <li class="current"><a  href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">next</a></li>
                                </ul>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                            </div>

                        </div><!-- /.row -->
                    </div><!-- /.pagination-holder -->
                </div><!-- /.products-grid #grid-view -->
            </div><!-- /.tab-content -->
        </div><!-- /.grid-list-products -->

    </section><!--