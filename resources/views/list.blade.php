@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', '')

@section('content_header')
@stop

@section('content')
<div class="row p-3">
    <h4>Your Complaints List</h4>
    @php
        $data = []; // Assuming $data is passed to the view from the controller
    @endphp
    <table class="table table-striped">
        <thead>
            <tr>
                <th>IOM Ref. Number</th>
                <th>CPF Number</th>
                <th>IOM Ref. Date</th>
                <th>Section</th>
                <th>Designation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $key => $value)
                    <tr @if($value->call_status=="Close") style="background:#e8fce4;" @else style="background:#d9edf7;" @endif>
                        <td>{{ $value->complaint_type }}</td>
                        <td>{{ $value->complaint_category }}</td>
                        <td>{{ $value->location }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>
                            @if($value->complaint_type=="RWA")
                                <a href="{{ route('rwa_feedback',['id'=>$value->id])}}" class="btn btn-primary" role="button" aria-pressed="true">
                                    <i class="fas fa-fw fa-eye pr-4"></i>View
                                </a>
                            @else
                                <a href="{{ route('complaint_info',['id'=>$value->id])}}" class="btn btn-primary" role="button" aria-pressed="true">
                                    <i class="fas fa-fw fa-eye pr-4"></i>View
                                </a>
                            @endif
                        </td>
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
