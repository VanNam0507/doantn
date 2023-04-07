<div class="tab-pane fade" id="shop-grid-tab">
    @if(isset($products))
        <?php $count=count($products); ?>
        @foreach($products as $key=> $product)
            @if($key%3==0)
                <div class="row">
                    <div class="shop-product-tab first-sale">
                        @endif
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="two-product">
                                <!-- single-product start -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="{{route('product.detail',[$product->pro_slug,$product->id])}}">
                                            <img class="primary-image" src="{{pare_url_file($product->pro_image,'product')}}" alt="" />
                                            <img class="secondary-image" src="{{pare_url_file($product->pro_image,'product')}}" alt="" />
                                        </a>

                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="add-to-wishlist">
                                                        <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a href="{{route('cart.addProduct',$product->id)}}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">{{number_format($product->pro_price,0,',','.')}}VNĐ</span>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name"><a href="{{route('product.detail',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></h2>
                                        <p>{{$product->pro_desc}}</p>
                                    </div>
                                </div>
                                <!-- single-product end -->
                            </div>
                        </div>



                        @if($key%3==2 ||$key==$count-1)
                    </div>
                </div>
        @endif
    @endforeach
@endif
<!-- product-row end -->


</div>
