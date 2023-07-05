<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    <div class="app-container">
        <div class="app-main min-vh-100">
            @yield('content')
        </div>
    </div>
    @include('partials.script')
</body>

</html>