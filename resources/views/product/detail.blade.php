@extends('layout.app')
@section('content')
<style>
    .product-tab-content
    {
        overflow: hidden;
    }

    .product-tab-content h2 { font-size: 24px !important;}
    .product-tab-content h3 { font-size: 20px !important;}
    .product-tab-content h4 { font-size: 18px !important;}

    .product-tab-content img {
        margin: 0 auto;
        text-align: center;
        max-width: 100%;
        display: block;
    }
    .list-star i:hover{
        cursor: pointer;
    }
    .list_text{
        display: inline-block;
        margin-left: 10px;
        position: relative;
        background: #52b858;
        color: #fff;
        padding: 2px 8px;
        box-sizing: border-box;
        font-size: 12px;
        border-radius: 2px;
        display: none;
    }
    .list_text::after
    {
        right: 100%;
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(82,184,88,0);
        border-right-color: #52b858;
        border-width: 6px;
        margin-top: -6px;
    }
    .list-star .rating_active, .pro-rating .active{
        color: #ff9075 ;
    }
</style>
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="{{route('home.index')}}">Trang chủ</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="home">
                                <a href="{{route('cate.listProduct',[$productDetail->category->c_slug,$productDetail->cate_id]) }}">{{$productDetail->category->c_name}}</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>{{$productDetail->pro_name}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- product-details Area Start -->
    <div class="product-details-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="zoomWrapper">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img style="height: 450px;width: 450px" id="zoom1" src="{{asset(pare_url_file($productDetail->pro_image,'product'))}}" data-zoom-image="{{asset(pare_url_file($productDetail->pro_image,'product'))}}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="bxslider" id="gallery_01">
                                @if(isset($productImgs))
                                    @foreach($productImgs as $productImg)
                                    <li >
                                        <a href="#" class="elevatezoom-gallery" data-image="{{pare_url_file($productImg->image_path,'product_multi')}}" data-zoom-image="{{pare_url_file($productImg->image_path,'product_multi')}}"><img src="{{asset(pare_url_file($productImg->image_path,'product_multi'))}}" alt="zo-th-2"></a>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="product-list-wrapper">
                        <div class="single-product">
                            <div class="product-content">
                                <h1 class="product-name"><a href="#">{{$productDetail->pro_name}}</a></h1>
                                <div class="rating-price">
                                    <?php
                                    $rateDetail=0;
                                    if($productDetail->pro_total_rating)
                                    {
                                        $rateDetail=round($productDetail->pro_total_rate_number/$productDetail->pro_total_rating,2);
                                    }

                                    ?>
                                    <div class="pro-rating">
                                        @for($i=1;$i<=5;$i++)
                                        <a href="#"><i class="fa fa-star {{$i<=$rateDetail?'active':''}}"></i></a>
                                        @endfor
                                        <p>({{$productDetail->pro_total_rating == 0 ? "Chưa có" : $productDetail->pro_total_rating}} đánh giá)</p>
                                    </div>
                                    <div class="price-boxes">
                                        @if ($productDetail->pro_sale)
                                            <span class="new-price" style="text-decoration: line-through;color: #666;font-weight: 500;">{{ number_format($productDetail->pro_price,0,',','.') }}đ</span>
                                            <span class="new-price">{{ number_format(round((100 - $productDetail->pro_sale) * $productDetail->pro_price / 100,0),0,',','.') }}đ</span>
                                        @else
                                            <span class="new-price">{{ number_format($productDetail->pro_price,0,',','.') }} đ</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>{{$productDetail->pro_desc}}</p>
                                </div>
                                <p class="availability in-stock">Tình trạng:

                                    <span> {{$productDetail->pro_number>0 ? 'Còn hàng' : 'Tạm hết hàng'}}</span>
                                </p>
                                <div class="actions-e">
                                    <div class="action-buttons-single">
                                        <form action="{{route('cart.addProduct',$productDetail->id)}}" method="GET">
                                            @csrf
                                        <div class="inputx-content">
                                            <label for="qty">Quantity:</label>
                                            <input type="number" name="qty" id="qty" min="1"  maxlength="12" value="1" title="Qty" class="input-text qty">
                                        </div>
                                        <div class="add-to-cart">
                                            <button type="submit">Add to cart</button>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-product-tab">
                    <!-- Nav tabs -->
                    <ul class="details-tab">
                        <li class="active"><a href="#home" data-toggle="tab">Description</a></li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="product-tab-content">
                                <p>{!!$productDetail->pro_content!!}</p>
                            </div>
                        </div>
                        <div class="component_rating" style="margin-bottom: 20px">
                            <h3>Đánh giá sản phẩm</h3>
                            <div class="component_rating_content" style="display: flex;align-items: center;border-radius: 5px;border:1px solid #dedede">
                                <div class="rating_item" style="width: 20%;position: relative">
                                    <span class="fa fa-star" style="font-size: 100px;display: block;color: #ff9705;margin: 0 auto;text-align: center;"></span><b style="position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);color: white;font-size: 20px;">{{$rateDetail}}</b>
                                </div>
                                <div class="list_rating" style="width: 60%;padding: 20px;">
                                    @foreach($arrayRatings as $key => $arrayRating)
                                        <?php
                                            $itemPercent=round(($arrayRating['total']/$productDetail->pro_total_rating)*100,0);
                                        ?>
                                        <div class="item_rating" style="display:flex; align-items: center;">
                                                <div style="width: 10%;font-size: 14px">
                                                    {{$key}}<span class="fa fa-star"></span>
                                                </div>
                                                <div style="width: 70%;margin:0 20px">
                                                    <span style="width: 100%;height: 8px;display: block;border: 1px solid #dedede;border-radius: 5px;background-color: #dedede">
                                                        <b style="width: {{$itemPercent}}%;background-color:#f25800;display: block;border-radius: 5px;height: 100%;">
                                                        </b>
                                                    </span>
                                                </div>
                                                <div style="width: 20%">
                                                    <a href="" style="">{{$arrayRating['total']}} đánh giá ({{$itemPercent}}%) </a>
                                                </div>
                                        </div>
                                        @endforeach
                                </div>

                                <div style="width: 20%">
                                    @if (get_data_user('web'))
                                        <a href="#" class="js_rating_action" style="width: 200px;background: #288ad6;padding: 10px;color: white;border-radius: 5px;">Gủi đánh giá của bạn</a>
                                    @else
                                        <a href="{{ route('get.login') }}"  style="width: 200px;background: #288ad6;padding: 10px;color: white;border-radius: 5px;">Đăng nhập để đánh giá SP</a>
                                    @endif
                                </div>

                        </div>
                            <?php
                                $listRatingText=[
                                    1=>'Không thích',
                                    2=>'Tạm được',
                                    3=>'Bình thường',
                                    4=>'Rất tốt',
                                    5=>'Tuyệt vời quá',
                                ]
                            ?>
                            <div class="form_rating hide">
                                <div style="display: flex; margin-top: 15px; font-size: 15px">
                                    <p style="margin-bottom: 0">Chọn đánh giá của bạn</p>
                                    <span style="margin: 0 15px" class="list-star">
                                    @for($i=1;$i<=5;$i++)
                                            <i class="fa fa-star" data-key="{{$i}}">
                                            </i>
                                        @endfor

                                    </span>
                                    <span class="list_text">
                                    </span>
                                    <input type="hidden" value="" class="number_rating">
                                </div>
                                <div style="margin-top: 15px">
                                    <textarea name="" class="form-control" id="ra_content" cols="30" rows="3"></textarea>
                                </div>
                                <div style="margin-top: 10px">
                                    <a class="js_rating_product" href="{{route('rating.product',$productDetail->id)}}" style="width: 20px;background: #288ad6;padding:5px 10px;color: white;border-radius: 5px ">Gửi đánh giá</a>
                                </div>
                            </div>

                        </div>
                        <div class="component_list_rating">
                            @if ( isset($ratings))
                                @foreach($ratings as $rating)
                                    <div class="rating_item" style="margin: 10px 0">
                                        <div>
                                            <span style="color: #333;font-weight: bold;text-transform: capitalize;">{{ isset($rating->user->name) ? $rating->user->name : '[N\A]' }}</span>

                                            <a href="" style="color: #2ba832"> <i class="fa fa-check-circle-o"></i>{{($rating->user->total_pay)>0?'Đã mua hàng tại website' : ''}} </a>
                                        </div>
                                        <p style="margin-bottom: 0">
                                                <span class="pro-rating">


                                                    @for($i =1 ; $i<=5 ;$i ++)
                                                        <i class="fa fa-star {{ $i<= $rating->ra_number ? 'active' : '' }}"></i>
                                                    @endfor
                                                </span>
                                            <span>{{ $rating->ra_content }}</span>
                                        </p>
                                        <div>
                                            <span><i class="fa fa-clock-o"></i> {{ time_elapsed_string($rating->created_at) }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="row">
                            {!! $ratings->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function(){
            let listStar=$(".list-star .fa");
            listRatingText  = {
                1 : 'Không thích',
                2 : 'Tạm được',
                3 : 'Bình thường',
                4 : 'Rất tốt',
                5 : 'Tuyệt vời quá',
            }
            listStar.mouseover(function (){
                let $this=$(this);
                let number = $this.attr('data-key');
                listStar.removeClass('rating_active')
                $(".number_rating").val(number);
                $.each(listStar,function (key,value){
                    if(key+1<=number){
                        $(this).addClass('rating_active')
                    }
                    else {

                    }
                })
                $(".list_text").text('').text(listRatingText[number]).show();
            })
            $(".js_rating_action").click(function (event){
                event.preventDefault()

                if($(".form_rating").hasClass('hide')){
                    $(".form_rating").addClass('active').removeClass('hide')
                }else {
                    $(".form_rating").addClass('hide').removeClass('active')
                }
            })
            $(".js_rating_product").click(function (event){
                event.preventDefault()
                let content=$("#ra_content").val();
                let number=$(".number_rating").val()
                let url=$(this).attr('href')+'?_token=' + '{{ csrf_token() }}'
                if(content && number)
                {
                    $.ajax({
                        url:url,
                        type:'POST',
                        data:{
                            number: number,
                            r_content: content
                        }
                    }).done(function (result){

                        if (result.code == 1)
                        {
                            location.reload();
                            Swal.fire(
                                'Thành công!',
                                'Cảm ơn về đánh giá của bạn!',
                                'success'
                            )

                        }
                    })
                }
            })
        })
    </script>
@endsection
