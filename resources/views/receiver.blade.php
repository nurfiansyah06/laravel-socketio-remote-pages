@extends('admin.layouts.index')
@section('content')
<div id="app">
    {{-- <first-page></first-page> --}}
    <div id="messages"></div>
    <div id="tes"></div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
        <script>
        //

           Echo.channel('FirstPageChannel')
               .listen('.FirstPage', function (e) {
                   $('#tes').append('<p>' + e.message + '</p>');
                })

        </script>

@endsection
