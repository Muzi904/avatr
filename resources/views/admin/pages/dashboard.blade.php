@extends('admin.layouts.adminApp')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-lg-12 col-md-12 order-1">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-6 mb-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <p class="mb-1">Enquiries Count</p>
                                <h4 class="card-title mb-3">{{ @$enquiryCount }}</h4>
                                {{-- <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
@push('scripts')
    {{-- @include('admin.scripts.dashboard_js') --}}
@endpush
