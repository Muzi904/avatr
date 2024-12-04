@extends('admin.layouts.adminApp')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="col-sm-12">
                <h4 class="page-title">Add User</h4>
            </div>

            <form action="{{ route('admin.users.store') }}" class="formgroup" id="obj-form"
                style="background: #fff;padding:20px" enctype="multipart/form-data" method="post" accept-charset="utf-8"
                autocomplete="off" novalidate="novalidate">
                @csrf
                <input id="id" name="id" type="hidden" value="">
                <div class="row">

                    <div class="col-sm-6">
                        <div class=" user-details"
                            style="min-height:322px; padding: 15px;box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);margin-bottom: 15px;">
                            <h4 style="background: #206bc4;padding: 0 15px;margin-bottom: 20px;color: #FFF !important;"
                                class="page-title">Basic Details</h4>
                            <div class="form-group row" style="padding-top: 10px;">
                                <div class="col-sm-6">
                                    <label class="form-label"> Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="First Name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>{{ $message }}.</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="col-sm-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                        name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>{{ $message }}.</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                            </div>
                            {{-- <div class="form-group row" style="padding-top: 10px;">
                                <div class="col-sm-6">
                                    <label class="form-label">Display Name</label>
                                    <input type="text" class="form-control @error('display_name') is-invalid @enderror"
                                        name="display_name" value="{{ old('display_name') }}" placeholder="Display Name">
                                    @error('display_name')
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>{{ $message }}.</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Job title</label>
                                    <input type="text" class="form-control @error('job_title') is-invalid @enderror"
                                        name="job_title" placeholder="Job title" value="{{ old('job_title') }}">
                                    @error('job_title')
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>{{ $message }}.</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div> --}}
                            <div class="form-group row" style="padding-top: 10px;">
                                <div class="col-sm-6">
                                    <label class="control-label ">Profile Photo </label>
                                    <input type="file" name="profile_photo" class="profilephoto form-control">
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-label">Status</div>
                                    <div>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" value="Y"
                                                checked="">
                                            <span class="form-check-label">Active</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" value="N">
                                            <span class="form-check-label">Deactive</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="padding-top: 10px;">
                                <div class="col-sm-6">
                                    <label class="control-label ">Sort Order</label>
                                    <input type="number" name="sort_order" class="profilephoto form-control">
                                </div>
                            </div>
                        </div>
                        <div class=" user-details"
                            style="min-height:322px; padding: 15px;box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);">
                            <h4 style="background: #206bc4;padding: 0 15px;margin-bottom: 20px;color: #FFF !important;"
                                class="page-title">Login Deatils</h4>
                            <div class="form-group row" style="padding-top: 10px;">
                                <div class="col-sm-6">
                                    <label class="form-label">Primary Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" placeholder="Primary Email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>{{ $message }}.</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-label">Role</div>
                                    <select class="form-select multiple  @error('roles') is-invalid @enderror"
                                        name="roles[]" multiple>
                                        <option value="">Select roles</option>
                                        @foreach ($roles as $key => $role)
                                            <option value="{{ $key }}">{{ $role }}</option>
                                        @endforeach
                                    </select>
                                    @error('roles')
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>{{ $message }}.</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row" style="padding-top: 10px;">
                                <div class="col-sm-6">
                                    <label class="form-label">Password</label>
                                    <div class="input-group input-group-flat">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" value="" name="password" autocomplete="off">
                                        @error('password')
                                            <span class="invalid feedback text-danger"role="alert">
                                                <strong>{{ $message }}.</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="input-group input-group-flat">
                                        <input type="password"
                                            class="form-control @error('confirm_password') is-invalid @enderror"
                                            placeholder="Confirm Password" name="confirm_password">
                                        @error('confirm_password')
                                            <span class="invalid feedback text-danger"role="alert">
                                                <strong>{{ $message }}.</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class=" user-details"
                            style="min-height:322px; padding: 15px;box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);">
                            <h4 style="background: #206bc4;padding: 0 15px;margin-bottom: 20px;color: #FFF !important;"
                                class="page-title">Contact Details</h4>
                            <div class="form-group row" style="padding-top: 10px;">
                                <div class="col-sm-6">
                                    <label class="form-label">Mobile</label>
                                    <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                                        name="mobile" value="{{ old('mobile') }}" placeholder="e.g. 971 123 45678">
                                    @error('mobile')
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>{{ $message }}.</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control @error('office_phone') is-invalid @enderror"
                                        name="office_phone"value="{{ old('office_phone') }}"
                                        placeholder="e.g. 971 123 45678">
                                    @error('office_phone')
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>{{ $message }}.</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="form-group row" style="padding-top: 10px;">
                                <div class="col-sm-6">
                                    <label class="form-label">Secondary Email</label>
                                    <input type="text" class="form-control @error('email_1') is-invalid @enderror"
                                        name="email_1"value="{{ old('email_1') }}" placeholder="Secondary Email">
                                    @error('email_1')
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>{{ $message }}.</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Other Phone</label>
                                    <input type="text" class="form-control @error('mobile_1') is-invalid @enderror"
                                        name="mobile_1"value="{{ old('mobile_1') }}" placeholder="e.g. 971 123 45678">
                                    @error('mobile_1')
                                        <span class="invalid feedback text-danger"role="alert">
                                            <strong>{{ $message }}.</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            {{-- <div class="form-group row" style="padding-top: 10px;">
                                <input type="hidden" name="user_region" id="user_region" value="0">
                            </div> --}}
                        </div>
                    </div>

                </div>

                <div class="col-sm-6">
                    <div class="col-md-12 submit-wrap">
                        <div class="form-group " style="padding-top: 10px;">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a class="btn" href="">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
@push('scripts')
    @include('admin.scripts.users_js')
@endpush
