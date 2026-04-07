@section('script')
    @if(session('success'))
        <script>
            toastr.warning(`{{ session('success') }}`)
        </script>
    @endif
    @if(session('warning'))
        <script>
            toastr.warning(`{{ session('warning') }}`)
        </script>
    @endif
    @if(session('info'))
        <script>
            toastr.warning(`{{ session('warning') }}`)
        </script>
    @endif
    @if(session('error'))
        <script>
            toastr.warning(`{{ session('error') }}`)
        </script>
    @endif
@endsection