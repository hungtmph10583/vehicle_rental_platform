
@if(session('success'))
    <script>
        swal({
            position:"top-right",
            type: 'success',
            title:`{{ session('success') }}`,
            showConfirmButton:!1,timer:2000
        })
    </script>
@endif
@if(session('warning'))
    <script>
        swal({
            position:"top-right",
            type: 'warning',
            title:`{{ session('warning') }}`,
            showConfirmButton:!1,timer:2000
        })
    </script>
@endif
@if(session('info'))
    <script>
        swal({
            position:"top-right",
            type: 'info',
            title:`{{ session('info') }}`,
            showConfirmButton:!1,timer:2000
        })
    </script>
@endif
@if(session('error'))
    <script>
        swal({
            position:"top-right",
            type: 'error',
            title:`{{ session('error') }}`,
            showConfirmButton:!1,timer:2000
        })
    </script>
@endif
@if(session('danger'))
    <script>
        swal({
            position:"top-right",
            type: 'error',
            title:`{{ session('danger') }}`,
            showConfirmButton:!1,timer:2000
        })
    </script>
@endif