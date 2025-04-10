<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('website/images/favicon3.png') }}" alt="" class="w-px-40 h-auto rounded-circle">
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">AVATR</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Email">Dashboard</div>
            </a>
        </li>
        <li class="menu-item open" style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Layouts">Enquiries</div>
            </a>

            <ul class="menu-sub">
                {{-- <li class="menu-item">
                    <a href="{{ route('admin.invitation.index') }}" class="menu-link">
                        <div class="text-truncate">Invitation</div>
                    </a>
                </li> --}}
                {{-- <li class="menu-item">
                    <a href="{{ route('admin.test-drive.index') }}" class="menu-link">
                        <div class="text-truncate">Test Drive</div>
                    </a>
                </li> --}}
                {{-- <li class="menu-item">
                    <a href="{{ route('admin.request.quote.index') }}" class="menu-link">
                        <div class="text-truncate">Request A Quote</div>
                    </a>
                </li> --}}
                <li class="menu-item">
                    <a href="{{ route('admin.contact.index') }}" class="menu-link">
                        <div class="text-truncate">Contacts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.experience.index') }}" class="menu-link">
                        <div class="text-truncate">Experiences</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.enquiry.index') }}" class="menu-link">
                        <div class="text-truncate">All Enquiries</div>
                    </a>
                </li>

            </ul>
        </li>

    </ul>
</aside>
