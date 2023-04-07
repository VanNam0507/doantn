<footer>
    <!-- top footer area start -->
    <div class="top-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="single-snap-footer">
                        <div class="snap-footer-title">
                            <h4>Công ty</h4>
                        </div>
                        <div class="cakewalk-footer-content">
                            <p class="footer-des">
                                Công ty Cổ phần Đầu tư NAM MAI là nhà bán lẻ số 1 Việt Nam về các mặt hàng thiết bị điện tử, chuyên cung cấp các sản phẩm mới nhất, chính hãng với mạng lưới hơn 100 cửa hàng trên toàn quốc.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-snap-footer">
                        <div class="snap-footer-title">
                            <h4>Thông tin</h4>
                        </div>
                        <div class="cakewalk-footer-content">
                            <ul>
                                <li><a href="{{route('home.about')}}">Về chúng tôi</a></li>
                                <li><a href="#">Chính sách vận chuyển</a></li>
                                <li><a href="#">Điều khoản sử dụng</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="single-snap-footer">
                        <div class="snap-footer-title">
                            <h4>Tài khoản</h4>
                        </div>
                        <div class="cakewalk-footer-content">
                            <ul>
                                <li><a href="{{ route('user.index') }}" title="Quản lý tổng quan">Quản lý</a></li>
                                <li><a href="{{ route('cart.listCart') }}">Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm">
                    <div class="single-snap-footer">
                        <div class="snap-footer-title">
                            <h4>Liên hệ</h4>
                        </div>
                        <div class="cakewalk-footer-content">
                            <ul>
                                <li><a href="{{route('contact.get')}}">Liên hệ</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm">
                    <div class="single-snap-footer">
                        <div class="snap-footer-title">
                            <h4>Follow Us</h4>
                        </div>
                        <div class="cakewalk-footer-content social-footer">
                            <ul>
                                <li><a href="https://www.facebook.com/deft.nvn" target="_blank"><i class="fa fa-facebook"></i></a><span> Facebook</span></li>
                                <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a><span> Google Plus</span></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a><span> Twitter</span></li>
                                <li><a href="https://youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a><span> Youtube</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top footer area end -->
    <!-- info footer start -->
    <div class="info-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="info-fcontainer">
                        <div class="infof-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="infof-content">
                            <h3>Địa chỉ</h3>
                            <p>Măng Linh, phường 7, thành phố Đà Lạt</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="info-fcontainer">
                        <div class="infof-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="infof-content">
                            <h3>Số điện thoại liên hệ</h3>
                            <p>(+84) 967128473</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="info-fcontainer">
                        <div class="infof-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="infof-content">
                            <h3>Email liên hệ</h3>
                            <p>namnv.nvx@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 hidden-sm">
                    <div class="info-fcontainer">
                        <div class="infof-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="infof-content">
                            <h3>Giờ mở cửa</h3>
                            <p>Thứ 2 - Thứ 7: 9:00 am - 22:00 pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- info footer end -->

    <!-- footer address area start -->
    <div class="address-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <address>Copyright © <a href="http://bootexperts.com/">BootExperts.</a> All Rights Reserved</address>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="footer-payment pull-right">
                        <a href="#"><img src="{{asset('home/img/payment.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer address area end -->
</footer>
