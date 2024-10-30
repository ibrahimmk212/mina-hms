<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != '') collapsed @endif" href="{{url('admin')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'user') collapsed @endif" href="{{url('admin/user')}}">
                <i class="bi bi-person"></i>
                <span>User</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2) != 'role') collapsed @endif" href="{{url('admin/role')}}">
                <i class="bi bi-question-circle"></i>
                <span>Role</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
    </ul>

</aside>