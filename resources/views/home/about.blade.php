@extends('layout.app')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                            <a href="{{route('home.index')}}">Home</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="category3"><span>Giới thiệu</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<!-- hello about start -->
<div class="home-hello-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="f-title text-center">
                    <h3 class="title text-uppercase">Về chúng tôi</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="about-page-cntent">
                    <h3>Công ty cổ phần Đầu tư Nam Mai</h3>
                    <p>Công ty Cổ phần Đầu tư NAM MAI là nhà bán lẻ số 1 Việt Nam về các mặt hàng thiết bị điện tử, chuyên cung cấp các sản phẩm mới nhất, chính hãng với mạng lưới hơn 100 cửa hàng trên toàn quốc.</p>
                    <blockquote>
                        <p>Nam Mai - Uy tín tạo nên thương hiệu</p>
                    </blockquote>
                    <p>Ngoài ra, Nam Mai có dự định mở rộng thị nước ngoài với chuỗi bán lẻ thiết bị điện tử của mình để có thể khẳng định thương hiệu Việt Nam ra toàn thế giới</p>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="img-element">
                    <img style="width: 650px; height: 538 px" src="{{asset('images/home_img.jpg')}}" alt="banner1">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hello about end -->
<!-- service about start -->
<!-- service about end -->
<!-- meet about start -->
<div class="home-our-team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="f-title text-center">
                    <h3 class="title text-uppercase">Thành viên</h3>
                </div>
            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="item-team text-center">
                    <div class="team-info">
                        <div class="team-img">
                            <img src="{{asset('images/hn.jpg')}}" style="width: 250px;height: 250px" alt="CEO" >
                            <div class="mask">
                                <div class="mask-inner">
                                    <a href="https://www.facebook.com/Deft.NVN/"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>Nguyễn Văn Nam</h4>
                    <h5>Lập trình viên</h5>
                </div><!-- End .item-team -->
            </div><!-- End .col-sm-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</div>
<!-- meet about end -->
<!-- FOOTER START -->
@endsection

