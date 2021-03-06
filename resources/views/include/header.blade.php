<header>

    <nav class="navbar navbar-inverse navbar-embossed navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="fa fa-align-justify"></span>
            </button>
            <a href="{{route('home')}}" class="navbar-brand"><img src="{{asset('./htmlcss/img/minion.jpg')}}" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav menu">
                <li><a href="#">Giới thiệu</a></li>
                <li class="dropdown">
                    <a href="chitiet.html" class="dropdown-toggle" data-toggle="dropdown">Tin tức
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($schools as $i)
                            <li><a href="{{route('category', $i->slug)}}">{{$i-> name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#">Gương mặt tiêu biểu</a></li>
                <li><a href="#">Gửi hồ sơ đăng kí</a></li>
            </ul>
            @if(isLogin())
                <div class="navbar-nav navbar-right ">
                        <a href="#">Thang</a>
                        <a href="{{route('logout')}}" class="btn  btn-success">Đăng xuất</a>

                </div>
            @else
                <div class="navbar-right chua-dang-nhap">
                    <a href="{{route('login')}}" class="btn btn-success">Đăng nhập</a>
                    <a href="{{route('register')}}" class="btn btn-danger">Đăng kí</a>
                </div>
            @endif
        </div>
    </nav>
    <div class="banner">
        <ul id="slide">
            <li><a href="#"><img src="{{asset('./htmlcss/img/minion.jpg')}}" alt="slide"></a></li>
            <li><a href="#"><img src="{{asset('./htmlcss/img/minion.jpg')}}" alt="slide"></a></li>
            <li><a href="#"><img src="{{asset('./htmlcss/img/minion.jpg')}}" alt="slide"></a></li>
            <li><a href="#"><img src="{{asset('./htmlcss/img/minion.jpg')}}" alt="slide"></a></li>
        </ul>
        <div class="gui-ho-so">
            <button type="button" class="btn btn-wide btn-info">Gửi hồ sơ đăng kí</button>
        </div>
    </div>
</header>
