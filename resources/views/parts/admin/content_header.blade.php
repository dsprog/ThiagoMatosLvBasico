<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                @hasSection('page_title')
                <h3 class="mb-0">@yield('page_title')</h3>
                @endif
                @isset($breadcrumb)
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Dashboard
                    </li>
                </ol>
                @endisset
            </div>
            <div class="col-sm-6 text-sm-end">
                @hasSection('actions')
                    @yield('actions')
                @endif
            </div>
        </div>
        <div class="pt-2">
            @if (session('success'))
                <div class="text-success border-start border-3 border-success bg-success-subtle p-2">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</div>
