<nav class="fh5co-nav" role="navigation">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <p class="site">www.yourdomainname.com</p>
                    <p class="num">Call: +01 123 456 7890</p>
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-twitter2"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                    </ul>
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
                        <li><a href="about.html">About</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li class="has-dropdown">
                            <a href="blog.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">eCommerce</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">API</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="btn-cta"><a href="#"><span>Login</span></a></li>
                        <li class="btn-cta"><a href="#"><span>Create a Course</span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
