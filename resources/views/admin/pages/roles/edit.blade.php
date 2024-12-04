@extends('admin.layouts.adminApp')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="content">
                <h3 class="page-title">Add Role</h3>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form style="background: #fff; padding:20px;" action="{{ route('admin.roles.update', $role->id) }}"
                    method="post" accept-charset="utf-8">
                    @csrf
                    <div class="col-sm-12">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter role"
                            value="{{ $role->name }}">
                    </div>
                    <div style="padding-top: 10px; padding-bottom:10px" class="form-group col-sm-12">
                        <label for="status">Status
                        </label>
                        <input type="radio" class="flat" name="status" value="Y"
                            {{ $role->status == 'Y' ? 'checked' : '' }}>
                        Enabled
                        <input type="radio" class="flat" name="status" value="N"
                            {{ $role->status == 'N' ? 'checked' : '' }}>
                        Disabled
                    </div>
                    <div class="form-group col-sm-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a class="btn" onclick="history.back()">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
