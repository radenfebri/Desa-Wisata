  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ $menu == 'dashboard' ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item ">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Slide & Profile</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="nav-item ">
                    <a href="{{ route('slide.index') }}">
                        <i class="bi bi-circle"></i><span>Slidebar</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('profile.index') }}">
                        <i class="bi bi-circle"></i><span>Profile</span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('profile-gambar.index') }}">
                        <i class="bi bi-circle"></i><span>Profile Gambar</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Components Nav -->

        <li class="nav-item ">
            <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Blog Site</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="nav-item ">
                    <a href="{{ route('kategori.index') }}">
                        <i class="bi bi-circle"></i><span>Kategori</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('blog.index') }}">
                        <i class="bi bi-circle"></i><span>Blog</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Components Nav -->



        <li class="nav-item {{ $menu == 'componen' ? 'active' : '' }}">
            <a class="nav-link collapsed" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data Team</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="nav-item ">
                    <a href="{{ route('team.index') }}">
                        <i class="bi bi-circle"></i><span>Daftar Team</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('deskripsi-team.index') }}">
                        <i class="bi bi-circle"></i><span>Deskripsi</span>
                    </a>
                </li>

            </ul>
        </li>


        <li class="nav-item {{ $menu == 'componen' ? 'active' : '' }}">
            <a class="nav-link collapsed" data-bs-target="#components-nav4" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Contact & Form</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="nav-item ">
                    <a href="{{ route('contact.index') }}">
                        <i class="bi bi-circle"></i><span>Contact</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pesan.index') }}">
                        <i class="bi bi-circle"></i><span>Pesan</span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Components Nav -->


    </ul>

</aside>
<!-- End Sidebar-->
