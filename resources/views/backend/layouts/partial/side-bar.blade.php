<nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav"><!-- ============================= -->
        <!-- Home -->
        <!-- ============================= -->
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Quản trị</span>
        </li>
        <!-- =================== -->
        <!-- Dashboard -->
        <!-- =================== -->
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('backend.thong-ke.show') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                <span class="hide-menu">Thống kê</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('backend.user.show') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                <span class="hide-menu">Quản lý người dùng</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./index2.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-shopping-cart"></i>
                  </span>
                <span class="hide-menu">Quản lý đơn hàng</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('backend.tin-nhan.show') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-currency-dollar"></i>
                  </span>
                <span class="hide-menu">Tin nhắn</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('backend.email.show') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-cpu"></i>
                  </span>
                <span class="hide-menu">Email</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('backend.voucher.show') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-activity-heartbeat"></i>
                  </span>
                <span class="hide-menu">Mã giảm giá</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('backend.san-pham.show') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-playlist"></i>
                  </span>
                <span class="hide-menu">Sản phẩm</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('backend.dich-vu-them.show') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-playlist"></i>
                  </span>
                <span class="hide-menu">Dịch vụ thêm</span>
            </a>
        </li>
    </ul>
</nav>
