@extends('admin.layouts.adminApp')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="content">
                <h3 class="page-title">Add Role</h3>
                <form style="background: #fff; padding:20px;" action="{{ route('admin.roles.store') }}" method="post"
                    accept-charset="utf-8">
                    @csrf
                    <div class="col-sm-12">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter role">
                    </div>
                    <div style="padding-top: 10px; padding-bottom:10px" class="form-group col-sm-12">
                        <label for="status">Status
                        </label>
                        <input type="radio" class="flat" name="status" value="Y" checked="checked">
                        Enabled
                        <input type="radio" class="flat" name="status" value="N">
                        Disabled
                    </div>
                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn" onclick="history.back()">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
