<aside class="navbar navbar-vertical navbar-expand-lg navbar-transparent">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark"
            style="position: sticky; top: 0;padding:17px;background: #fff;z-index:9;">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('static/networklogo.svg') }}" width="110" height="32" alt="NETWORK"
                    style="height:1rem!important;" class="navbar-brand-image" />
            </a>
        </h1>

        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3 pb-5" style="overflow-y: auto;height:93vh!important;background-color:#fff;">
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
                        <span class="nav-link-title"> Dashboard </span>
                    </a>
                </li>

                {{-- @can('enquiry-list') --}}
                <li class="nav-item dropdown {{ request()->is('admin/enquiry*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-license">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11" />
                                <path d="M9 7l4 0" />
                                <path d="M9 11l4 0"   />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Submissions
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">

                                {{-- <a class="dropdown-item {{ request()->is('admin/enquiry/sales-enquiry*') ? 'active' : '' }}"
                                        href="{{ route('admin.sales.enquiry.index') }}">
                                        Sales Enquiry
                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin/enquiry/customer-support*') ? 'active' : '' }}"
                                        href="{{ route('admin.customer.support.enquiry.index') }}">
                                        Customer Support

                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin/enquiry/feedback*') ? 'active' : '' }}"
                                        href="{{ route('admin.feedback.enquiry.index') }}">
                                        Feedback
                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin/enquiry/submit-a-request*') ? 'active' : '' }}"
                                        href="{{ route('admin.submit.request.enquiry.index') }}">
                                        Submit A Request

                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin/enquiry/webinar*') ? 'active' : '' }}"
                                        href="{{ route('admin.webinar.enquiry.index') }}">
                                        Webinars
                                    </a> --}}
                                <a class="dropdown-item {{ request()->is('admin/enquiry/webinar*') ? 'active' : '' }}"
                                    href="{{ route('admin.enquiry.index') }}">
                                    All Enquiries
                                </a>

                            </div>
                        </div>
                    </div>
                </li>
                {{-- @endcan --}}
                {{-- @can('contents-list')
                    <li class="nav-item {{ request()->is('admin/home*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.contents.home.edit') }}">
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
                                Home Page
                            </span>
                        </a>
                    </li>
                @endcan --}}
                @can('contents-list')
                    <li class="nav-item dropdown {{ request()->is('admin/contents*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-contract">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 21h-2a3 3 0 0 1 -3 -3v-1h5.5" />
                                    <path d="M17 8.5v-3.5a2 2 0 1 1 2 2h-2" />
                                    <path d="M19 3h-11a3 3 0 0 0 -3 3v11" />
                                    <path d="M9 7h4" />
                                    <path d="M9 11h4" />
                                    <path d="M18.42 12.61a2.1 2.1 0 0 1 2.97 2.97l-6.39 6.42h-3v-3z"   />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Contents
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">

                                    <a class="dropdown-item {{ request()->is('admin/contents*') ? 'active' : '' }}"
                                        href="{{ route('admin.contents.index') }}">
                                        Common Pages
                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin/contents/compliance*') ? 'active' : '' }}"
                                        href="{{ route('admin.contents.compliance.edit') }}">
                                        Compliance
                                    </a>

                                    <a class="dropdown-item dropdown-toggle {{ request()->is('admin/contents/csr*') ? 'active' : '' }}"
                                        href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                        role="button" aria-expanded="false">
                                        CSR
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                <a class="dropdown-item {{ request()->is('admin/contents/csr*') ? 'active' : '' }}"
                                                    href="{{ route('admin.contents.csr.campaign.edit') }}">
                                                    Campaign
                                                </a>
                                                <a class="dropdown-item {{ request()->is('admin/contents/policy*') ? 'active' : '' }}"
                                                    href="{{ route('admin.contents.csr.policy.edit') }}">
                                                    Policy
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="dropdown-item dropdown-toggle " href="#navbar-extra"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                        aria-expanded="false">
                                        Insights
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                <a class="dropdown-item {{ request()->is('admin/contents/insights*') ? 'active' : '' }}"
                                                    href="{{ route('admin.contents.insights.resource.edit') }}">
                                                    Resource Center
                                                </a>
                                                <a class="dropdown-item {{ request()->is('admin/static-content/categories*') ? 'active' : '' }}"
                                                    href="{{ route('admin.static-content.category.index') }}">
                                                    Resource Category
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li
                        class="nav-item dropdown {{ request()->is('admin/merchant-solutions*') || request()->is('admin/issuer-solutions*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-message-question">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 9h8" />
                                    <path d="M8 13h6" />
                                    <path d="M14 18h-1l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
                                    <path d="M19 22v.01" />
                                    <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"   />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Solutions
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item dropdown-toggle {{ request()->is('admin/merchant-solutions*') ? 'active' : '' }}"
                                        href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                        role="button" aria-expanded="false">
                                        Merchant Solutions
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                <a class="dropdown-item "
                                                    href="{{ route('admin.merchant.solution.main') }}">
                                                    Merchant Solution
                                                </a>
                                                <a class="dropdown-item {{ request()->is('admin/contents/policy*') ? 'active' : '' }}"
                                                    href="{{ route('admin.merchant.solution.index') }}">
                                                    Merchant Inner Pages
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="dropdown-item dropdown-toggle {{ request()->is('admin/merchant-solutions*') ? 'active' : '' }}"
                                        href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                        role="button" aria-expanded="false">
                                        Issuer Solutions
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                <a class="dropdown-item "
                                                    href="{{ route('admin.issuer.solution.main') }}">
                                                    Issuer Solution
                                                </a>
                                                <a class="dropdown-item {{ request()->is('admin/contents/policy*') ? 'active' : '' }}"
                                                    href="{{ route('admin.issuer.solution.index') }}">
                                                    Issuer Inner Pages
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endcan
                {{-- @can('meta-list')
                    <li class="nav-item {{ request()->is('admin/meta*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.meta.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-meta">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M12 10.174c1.766 -2.784 3.315 -4.174 4.648 -4.174c2 0 3.263 2.213 4 5.217c.704 2.869 .5 6.783 -2 6.783c-1.114 0 -2.648 -1.565 -4.148 -3.652a27.627 27.627 0 0 1 -2.5 -4.174z" />
                                    <path
                                        d="M12 10.174c-1.766 -2.784 -3.315 -4.174 -4.648 -4.174c-2 0 -3.263 2.213 -4 5.217c-.704 2.869 -.5 6.783 2 6.783c1.114 0 2.648 -1.565 4.148 -3.652c1 -1.391 1.833 -2.783 2.5 -4.174z" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Page Meta
                            </span>
                        </a>
                    </li>
                @endcan --}}
                {{-- @can('banner-list')
                    <li class="nav-item {{ request()->is('admin/banner*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.banner.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-device-tv">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M16 3l-4 4l-4 -4"   />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Banner
                            </span>
                        </a>
                    </li>
                @endcan --}}
                {{-- @can('webinar-list')
                    <li class="nav-item dropdown {{ request()->is('admin/webinar*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor"
                                        d="M21 17V8H7v9zm0-14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h1V1h2v2h8V1h2v2zm-3.47 8.06l-4.44 4.44l-2.68-2.68l1.06-1.06l1.62 1.62L16.47 10zM3 21h14v2H3a2 2 0 0 1-2-2V9h2z" />
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

                                </div>
                            </div>
                        </div>
                    </li>
                @endcan --}}

                {{-- @can('partner-referral-list')
                    <li class="nav-item {{ request()->is('admin/partner-referral*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.partner.referral.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor"
                                        d="M21.71 8.71c1.25-1.25.68-2.71 0-3.42l-3-3c-1.26-1.25-2.71-.68-3.42 0L13.59 4H11C9.1 4 8 5 7.44 6.15L3 10.59v4l-.71.7c-1.25 1.26-.68 2.71 0 3.42l3 3c.54.54 1.12.74 1.67.74c.71 0 1.36-.35 1.75-.74l2.7-2.71H15c1.7 0 2.56-1.06 2.87-2.1c1.13-.3 1.75-1.16 2-2C21.42 14.5 22 13.03 22 12V9h-.59zM20 12c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-4.41l-3.28 3.28c-.31.29-.49.12-.6.01l-2.99-2.98c-.29-.31-.12-.49-.01-.6L5 15.41v-4l2-2V11c0 1.21.8 3 3 3s3-1.79 3-3h7zm.29-4.71L18.59 9H11v2c0 .45-.19 1-1 1s-1-.55-1-1V8c0-.46.17-2 2-2h3.41l2.28-2.28c.31-.29.49-.12.6-.01l2.99 2.98c.29.31.12.49.01.6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Partner Referral
                            </span>
                        </a>
                    </li>
                @endcan --}}


                {{-- @can('news-list')
                    <li class="nav-item {{ request()->is('admin/news*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.news.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-news">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                                    <path d="M8 8l4 0" />
                                    <path d="M8 12l4 0" />
                                    <path d="M8 16l4 0"   />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                News
                            </span>
                        </a>
                    </li>
                @endcan --}}
                {{-- @can('events-list')
                    <li class="nav-item {{ request()->is('admin/events*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.events.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor"
                                        d="M21 17V8H7v9zm0-14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h1V1h2v2h8V1h2v2zm-3.47 8.06l-4.44 4.44l-2.68-2.68l1.06-1.06l1.62 1.62L16.47 10zM3 21h14v2H3a2 2 0 0 1-2-2V9h2z" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Events
                            </span>
                        </a>
                    </li>
                @endcan --}}
                {{-- @can('contact-us-list')
                    <li class="nav-item dropdown {{ request()->is('admin/contact*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-address-book">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z" />
                                    <path d="M10 16h6" />
                                    <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M4 8h3" />
                                    <path d="M4 12h3" />
                                    <path d="M4 16h3"   />
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

                @can('faq-list')
                    <li class="nav-item {{ request()->is('admin/faq*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.faq.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-help-octagon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0z" />
                                    <path d="M12 16v.01" />
                                    <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"   />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                FAQ
                            </span>
                        </a>
                    </li>
                @endcan

                @can('award-list')
                    <li class="nav-item {{ request()->is('admin/award*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.award.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-award">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 9m-6 0a6 6 0 1 0 12 0a6 6 0 1 0 -12 0" />
                                    <path d="M12 15l3.4 5.89l1.598 -3.233l3.598 .232l-3.4 -5.889" />
                                    <path d="M6.802 12l-3.4 5.89l3.598 -.233l1.598 3.232l3.4 -5.889"   />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Award
                            </span>
                        </a>
                    </li>
                @endcan
                @can('testimonial-list')
                    <li class="nav-item {{ request()->is('admin/testimonials*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.testimonials.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 32 32">
                                    <path fill="none" stroke="currentColor"
                                        d="m16 8l1.912 3.703l4.088.594L19 15l1 4l-4-2.25L12 19l1-4l-3-2.703l4.2-.594z" />
                                    <path fill="none" stroke="currentColor"
                                        d="M17.736 30L16 29l4-7h6a1.997 1.997 0 0 0 2-2V8a1.997 1.997 0 0 0-2-2H6a1.997 1.997 0 0 0-2 2v12a1.997 1.997 0 0 0 2 2h9v2H6a4 4 0 0 1-4-4V8a4 4 0 0 1 4-4h20a4 4 0 0 1 4 4v12a4 4 0 0 1-4 4h-4.835Z" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Testimonials
                            </span>
                        </a>
                    </li>
                @endcan --}}
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

                {{-- @can('teams-list')
                    <li class="nav-item dropdown {{ request()->is('admin/teams*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-stars">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M17.8 19.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                    <path
                                        d="M6.2 19.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                    <path
                                        d="M12 9.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
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
                @endcan --}}
                @can(['settings'])
                    {{-- <li
                        class="nav-item dropdown {{ request()->is('admin/categories*') || request()->is('admin/sub-categories*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"   />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Settings
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    {{-- @can('category-list')
                                        <a class="dropdown-item" href="{{ route('admin.category.index') }}">
                                            Category
                                        </a>
                                    @endcan
                                    @can('sub-category-list')
                                        <a class="dropdown-item" href="{{ route('admin.sub.category.index') }}">
                                            Sub Category
                                        </a>
                                    @endcan --}

                                </div>
                            </div>
                        </div>
                    </li> --}}

                    <li class="nav-item {{ request()->is('admin/general-settings*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.general.settings.edit') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"   />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                General Settings
                            </span>
                        </a>
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
</aside>
