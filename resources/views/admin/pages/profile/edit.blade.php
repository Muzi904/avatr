@extends('admin.layouts.adminApp')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Account Settings
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="row g-0">
                    <div class="col-3 d-none d-md-block border-end">
                        <div class="card-body">
                            <h4 class="subheader">Business settings</h4>
                            <div class="list-group list-group-transparent">
                                <a href="./settings.html"
                                    class="list-group-item list-group-item-action d-flex align-items-center active">My
                                    Account</a>
                                {{-- <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">My
                                    Notifications</a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">Connected
                                    Apps</a>
                                <a href="./settings-plan.html"
                                    class="list-group-item list-group-item-action d-flex align-items-center">Plans</a>
                                <a href="#"
                                    class="list-group-item list-group-item-action d-flex align-items-center">Billing &
                                    Invoices</a> --}}
                            </div>
                            {{-- <h4 class="subheader mt-4">Experience</h4>
                            <div class="list-group list-group-transparent">
                                <a href="#" class="list-group-item list-group-item-action">Give Feedback</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col d-flex flex-column">
                        <div class="card-body">
                            <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <h2 class="mb-4">My Account</h2>
                                <h3 class="card-title">Profile Details</h3>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar avatar-xl">
                                            @if ($userDetails->profile_photo)
                                                <img src="{{ asset('uploads/users/profile_photo/' . $userDetails->profile_photo) }}"
                                                    width="100" height="100" alt="" id="imgPreview">
                                            @else
                                                <img src="{{ asset('static/networklogo.svg') }}" alt=""
                                                    class="avatar avatar-sm" id="imgPreview2">
                                            @endif
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        {{-- <input href="#" class="btn">
                                        Change avatar
                                    </input> --}}

                                        <label class="btn" for="profile_photo">
                                            <input id="profile_photo" type="file" style="display:none;"
                                                name="profile_photo">
                                            Change image
                                        </label>
                                        <br>
                                        {{-- (<span class="text-danger">Click update button for update image</span>) --}}
                                    </div>
                                    {{-- <div class="col-auto">
                                        <a href="#" class="btn btn-ghost-danger">
                                            Delete avatar
                                        </a>
                                    </div> --}}
                                </div>
                                {{-- <h3 class="card-title mt-4">Basic Details</h3> --}}


                                <br>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-label">First Name</div>
                                        <input type="text" class="form-control" name="first_name"
                                            placeholder="First Name" value="{{ $userDetails->first_name }}">
                                        @error('first_name')
                                            <span class="invalid feedback text-danger"role="alert">
                                                <strong>{{ $message }}.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label">Last Name</div>
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                            value="{{ $userDetails->last_name }}">
                                        @error('last_name')
                                            <span class="invalid feedback text-danger"role="alert">
                                                <strong>{{ $message }}.</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-label">Display Name</div>
                                        <input type="text" class="form-control" name="display_name"
                                            placeholder="Display Name" value="{{ $userDetails->display_name }}">
                                        @error('display_name')
                                            <span class="invalid feedback text-danger"role="alert">
                                                <strong>{{ $message }}.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <div class="form-label">Job title</div>
                                            <input type="text" class="form-control" name="jobtitle"
                                                placeholder="Job title" value="{{ $userDetails->jobtitle }}">
                                            @error('jobtitle')
                                                <span class="invalid feedback text-danger"role="alert">
                                                    <strong>{{ $message }}.</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- <div class="col-md-4">
                                        <div class="form-label">Profile Photo</div>
                                        <input type="file" name="profilephoto" class="form-control">
                                    </div> --}}
                                        <div class="col-md-4">
                                            <div class="form-label">Primary Email</div>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ $userDetails->email }}">
                                            @error('email')
                                                <span class="invalid feedback text-danger"role="alert">
                                                    <strong>{{ $message }}.</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <h3 class="card-title mt-4 bg-secondary text-white">Login Details</h3>
                                    <div class="col-md-4">
                                        <div class="form-label">Primary Email</div>
                                        <input type="text" class="form-control" name="email"
                                            value="{{ $userDetails->email }}">
                                        @error('email')
                                            <span class="invalid feedback text-danger"role="alert">
                                                <strong>{{ $message }}.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label">Password</div>
                                        <input type="password" class="form-control" name="password">
                                        @error('password')
                                            <span class="invalid feedback text-danger"role="alert">
                                                <strong>{{ $message }}.</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label">Confirm Password</div>
                                        <input type="password" class="form-control" name="confirm_password">
                                        @error('confirm_password')
                                            <span class="invalid feedback text-danger"role="alert">
                                                <strong>{{ $message }}.</strong>
                                            </span>
                                        @enderror
                                    </div> --}}
                                    {{-- <h3 class="card-title mt-4">Public profile</h3>
                                <p class="card-subtitle">Making your profile public means that anyone on the Dashkit
                                    network will be able to find
                                    you.</p>
                                <div>
                                    <label class="form-check form-switch form-switch-lg">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label form-check-label-on">You're currently visible</span>
                                        <span class="form-check-label form-check-label-off">You're
                                            currently invisible</span>
                                    </label>
                                </div> --}}

                                    <h3 class="card-title mt-4 bg-secondary text-white">Contact Details</h3>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <div class="form-label">Mobile</div>
                                            <input type="text" class="form-control" name="mobile"
                                                value="{{ $userDetails->mobile }}">
                                            @error('mobile')
                                                <span class="invalid feedback text-danger"role="alert">
                                                    <strong>{{ $message }}.</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-label">Office Phone</div>
                                            <input type="text" class="form-control" name="office_phone"
                                                value="{{ $userDetails->office_phone }}">
                                            @error('office_phone')
                                                <span class="invalid feedback text-danger"role="alert">
                                                    <strong>{{ $message }}.</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-label">Other Phone</div>
                                            <input type="text" class="form-control" name="other_phone"
                                                value="{{ $userDetails->mobile1 }}">
                                            @error('other_phone')
                                                <span class="invalid feedback text-danger"role="alert">
                                                    <strong>{{ $message }}.</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-label">Secondary Email</div>
                                            <input type="email" class="form-control" name="second_email"
                                                value="{{ $userDetails->email1 }}">
                                            @error('second_email')
                                                <span class="invalid feedback text-danger"role="alert">
                                                    <strong>{{ $message }}.</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer bg-transparent mt-auto">
                                    <div class="btn-list justify-content-end">
                                        <a href="#" class="btn">
                                            Cancel
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
    <script>
        $("#profile_photo").change(function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imgPreview').attr('src', e.target.result);
                    $('#imgPreview2').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>
@endpush
