<div class="header-middle">
    <!--header-top-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="trang-chu"><img src="users/images/home/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
                        <li><a href="checkout"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                        <li><a href="cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                        @if(Auth::check())
                        <li>
                            Chào bạn {{Auth::user() -> name}}
                            <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i>Đăng xuất</a>
                        </li>
                        @else <li><a href="{{route('login')}}"><i class="fa fa-lock"></i>Đăng nhập</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/header-top-->