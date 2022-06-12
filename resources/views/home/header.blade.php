<nav class="fh5co-nav" role="navigation">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <p class="site">www.yourdomainname.com</p>
                    @auth
                    <ul class="dropdown">
                        <li class="has-dropdown">
                            <a href="#">
                                <strong class="text-uppercase">{{Auth::user()->name}}</strong> <i class="icon-user"></i>
                            </a>
                            <ul class="dropdown">
                                <li><a href="{{route('userpanel.index')}}">My Profile</a></li>
                                <li><a href="{{route('userpanel.addcontentsuser')}}"><i class="fa fa-heart"></i> Add Content </a></li>
                                <li><a href="{{route('userpanel.contents')}}"><i class="fa fa-heart"></i> My Contents </a></li>
                                <li><a href="{{route('userpanel.comments')}}"><i class="fa fa-heart"></i> My Comments </a></li>
                                <li><a href="{{route('logoutuser')}}"><i class="fa fa-user-plus"></i>Logout</a></li>
                            </ul>
                        </li>

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
                        <li><a href="{{route('about')}}">About Us</a></li>
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
