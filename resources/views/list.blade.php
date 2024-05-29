@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', '')

@section('content_header')
@stop

@section('content')
<div class="row p-3">
    <h4>Your Complaints List</h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>IOM Ref. Number</th>
                <th>CPF Number</th>
                <th>IOM Ref. Date</th>
                <th>Section</th>
                <th>Designation</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $key => $value)
                    <tr style="background:#d9edf7;" >
                        <td>{{ $value->iom_ref_no }}</td>
                        <td>{{ $value->cpf }}</td>
                        <td>{{ $value->iom_ref_date }}</td>
                        <td>{{ $value->section }}</td>
                        <td>{{ $value->designation }}</td>
                        <td><a href="route{{ 'validate' }}"></a><button class="btn btn-primary">View</button></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">There are no requests.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('path/to/your/custom/css/file.css') }}">
@endsection

@section('adminlte_js')
    <script src="{{ asset('path/to/your/custom/js/file.js') }}"></script>
    <script>
        document.getElementsByTagName('html')[0].style.width = "100%";
        @if(Session::has('message'))
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                onOpen: function(toast) {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });

            Toast.fire({
                icon: 'success',
                title: '{{ Session::get('message') }}'
            });
        @endif
    </script>
@endsection
