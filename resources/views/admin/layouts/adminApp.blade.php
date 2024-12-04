<!doctype html>
<html lang="en">

@include('admin.layouts.components.head')
<style>
    .ck-editor .ck-editor__main .ck-content {
        background: rgb(165 165 165 / 63%) !important;
    }

    .ck.ck-toolbar-dropdown>.ck-dropdown__panel {
        max-width: var(--ck-toolbar-dropdown-max-width);
        width: 570px !important;
    }

    .ck-content .todo-list .todo-list__label::before {
        content: '✔';
        color: green;
        font-weight: bold;
        display: inline-block;
        margin-right: 10px;
    }

    .ck-content .todo-list .todo-list__label input {
        display: none;
        /* Hide the checkbox icon */
    }
</style>

<body>
    <script src="{{ asset('dist/js/demo-theme.min.js?1684106062') }}"></script>

    <div class="page">
        <!-- Navbar -->
        @include('admin.layouts.components.header')

        @include('admin.layouts.components.sidebar')

        <div class="page-wrapper">
            @yield('content')

            @include('admin.layouts.components.footer')

        </div>
    </div>

    @include('admin.layouts.components.foot')

    @stack('scripts')

</body>

</html>
