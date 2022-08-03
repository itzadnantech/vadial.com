<title>VADial</title>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="{{ url('/assets/images/logo.png') }}" type="image/icon type">
<link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('/assets/css/admin.css') }}">
<script src="{{ url('/assets/js/jquery.min.js') }}"></script>
<script src="{{ url('/assets/js/popper.min.js') }}"></script>
<script src="{{ url('/assets/js/sweetalert.min.js') }}"></script>
<script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/assets/js/custom.js') }}"></script>
<script> let root_url = "{{ url('/') }}"; </script>
<script> let user_name = "{{ session()->get('user_name') }}"; </script>
