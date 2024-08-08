<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
@include('admin.layouts.head')

<body>
    @include('admin.layouts.aside')

    <main class="dashboard-main">
       @include('admin.layouts.navbar')
        <div class="dashboard-main-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">{{ $heading ?? 'No heading'}}</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">
                        <a href="{{ route('admin') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>
                      -
                    </li>
                    <li class="fw-medium">{{ $heading ?? 'No heading'}}</li>
                </ul>
            </div>

            @yield('content')
        </div>
            @include('admin.layouts.footer')
    </main>
    @include('admin.layouts.script')
</body>

</html>
