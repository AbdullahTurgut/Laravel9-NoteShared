
<!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.index')}}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Home</span>
                </a>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="mdi mdi-circle-outline menu-icon"></i>
                    <span class="menu-title">UI Elements</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/ui-features/buttons.html">Buttons</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{asset('assets')}}/admin/pages/ui-features/typography.html">Typography</a></li>
                    </ul>
                </div>
            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="/admin/content">
                    <i class="mdi mdi-content-save menu-icon"></i>
                    <span class="menu-title">Content</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/category">
                    <i class="mdi mdi-table-large menu-icon"></i>
                    <span class="menu-title">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/user">
                    <i class="mdi mdi-account-circle menu-icon"></i>
                    <span class="menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/comment">
                    <i class="mdi mdi-comment menu-icon"></i>
                    <span class="menu-title">Comments</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.message.index')}}">
                    <i class="mdi mdi-message-text menu-icon"></i>
                    <span class="menu-title">Messages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.faq.index')}}">
                    <i class="mdi mdi-comment-question-outline menu-icon"></i>
                    <span class="menu-title">FAQ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/setting">
                    <i class="mdi mdi-settings menu-icon"></i>
                    <span class="menu-title">Settings</span>
                </a>
            </li>
        </ul>
    </nav>
