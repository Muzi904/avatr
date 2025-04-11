@extends('admin.layouts.adminApp')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12 row">
                <div class="col-md-10">
                    {{-- <div class="col-md-8"> --}}
                    <div class="row mb-4 text-center">
                        <input type="hidden" value="" id="interval" name="interval">
                        <div class="col-sm-2 search-button">
                            <button class="btn btn-info" type="submit" value="last_7_days" name="interval" id="interval"
                                onclick="interval('last_7_days')">Last 7
                                Days</button>
                        </div>
                        <div class="col-sm-2 search-button">
                            <button class="btn btn-info" type="submit" value="this_month" name="interval" id="interval"
                                onclick="interval('this_month')">This
                                Month</button>
                        </div>
                        <div class="col-sm-2 search-button">
                            <button class="btn btn-info" type="submit" value="last_month" name="interval" id="interval"
                                onclick="interval('last_month')">Last
                                30
                                Days</button>
                        </div>
                        <div class="col-sm-2 search-button">
                            <button class="btn btn-info" type="submit" value="last_3_month" name="interval" id="interval"
                                onclick="interval('last_3_month')">Last
                                3
                                Months</button>
                        </div>
                        <div class="col-sm-2 search-button">
                            <button class="btn btn-info" type="submit" value="all" name="interval" id="interval"
                                onclick="interval('all')">All</button>
                        </div>
                    </div>
                    {{-- </div> --}}
                    <div class="row form-group ">
                        <div class="col-sm-6 col-lg-3 mt-3">
                            <form action="{{ route('admin.enquiry.index') }}" method="get" id="total-button">
                                @csrf
                                <input type="hidden" name="from_date" id="from_date_total">
                                <input type="hidden" name="to_date" id="to_date_total">

                                <div class="card">
                                    <div class="card-body" style="cursor:pointer;"
                                        onclick="event.preventDefault();
                                    document.getElementById('total-button').submit();">
                                        <div class="d-flex align-items-center">
                                            <div class="subheader">Total Enquiries</div>
                                        </div>
                                        <div class="d-flex align-items-baseline">
                                            <div class="h1 mb-0 me-2" id="totalEnquiryCount">0</div>
                                        </div>
                                    </div>
                                    <div id="total-enquiry-count" class="chart-sm"></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-3">
                            <form action="{{ route('admin.contact.index') }}" method="get" id="contact-button">
                                @csrf
                                <input type="hidden" name="from_date" id="from_date_contact">
                                <input type="hidden" name="to_date" id="to_date_contact">
                                <div class="card">
                                    <div class="card-body" style="cursor:pointer;"
                                        onclick="event.preventDefault();
                        document.getElementById('contact-button').submit();">
                                        <div class="d-flex align-items-center">
                                            <div class="subheader">Contact Enquiries</div>
                                        </div>
                                        <div class="d-flex align-items-baseline">
                                            <div class="h1 mb-0 me-2" id="contactEnquiryCount">0</div>
                                        </div>
                                    </div>
                                    <div id="contact-enquiry-count" class="chart-sm"></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-3">
                            <form action="{{ route('admin.experience.index') }}" method="get" id="experience-button">
                                @csrf
                                <input type="hidden" name="from_date" id="from_date_experience">
                                <input type="hidden" name="to_date" id="to_date_experience">
                                <div class="card">
                                    <div class="card-body" style="cursor:pointer;"
                                        onclick="event.preventDefault();
                        document.getElementById('experience-button').submit();">
                                        <div class="d-flex align-items-center">
                                            <div class="subheader">Experience Enquiries</div>
                                        </div>
                                        <div class="d-flex align-items-baseline">
                                            <div class="h1 mb-0 me-2" id="experienceEnquiryCount">0</div>
                                        </div>
                                    </div>
                                    <div id="experience-enquiry-count" class="chart-sm"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row form-group ">
                        <div class="row">
                            <div class=" mb-2">
                                <label>Enquiry Date From</label>
                                <input type="date" class="form-control " placeholder="Select a date" id="from_date"
                                    value="{{ $startDate }}">
                            </div>
                            <div class=" mb-2">
                                <label>Enquiry Date To</label>
                                <input type="date" class="form-control " placeholder="Select a date" id="to_date"
                                    value="{{ $endDate }}">
                            </div>
                        </div>

                        <div class=" mb-2 m-t-30 d-flex justify-content-between">
                            <button id="dash_filter" name="dash_filter"
                                class="btn btn-info btn-sm waves-inverse m-b-5">Search <i
                                    class="fa fa-search"></i></button>
                            <a class="btn btn-inverse btn-trans btn-sm waves-inverse m-b-5" href=""
                                onclick="event.preventDefault();
                                window.location.reload();">Reset</a>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
@push('scripts')
    @include('admin.scripts.dashboard_js')
@endpush
