@extends('admin.layouts.adminApp')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="content">
                <div class="card">
                    <h3 class="card-title">Add Menu</h3>
                    <form action="{{ route('admin.menu.store') }}" method="post" accept-charset="utf-8"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="col-md-12 row">
                                <div class="col-md-6 mt-2">
                                    <label class="form-label">Label</label>
                                    <input id="label" name="label" type="text" class="form-control " required
                                        placeholder="Label" value="">

                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label">Parent</label>
                                    <select name="parent" id="parent" class="form-select">
                                        <option value="">Please Select</option>
                                        @foreach ($parents as $key => $parent)
                                            <option value="{{ $key }}">
                                                {{ $parent }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label">Slug</label>
                                    <input id="slug" name="slug" type="text" class="form-control "
                                        placeholder="Slug" value="">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label">Link</label>
                                    <input id="route" name="route" type="text" class="form-control "
                                        placeholder="Link" value="">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label">Sort Order</label>
                                    <input id="sort" name="sort" type="text" class="form-control "
                                        placeholder="Sort Order" value="">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="status" class="form-label">Status
                                    </label>
                                    <input type="radio" class="flat" name="status" value="Y" checked
                                        {{ old('status') == 'Y' ? 'checked' : '' }}>
                                    Enabled
                                    <input type="radio" class="flat" name="status" value="N"
                                        {{ old('status') == 'N' ? 'checked' : '' }}>
                                    Disabled
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="for_header" class="form-label">For Header
                                    </label>
                                    <input type="radio" class="flat" name="for_header" value="1" checked
                                        {{ old('for_header') == 1 ? 'checked' : '' }}>
                                    Enable
                                    <input type="radio" class="flat" name="for_header" value="0"
                                        {{ old('for_header') == 0 ? 'checked' : '' }}>
                                    Disable
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="for_footer" class="form-label">For Footer
                                    </label>
                                    <input type="radio" class="flat" name="for_footer" value="1" checked
                                        {{ old('for_footer') == 1 ? 'checked' : '' }}>
                                    Enable
                                    <input type="radio" class="flat" name="for_footer" value="00"
                                        {{ old('for_footer') == 0 ? 'checked' : '' }}>
                                    Disable
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class=" mt-2 text-end">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a class="btn" onclick="history.back()">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @include('admin.scripts.menu_js')
@endpush
