<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar" style="flex-grow: 0;">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Dashboard
                            </span>
                        </a>
                    </li>
                    @can('enquiry-list')
                        <li class="nav-item {{ request()->is('admin/enquiry*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.enquiry.index') }}">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Enquiry
                                </span>
                            </a>
                        </li>
                    @endcan


                    @can('webinar-list')
                        <li class="nav-item dropdown {{ request()->is('admin/webinar*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.036 280.036"
                                        xml:space="preserve">
                                        <path style="fill:#ccd0d2"
                                            d="M0 87.514v167.001l.088.07c.438 14.124 11.945 25.447 26.165 25.447h26.253V87.514z" />
                                        <path style="fill:#e4e7e7"
                                            d="M52.505.005v253.766c0 14.5-11.761 26.253-26.253 26.253H253.59l.018-.017.184.017c14.465 0 26.218-11.717 26.244-26.191V.005z" />
                                        <path style="fill:#b6b9b9"
                                            d="M78.758 96.265v17.502h175.017V96.265zm0 52.505h175.017v-17.502H78.758zm0 35.003h175.017v-17.502H78.758zm0 35.004h131.263v-17.502H78.758z" />
                                        <path style="fill:#9fa1a1"
                                            d="M109.526 26.599c-2.73 0-4.769 1.654-4.769 4.629v22.446h-.131L87.447 28.559c-.831-1.068-2.8-1.96-4.008-1.96-2.739 0-4.778 1.654-4.778 4.629v33.735c0 2.975 2.03 4.629 4.778 4.629 2.73 0 4.769-1.654 4.769-4.629v-22.14h.131l17.178 24.817c.893 1.076 2.8 1.969 4.008 1.969 2.739 0 4.778-1.654 4.778-4.629V31.228c.001-2.966-2.038-4.629-4.777-4.629m34.093 34.461H131.84v-9.04h10.44c3.054 0 4.647-2.074 4.647-4.095 0-2.083-1.531-4.104-4.647-4.104h-10.44v-8.663h11.201c2.984 0 4.524-2.074 4.524-4.104 0-2.074-1.47-4.095-4.524-4.095h-15.795c-3.369 0-4.962 2.196-4.962 5.163v32.676c0 2.669 2.1 4.445 4.909 4.445h16.425c2.993 0 4.533-2.065 4.533-4.095.001-2.075-1.469-4.088-4.532-4.088m66.2-34.461c-3.072 0-4.533 1.654-5.093 4.27l-5.417 25.255h-.123L190.9 30.1c-.7-2.135-2.599-3.5-4.953-3.5s-4.253 1.365-4.953 3.5l-8.287 26.025h-.123l-5.417-25.255c-.569-2.617-2.03-4.27-5.093-4.27-2.8 0-4.533 2.013-4.533 3.929l.254 2.013 8.086 32.422c.63 2.494 2.73 4.629 6.309 4.629 3.115 0 5.539-1.899 6.309-4.34l7.394-22.918h.123l7.377 22.918c.77 2.441 3.177 4.34 6.309 4.34 3.57 0 5.653-2.135 6.309-4.629l8.086-32.422.254-2.013c-.025-1.908-1.74-3.93-4.532-3.93m22.639 12.059c0-2.494 2.477-3.85 5.233-3.85 3.833 0 5.854 1.776 8.462 1.776 2.617 0 4.27-2.083 4.27-4.393 0-4.699-8.926-5.951-12.496-5.951-8.462 0-15.778 5.172-15.778 13.485 0 13.783 21.265 9.565 21.265 16.583 0 2.905-2.293 5.102-6.493 5.102-4.139 0-7.71-2.319-10.702-2.319-2.617 0-4.27 1.899-4.27 4.218 0 5.592 10.58 6.651 15.489 6.651 8.786 0 16.294-5.286 16.294-13.774-.001-15.332-21.274-11.411-21.274-17.528" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Webinars
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">

                                        <a class="dropdown-item {{ request()->is('admin/webinar/enquiry*') ? 'active' : '' }}"
                                            href="{{ route('admin.webinar.enquiry.index') }}">
                                            Webinars Enquiries
                                        </a>
                                        <a class="dropdown-item {{ request()->is('admin/webinar*') ? 'active' : '' }}"
                                            href="{{ route('admin.webinar.index') }}">
                                            Webinars
                                        </a>
                                        <a class="dropdown-item {{ request()->is('admin/webinar/categories*') ? 'active' : '' }}"
                                            href="{{ route('admin.webinar.category.index') }}">
                                            Category
                                        </a>
                                        {{-- <a class="dropdown-toggle dropdown-item" href="#navbar-extra"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                            aria-expanded="false">
                                            Options
                                        </a>
                                        <div class="dropdown-menu">
                                            <div class="dropdown-menu-columns">
                                                <div class="dropdown-menu-column">
                                                    <a class="dropdown-item {{ request()->is('admin/webinar/categories*') ? 'active' : '' }}"
                                                        href="{{ route('admin.webinar.category.index') }}">
                                                        Category
                                                    </a>

                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endcan

                    @can('partner-referral-list')
                        <li class="nav-item {{ request()->is('admin/partner-referral*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.partner.referral.index') }}">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Partner Referral
                                </span>
                            </a>
                        </li>
                    @endcan
                    @can('news-list')
                        <li class="nav-item {{ request()->is('admin/news*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.news.index') }}">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.036 280.036"
                                        xml:space="preserve">
                                        <path style="fill:#ccd0d2"
                                            d="M0 87.514v167.001l.088.07c.438 14.124 11.945 25.447 26.165 25.447h26.253V87.514z" />
                                        <path style="fill:#e4e7e7"
                                            d="M52.505.005v253.766c0 14.5-11.761 26.253-26.253 26.253H253.59l.018-.017.184.017c14.465 0 26.218-11.717 26.244-26.191V.005z" />
                                        <path style="fill:#b6b9b9"
                                            d="M78.758 96.265v17.502h175.017V96.265zm0 52.505h175.017v-17.502H78.758zm0 35.003h175.017v-17.502H78.758zm0 35.004h131.263v-17.502H78.758z" />
                                        <path style="fill:#9fa1a1"
                                            d="M109.526 26.599c-2.73 0-4.769 1.654-4.769 4.629v22.446h-.131L87.447 28.559c-.831-1.068-2.8-1.96-4.008-1.96-2.739 0-4.778 1.654-4.778 4.629v33.735c0 2.975 2.03 4.629 4.778 4.629 2.73 0 4.769-1.654 4.769-4.629v-22.14h.131l17.178 24.817c.893 1.076 2.8 1.969 4.008 1.969 2.739 0 4.778-1.654 4.778-4.629V31.228c.001-2.966-2.038-4.629-4.777-4.629m34.093 34.461H131.84v-9.04h10.44c3.054 0 4.647-2.074 4.647-4.095 0-2.083-1.531-4.104-4.647-4.104h-10.44v-8.663h11.201c2.984 0 4.524-2.074 4.524-4.104 0-2.074-1.47-4.095-4.524-4.095h-15.795c-3.369 0-4.962 2.196-4.962 5.163v32.676c0 2.669 2.1 4.445 4.909 4.445h16.425c2.993 0 4.533-2.065 4.533-4.095.001-2.075-1.469-4.088-4.532-4.088m66.2-34.461c-3.072 0-4.533 1.654-5.093 4.27l-5.417 25.255h-.123L190.9 30.1c-.7-2.135-2.599-3.5-4.953-3.5s-4.253 1.365-4.953 3.5l-8.287 26.025h-.123l-5.417-25.255c-.569-2.617-2.03-4.27-5.093-4.27-2.8 0-4.533 2.013-4.533 3.929l.254 2.013 8.086 32.422c.63 2.494 2.73 4.629 6.309 4.629 3.115 0 5.539-1.899 6.309-4.34l7.394-22.918h.123l7.377 22.918c.77 2.441 3.177 4.34 6.309 4.34 3.57 0 5.653-2.135 6.309-4.629l8.086-32.422.254-2.013c-.025-1.908-1.74-3.93-4.532-3.93m22.639 12.059c0-2.494 2.477-3.85 5.233-3.85 3.833 0 5.854 1.776 8.462 1.776 2.617 0 4.27-2.083 4.27-4.393 0-4.699-8.926-5.951-12.496-5.951-8.462 0-15.778 5.172-15.778 13.485 0 13.783 21.265 9.565 21.265 16.583 0 2.905-2.293 5.102-6.493 5.102-4.139 0-7.71-2.319-10.702-2.319-2.617 0-4.27 1.899-4.27 4.218 0 5.592 10.58 6.651 15.489 6.651 8.786 0 16.294-5.286 16.294-13.774-.001-15.332-21.274-11.411-21.274-17.528" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    News
                                </span>
                            </a>
                        </li>
                    @endcan
                    @can('events-list')
                        <li class="nav-item {{ request()->is('admin/events*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.events.index') }}">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.036 280.036"
                                        xml:space="preserve">
                                        <path style="fill:#ccd0d2"
                                            d="M0 87.514v167.001l.088.07c.438 14.124 11.945 25.447 26.165 25.447h26.253V87.514z" />
                                        <path style="fill:#e4e7e7"
                                            d="M52.505.005v253.766c0 14.5-11.761 26.253-26.253 26.253H253.59l.018-.017.184.017c14.465 0 26.218-11.717 26.244-26.191V.005z" />
                                        <path style="fill:#b6b9b9"
                                            d="M78.758 96.265v17.502h175.017V96.265zm0 52.505h175.017v-17.502H78.758zm0 35.003h175.017v-17.502H78.758zm0 35.004h131.263v-17.502H78.758z" />
                                        <path style="fill:#9fa1a1"
                                            d="M109.526 26.599c-2.73 0-4.769 1.654-4.769 4.629v22.446h-.131L87.447 28.559c-.831-1.068-2.8-1.96-4.008-1.96-2.739 0-4.778 1.654-4.778 4.629v33.735c0 2.975 2.03 4.629 4.778 4.629 2.73 0 4.769-1.654 4.769-4.629v-22.14h.131l17.178 24.817c.893 1.076 2.8 1.969 4.008 1.969 2.739 0 4.778-1.654 4.778-4.629V31.228c.001-2.966-2.038-4.629-4.777-4.629m34.093 34.461H131.84v-9.04h10.44c3.054 0 4.647-2.074 4.647-4.095 0-2.083-1.531-4.104-4.647-4.104h-10.44v-8.663h11.201c2.984 0 4.524-2.074 4.524-4.104 0-2.074-1.47-4.095-4.524-4.095h-15.795c-3.369 0-4.962 2.196-4.962 5.163v32.676c0 2.669 2.1 4.445 4.909 4.445h16.425c2.993 0 4.533-2.065 4.533-4.095.001-2.075-1.469-4.088-4.532-4.088m66.2-34.461c-3.072 0-4.533 1.654-5.093 4.27l-5.417 25.255h-.123L190.9 30.1c-.7-2.135-2.599-3.5-4.953-3.5s-4.253 1.365-4.953 3.5l-8.287 26.025h-.123l-5.417-25.255c-.569-2.617-2.03-4.27-5.093-4.27-2.8 0-4.533 2.013-4.533 3.929l.254 2.013 8.086 32.422c.63 2.494 2.73 4.629 6.309 4.629 3.115 0 5.539-1.899 6.309-4.34l7.394-22.918h.123l7.377 22.918c.77 2.441 3.177 4.34 6.309 4.34 3.57 0 5.653-2.135 6.309-4.629l8.086-32.422.254-2.013c-.025-1.908-1.74-3.93-4.532-3.93m22.639 12.059c0-2.494 2.477-3.85 5.233-3.85 3.833 0 5.854 1.776 8.462 1.776 2.617 0 4.27-2.083 4.27-4.393 0-4.699-8.926-5.951-12.496-5.951-8.462 0-15.778 5.172-15.778 13.485 0 13.783 21.265 9.565 21.265 16.583 0 2.905-2.293 5.102-6.493 5.102-4.139 0-7.71-2.319-10.702-2.319-2.617 0-4.27 1.899-4.27 4.218 0 5.592 10.58 6.651 15.489 6.651 8.786 0 16.294-5.286 16.294-13.774-.001-15.332-21.274-11.411-21.274-17.528" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Events
                                </span>
                            </a>
                        </li>
                    @endcan
                    @can('contact-us-list')
                        <li class="nav-item dropdown {{ request()->is('admin/contact*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.036 280.036"
                                        xml:space="preserve">
                                        <path style="fill:#ccd0d2"
                                            d="M0 87.514v167.001l.088.07c.438 14.124 11.945 25.447 26.165 25.447h26.253V87.514z" />
                                        <path style="fill:#e4e7e7"
                                            d="M52.505.005v253.766c0 14.5-11.761 26.253-26.253 26.253H253.59l.018-.017.184.017c14.465 0 26.218-11.717 26.244-26.191V.005z" />
                                        <path style="fill:#b6b9b9"
                                            d="M78.758 96.265v17.502h175.017V96.265zm0 52.505h175.017v-17.502H78.758zm0 35.003h175.017v-17.502H78.758zm0 35.004h131.263v-17.502H78.758z" />
                                        <path style="fill:#9fa1a1"
                                            d="M109.526 26.599c-2.73 0-4.769 1.654-4.769 4.629v22.446h-.131L87.447 28.559c-.831-1.068-2.8-1.96-4.008-1.96-2.739 0-4.778 1.654-4.778 4.629v33.735c0 2.975 2.03 4.629 4.778 4.629 2.73 0 4.769-1.654 4.769-4.629v-22.14h.131l17.178 24.817c.893 1.076 2.8 1.969 4.008 1.969 2.739 0 4.778-1.654 4.778-4.629V31.228c.001-2.966-2.038-4.629-4.777-4.629m34.093 34.461H131.84v-9.04h10.44c3.054 0 4.647-2.074 4.647-4.095 0-2.083-1.531-4.104-4.647-4.104h-10.44v-8.663h11.201c2.984 0 4.524-2.074 4.524-4.104 0-2.074-1.47-4.095-4.524-4.095h-15.795c-3.369 0-4.962 2.196-4.962 5.163v32.676c0 2.669 2.1 4.445 4.909 4.445h16.425c2.993 0 4.533-2.065 4.533-4.095.001-2.075-1.469-4.088-4.532-4.088m66.2-34.461c-3.072 0-4.533 1.654-5.093 4.27l-5.417 25.255h-.123L190.9 30.1c-.7-2.135-2.599-3.5-4.953-3.5s-4.253 1.365-4.953 3.5l-8.287 26.025h-.123l-5.417-25.255c-.569-2.617-2.03-4.27-5.093-4.27-2.8 0-4.533 2.013-4.533 3.929l.254 2.013 8.086 32.422c.63 2.494 2.73 4.629 6.309 4.629 3.115 0 5.539-1.899 6.309-4.34l7.394-22.918h.123l7.377 22.918c.77 2.441 3.177 4.34 6.309 4.34 3.57 0 5.653-2.135 6.309-4.629l8.086-32.422.254-2.013c-.025-1.908-1.74-3.93-4.532-3.93m22.639 12.059c0-2.494 2.477-3.85 5.233-3.85 3.833 0 5.854 1.776 8.462 1.776 2.617 0 4.27-2.083 4.27-4.393 0-4.699-8.926-5.951-12.496-5.951-8.462 0-15.778 5.172-15.778 13.485 0 13.783 21.265 9.565 21.265 16.583 0 2.905-2.293 5.102-6.493 5.102-4.139 0-7.71-2.319-10.702-2.319-2.617 0-4.27 1.899-4.27 4.218 0 5.592 10.58 6.651 15.489 6.651 8.786 0 16.294-5.286 16.294-13.774-.001-15.332-21.274-11.411-21.274-17.528" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Contact Us
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">

                                        <a class="dropdown-item {{ request()->is('admin/contact-us*') ? 'active' : '' }}"
                                            href="{{ route('admin.contact.us.index') }}">
                                            Content
                                        </a>
                                        <a class="dropdown-item {{ request()->is('admin/contact/region*') ? 'active' : '' }}"
                                            href="{{ route('admin.contact.region.index') }}">
                                            Region
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </li>
                    @endcan
                    @can('menu-list')
                        <li class="nav-item {{ request()->is('admin/menu*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.menu.index') }}">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        stroke="#000" stroke-linecap="round">
                                        <path d="M21 18H3m18-6H3m18-6H3" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Menu
                                </span>
                            </a>
                        </li>
                    @endcan
                    @can('faq-list')
                        <li class="nav-item {{ request()->is('admin/faq*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.faq.index') }}">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        stroke="#000" stroke-linecap="round">
                                        <path d="M21 18H3m18-6H3m18-6H3" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    FAQ
                                </span>
                            </a>
                        </li>
                    @endcan
                    @can('banner-list')
                        <li class="nav-item {{ request()->is('admin/banner*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.banner.index') }}">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280.036 280.036"
                                        xml:space="preserve">
                                        <path style="fill:#ccd0d2"
                                            d="M0 87.514v167.001l.088.07c.438 14.124 11.945 25.447 26.165 25.447h26.253V87.514z" />
                                        <path style="fill:#e4e7e7"
                                            d="M52.505.005v253.766c0 14.5-11.761 26.253-26.253 26.253H253.59l.018-.017.184.017c14.465 0 26.218-11.717 26.244-26.191V.005z" />
                                        <path style="fill:#b6b9b9"
                                            d="M78.758 96.265v17.502h175.017V96.265zm0 52.505h175.017v-17.502H78.758zm0 35.003h175.017v-17.502H78.758zm0 35.004h131.263v-17.502H78.758z" />
                                        <path style="fill:#9fa1a1"
                                            d="M109.526 26.599c-2.73 0-4.769 1.654-4.769 4.629v22.446h-.131L87.447 28.559c-.831-1.068-2.8-1.96-4.008-1.96-2.739 0-4.778 1.654-4.778 4.629v33.735c0 2.975 2.03 4.629 4.778 4.629 2.73 0 4.769-1.654 4.769-4.629v-22.14h.131l17.178 24.817c.893 1.076 2.8 1.969 4.008 1.969 2.739 0 4.778-1.654 4.778-4.629V31.228c.001-2.966-2.038-4.629-4.777-4.629m34.093 34.461H131.84v-9.04h10.44c3.054 0 4.647-2.074 4.647-4.095 0-2.083-1.531-4.104-4.647-4.104h-10.44v-8.663h11.201c2.984 0 4.524-2.074 4.524-4.104 0-2.074-1.47-4.095-4.524-4.095h-15.795c-3.369 0-4.962 2.196-4.962 5.163v32.676c0 2.669 2.1 4.445 4.909 4.445h16.425c2.993 0 4.533-2.065 4.533-4.095.001-2.075-1.469-4.088-4.532-4.088m66.2-34.461c-3.072 0-4.533 1.654-5.093 4.27l-5.417 25.255h-.123L190.9 30.1c-.7-2.135-2.599-3.5-4.953-3.5s-4.253 1.365-4.953 3.5l-8.287 26.025h-.123l-5.417-25.255c-.569-2.617-2.03-4.27-5.093-4.27-2.8 0-4.533 2.013-4.533 3.929l.254 2.013 8.086 32.422c.63 2.494 2.73 4.629 6.309 4.629 3.115 0 5.539-1.899 6.309-4.34l7.394-22.918h.123l7.377 22.918c.77 2.441 3.177 4.34 6.309 4.34 3.57 0 5.653-2.135 6.309-4.629l8.086-32.422.254-2.013c-.025-1.908-1.74-3.93-4.532-3.93m22.639 12.059c0-2.494 2.477-3.85 5.233-3.85 3.833 0 5.854 1.776 8.462 1.776 2.617 0 4.27-2.083 4.27-4.393 0-4.699-8.926-5.951-12.496-5.951-8.462 0-15.778 5.172-15.778 13.485 0 13.783 21.265 9.565 21.265 16.583 0 2.905-2.293 5.102-6.493 5.102-4.139 0-7.71-2.319-10.702-2.319-2.617 0-4.27 1.899-4.27 4.218 0 5.592 10.58 6.651 15.489 6.651 8.786 0 16.294-5.286 16.294-13.774-.001-15.332-21.274-11.411-21.274-17.528" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Banner
                                </span>
                            </a>
                        </li>
                    @endcan
                    {{-- <li class="nav-item {{ request()->is('admin/signup*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.signup.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Signup
                            </span>
                        </a>
                    </li> --}}

                    @can('teams-list')
                        <li class="nav-item dropdown {{ request()->is('admin/teams*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" xml:space="preserve">
                                        <circle style="fill:none;stroke:#000;stroke-width:2;stroke-miterlimit:10"
                                            cx="23" cy="13" r="5" />
                                        <path style="fill:none;stroke:#000;stroke-width:2;stroke-miterlimit:10"
                                            d="M16 25a7 7 0 1 1 14 0" />
                                        <circle style="fill:none;stroke:#000;stroke-width:2;stroke-miterlimit:10"
                                            cx="9" cy="13" r="5" />
                                        <path style="fill:none;stroke:#000;stroke-width:2;stroke-miterlimit:10"
                                            d="M2 25a7 7 0 1 1 14 0" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Teams
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">

                                        <a class="dropdown-item {{ request()->is('admin/teams/board-directors*') ? 'active' : '' }}"
                                            href="{{ route('admin.team.board.directors.index') }}">
                                            Board Of Directors
                                        </a>
                                        <a class="dropdown-item {{ request()->is('admin/teams/senior-management*') ? 'active' : '' }}"
                                            href="{{ route('admin.team.senior.management.index') }}">
                                            Senior Management
                                        </a>
                                        <a class="dropdown-item {{ request()->is('admin/teams/regional-leaders*') ? 'active' : '' }}"
                                            href="{{ route('admin.team.regional.leaders.index') }}">
                                            Regional Leaders
                                        </a>
                                        <a class="dropdown-toggle dropdown-item" href="#navbar-extra"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                            aria-expanded="false">
                                            Options
                                        </a>
                                        <div class="dropdown-menu">
                                            <div class="dropdown-menu-columns">
                                                <div class="dropdown-menu-column">
                                                    <a class="dropdown-item {{ request()->is('admin/teams/section*') ? 'active' : '' }}"
                                                        href="{{ route('admin.team.section.index') }}">
                                                        Section
                                                    </a>
                                                    <a class="dropdown-item {{ request()->is('admin/teams/sub-section*') ? 'active' : '' }}"
                                                        href="{{ route('admin.team.sub.section.index') }}">
                                                        Sub Section
                                                    </a>
                                                    <a class="dropdown-item {{ request()->is('admin/teams/region*') ? 'active' : '' }}"
                                                        href="{{ route('admin.team.region.index') }}">
                                                        Region
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endcan

                    @can(['category-list', 'sub-category-list'])
                        <li
                            class="nav-item dropdown {{ request()->is('admin/categories*') || request()->is('admin/sub-categories*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Settings
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        @can('category-list')
                                            <a class="dropdown-item" href="{{ route('admin.category.index') }}">
                                                Category
                                            </a>
                                        @endcan
                                        @can('sub-category-list')
                                            <a class="dropdown-item" href="{{ route('admin.sub.category.index') }}">
                                                Sub Category
                                            </a>
                                        @endcan

                                    </div>
                                </div>
                            </div>
                        </li>
                    @endcan
                    @can(['user-list', 'role-list'])
                        <li
                            class="nav-item dropdown {{ request()->is('admin/users*') || request()->is('admin/roles*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                        <path
                                            d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                        <path
                                            d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                        <path
                                            d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    User Roles & Permissions
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        @can('user-list')
                                            <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                                Users
                                            </a>
                                        @endcan
                                        @can('role-list')
                                            <a class="dropdown-item" href="{{ route('admin.roles.index') }}">
                                                Roles & Permissions
                                            </a>
                                        @endcan
                                        {{-- <a class="dropdown-item" href="#">
                                Enquiry Workflow
                            </a> --}}
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endcan
                </ul>
            </div>
        </div>
    </div>
</header>
