<div class="tab-pane fade in active" id="shop-list-tab">
    <div class="list-view">
        @if(isset($products))
            @foreach($products as $product)
                <div class="product-list-wrapper">
                    <div class="single-product">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="product-img">
                                <a href="{{route('product.detail',[$product->pro_slug,$product->id])}}">
                                    <img class="primary-image" src="{{pare_url_file($product->pro_image,'product')}}"
                                         alt=""/>
                                    <img class="secondary-image"
                                         src="{{pare_url_file($product->pro_image,'product')}}" alt=""/>
                                </a>
                            </div>
                        </div>
                        <?php
                        $rateDetail = 0;
                        if ($product->pro_total_rating) {
                            $rateDetail = round($product->pro_total_rate_number / $product->pro_total_rating, 2);
                        }
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-content">
                                <h2 class="product-name"><a href="{{route('product.detail',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        @for($i=1;$i<=5;$i++)
                                            <a href="#"><i class="fa fa-star {{$i<=$rateDetail?'active':''}}"></i></a>
                                        @endfor
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">{{number_format($product->pro_price,0,',','.')}}</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>{{$product->pro_desc}}</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons">
                                        <div class="add-to-cart">
                                            <a href="{{route('cart.addProduct',$product->id)}}">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title=""
                                                   data-original-title="Add to Wishlist"><i
                                                        class="fa fa-heart"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif



    </div>
</div>
