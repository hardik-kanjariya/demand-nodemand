@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', '')

@section('content_header')
@stop

@section('content')
<div class="row p-3">
    <h4>DND Request List</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>IOM Ref. Number</th>
                <th>CPF Number</th>
                <th>IT Status</th>
                <th>Telephone Status</th>
                <th>Landline Status</th>
                <th>Datacard Status</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $key => $value)
                    <tr style="background:#e8fce4;" >
                        <td>{{ $value->iom_ref_no }}</td>
                        <td>{{ $value->cpf }}</td>
                        <td>{{ $value->it }}</td>
                        <td>{{ $value->tele }}</td>
                        <td>{{ $value->landline }}</td>
                        <td>{{ $value->sim }}</td>
                        <td><a href="form"><button class="btn btn-primary">View</button></a></td>
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
