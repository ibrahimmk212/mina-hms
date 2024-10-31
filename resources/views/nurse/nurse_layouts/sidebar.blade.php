<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Appointments</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('/nurse/appointments')}}">
                        <i class="bi bi-circle"></i><span>Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/nurse/appointments/available')}}">
                        <i class="bi bi-circle"></i><span>Available</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/nurse/appointments/done')}}">
                        <i class="bi bi-circle"></i><span>Done</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Patients</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('/nurse/patients')}}">
                        <i class="bi bi-circle"></i><span>All Patients</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/nurse/patients/in')}}">
                        <i class="bi bi-circle"></i><span>In Patients</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/nurse/patients/out')}}">
                        <i class="bi bi-circle"></i><span>Out Patients</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Doctors</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('/nurse/doctors')}}">
                        <i class="bi bi-circle"></i><span>All Doctors</span>
                    </a>
                </li>
            </ul>

        </li>
        <!-- End Forms Nav -->

        <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li> -->
        <!-- End Tables Nav -->
    </ul>
</aside>