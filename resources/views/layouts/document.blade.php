<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
    @yield('content') @include('includes.script')

    <script>
        window.print()
    </script>
</body>

</html>
