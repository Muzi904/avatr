<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl" style="margin-right:20px!important;">
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            {{-- <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('static/networklogo.svg') }}" alt="NETWORK LOGO" style="height:1rem!important;"
                    class="navbar-brand-image"> CMS | NETWORK
            </a> --}}
        </h1>
        <div class="navbar-nav flex-row order-md-last ">
            <div class="nav-item d-none d-md-flex me-3">
                <div class="btn-list">
                    {{-- <div>
                        Last Login :
                        <span
                            class="text-muted">{{ \Carbon\Carbon::parse(Auth::user()->lastLogin[0]->last_login)->format('d-m-Y h:i A') }}</span>
                    </div> --}}
                    {{-- <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                        </svg>
                        Source code
                    </a> --}}
                    {{-- <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank"
                        rel="noreferrer">
                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                        </svg>
                        Sponsor
                    </a> --}}
                </div>
            </div>
            <div class="d-none d-md-flex">
                {{-- <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                    </svg>
                </a>
                <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                    </svg>
                </a> --}}
                {{-- @php
                    $notifications = \App\Helpers\Common::getNotifications();
                @endphp
                <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                        aria-label="Show notifications">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->

                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>
                        @if (count($notifications) > 0)
                            <span class="badge bg-red"></span>
                        @endif
                    </a>
                    @if (count($notifications) > 0)
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                            <div class="card">
                                <div class="card-header gap-5">
                                    <h3 class="card-title">Notifications</h3>
                                    <a href="{{ route('admin.notifications') }}">View All</a>
                                </div>

                                <div class="list-group list-group-flush list-group-hoverable">
                                    @foreach ($notifications as $notification)
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span
                                                        class="status-dot status-dot-animated bg-red d-block"></span>
                                                </div>
                                                <div class="col text-truncate">
                                                    @if ($notification->section == 'enquiry')
                                                        <a href="{{ route('admin.enquiry.edit', ['id' => $notification->section_id]) }}"
                                                            class="text-body d-block">{{ $notification->notification_title }}</a>
                                                        <div class="d-block text-muted text-truncate mt-n1">
                                                            {{ $notification->notification_msg }}
                                                        </div>
                                                    @elseif ($notification->section == 'reminder')
                                                        <a href="{{ route('admin.enquiry.edit', ['id' => $notification->sectionDetails->enquiry->id]) }}"
                                                            class="text-body d-block">{{ $notification->notification_title }}</a>
                                                        <div class="d-block text-muted text-truncate mt-n1">
                                                            {{ $notification->notification_msg }}
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                            <div class="card">
                                {{-- <div class="card-header"> --}
                <h3 class="card-title m-2">Empty Notifications</h3>
                {{-- </div> --}
            </div>
        </div>
        @endif
    </div> --}}

                {{-- <a href="{{ route('admin.calendar') }}" class="nav-link px-0" style="margin-right: 20px;">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 390 354.1" style="enable-background:new 0 0 390 354.1;"
                        xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: none;
                                stroke: #000000;
                                stroke-width: 12;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-miterlimit: 10;
                            }
                        </style>
                        <g id="calendar-svg">
                            <g>
                                <path
                                    d="M350.8,36.8h-19.6V30c0-3.3-2.7-6-6-6c-3.3,0-6,2.7-6,6v6.8h-20V30c0-3.3-2.7-6-6-6c-3.3,0-6,2.7-6,6v6.8h-20V30
   c0-3.3-2.7-6-6-6c-3.3,0-6,2.7-6,6v6.8h-20V30c0-3.3-2.7-6-6-6c-3.3,0-6,2.7-6,6v6.8h-20V30c0-3.3-2.7-6-6-6c-3.3,0-6,2.7-6,6v6.8
   h-20V30c0-3.3-2.7-6-6-6c-3.3,0-6,2.7-6,6v6.8h-20V30c0-3.3-2.7-6-6-6c-3.3,0-6,2.7-6,6v6.8h-20V30c0-3.3-2.7-6-6-6
   c-3.3,0-6,2.7-6,6v6.8h-20V30c0-3.3-2.7-6-6-6c-3.3,0-6,2.7-6,6v6.8H43.6C26.2,36.8,12,51,12,68.4v230.4
   c0,17.4,14.2,31.6,31.6,31.6h307.2c17.4,0,31.6-14.2,31.6-31.6V68.4C382.4,51,368.2,36.8,350.8,36.8L350.8,36.8z M43.6,48.8h19.6
   v6.8c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6v-6.8h20v6.8c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6v-6.8h20v6.8c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6
   v-6.8h20v6.8c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6v-6.8h20v6.8c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6v-6.8h20v6.8c0,3.3,2.7,6,6,6
   c3.3,0,6-2.7,6-6v-6.8h20v6.8c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6v-6.8h20v6.8c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6v-6.8h20v6.8
   c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6v-6.8h19.6c10.8,0,19.6,8.8,19.6,19.6v6.8H24v-6.8C24,57.6,32.8,48.8,43.6,48.8L43.6,48.8z
   M350.8,318.4H43.6c-10.8,0-19.6-8.8-19.6-19.6V87.2h346.4v211.6C370.4,309.6,361.6,318.4,350.8,318.4L350.8,318.4z M350.8,318.4" />
                            </g>
                        </g>
                        <g id="croix">
                            <polyline class="st0" points="146.2,140 157.8,152 184.2,126.4 	" />
                            <polyline class="st1" points="211.2,197.2 222.8,209.2 249.2,183.6 	" />
                            <polyline class="st2" points="82.2,255.2 93.8,267.2 120.2,241.6 	" />
                            <line class="st0" x1="82" y1="145.2" x2="120.2" y2="145.2" />
                            <line class="st0" x1="210.2" y1="145.2" x2="248.4" y2="145.2" />
                            <line class="st0" x1="274.1" y1="145.2" x2="312.3" y2="145.2" />
                            <line class="st1" x1="82" y1="202.8" x2="120.2" y2="202.8" />
                            <line class="st1" x1="274.1" y1="202.8" x2="312.3" y2="202.8" />
                            <line class="st1" x1="146.1" y1="202.8" x2="184.3" y2="202.8" />
                            <line class="st2" x1="146.1" y1="260.4" x2="184.3" y2="260.4" />
                            <line class="st2" x1="210.1" y1="260.4" x2="248.3" y2="260.4" />
                            <line class="st2" x1="274.4" y1="260.4" x2="312.6" y2="260.4" />
                        </g>
                    </svg>

                </a> --}}
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    {{-- <span class="avatar avatar-sm" style="background-image: url(../static/avatars/000m.jpg)"></span> --}}
                    @if (auth()->user()->profile_photo)
                        <img src="{{ asset('uploads/users/profile_photo/' . auth()->user()->profile_photo) }}"
                            alt="" class="avatar avatar-sm">
                    @else
                        <img src="{{ asset('static/networklogo.svg') }}" alt="" class="avatar avatar-sm">
                    @endif
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ ucfirst(Auth::user()->first_name) . ' ' . ucfirst(Auth::user()->last_name) }}</div>
                        {{-- <div class="mt-1 small text-muted">{{ Auth::user()->roles->pluck('name')[0] }}</div> --}}
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    {{-- <a href="#" class="dropdown-item">Status</a> --}}
                    <a href="{{ route('admin.profile.edit') }}" class="dropdown-item">Profile</a>
                    {{-- <a href="#" class="dropdown-item">Feedback</a> --}}
                    {{-- <div class="dropdown-divider"></div> --}}
                    {{-- <a href="./settings.html" class="dropdown-item">Settings</a> --}}
                    <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
