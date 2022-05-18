<nav class="fh5co-nav" role="navigation">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <p class="site">www.yourdomainname.com</p>
                    <p class="num">Call: +01 123 456 7890</p>
                    @auth
                    <ul class="fh5co-social">
                        <li><strong class="text-uppercase">{{Auth::user()->name}}</strong> <i class="icon-user"></i></li>
                        <li><a href="{{route('logoutuser')}}"><span>Logout</span></a><i class="glyphicon-log-out"></i></li>
                    </ul>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="fh5co-logo"><a href="{{route('home')}}">NoteShare</a></div>
                </div>
                @php
                    $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
                @endphp
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li class="has-dropdown">
                            <a href="#">Categories</a>
                            <ul class="dropdown">
                                @foreach($mainCategories as $rs)
                                    <li class="has-dropdown">
                                        <a href="#">{{$rs->title}}</a>
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children' => $rs->children])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="teacher.html">Teacher</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li class="has-dropdown">
                            <a href="blog.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">eCommerce</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">API</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        @guest
                        <li class="btn-cta"><a href="{{route('loginuser')}}"><span>Login</span></a></li>
                        <li class="btn-cta"><a href="{{route('registeruser')}}"><span>Register</span></a></li>
                        @endguest
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
