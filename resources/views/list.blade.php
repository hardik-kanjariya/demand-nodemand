@extends('adminlte::page', ['iFrameEnabled' => true])

@section('title', '')

@section('content_header')
@stop

@section('content')

@if(Auth::user()->hasrole('tele'))
<div class="bg-blue text-center p-1">
    <h1><i class="fa fa-phone-alt"> &nbsp;&nbsp; Telephone Department </i></h1>
</div>
@endif
@if(Auth::user()->hasrole('it'))
<div class="bg-blue text-center p-1">
    <h1><i class="fa fa-laptop"> &nbsp;&nbsp; IT Department </i></h1>
</div>
@endif
<div class="row p-3">
    <div class="card p-4 shadow-lg mb-4 mt-5" style="width:2200px;">
        <h4>Pending Requests</h4>
        <table class="table table-striped">
        <thead>
            <tr>
            <th>CPF Number</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Section</th>
                <th>IOM Ref. Number</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('it'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['it'] != "Approved")
            <tr>
            <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->name }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit"> <i class="fa fa-eye"> View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('tele'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['tele'] != "Approved")
            <tr>
            <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->name }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit"><i class="fa fa-eye">View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
        </tbody>
    </table>
    </div>
 <div class="card p-4 shadow-lg mb-4 mt-4" style="width:2200px;">
<h4>Approved Requests</h4>
    <table class="table table-striped">
        <thead>
            <tr>
            <th>CPF Number</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Section</th>
                <th>IOM Ref. Number</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('it'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['it'] != "Pending")
            <tr>
            <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->name }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit"> <i class="fa fa-eye">View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
            @if(!empty($data) && $data->count() && Auth::user()->hasrole('tele'))
            @for($i=0;$i<count($data);$i++)
            @if($status[$i]['tele'] != "Pending")
            <tr>
            <td>{{ $data[$i]->cpf }}</td>
                <td>{{ $data[$i]->name }}</td>
                <td>{{ $data[$i]->designation }}</td>
                <td>{{ $data[$i]->section }}</td>
                <td>{{ $data[$i]->iom_ref_no }}</td>
                <td><a href="/form/{{$data[$i]->cpf}}"><button class="btn btn-primary" type="submit"> <i class="fa fa-eye"> View</button></a></td>
            </tr>
            @endif
            @endfor
            @endif
        </tbody>
    </table>
    </div>
</div>
@endsection

@section('adminlte_css')
@endsection

@section('adminlte_js')
@endsection
