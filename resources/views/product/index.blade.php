@extends('layout.app')
@section('content')
    <style>
        .sidebar-content .active{
            color: #c2a476;
        }
         .pro-rating .active {
             color: #ff9075;
         }
    </style>
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
                            @if (isset($cateProduct->c_name))
                            <li class="category3"><span>{{$cateProduct->c_name}}</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- shop-with-sidebar Start -->
    <div class="shop-with-sidebar">
        <div class="container">
            <div class="row">
                <!-- left sidebar start -->
                <div class="col-md-3 col-sm-12 col-xs-12 text-left">
                    <div class="topbar-left">
                        <aside class="widge-topbar">
                            <div class="bar-title">
                                <div class="bar-ping"><img src="{{asset('home/img/bar-ping.png')}}" alt=""></div>
                                <h2>Shop by</h2>
                            </div>
                        </aside>
                        <aside class="topbarr-category sidebar-content">
                            <div class="sidebar-title">
                                <h6>Khoảng giá</h6>
                            </div>
                            <ul>
                                <li><a class="{{Request::get('price')==1?'active':''}}" href="{{ request()->fullUrlWithQuery(['price' => 1]) }} ">Dưới 2 triệu</a><span> </span></li>
                                <li><a class="{{Request::get('price')==2?'active':''}}" href="{{ request()->fullUrlWithQuery(['price' => 2]) }} ">Từ 2-4 triệu</a><span> </span></li>
                                <li><a class="{{Request::get('price')==3?'active':''}}" href="{{ request()->fullUrlWithQuery(['price' => 3]) }} ">Từ 4-7 triệu</a><span> </span></li>
                                <li><a class="{{Request::get('price')==4?'active':''}}" href="{{ request()->fullUrlWithQuery(['price' => 4]) }} ">Từ 7-13 triệu</a><span> </span></li>
                                <li><a class="{{Request::get('price')==5?'active':''}}" href="{{ request()->fullUrlWithQuery(['price' => 5]) }} ">Từ 13-20 triệu</a><span> </span></li>
                                <li><a class="{{Request::get('price')==6?'active':''}}" href="{{ request()->fullUrlWithQuery(['price' => 6]) }} ">Trên 20 triệu</a><span> </span></li>
                            </ul>
                        </aside>



                    </div>
                </div>
                <!-- left sidebar end -->
                <!-- right sidebar start -->
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <!-- shop toolbar start -->
                    <div class="shop-content-area">
                        <div class="shop-toolbar">
                            <div class="col-xs-12 nopadding-left text-left">
                                <form class="tree-most" action="" id="form_sort" method="get">
                                    <div class="orderby-wrapper pull-right">
                                        <label>Sắp xếp</label>
                                        <select name="orderby"  class="orderby">
                                            <option {{Request::get('orderby')=='md' || !Request::get('orderby') ?'selected':''}} value="md" selected="selected">Mặc định</option>
                                            <option {{Request::get('orderby')=='desc'?'selected':''}}  value="desc">Mới nhất</option>
                                            <option {{Request::get('orderby')=='sell'?'selected':''}}  value="sell">Bán chạy</option>
                                            <option {{Request::get('orderby')=='price'?'selected':''}}  value="price">Giá tăng dần</option>
                                            <option {{Request::get('orderby')=='price-desc'?'selected':''}} value="price-desc">Giá giảm dần</option>
                                        </select>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                    <!-- shop toolbar end -->
                    <!-- product-row start -->

                    <div class="tab-content">

                    @include('product.shop-grid')
                    <!-- shop toolbar start -->
                    @include('product.shop-list')

                        <!-- shop toolbar start -->
                        <div class="shop-content-bottom">
                            <div class="shop-toolbar btn-tlbr">

                                <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                                    <div class="pages">
                                        {!!$products->appends($query)->links()!!}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- shop toolbar end -->
                    </div>
                </div>
                <!-- right sidebar end -->
            </div>
        </div>
    </div>
    <!-- shop-with-sidebar end -->
@endsection
@section('script')
<script>
    $(function(){
        $(".orderby").change(function(){
            $("#form_sort").submit();
        })
    })
</script>
@endsection
